@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/assessmentresult.css') }}">

    <div class="assessment-wrapper">
        <h1>Assessment Results</h1>
        <p>{{ $summary ?? 'No summary available.' }}</p>

        <a href="{{ route('assessments.create') }}" class="btn-primary-custom">Take Again</a>

        <div class="info-box">
            <i class="fas fa-info-circle"></i>
            Your results are confidential and protected by our privacy policy.
        </div>

        <div class="secure-assessment">
            <div class="icon-circle">🔒</div>
            <span>Secure & Encrypted Assessment</span>
        </div>
    </div>
@endsection
