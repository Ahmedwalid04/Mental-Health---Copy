@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/assessmentcreate.css') }}">

    <div class="assessment-wrapper">
        <main class="assessment-main" role="main" aria-labelledby="main-title">
            <h1 id="main-title">Mental Health Assessment</h1>
            <p class="description">
                Take a few moments to complete this confidential assessment. Your mental wellbeing matters to us.
            </p>

            @if (session('summary'))
                <div class="alert alert-info">{{ session('summary') }}</div>
            @endif

            <form method="POST" action="{{ route('assessments.store') }}">
                @csrf

                @php
                    $questions = [
                        "How often do you feel anxious or stressed?",
                        "Do you have trouble sleeping?",
                        "Do you often feel sad or hopeless?",
                        "Do you struggle to concentrate?",
                        "Do you avoid social situations?"
                    ];

                    $options = ["Never" => 0, "Sometimes" => 1, "Often" => 2];
                @endphp

                @foreach ($questions as $index => $question)
                    <div class="mb-3">
                        <label class="form-label">{{ $index + 1 }}. {{ $question }}</label>
                        @foreach ($options as $label => $value)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $index }}]" value="{{ $value }}" required>
                                <label class="form-check-label">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary mt-3 large-submit-button">Submit</button>
            </form>
        </main>

        <section class="info-box mt-4" aria-label="Privacy information">
            <i class="fas fa-info-circle" aria-hidden="true"></i>
            <p>Your responses are completely confidential and protected by our privacy policy.</p>
        </section>
    </div>
@endsection
