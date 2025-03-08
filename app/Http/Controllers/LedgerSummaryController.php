<?php

namespace App\Http\Controllers;

use App\Models\payable;
use App\Models\PaymentHistory;
use App\Models\Receivable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LedgerSummaryController extends Controller
{
   public function ledgerSummary(){
    $customer = Receivable::whereNotNull('customer')->pluck('customer')->unique();
    $supplier = Payable::whereNotNull('supplier')->pluck('supplier')->unique();
    $saleman = Receivable::whereNotNull('saleman')->pluck('saleman')->unique();
    // dd($customer,$saleman);
    
    return view('report.ledger',compact('customer','saleman','supplier'));
   }

   public function generate(Request $request){
        $customer = $request->customer == "null" ? null : $request->customer;
        $saleman = $request->saleman  == "null" ? null : $request->saleman;
        if ($request->from) {
            $from = Carbon::parse($request->from)->format('d-m-Y') ;
        }else{
            $from = null;
        }

        if ($request->to) {
            $to = Carbon::parse($request->to)->format('d-m-Y') ;
        }else{
            $to = null;
        }

        $query = PaymentHistory::select('payment_histories.*', 'receivables.customer','payables.supplier','receivables.saleman', 
                'receivables.date as receivable_date', 'payables.date as payable_date')
        ->leftJoin('receivables', 'payment_histories.receivable_id', '=', 'receivables.id')
        ->leftJoin('payables', 'payment_histories.payable_id', '=', 'payables.id');

        $query->whereNotNull('receivables.customer')
        ->whereNotNull('receivables.saleman')
        ->whereNotNull('payables.supplier')
        ->whereNotNull('payment_histories.date');

        if ($customer) {
        $query->where('receivables.customer', $customer);
        }

        if ($saleman) {
        $query->where('receivables.saleman', $saleman);
        }
        
        if ($from && $to) {
            $query->whereDate('payment_histories.date',$from)
            ->orWhereDate('payment_histories.date',$to);
        } elseif ($from) {
        $query->whereDate('payment_histories.date',$from);
        } elseif ($to) {
        $query->whereDate('payment_histories.date',$to);
        }

        $paymentHistory = $query->with(['receivable', 'payable'])->get();
        return $paymentHistory;
   }
}
