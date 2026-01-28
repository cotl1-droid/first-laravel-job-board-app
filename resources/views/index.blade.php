@extends('layouts.app')

@section('content')
<h1>Available Jobs</h1>
<a href="{{ route('jobs.create') }}">Post a Job</a>

@foreach($jobs as $job)
    <div>
        <h2><a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a></h2>
        <p>{{ $job->company }} - {{ $job->location }}</p>
    </div>
@endforeach

{{ $jobs->links() }}
@endsection
