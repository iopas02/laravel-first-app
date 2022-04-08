@extends('layout')

@section('title' , 'Guitar Home')
@section('content')
<div style="color:aliceblue">
    @forelse ($guitars as $guitar)
        <div class="card bg-dark">
            <div class="card-body">
                <h3>
                    <a href="{{ route('guitars.show', ['guitar' =>$guitar['id']])}}">{{ $guitar['guitarName'] }}</a>
                </h3>
                <ul>
                    <li>
                        Made by: {{ $guitar['brand'] }}
                    </li>
                    <li>
                        Year made: {{ $guitar['yearMade'] }}
                    </li>
                </ul>
            </div>
        </div>

        <br>
    @empty
        <h3>
            No result found.
        </h3>
    @endforelse
    <div>
        <a href="{{ route('guitars.create') }}" class="btn btn-primary">Create Guitar</a>
    </div>
</div>
@endsection
