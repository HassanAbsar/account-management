@extends('layouts.app')
@section('content')
<div class="alert alert-primary alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
        <line x1="9" y1="9" x2="9.01" y2="9"></line>
        <line x1="15" y1="9" x2="15.01" y2="9"></line>
    </svg>
    <strong>Welcome!</strong> to the Account Software.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
    </button>
</div>

<div class="row mt-2 d-flex justify-content-center">
    <!-- Receivable Card -->
    <div class="col-md-4">
        <a href="{{ route('receivable.index') }}" class="card text-white text-decoration-none" style="background: linear-gradient(135deg, #007bff, #00c6ff);">
            <div class="card-header d-flex justify-content-center">
                <h4 class="mb-0 text-white"><i class="fas fa-arrow-down me-2"></i>Receivable</h4>
            </div>
            <div class="card-body">
                <p class="card-text fs-4">Manage all receivable transactions efficiently.</p>
            </div>
        </a>
    </div>

    <!-- Payable Card -->
    <div class="col-md-4">
        <a href="{{ route('payable.index') }}" class="card text-white text-decoration-none" style="background: linear-gradient(135deg, #28a745, #98ec2d);">
            <div class="card-header d-flex justify-content-center">
                <h4 class="mb-0 text-white"><i class="fas fa-file-invoice me-2"></i>Payable</h4>
            </div>
            <div class="card-body">
                <p class="card-text fs-4">Track and manage your payable records.</p>
            </div>
        </a>
    </div>
</div>
<div class="row mt-2 d-flex justify-content-center">
    <!-- City Card -->
    <div class="col-md-4">
        <a href="{{ route('city.index') }}" class="card text-white text-decoration-none" style="background: linear-gradient(135deg, #17a2b8, #5edfff);">
            <div class="card-header d-flex justify-content-center">
                <h4 class="mb-0 text-white"><i class="fas fa-map-marker-alt me-2"></i>City</h4>
            </div>
            <div class="card-body">
                <p class="card-text fs-4">View and manage city-related data and locations.</p>
            </div>
        </a>
    </div>

    <!-- Ledger Report Card -->
    <div class="col-md-4">
        <a href="{{ route('ledger_summary') }}" class="card text-white text-decoration-none" style="background: linear-gradient(135deg, #ffc107, #ff9800);">
            <div class="card-header d-flex justify-content-center">
                <h4 class="mb-0 text-white"><i class="fas fa-chart-line me-2"></i>Ledger Report</h4>
            </div>
            <div class="card-body">
                <p class="card-text fs-4">Generate and review ledger reports quickly.</p>
            </div>
        </a>
    </div>
</div>



@push('custom_scripts')
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-dismissible").fadeOut("slow", function() {
                $(this).removeClass("show");
            });
        }, 5000);
    });
</script>
@endpush
@endsection