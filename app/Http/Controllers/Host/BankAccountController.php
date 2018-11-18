<?php

namespace App\Http\Controllers\Host;

use App\Repositories\BankAccountRepository;
use Auth;
use App\Http\Requests\CreateBankAccountRequest;
use App\Http\Controllers\Controller;
use Exception;
use Log;

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
        try {
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
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }
}