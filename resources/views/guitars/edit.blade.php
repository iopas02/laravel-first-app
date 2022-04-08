@extends('layout')

@section('title' , 'Guitar Home')
@section('content')
<div style="color:aliceblue">
    <form class="form bg-dark p-6 border-1" method="POST" action="{{ route('guitars.update', ['guitar'=> $guitar['id']]) }}">
        @csrf
        @method('PUT')
        <div>
            <label class="text-sm form-label" for="guitarName">Guitar Name</label>
            <input class="text-lg border-1 form-control" type="text" value="{{ $guitar['guitarName'] }}" id="guitarName" name="guitarName" >
            @error('guitarName')
                <div>
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                </div>
            @enderror
        </div>
        <div>
            <label class="text-sm form-label" for="brand">Brand</label>
            <input class="text-lg border-1 form-control" type="text" value="{{ $guitar['brand'] }}" id="brand" name="brand" >
            @error('brand')
                <div>
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                </div>
            @enderror
        </div>
        <div>
            <label class="text-sm form-label" for="year">Year Made</label>
            <input class="text-lg border-1 form-control" type="text" value="{{ $guitar['yearMade'] }}" id="year" name="yearMade" >
            @error('year')
                <div>
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                </div>
            @enderror
        </div>
        <br>
        <div>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection
