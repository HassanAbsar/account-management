@extends('layouts.app')
@section('title')
PAYABLE CREATE
@endsection
@section('button')
<a type="button" class="btn btn-primary" href="{{ route('payable.index') }}">
    <i class="fas fa-arrow-left"></i> Back
</a>
@endsection
@section('content')
<div class="card">
    <form method="post" action="{{ route('payable.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Invoice No</label>
                        <input type="text" class="form-control" id="name" name="invoice_no"
                            value="{{ old('invoice_no') }}" placeholder="Enter Invoice No">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Created Date</label>
                        <input type="date" class="form-control" id="name" name="date"
                            value="{{ old('date') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Created by</label>
                        <select name="created_by" class="form-select">
                            <option value="-1" selected disabled>Select any option</option>
                            <option value="Obaid">Obaid</option>
                            <option value="Uzair">Uzair</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">A/C No</label>
                        <input type="text" class="form-control" id="name" name="acc_no"
                            value="{{ old('acc_no') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Supplier</label>
                        <input type="text" class="form-control" id="name" name="supplier"
                            value="{{ old('supplier') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Sale Man</label>
                        <input type="text" class="form-control" id="name" name="saleman"
                            value="{{ old('saleman') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Address</label>
                        <input type="text" class="form-control" id="name" name="address"
                            value="{{ old('address') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">City/Area</label>
                        <select name="city_id" class="form-select">
                            <option value="-1" selected disabled>Select any City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}" @selected(old('city_id') == $city->id )>{{ $city->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Contact No</label>
                        <input type="number" class="form-control" id="name" name="contact_no"
                            value="{{ old('contact_no') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Term</label>
                        <input type="text" class="form-control" id="name" name="term"
                            value="{{ old('term') }}">
                    </div>
                </div>
                
            </div>
                <div class="row">

                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <div class="table-responsive" style="margin-top: 16px;">
                            <label for="formFile" class="form-label">Attachment </label>
                            <input class="form-control" name="attachments" id="afterChangeFileUploader_txt" type="file" multiple
                                oninput="uploader(this)" accept=".jpg, .jpeg, .png, .gif, .pdf">
                            <br>
                            <table id="afterChangeUploadedFilesTable"
                                class="table table-condensed table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row d-flex flex-row-reverse text-end">
                <div class="col-lg-3 mb-3">
                <button class="btn btn-primary" type="button" id="addProduct">Product</button>
                </div>
                </div>
             
                <div class="table-responsive">
                    <table class="display" id="products">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Product </th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="d-flex  justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>
</div>


@push('custom_scripts')
<script>

    
let fileUploadInput;
        let uploadInput = [];

        let beforeFileUploadInput = null;
        let afterFileUploadInput = null;

        let beforeFiles = [];
        let afterFiles = [];

        // Function to handle file uploads

        function uploader(e) {
            const {
                id,
                files
            } = e;
            const fileArray = Array.from(files);

            // Append the files and update the table based on the input
            if (id === "beforeChangeFileUploader_txt") {
                beforeFiles = beforeFiles.concat(fileArray);
                updateFilesTable(beforeFiles, 'beforeChangeUploadedFilesTable');
            } else if (id === "afterChangeFileUploader_txt") {
                afterFiles = afterFiles.concat(fileArray);
                updateFilesTable(afterFiles, 'afterChangeUploadedFilesTable');
            }
        }

        // Function to update file tables
        function updateFilesTable(files, tableId) {
            const tableBody = document.getElementById(tableId).getElementsByTagName('tbody')[0];
            tableBody.innerHTML = ''; // Clear the table before re-adding files

            files.forEach((file, index) => {
                const tr = document.createElement("tr");
                tr.innerHTML =
                    `
            <td>${file.name}</td>
            <td><button class="btn btn-danger btn-sm" onclick="removeFile('${file.name}', '${tableId}')">X</button></td>`;
                tableBody.appendChild(tr);
            });
        }

        // Function to remove a file from the list
        function removeFile(fileName, tableId) {
            if (tableId === 'beforeChangeUploadedFilesTable') {
                beforeFiles = beforeFiles.filter(file => file.name !== fileName);
                updateFilesTable(beforeFiles, tableId);
            } else if (tableId === 'afterChangeUploadedFilesTable') {
                afterFiles = afterFiles.filter(file => file.name !== fileName);
                updateFilesTable(afterFiles, tableId);
            }
        }

    $(document).ready(function() {
        $(".form-select").select2();
        var table = $('#products').DataTable({
            language: {
                paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
                }
            }
        });

        var rowCount = 1;

        $('#addProduct').click(function() {
                var productName = '<input type="text" class="form-control product" name="product['+table.rows().count() + 1+'][product_name]">';
                var unitPriceInput = '<input type="number" class="form-control unit-price" step="0.01" value="0" name="product['+table.rows().count() + 1+'][price]">';
                var quantityInput = '<input type="number" class="form-control quantity"  step="0.01" value="0"  name="product['+table.rows().count() + 1+'][qty]">';
                var totalPrice = '<input type="number" class="form-control total-price"  step="0.01" value="0" name="product['+table.rows().count() + 1+'][total]">';
                table.row.add([
                    table.rows().count() +1,
                    productName,
                    unitPriceInput,
                    quantityInput,
                    totalPrice,
                    '<button class="btn btn-danger btn-sm delete-row"><i class="fas fa-trash"></i></button>'
                ]).draw(false);

                rowCount++;
            });

            $('#products tbody').on('input', '.unit-price, .quantity', function() {
                var row = $(this).closest('tr');
                var unitPrice = parseFloat(row.find('.unit-price').val()) || 0;
                var quantity = parseInt(row.find('.quantity').val()) || 0;
                var totalPrice = (unitPrice * quantity).toFixed(2);
                row.find('.total-price').val(totalPrice);
            });

            $('#products tbody').on('click', '.delete-row', function() {
                table.row($(this).parents('tr')).remove().draw();
            });

     

        $("form").on("submit", function(event) {
            event.preventDefault();

            beforeFiles.forEach((file, index) => {
                let inputFile = document.createElement('input');
                inputFile.setAttribute('type', 'file');
                inputFile.setAttribute('name', `before_attachment_${index}`);
                inputFile.setAttribute('class', `d-none`);

                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(file); 

                inputFile.files = dataTransfer.files;

                document.querySelector('form').appendChild(inputFile);
            });

            afterFiles.forEach((file, index) => {
                let inputFile = document.createElement('input');
                inputFile.setAttribute('type', 'file');
                inputFile.setAttribute('name', `after_attachment_${index}`);
                inputFile.setAttribute('class', `d-none`);

                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(file); 
                inputFile.files = dataTransfer.files;

                document.querySelector('form').appendChild(inputFile);
            });

            this.submit();

        });
    });
</script>
@endpush
@endsection