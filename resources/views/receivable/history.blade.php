@extends('layouts.app')
@section('title')
    RECEIVABLE PAYMENTS HISTORY
@endsection
@section('content')
@section('button')
<a type="button" class="btn btn-primary" href="{{ route('receivable.index') }}">
    <i class="fas fa-arrow-left"></i> Back
</a>
@endsection
<style>
    .table thead tr input {
            background: transparent;
            color: white;

        }
</style>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 1045px">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Invoice No</th>
                            <th>Created by</th>
                            <th>Payment Date</th>
                            <th>Customer</th>
                            <th>Sale Man</th>
                            <th>Account No</th> 
                            <th>Payment</th> 
                            <th>Remaining</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $row )
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $row->receivable->invoice_no}}</td>
                                <td>{{ $row->receivable->created_by}}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->receivable->customer }}</td>
                                <td>{{ $row->receivable->saleman }}</td>
                                <td>{{ $row->account_no }}</td>
                                <td>{{ $row->paying_amount }}</td>
                                <td>{{ $row->remaining }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    
    @push('custom_scripts')
    
    <script>
      


        $(document).ready(function() {
            let bool = true;
            var table = $('#example3').DataTable({
                language: {
                    paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
                    }
                }
            });
            });

</script>
@endpush

@endsection
