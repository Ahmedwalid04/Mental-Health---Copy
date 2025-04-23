@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Mental Health Assessment</h2>

    {{-- Show result summary if redirected back with session --}}
    @if (session('summary'))
        <div class="alert alert-info">
            {{ session('summary') }}
        </div>
    @endif

    <form method="POST" action="{{ route('assessments.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">1. How often do you feel anxious or stressed?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[0]" value="0" required>
                <label class="form-check-label">Never</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[0]" value="1">
                <label class="form-check-label">Sometimes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[0]" value="2">
                <label class="form-check-label">Often</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">2. Do you have trouble sleeping?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[1]" value="0" required>
                <label class="form-check-label">Never</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[1]" value="1">
                <label class="form-check-label">Sometimes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[1]" value="2">
                <label class="form-check-label">Often</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">3. Do you often feel sad or hopeless?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[2]" value="0" required>
                <label class="form-check-label">Never</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[2]" value="1">
                <label class="form-check-label">Sometimes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[2]" value="2">
                <label class="form-check-label">Often</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">4. Do you struggle to concentrate?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[3]" value="0" required>
                <label class="form-check-label">Never</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[3]" value="1">
                <label class="form-check-label">Sometimes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[3]" value="2">
                <label class="form-check-label">Often</label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">5. Do you avoid social situations?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[4]" value="0" required>
                <label class="form-check-label">Never</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[4]" value="1">
                <label class="form-check-label">Sometimes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answers[4]" value="2">
                <label class="form-check-label">Often</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
