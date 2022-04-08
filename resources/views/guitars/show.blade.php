@extends('layout')

@section('title', 'Guitar Page')
@section('content')
<div style="color:aliceblue">
    <div>
        <h3>
            {{ $guitar['guitarName'] }}
        </h3>
        <ul>
            <li>
                Made by: {{ $guitar['brand'] }}
            </li>
            <li>
                Year made: {{ $guitar['yearMade'] }}
            </li>
        </ul>
        <div>
            <a href="{{ route('guitars.edit', $guitar['id']) }}" class="btn btn-success">Edit</a>
        </div>
    </div>
    <br>
    <div>
        <a class="btn btn-primary" role="button" href="{{ route('guitars.index') }}">Go back</a>
    </div>

</div>
@endsection
