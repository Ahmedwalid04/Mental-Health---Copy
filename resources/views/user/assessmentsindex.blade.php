@extends('layouts.client')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <style>
        body {
            background-color: #add1e6;
            font-family: 'Inter', sans-serif;
            color: #0f2f66;
        }

        .assessment-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 80px 16px 40px 16px;
            box-sizing: border-box;
        }

        .container {
            background-color: #fff8ef;
            max-width: 400px;
            width: 100%;
            border-radius: 6px;
            padding: 32px;
            box-sizing: border-box;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-weight: 800;
            font-size: 24px;
            margin: 0 0 12px 0;
            color: #0f2f66;
        }

        .description {
            font-weight: 400;
            font-size: 14px;
            color: #2f5496;
            margin: 0 0 24px 0;
            line-height: 1.3;
        }

        .btn {
            background-color: #2f5496;
            color: white;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 24px;
            text-decoration: none;
            display: inline-block;
        }

        .time-info {
            font-size: 12px;
            color: #2f5496;
            margin: 0 0 24px 0;
            line-height: 1.3;
        }

        .info-box {
            background-color: #e9ecec;
            color: #2f5496;
            font-size: 12px;
            border-radius: 4px;
            padding: 8px 16px;
            display: inline-flex;
            align-items: center;
            max-width: 350px;
            margin: 0 auto;
            line-height: 1.2;
        }

        .info-box i {
            margin-right: 8px;
            font-size: 14px;
        }

        @media (max-width: 440px) {
            .container {
                padding: 24px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>

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
