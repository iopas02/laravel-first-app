@extends('layout')

@section ('title', 'Contact Page')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1 style="color: aliceblue">Contact page</h1>
    </div>

    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <p style="color: aliceblue">This is the description.</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    alert("Are you okay?");
</script>
@endsection
