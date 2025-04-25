@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
        }

        .assessment-wrapper {
            max-width: 768px;
            margin: 4rem auto;
            padding: 2.5rem;
            background: #fff9f0;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .assessment-wrapper h1 {
            font-size: 2rem;
            font-weight: 800;
            color: #0f1e52;
            margin-bottom: 1rem;
        }

        .assessment-wrapper p {
            font-size: 1rem;
            color: #2f4ea1;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn-primary-custom {
            background-color: #081F5C;
            color: #fff;
            font-size: 1.125rem;
            font-weight: 600;
            padding: 0.875rem 2rem;
            border: none;
            border-radius: 0.375rem;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s ease;
        }

        .btn-primary-custom:hover {
            background-color: #0a2b84;
        }

        .info-box {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: #e6ebed;
            color: #2f4ea1;
            font-size: 0.875rem;
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem;
            margin-top: 2rem;
        }

        .secure-assessment {
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: #2f4ea1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .icon-circle {
            width: 2rem;
            height: 2rem;
            background-color: #d9d9d9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #666;
        }

        @media (max-width: 480px) {
            .assessment-wrapper {
                padding: 2rem 1.5rem;
            }
        }
    </style>

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
