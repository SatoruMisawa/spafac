<?php

namespace App;

class Host extends User {
	protected $table = 'users';
	
    public function applies() {
        return $this->hasMany(Apply::class, 'host_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class, 'host_id');
    }

    public function ownApply(Apply $apply) {
        return $this->isSameAs($apply->host);
    }

    public function approve(Apply $apply) {
		if (!$this->isSameAs($apply->plan->planner())) {
			return;
		}

        return $this->reservations()->create([
            'guest_id' => $apply->guest->id,
			'apply_id' => $apply->id,
        ]);
    }

    public function chargeFor(Reservation $reservation) {
		$this->feeCollector->setPrice($reservation->apply->price);
		$charge = $this->claimant->charge([
			'guest_price_with_fee' => $this->feeCollector->calculateGuestPriceWithFee(),
			'host_reward' => $this->feeCollector->calculateHostReward(),
			'customer' => $reservation->guest->claimantUser->claimant_customer_id,
			'destination' => $this->claimantUser->claimant_account_id,
		]);
		
		$reservation->getCharged();

		$chargeHistory = $reservation->guest->chargeHistories()->create([
			'reservation_id' => $reservation->id,
		]);

		$chargeHistory->claimantChargeHistory()->create([
			'claimant_charge_history_id' => $charge->id,
		]);
	}

	public function connectClaimantAccount() {
		$claimantAccount = $this->claimant->connectAccount([
			'country' => 'JP',
			'type' => 'custom',
		]);
		
		if ($this->claimantUser === null) {
			$this->claimantUser()->create([
				'claimant_account_id' => $claimantAccount->id,
			]);
			return;
		}
		
		$this->claimantUser->update([
			'claimant_account_id' => $claimantAccount->id,
		]);
	}

	public function connectClaimantBankAccount() {
		$this->claimant->connectBankAccount([
			'account_id' => $this->claimantUser->claimant_account_id,
			'bank_account_id' => $this->bankAccount->claimantBankAccount->claimant_bank_account_id,
		]);
	}

	public function fillClaimantRequirements() {
		$this->claimant->fillRequirements([
			'account_id' => $this->claimantUser->claimant_account_id,
			'legal_entity' => [
				'address_kana' => [
					'postal_code' => $this->address->zip,
					'state' => $this->address->prefecture->name_ruby,
					'city' => $this->address->address1_ruby,
					'town' => $this->address->address2_ruby,
					'line1' => $this->address->address3_ruby,
				],
				'address_kanji' => [
					'postal_code' => $this->address->zip,
					'state' => $this->address->prefecture->name,
					'city' => $this->address->address1,
					'town' => $this->address->address2,
					'line1' => $this->address->address3
				],
				'dob' => [
					'day' => $this->dob_day,
					'month' => $this->dob_month,
					'year' => $this->dob_year,
				],
				'first_name_kana' => $this->family_name_ruby,
				'first_name_kanji' => $this->family_name,
				'last_name_kana' => $this->given_name_ruby,
				'last_name_kanji' => $this->given_name,
				'gender' => $this->gender,
				'phone_number' => $this->tel,
				'type' => 'individual',
			],
			'tos_acceptance' => [
				'date' => Carbon::now()->timestamp,
				'ip' => request()->ip(),
			],
		]);
	}

	public function ownFacility(Facility $facility) {
		return $this->id === $facility->user_id;
	}

	public function ownSpace(Space $space) {
		return $this->id === $space->user_id;
	}
}