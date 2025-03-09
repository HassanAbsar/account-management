<?php

namespace App\Http\Controllers;

use App\Models\payable;
use App\Models\Payment;
use App\Models\PaymentHistory;
use App\Models\Receivable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function storePaymentReceivabale(Request $request) {
        // dd($request->all());

        $payment_history =  new PaymentHistory();
        $payment_history->receivable_id = $request->receivable_id;
        $payment_history->total_amount = $request->total_amount;
        $payment_history->remaining = $request->balance;
        $payment_history->balance = $request->balance;
        $payment_history->paying_amount = $request->paying_amount;
        $payment_history->payment_method = $request->payment_method;
        $payment_history->account_no = $request->account_no;
        $payment_history->payment_term = $request->payment_term;
        $payment_history->date = Carbon::now()->format('d/m/Y');
        $payment_history->save();

        if ($request->payment_id == 0) {
            $payment =  new Payment();
            $payment->receivable_id = $request->receivable_id;
            $payment->total_amount = $request->total_amount;
            $payment->remaining = $request->balance;
            $payment->balance = $request->balance;
            $payment->paying_amount = $request->paying_amount;
            $payment->payment_method = $request->payment_method;
            $payment->account_no = $request->account_no;
            $payment->payment_term = $request->payment_term;
            $payment->date = Carbon::now()->format('d/m/Y');
            $payment->save();
            $receivable = Receivable::find($request->receivable_id);
            if (isset($receivable)) {
                $receivable->remaining = $request->balance;
                if ($request->balance != 0) {
                    $receivable->payment_status = "Partially-Paid";
                }else{
                    $receivable->payment_status = "Paid";
                }
                $receivable->save();
            }
        return redirect()->route('receivable.index')->with('success', 'Receivable Created Successfully.');
        }else{
            $payment =  Payment::find($request->payment_id);
            $payment->receivable_id = $request->receivable_id;
            $payment->total_amount = $request->total_amount;
            $payment->remaining = $request->balance;
            $payment->balance = $request->balance;
            $payment->paying_amount = $request->paying_amount;
            $payment->payment_method = $request->payment_method;
            $payment->account_no = $request->account_no;
            $payment->payment_term = $request->payment_term;
            $payment->date = Carbon::now()->format('d/m/Y');
            $payment->save();

            $receivable = Receivable::find($request->receivable_id);
            if (isset($receivable)) {
                $receivable->remaining = $request->balance;
                if ($request->balance != 0) {
                    $receivable->payment_status = "Partially-Paid";
                }else{
                    $receivable->payment_status = "Paid";
                }
                $receivable->save();
            }
        return redirect()->route('receivable.index')->with('success', 'Receivable Updated Successfully.');

        }
       
    }

    public function storePaymentPayable(Request $request) {
        // dd($request->all());
        $payment_history =  new PaymentHistory();
        $payment_history->payable_id = $request->payable_id;
        $payment_history->total_amount = $request->total_amount;
        $payment_history->remaining = $request->balance;
        $payment_history->balance = $request->balance;
        $payment_history->paying_amount = $request->paying_amount;
        $payment_history->payment_method = $request->payment_method;
        $payment_history->account_no = $request->account_no;
        $payment_history->payment_term = $request->payment_term;
        $payment_history->date = Carbon::now()->format('d/m/Y');
        $payment_history->save();

        if ($request->payment_id == 0) {
            $payment =  new Payment();
            $payment->payable_id = $request->payable_id;
            $payment->total_amount = $request->total_amount;
            $payment->remaining = $request->balance;
            $payment->balance = $request->balance;
            $payment->paying_amount = $request->paying_amount;
            $payment->payment_method = $request->payment_method;
            $payment->account_no = $request->account_no;
            $payment->payment_term = $request->payment_term;
            $payment->date = Carbon::now()->format('d/m/Y');
            $payment->save();
        return redirect()->route('payable.index')->with('success', 'Payable Created Successfully.');
        }else{
            $payment =  Payment::find($request->payment_id);
            $payment->payable_id = $request->payable_id;
            $payment->total_amount = $request->total_amount;
            $payment->remaining = $request->balance;
            $payment->balance = $request->balance;
            $payment->paying_amount = $request->paying_amount;
            $payment->payment_method = $request->payment_method;
            $payment->account_no = $request->account_no;
            $payment->payment_term = $request->payment_term;
            $payment->save();
        return redirect()->route('payable.index')->with('success', 'Payable Updated Successfully.');

        }
        $payable = Payable::find($request->payable_id);
        if (isset($payable)) {
            $payable->remaining = $request->balance;
            $payable->save();
        }
    }


    public function history($id){
        $history = PaymentHistory::where('receivable_id',$id)->with('receivable')->get();
        return view('receivable.history',compact('history'));
    }
    public function historyPayable($id){
        $history = PaymentHistory::where('payable_id',$id)->with('payable')->get();
        return view('payable.history',compact('history'));
    }
}
