@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/user/assessmentsindex.css') }}" rel="stylesheet"/>

    <div class="assessment-wrapper">
        <div class="container">
            <h1>Mental Health Assessment</h1>
            <p class="description">
                Take a few moments to complete this confidential assessment. Your mental wellbeing matters to us.
            </p>
            <a href="{{ route('assessments.create') }}" class="btn">Start Assessment</a>
            <p class="time-info">
                This assessment takes approximately 5-10 minutes to complete and will help us better understand your
                needs.
            </p>
            <div class="info-box">
                <i class="fas fa-info-circle" aria-hidden="true"></i>
                <span>Your responses are completely confidential and protected by our privacy policy.</span>
            </div>
        </div>
    </div>
@endsection
