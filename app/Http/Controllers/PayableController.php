<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\payable;
use App\Models\PayableDetail;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Yajra\DataTables\Facades\DataTables;

class PayableController extends Controller
{
    //
    public function Data(Request $request)
    {
        if ($request->ajax()) {

            $query = payable::select(
                'payables.id',
                'payables.invoice_no',
                'payables.created_by',
                'payables.city_id',
                'payables.date',
                'payables.saleman',
                'payables.payment_status',
                'payables.supplier',
                'payables.total',
                'payables.remaining',

            )->with('city');


            $datatable = DataTables::eloquent($query)
                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $payment = Payment::where('receivable_id',$row->id)->first();
                    $remaining = $row->remaining; 
                    if (isset($payment)) {
                        $remaining = isset($payment) ? $payment->remaining : 0; 
                    }
                    $payment_id = isset($payment) ? $payment->id : 0;
                    $account_no = isset($payment) ? $payment->account_no : 0; 
                    $paying_amount = isset($payment) ? $payment->paying_amount : 0; 
                    $payment_method = isset($payment) ? $payment->payment_method : 0; 
                    $payment_term = isset($payment) ? $payment->payment_term : 0; 
                    $payment_id = isset($payment) ? $payment->id : 0;
                    $btn = '<div class="d-flex"><a class="btn btn-info btn-sm mx-2" data-tooltip="Edit" href="' .
                    route('payable.edit', $row->id) .
                    '"><i class="fas fa-pencil"></i></a>
                    <a class="btn btn-success btn-sm mx-2" data-tooltip="View" href="' .
                    route('payable.view', $row->id) .
                    '"><i class="fas fa-eye"></i></a>
                     <a class="btn btn-danger btn-sm mx-2" data-tooltip="Delete" href="' .
                    route('payable.destroy', $row->id) .
                    '"><i class="fas fa-trash"></i></a><a type="button" class="btn btn-primary btn-sm" id="addPaymentModal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-tooltip="Add Payment" data-id="' . $row->id . '" data-total-amount="' . $row->total . '" data-remaining-balance="' . $remaining . '" data-payment_id="'.$payment_id.'" data-account_no="'.$account_no.'" data-payment_method="'.$payment_method.'" data-paying_amount="'.$paying_amount.'" data-payment_term="'.$payment_term.'" title="Add Payment"><i class="fas fa-money-bill"></i></a>
                    <a class="btn btn-warning btn-sm mx-2" data-tooltip="Payment History" href="' .
                    route('payments.payable.history', $row->id) .
                    '"><i class="fas fa-file-invoice"></i></a>
                                         <a class="btn btn-danger btn-sm mx-1" data-tooltip="PDF" href="' . route('payable.preview', $row->id) .'" target="_blank"><i class="fas fa-file-pdf"></i></a></div>';
                    return $btn;
                })
                ->rawColumns(['action']);

                if($request->search['value'] == null ){

                    $datatable = $datatable->filter(function ($query) use ($request) {
                    if ($request->has('invoice_no') && !is_null($request->invoice_no)) {
                        $query->where('invoice_no', 'like', "%{$request->invoice_no}%");
                    }
                    if ($request->has('created_by') && !is_null($request->created_by)) {
                        $query->where('created_by', 'like', "%{$request->created_by}%");
                    }
                    if ($request->has('date') && !is_null($request->date)) {
                        $query->where('date', 'like', "%{$request->date}%");
                    }
                    if ($request->has('city') && !is_null($request->city)) {
                        $query->whereHas('city', function ($q) use ($request) {
                            $q->where('cities.name', 'like', "%{$request->city}%");
                        });
                    }
                    if ($request->has('payment_status') && !is_null($request->payment_status)) {
                        $query->where('payment_status', 'like', "%{$request->payment_status}%");
                    }
                    if ($request->has('supplier') && !is_null($request->supplier)) {
                        $query->where('supplier', 'like', "%{$request->supplier}%");
                    }


                });
            }

