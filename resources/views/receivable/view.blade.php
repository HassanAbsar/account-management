@extends('layouts.app')
@section('title')
RECEIVABLE VIEW
@endsection
@section('button')
<a type="button" class="btn btn-primary" href="{{ route('receivable.index') }}">
    <i class="fas fa-arrow-left"></i> Back
</a>
@endsection
@section('content')
<div class="card">
    <form method="post" action="{{ route('receivable.update',$receivable->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Invoice No</label>
                        <input type="text" class="form-control" disabled id="name" name="invoice_no"
                            value="{{ $receivable->invoice_no }}" placeholder="Enter Invoice No">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Created Date</label>
                        <input type="text" class="form-control" disabled id="name" name="date"
                            value="{{ $receivable->date }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Created by</label>
                        <select name="created_by" disabled class="form-select">
                            <option value="-1" selected disabled>Select any option</option>
                            <option value="Obaid" @selected($receivable->created_by == "Obaid")>Obaid</option>
                            <option value="Uzair" @selected($receivable->created_by == "Uzair")>Uzair</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">A/C No</label>
                        <input type="text" class="form-control" disabled id="name" name="acc_no"
                            value="{{ $receivable->acc_no }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Customer</label>
                        <input type="text" class="form-control" disabled id="name" name="customer"
                            value="{{ $receivable->customer }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Sale Man</label>
                        <input type="text" class="form-control" disabled id="name" name="saleman"
                            value="{{ $receivable->saleman }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Address</label>
                        <input type="text" class="form-control" disabled id="name" name="address"
                            value="{{ $receivable->address }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">City/Area</label>
                        <select name="city_id" disabled class="form-select">
                            <option value="-1" selected disabled>Select any City/Area</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}" @selected($receivable->city_id == $city->id )>{{ $city->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Contact No</label>
                        <input type="number" class="form-control" disabled id="name" name="contact_no"
                            value="{{ $receivable->contact_no }}">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Term</label>
                        <input type="text" class="form-control" disabled id="name" name="term"
                            value="{{ $receivable->term }}">
                    </div>
                </div>
                
            </div>
                <div class="row">

                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="mb-3">
                    <div class="table-responsive" style="margin-top: 16px;">
                <label for="afterChangeFileUploader_txt" class="form-label">Attachment</label>
                <input class="form-control" name="attachments[]" disabled id="afterChangeFileUploader_txt" type="file" multiple accept=".jpg, .jpeg, .png, .gif, .pdf">
                <br>
                <table id="afterChangeUploadedFilesTable" class="table table-condensed table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($receivable->attachments))
                            @php
                                $after_attachmentFiles = explode(',', $receivable->attachments);
                                $uniqueAttachments = [];
                            @endphp
                            @foreach ($after_attachmentFiles as $attachment)
                                @if (!in_array(substr($attachment, 14), $uniqueAttachments))
                                    @php array_push($uniqueAttachments, substr($attachment, 14)); @endphp
                                    <tr>
                                        <td>{{ substr($attachment, 14) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a target="_blank" href="{{ asset('/receivable-after_attachments/') }}/{{ $attachment }}" class="btn mx-2 btn-outline-primary">
                                                    <i class="fas fa-file"></i>
                                                </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
                    </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($receivable_details as $key => $product )
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><input type="text" class="form-control product" name="product[{{$key}}][product_name]" value="{{  $product['product_name'] }}"></td>
                                <td><input type="number" class="form-control unit-price" min="0" step="0.01" name="product[{{$key}}][price]" value="{{ (float) $product['price'] }}"></td>
                                <td><input type="number" class="form-control quantity" name="product[{{$key}}][]" value="{{ (float) $product['qty'] }}"></td>
                                <td><input type="number" class="form-control total-price" name="product[{{$key}}][total]" value="{{ (float) $product['total'] }}"></td>
                            </tr>
                            @endforeach 
                        </tbody>

                    </table>
                </div>
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
                var productName = '<input type="text" class="form-control product" name="product['+table.rows().count() + 1+'][name]">';

                // Create input fields
                var unitPriceInput = '<input type="number" class="form-control unit-price" min="0" step="0.01" name="product['+table.rows().count() + 1+'][price]">';
                var quantityInput = '<input type="number" class="form-control quantity" min="1" step="1" value="1"  name="product['+table.rows().count() + 1+'][qty]">';
                var totalPrice = '<input type="number" class="form-control total-price" min="1" step="1" value="1" name="product['+table.rows().count() + 1+'][total]">';

                // Add row to DataTable
                table.row.add([
                    table.rows().count() +1,
                    productName,
                    unitPriceInput,
                    quantityInput,
                    totalPrice,
                    '<button class="btn btn-danger btn-sm delete-row"><i class="fas fa-trash"></i></button>'
                ]).draw(false);

                rowCount++; // Increment row count
            });

            // Event listener for input changes (calculate total price)
            $('#products tbody').on('input', '.unit-price, .quantity', function() {
                var row = $(this).closest('tr');
                var unitPrice = parseFloat(row.find('.unit-price').val()) || 0;
                var quantity = parseInt(row.find('.quantity').val()) || 0;
                var totalPrice = (unitPrice * quantity).toFixed(2);
                row.find('.total-price').val(totalPrice);
            });

            // Delete row on button click
            $('#products tbody').on('click', '.delete-row', function() {
                table.row($(this).parents('tr')).remove().draw();
            });

     

        // Handle form submission
        $("form").on("submit", function(event) {
            event.preventDefault();

            // Append files from the file arrays (beforeFiles, afterFiles) to FormData
            beforeFiles.forEach((file, index) => {
                // Create an input element for each before file
                let inputFile = document.createElement('input');
                inputFile.setAttribute('type', 'file');
                inputFile.setAttribute('name', `before_attachment_${index}`);
                inputFile.setAttribute('class', `d-none`);

                // Create a DataTransfer object to hold the file
                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(file); // Add file to DataTransfer

                // Set the file to the input element
                inputFile.files = dataTransfer.files;

                // Append the input to the form
                document.querySelector('form').appendChild(inputFile);
            });

            afterFiles.forEach((file, index) => {
                // Create an input element for each after file
                let inputFile = document.createElement('input');
                inputFile.setAttribute('type', 'file');
                inputFile.setAttribute('name', `after_attachment_${index}`);
                inputFile.setAttribute('class', `d-none`);

                // Create a DataTransfer object to hold the file
                let dataTransfer = new DataTransfer();
                dataTransfer.items.add(file); // Add file to DataTransfer

                // Set the file to the input element
                inputFile.files = dataTransfer.files;

                // Append the input to the form
                document.querySelector('form').appendChild(inputFile);
            });

            this.submit();

        });
    });
</script>
@endpush
@endsection