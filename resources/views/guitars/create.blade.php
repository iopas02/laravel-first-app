@extends('layout')

@section('title' , 'Guitar Home')
@section('content')
<div style="color:aliceblue">
    <form class="form bg-dark p-6 border-1" method="POST" action="{{ route('guitars.store')}}">
        @csrf
        <div>
            <label class="text-sm form-label" for="guitarName">Guitar Name</label>
            <input class="text-lg border-1 form-control" type="text" value="{{ old('guitarName')}}" id="guitarName" name="guitarName" >
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
            <input class="text-lg border-1 form-control" type="text" value="{{ old('brand')}}" id="brand" name="brand" >
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
            <input class="text-lg border-1 form-control" type="text" value="{{ old('yearMade')}}" id="year" name="yearMade" >
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
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
