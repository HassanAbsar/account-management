@extends('layouts.app')
@section('title')
PAYABLE LIST
@endsection
@section('button')
    <a type="button" class="btn btn-primary" href="{{ route('payable.create') }}">
        <i class="fas fa-plus-square"></i> Add
    </a>
@endsection
@section('content')
 
<style>
    .table thead tr input {
            background: transparent;
            color: white;

        }
</style>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Invoice No</th>
                            <th>Created by</th>
                            <th>Created Date</th>
                            <th>City/Area</th> 
                            <th>Payment Status</th> 
                            <th>Supplier</th> 
                            <th>Sale Man</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th></th>
                            <th><input type="text" id="search-invoice_no" placeholder="Search Invoice No"></th>
                            <th><input type="text" id="search-created_by" placeholder="Search Created by"></th>
                            <th><input type="text" id="search-created_date" placeholder="Search Created Date"></th>
                            <th><input type="text" id="search-city" placeholder="Search City/Area"></th>
                            <th><input type="text" id="search-payment_status" placeholder="Search Payment Status"></th>
                            <th><input type="text" id="search-supplier" placeholder="Search Supplier"></th>
                            <th><input type="text" id="search-saleman" placeholder="Search Sale Man"></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="addPaymentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPaymentModalLabel">Add Payment</h5>
                </div>
                <div class="modal-body">
                    <form id="addPaymentForm" method="POST" action="{{ route('payments.storeInvoice') }}">
                        @csrf
                        <input type="hidden" name="payable_id" id="invoice_id">
                        <input type="hidden" name="payment_id" id="invoice_category">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="total_amount">Total Amount</label>
                                <input type="text" name="total_amount" id="total_amount" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="paying_amount">Remaining Balance</label>
                                <input type="text" name="remaining_amount" id="remaining_amount" class="form-control" readonly>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <label for="paying_amount">Paying Amount</label>
                                <input type="number" name="paying_amount" id="paying_amount" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="balance">Balance</label>
                                <input type="text" name="balance" id="balance" class="form-control" readonly>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <label for="payment_method">Payment Method</label>
                                <select name="payment_method" id="payment_method" class="form-control">
                                    <option value="">Select Payment Type</option>
                                    <option value="cash">Cash</option>
                                    <option value="bank">Bank</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="account_id">Account</label>
                               <input type="number" name="account_no" id="account_no" class="form-control">
                            </div>
                            <br>
                            <div class="col-md-6">
                                <label for="payment_note">Payment Term</label>
                                <textarea name="payment_term" id="payment_term" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add Payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@push('custom_scripts')
    
    <script>
        var data = "{{ route('payable.data') }}";


        $(document).ready(function() {
            let bool = true;
            var table = $('#example3').DataTable({
                perPageSelect: [5, 10, 15, ["All", -1]],
                processing: true,
                serverSide: true,
                language: {
                    processing: 'Processing' 
                },
                ajax: {
                    url: data, 
                    type: 'GET',
                    data: function(d) {
                        d.invoice_no = $('#search-invoice_no').val();
                        d.created_by = $('#search-created_by').val();
                        d.date = $('#search-created_date').val();
                        d.city = $('#search-city').val();
                        d.payment_status = $('#search-payment_status').val();
                        d.supplier = $('#search-supplier').val();
                        d.saleman = $('#search-saleman').val();
                    }
                },
                columns: [{
                    data :'DT_RowIndex',
                         name: 'DT_RowIndex',
                         orderable: false,
                         searchable: false
                    }, 
                    {
                        data: 'invoice_no',
                        name: 'invoice_no',
                    },
                    {
                        data: 'created_by',
                        name: 'created_by',
                    },
                    {
                        data: 'date',
                        name: 'date',
                    },
                    {
                        data: 'city.name',
                        name: 'city.name',
                    },
                    {
                        data: 'payment_status',
                        name: 'payment_status',
                    },
                    {
                        data: 'supplier',
                        name: 'supplier',
                    },
                    {
                        data: 'saleman',
                        name: 'saleman',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                paging: true,
                language: {
                    paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
                    }
                }
            });
            bool = false;

        $(document).on('keyup','#dt-search-0', function() {
                console.log($(this).val())
            table.search($(this).val()).draw();
             });

       
            $('#example3 thead tr:eq(1) th').each(function (i) {
                $('input', this).on('keyup change', function () {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

            $('#addPaymentModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var totalAmount = button.data('total-amount');
            var invoiceId = button.data('id'); 
            var remainingBalance = button.data('remaining-balance');
            var payment_id = button.data('payment_id');
            var paying_amount = button.data('paying_amount');
            var payment_term = button.data('payment_term');
            var account_no = button.data('account_no');
            var payment_method = button.data('payment_method');
            var modal = $(this);
            modal.find('#total_amount').val(totalAmount);
            modal.find('#invoice_id').val(invoiceId);
            modal.find('#invoice_category').val(payment_id);
            modal.find('#remaining_amount').val(remainingBalance);
            modal.find('#balance').val(remainingBalance);
            
            $('#paying_amount').on('input', function () {
                var payingAmount = parseFloat($(this).val()) || 0;
                var remainingBalance = parseFloat($('#remaining_amount').val()) || 0;
                var balance = remainingBalance - payingAmount;
                $('#balance').val(balance < 0 ? 0 : balance);
            });
        });

        });

    </script>
@endpush

@endsection
