@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h2>Welcome to the Mental Health Assessment</h2>
    <p>Please take a few minutes to complete the assessment.</p>

    <a href="{{ route('assessments.create') }}" class="btn btn-primary mt-4">Start the Test</a>
</div>
@endsection