               return $datatable->make(true);
        }

    }


    public function index(){
      return view('payable.index');
  }
    public function create()
    {
        $cities = City::select('id','name')->get();
      return view('payable.create',compact('cities'));
    }

    public function store(Request $request)
    {
        $total = 0;
        foreach ($request->product as $key => $product) {
            $total = $total + (int)$product['total'];
        }
      $payable = new Payable();
      $payable->invoice_no = $request->invoice_no;
      $payable->date = Carbon::parse($request->date)->format('d-m-Y');
      $payable->created_by = $request->created_by;
      $payable->acc_no = $request->acc_no;
      $payable->supplier = $request->supplier;
      $payable->saleman = $request->saleman;
      $payable->address = $request->address;
      $payable->city_id = $request->city_id;
      $payable->contact_no = $request->contact_no;
      $payable->term = $request->term;
      $payable->total = $total;
      $payable->remaining = $total;
      $filenames2 = [];
      foreach ($request->file() as $key => $file) {
          if (str_contains($key, 'after_attachment_')) {
              $filename2 = date('YmdHis') . $file->getClientOriginalName();
              $file->move('payable-after_attachments', $filename2);
              $filenames2[] = $filename2;
          }
      }
      if (count($filenames2) > 0) {
          $payable->attachments = implode(',', $filenames2);
      } else {
          $payable->attachments = null;
      }
      $payable->save();
          foreach ($request->product as $key => $product) {
        $payable_detail = new PayableDetail();
        $payable_detail->payable_id = $payable->id;
        $payable_detail->product_name = $product['product_name'];
        $payable_detail->price = $product['price'];
        $payable_detail->qty = $product['qty'];
        $payable_detail->total = $product['total'];
        $payable_detail->save();
      }
      return redirect()->route('payable.index')->with('success', 'Payable Created Successfully.');
    }

    public function edit($id)
    {
        $payable = Payable::find($id);
        $payable_details =  PayableDetail::where('payable_id',$id)->get();
        $cities = City::select('id','name')->get();
        return view('payable.edit',compact('cities','payable','payable_details'));
    }

    public function update(Request $request, $id)
    {

        $total = 0;
        foreach ($request->product as $key => $product) {
            $total = $total + (int)$product['total'];
        }

        $payable = Payable::find($id);
        $payable->invoice_no = $request->invoice_no;
        $payable->date = Carbon::parse($request->date)->format('d-m-Y');
        $payable->created_by = $request->created_by;
        $payable->acc_no = $request->acc_no;
        $payable->supplier = $request->supplier;
        $payable->address = $request->address;
        $payable->saleman = $request->saleman;
        $payable->city_id = $request->city_id;
        $payable->contact_no = $request->contact_no;
        $payable->term = $request->term;
        $payable->total = $total;
        $payable->remaining = $total;
        $filenames2 = [];
        foreach ($request->file() as $key => $file) {
            if (str_contains($key, 'after_attachment_')) {
                $filename2 = date('YmdHis') . $file->getClientOriginalName();
                $file->move('payable-after_attachments', $filename2);
                $filenames2[] = $filename2;
            }
        }
        if (count($filenames2) > 0) {
            $payable->attachments = implode(',', $filenames2);
        } else {
            $payable->attachments = null;
        }
        $payable->save();
        payableDetail::where('payable_id',$id)->delete();
        foreach ($request->product as $key => $product) {
          $payable_detail = new PayableDetail();
          $payable_detail->payable_id = $payable->id;
          $payable_detail->product_name = $product['product_name'];
          $payable_detail->price = $product['price'];
          $payable_detail->qty = $product['qty'];
          $payable_detail->total = $product['total'];
          $payable_detail->save();
        }
      return redirect()->route('payable.index')->with('success', 'Payable Updated Successfully.');
    }

    public function view($id)
    {
        $payable = Payable::find($id);
        $payable_details =  PayableDetail::where('payable_id',$id)->get();
        $cities = City::select('id','name')->get();
        return view('payable.view',compact('cities','payable','payable_details'));
    }

    public function destroy($id)
    {
    
      $payable = Payable::find($id);
      $payable_detail = PayableDetail::where('payable_id',$id)->delete();
      $payable->delete();
      return redirect()->route('payable.index')->with('success', 'Payable Deleted Successfully.');
    }

    public function preview(Request $request, $id){
       
        $payable = Payable::with('city')->find($id);
        $payable_details =  PayableDetail::where('payable_id',$id)->get();
        $cities = City::select('id','name')->get();
        $pdf = FacadePdf::loadView('payable.preview', compact('payable', 'payable_details', 'cities'))->setPaper('a4');
        return $pdf->stream('payable.preview');
    }
}
