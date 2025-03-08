@extends('layouts.app')
@section('title')
ACCOUNT LEDGER
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-lg-4 col-sm-4 col-12">
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label me-2" for="customer_supplier">Customer</label>
                            <div class="d-flex align-items-center">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="customer_supplier">
                                    <label class="form-check-label" for="customer_supplier"></label>
                                </div>
                            </div>
                            <label class="form-label" for="customer_supplier">Supplier</label>
                        </div>
                </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-12" id="customer_box">
                    <div class="mb-3">
                        <label class="form-label" for="name">Customer</label>
                        <select id="customer_id" class="form-select">
                            <option value="null" selected disabled>Select any Customer</option>
                            @foreach($customer as $row )
                            <option value="{{$row}}">{{ $row }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-12 d-none" id="supplier_box">
                    <div class="mb-3">
                        <label class="form-label" for="name">Supplier</label>
                        <select id="supplier_id" class="form-select">
                            <option value="null" selected disabled>Select any Supplier</option>
                            @foreach($supplier as $row )
                            <option value="{{$row}}">{{ $row }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Sale Man</label>
                        <select id="saleman" class="form-select">
                            <option value="null" selected disabled>Select any Sale Man</option>
                            @foreach($saleman as $row)
                            <option value="{{ $row }}">{{ $row }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                      
            </div> 
            <div class="row"> 
            <div class="col-lg-4 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Date From</label>
                        <input type="date" class="date_from form-control">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="mb-3">
                    <label class="form-label" for="name">Date To</label>
                    <input type="date" class="date_to form-control">
                    </div>
                </div>  
                
            </div>       
        </div>
    </div>
    <div class="row d-flex flex-row-reverse mb-2">
    <div class="col-md-3 d-flex justify-content-end">
                    <button id="generate" class="btn btn-primary " >Generate</button>
                </div>
    </div>
    <div class="card d-none" id="report">
        <div class="card-body">
                <h1>Account Ledger</h1> 
                <br>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                    <h5>Account Title: <span id="customerName"></span></h5>   
                    <h5>Sale Man: <span id="saleman_text"></span></h5> 
                    </div>
                    <div class="col-md-6">
                    <h5>From: <span id="from"></span></h5>   
                    <h5>To: <span id="to"></span></h5> 
                    <h5>Current Date: <span id="date">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</span></h5>
                    </div>

                </div>

                <div class="row">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 1045px">
                            <thead>
                                <tr>
                                    <th>Invoice No</th>
                                    <th>Invoice Date</th>
                                    <th>Narration</th>
                                    <th>Total</th>
                                    <th><span class="text-danger">DR</span></th>
                                    <th><span class="text-success">CR</span></th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>


@push('custom_scripts')
<script>
 function convertDateFormat(dateString) {
    let [year, month, day] = dateString.split("-");
    let formattedDate = `${day}/${month}/${year}`;
    return formattedDate;
}

$(document).ready(function() {
    $(".form-select").select2();
    var table = $('#example3').DataTable({
        language: {
                    paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
                    }
                }
    });

    $('#customer_supplier').on('change', function() {
            if ($(this).is(':checked')) {
                $('#supplier_box').removeClass('d-none');
                $('#supplier_id').find('.select2-container').addClass('w-100');
                $('#customer_box').addClass('d-none');
            } else {
                $('#supplier_box').addClass('d-none');
                $('#customer_box').removeClass('d-none');
            }
        });
    
        

    $('#generate').on('click',function(){
        $customer = $('#customer_id option:selected').val() ?? null;
        $saleman = $('#saleman option:selected').val() ?? null;
        from = $('.date_from').val() ?? null;
        to = $('.date_to').val() ?? null;

        $.ajax({
            url: "{{ route('ledger_summary.generate') }}",
            type: "GET",
            data: { 
                customer: $customer,
                saleman:  $saleman,
                from: from,
                to: to
             }, 
            success: function(response) {
                table.clear();
                if (from != null) {
                    fromDate = convertDateFormat(from);
                }
                if (to != null) {
                    toDate = convertDateFormat(to);
                }
                console.log("Success:", response);
                $("#report").removeClass('d-none');
                $('#customerName').text(response[0].customer);
                $('#saleman_text').text(response[0].saleman);
                $('#from').text(fromDate);
                $('#to').text(toDate);
                var narration;
                var debit;
                var credit;
                $.each(response, function (index, data) {
                    if (data.receivable) {
                         narration = `Invoice:${data.receivable.invoice_no} FROM ${data.receivable.customer}`;
                         debit = `<span class="text-danger">${data.paying_amount}</span>`;
                         credit = 0;
                    }else if (data.payable){
                        narration = `Invoice:${data.payable.invoice_no} FROM ${data.payable.customer}`;
                        credit =  `<span class="text-success">${data.paying_amount}</span>`;
                        debit = 0;
                    }
                table.row.add([
                    data.receivable.invoice_no || '',
                    data.date || '',
                    narration || '',
                    data.total_amount,
                    debit || '0',
                    credit || '0',
                    data.balance || '0'
                ]).draw();
            });

            
            },
            error: function(xhr, status, error) {
                console.log("Error:", error);
            }
        });
    });
        
    })

</script>
@endpush
@endsection