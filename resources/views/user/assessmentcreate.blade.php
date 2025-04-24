@extends('layouts.client')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            color: #0b3b8a;
        }

        .assessment-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 16px;
            background: #fff;
        }

        .assessment-main {
            background: #fff8ed;
            max-width: 768px;
            width: 100%;
            border-radius: 6px;
            padding: 40px;
            box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
            color: #0b1e58;
        }

        .assessment-main h1 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 16px;
            text-align: center;
        }

        .assessment-main p.description {
            text-align: center;
            margin-bottom: 32px;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-check {
            background: #f7f8fa;
            border-radius: 6px;
            padding: 12px 16px;
            margin-bottom: 16px;
            transition: 0.3s;
        }

        .form-check:hover {
            background-color: #d6d9f7;
        }

        .btn-primary {
            background-color: #9aa6d6;
            border: none;
        }

        .btn-primary:hover {
            background-color: #8a95c9;
        }

        .info-box {
            max-width: 1024px;
            margin-top: 40px;
            background-color: #e6f0fa;
            border-radius: 6px;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.875rem;
        }

        .info-box i {
            font-size: 1.25rem;
        }

        .large-submit-button {
            padding: 16px 32px;
            font-size: 1.25rem;
            font-weight: 600;
            background-color: #081F5C;
            border: none;
            color: white;
        }

        .large-submit-button:hover {
            background-color: #0b2a7a;
        }


    </style>

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
                                <input class="form-check-input" type="radio" name="answers[{{ $index }}]"
                                       value="{{ $value }}" required>
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
