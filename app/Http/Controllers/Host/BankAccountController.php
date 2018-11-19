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
        return view('host.bankaccount.new');
    }  

    public function create(CreateBankAccountRequest $request) {
        $bankAccount = $this->createBankAccount($request);

        $this->createStripeBankAccount($request, $bankAccount);

        return redirect()->route('host.index');
    }

    private function createBankAccount(CreateBankAccountRequest $request) {
        return Auth::user()->bankAccounts()->save(
            $this->bankAccountRepository->new(
                $request->only([
                    'bank_name', 'bank_code',
                    'branch_name', 'branch_code',
                    'account_number', 'account_holder',
                ])
            )
        );
    }

    private function createStripeBankAccount(CreateBankAccountRequest $request, BankAccount $bankAccount) {
        return $bankAccount->stripeBankAccount()->create(
            $request->only(['stripe_bank_account_id'])
        );
    }    
}