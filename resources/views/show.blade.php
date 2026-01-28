@extends('layouts.app')

@section('content')
<h1>{{ $job->title }}</h1>
<p>{{ $job->description }}</p>
<p><strong>Company:</strong> {{ $job->company }}</p>
<p><strong>Location:</strong> {{ $job->location }}</p>
<p><strong>Salary:</strong> {{ $job->salary ?? 'Not specified' }}</p>
@endsection
