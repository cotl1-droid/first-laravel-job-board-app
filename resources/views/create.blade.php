@extends('layouts.app')

@section('content')
<h1>Post a New Job</h1>

<form method="POST" action="{{ route('jobs.store') }}">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required><br>

    <label>Description:</label>
    <textarea name="description" required></textarea><br>

    <label>Company:</label>
    <input type="text" name="company" required><br>

    <label>Location:</label>
    <input type="text" name="location" required><br>

    <label>Salary:</label>
    <input type="number" name="salary" step="0.01"><br>

    <button type="submit">Submit</button>
</form>
@endsection
