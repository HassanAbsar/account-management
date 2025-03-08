<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYABLE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        @page {
        size: A4; /* Ensures A4 page size */
        margin: 1cm; /* Adjusts margins */
    }

        .header img {
            width: 175px;
        }

        .header h3 {
            margin: 10px 0;
        }

        .company-details,
        .supplier-details {
            width: 100%;
            margin-bottom: 20px;
        }

        .company-details td,
        .supplier-details td {
            border: none;
            padding: 5px;
        }

        .details-table,
        .item-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details-table td,
        .item-table th,
        .item-table td {
            border: 1px solid #000;
            padding: 5px;
        }

        .item-table th,
        .item-table td {
            text-align: center;
        }

        .details-tables {
            width: 100%;
            border-collapse: collapse;
        }

        .details-tables th,
        td {
            border: 1px solid #000;
            text-align: left;
            padding: 5px;
        }

        .pagenum:before {
            content: counter(page);
        }

        .no-border-table td {
            border: none;
        }

        .mt-none {
            margin-top: none;
        }

        .mb-none {
            margin-bottom: none;
        }

        .text-center {
            text-align: center !important;
        }

        .text-right {
            text-align: right !important;
        }

        .page-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        @font-face {
            font-family: 'Noto Nastaliq Urdu';
            src: url('{{ storage_path("fonts/NotoNastaliqUrdu-Regular.ttf") }}') format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Noto Nastaliq Urdu', sans-serif;
        }

        .urdu-text {
            font-family: 'Noto Nastaliq Urdu', sans-serif;
            direction: rtl;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <table class="no-border-table">
                <tr class="text-center">
                    <td>
                        <h3 class="text-center">INVOICE</h3>
                    </td>
                </tr>
            </table>
        </div>
        <table class="company-details">
            <tr>
                <td>
                    <b>Purchase to:</b> {{ $payable->supplier }}
                </td>
            </tr>
            <tr>
                <td><b>Area:</b> {{ $payable->city->name }} </td>
            </tr>
            <tr>
                <td><b>Phone:</b> {{ $payable->contact_no }}</td>
            </tr>
            <tr>
                <td><b>Saleman:</b> {{ $payable->saleman }}</td>
            </tr>


        </table>

        <table class="company-details" style="margin-left: 500px;margin-top: -200px;">
            <tr>
                <td>
                    <b>Invoice #</b> {{ $payable->invoice_no }}
                </td>
            </tr>
            <tr>
                <td><b>Date:</b> {{ date('d-m-Y') }} </td>
            </tr>
            <tr>
                <td><b>Time:</b> {{ now('Asia/Karachi')->format('h:i A') }}</td>
            </tr>

        </table>
        <br>
        <table class="item-table">
            <thead>
                <tr>
                    <th>Name of Products</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payable_details as $payable_detail)
                <tr>
                    <td>{{ $payable_detail->product_name}}</td>
                    <td>{{ $payable_detail->price }}</td>
                    <td>{{ $payable_detail->qty }}</td>
                    <td>{{ $payable_detail->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @php
        function numberToWords($num) {
    $words = array(
        0 => '', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
        6 => 'six', 7 => 'seven', 8 => 'eight', 9 => 'nine', 10 => 'ten',
        11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen',
        15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen', 19 => 'nineteen',
        20 => 'twenty', 30 => 'thirty', 40 => 'forty', 50 => 'fifty',
        60 => 'sixty', 70 => 'seventy', 80 => 'eighty', 90 => 'ninety'
    );

    if ($num == 0) return "Zero only"; // Ensures correct output for zero

    $string = '';

    if ($num >= 10000000) { 
        $string .= numberToWordss(intval($num / 10000000)) . " crore ";
        $num %= 10000000;
    }

    if ($num >= 100000) { 
        $string .= numberToWordss(intval($num / 100000)) . " lakh ";
        $num %= 100000;
    }

    if ($num >= 1000) { 
        $string .= numberToWordss(intval($num / 1000)) . " thousand ";
        $num %= 1000;
    }

    if ($num >= 100) { 
        $string .= numberToWordss(intval($num / 100)) . " hundred ";
        $num %= 100;
    }

    if ($num > 0) {
        if ($num < 20) {
            $string .= $words[$num] . " ";
        } else {
            $string .= $words[intval($num / 10) * 10] . " " . $words[$num % 10] . " ";
        }
    }

    return ucfirst(trim($string)) . " only"; // Adds "only" once at the end
}
function numberToWordss($num) {
    $words = array(
        0 => '', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
        6 => 'six', 7 => 'seven', 8 => 'eight', 9 => 'nine', 10 => 'ten',
        11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen',
        15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen', 19 => 'nineteen',
        20 => 'twenty', 30 => 'thirty', 40 => 'forty', 50 => 'fifty',
        60 => 'sixty', 70 => 'seventy', 80 => 'eighty', 90 => 'ninety'
    );

    if ($num == 0) return "Zero only"; // Ensures correct output for zero

    $string = '';

    if ($num >= 10000000) { 
        $string .= numberToWordss(intval($num / 10000000)) . " crore ";
        $num %= 10000000;
    }

    if ($num >= 100000) { 
        $string .= numberToWordss(intval($num / 100000)) . " lakh ";
        $num %= 100000;
    }

    if ($num >= 1000) { 
        $string .= numberToWordss(intval($num / 1000)) . " thousand ";
        $num %= 1000;
    }

    if ($num >= 100) { 
        $string .= numberToWordss(intval($num / 100)) . " hundred ";
        $num %= 100;
    }

    if ($num > 0) {
        if ($num < 20) {
            $string .= $words[$num] . " ";
        } else {
            $string .= $words[intval($num / 10) * 10] . " " . $words[$num % 10] . " ";
        }
    }

    return ucfirst(trim($string)); // Adds "only" once at the end
}
            $convertedNumber = numberToWords($payable->total);

        @endphp 

        <table class="no-border-table" style="margin-left: 500px;">
            <tr>
                <td style="text-align: end;"><b>Total Amount :</b>  {{ $payable->total }}</td>
            </tr>
            <tr>
                <td><b>Remaining :</b> {{ $payable->remaining }}</td>
            </tr>
            <tr>
                <td><b>Paid :</b> {{ (int) $payable->total - (int) $payable->remaining }}</td>
            </tr>
        </table>
        <table>
            <tr>
            <td> {{ $convertedNumber }}</td>
            </tr>
        </table>
        
    </div>
</body>

</html>