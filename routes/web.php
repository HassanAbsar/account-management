<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\LedgerSummaryController;
use App\Http\Controllers\PayableController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceivableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

// city
Route::get('Settings/City/index', [CityController::class, "index"])->name('city.index');
Route::get('Settings/City/Data', [CityController::class, 'Data'])->name('city.data');
Route::get('Settings/City/create', [CityController::class, "create"])->name('city.create');
Route::post('Settings/City/store', [CityController::class, "store"])->name('city.store');
Route::get('Settings/City/edit/{id}', [CityController::class, "edit"])->name('city.edit');
Route::get('Settings/City/view/{id}', [CityController::class, "view"])->name('city.view');
Route::post('Settings/City/update/{id}', [CityController::class, "update"])->name('city.update');
Route::get('Settings/City/destroy/{id}', [CityController::class, "destroy"])->name('city.destroy');

Route::get('Settings/Saleman/index', [SalemanController::class, "index"])->name('saleman.index');
Route::get('Settings/Saleman/Data', [SalemanController::class, 'Data'])->name('saleman.data');
Route::get('Settings/Saleman/create', [SalemanController::class, "create"])->name('saleman.create');
Route::post('Settings/Saleman/store', [SalemanController::class, "store"])->name('saleman.store');
Route::get('Settings/Saleman/edit/{id}', [SalemanController::class, "edit"])->name('saleman.edit');
Route::get('Settings/Saleman/view/{id}', [SalemanController::class, "view"])->name('saleman.view');
Route::post('Settings/Saleman/update/{id}', [SalemanController::class, "update"])->name('saleman.update');
Route::get('Settings/Saleman/destroy/{id}', [SalemanController::class, "destroy"])->name('saleman.destroy');

Route::get('Receivable/index', [ReceivableController::class, "index"])->name('receivable.index');
Route::get('Receivable/Data', [ReceivableController::class, 'Data'])->name('receivable.data');
Route::get('Receivable/create', [ReceivableController::class, "create"])->name('receivable.create');
Route::post('Receivable/store', [ReceivableController::class, "store"])->name('receivable.store');
Route::get('Receivable/edit/{id}', [ReceivableController::class, "edit"])->name('receivable.edit');
Route::get('Receivable/view/{id}', [ReceivableController::class, "view"])->name('receivable.view');
Route::post('Receivable/update/{id}', [ReceivableController::class, "update"])->name('receivable.update');
Route::get('Receivable/destroy/{id}', [ReceivableController::class, "destroy"])->name('receivable.destroy');
Route::post('Receivable/storepaymentinvoice', [PaymentController::class, 'storePaymentReceivabale'])->name('payments.storeInvoice');
Route::get('Receivable/history/{id}', [PaymentController::class, 'history'])->name('payments.history');
Route::get('Receivable/preview/{id}', [ReceivableController::class, "preview"])->name('receivable.preview');



Route::get('Payable/index', [PayableController::class, "index"])->name('payable.index');
Route::get('Payable/Data', [PayableController::class, 'Data'])->name('payable.data');
Route::get('Payable/create', [PayableController::class, "create"])->name('payable.create');
Route::post('Payable/store', [PayableController::class, "store"])->name('payable.store');
Route::get('Payable/edit/{id}', [PayableController::class, "edit"])->name('payable.edit');
Route::get('Payable/view/{id}', [PayableController::class, "view"])->name('payable.view');
Route::post('Payable/update/{id}', [PayableController::class, "update"])->name('payable.update');
Route::get('Payable/destroy/{id}', [PayableController::class, "destroy"])->name('payable.destroy');
Route::get('Payable/history/{id}', [PaymentController::class, 'historyPayable'])->name('payments.payable.history');
Route::get('Payable/preview/{id}', [PayableController::class, "preview"])->name('payable.preview');

Route::get('Ledger/Summary', [LedgerSummaryController::class, "ledgerSummary"])->name('ledger_summary');
Route::get('Ledger/Summary/data', [LedgerSummaryController::class, "generate"])->name('ledger_summary.generate');
