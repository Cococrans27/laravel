@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h6 class="text-muted mb-1">Welcome back, {{ auth()->user()->name }}</h6>
            <h5 class="mb-0">Dashboard</h5>
        </div>
    </div>
@endsection
