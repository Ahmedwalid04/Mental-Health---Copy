@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Assessment Result</h2>
        </div>
        <div class="card-body">
        <p>{{ $summary ?? 'No summary available.' }}</p>
        <a href="{{ route('assessments.create') }}" class="btn btn-primary mt-3">Take Again</a>
        </div>
    </div>
</div>
@endsection
