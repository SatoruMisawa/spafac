<?php

// Route::get('/test', function() {
//     return view('welcome');
// });

// Route::get('/test/users/', function() {
//     factory(App\User::class, 2)->create();
// });

// Route::get('/test/users/host', function() {
//     $host = App\User::find(1);
//     $host->connectClaimantAccount();
// });

// Route::get('/test/users/host/bank', function() {
//     $host = App\User::find(1);
//     $bankAccount = $host->bankAccount()->create([
//         'bank_name' => 'a',
//         'bank_code' => 'a',
//         'branch_name' => 'a',
//         'branch_code' => 'a',
//         'account_number' => 'a',
//         'account_holder' => 'a',
//     ]);
//     $bankAccount->claimantBankAccount()->create([
//         'claimant_bank_account_id' => 'btok_1DaPntDX6z5hkjQAXsu5dj4H',
//     ]);
//     $host->connectClaimantBankAccount();
// });

// Route::get('/test/users/host/requirements', function() {
//     $host = App\User::find(1);
//     $host->fillClaimantRequirements();
// });

// Route::get('/test/users/guest', function() {
//     $guest = App\User::find(2);
//     $guest->connectClaimantCustomer();
// });

// Route::get('/test/settlements', function() {
//     $reservation = factory(App\Reservation::class)->create();
//     $host = App\User::find(1);
//     $guest = App\User::find(2);
//     $reservation->update([
//         'host_id' => $host->id,
//         'guest_id' => $guest->id,
//     ]);
//     $host->chargeFor($reservation);

//     return redirect()->route('index')->with('message', '請求しました。');
// });

Route::get('/test/applies/1', 'Host\ApplyController@show');
Route::post('/test/applies/1/approvements', 'Host\ApplyController@approved');