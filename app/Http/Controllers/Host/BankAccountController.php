<?php

namespace App\Http\Controllers\Host;

use App\Repositories\BankAccountRepository;
use Auth;
use App\Http\Requests\CreateBankAccountRequest;
use App\Http\Controllers\Controller;

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
        $bankAccount = Auth::user()->bankAccounts()->create(
            $request->only([
                'bank_name', 'bank_code',
                'branch_name', 'branch_code',
                'account_number', 'account_holder',
            ])
        );

        $bankAccount->stripeBankAccount()->create(
            $request->only(['stripe_bank_account_id'])
        );

        return redirect()->route('host.index');
    }
}