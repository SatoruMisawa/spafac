<?php

namespace App\Http\Controllers\Host;

use App\BankAccount;
use App\Repositories\BankAccountRepository;
use App\Http\Requests\CreateBankAccountRequest;
use App\Http\Controllers\Controller;
use Auth;

class BankAccountController extends Controller
{
    private $bankAccountRepository;

    public function __construct(BankAccountRepository $bankAccountRepository) {
        $this->bankAccountRepository = $bankAccountRepository;
    }

    public function new() {
        try {
            return view('host.bankaccount.new');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }  

    public function create(CreateBankAccountRequest $request) {
        $bankAccount = $this->createBankAccount($request);

        $this->createClaimantBankAccount($request, $bankAccount);

        return redirect()->route('host.index');
    }

    private function createBankAccount(CreateBankAccountRequest $request) {
        return Auth::user()->bankAccount()->save(
            $this->bankAccountRepository->new(
                $request->only([
                    'bank_name', 'bank_code',
                    'branch_name', 'branch_code',
                    'account_number', 'account_holder',
                ])
            )
        );
    }

    private function createClaimantBankAccount(CreateBankAccountRequest $request, BankAccount $bankAccount) {
        return $bankAccount->claimantBankAccount()->create(
            $request->only(['claimant_bank_account_id'])
        );
    }    
}