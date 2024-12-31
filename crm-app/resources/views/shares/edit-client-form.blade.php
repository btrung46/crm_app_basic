@extends('layout.app')
@section('content')
    <form action="{{ route('client.update',$client->id) }}" method="POST">
        @csrf
        <h1> Client information</h1>
        <fieldset>
            <div>
                <label class="form-label mt-4">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$client->name}}">
                @error('name')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$client->email}}">
                @error('email')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Company</label>
                <input type="text" class="form-control" name="commpany" placeholder="Enter company" value="{{$client->commpany}}">
                @error('commpany')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Phone number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{$client->phone}}">
                @error('phone')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label for="exampleTextarea" class="form-label mt-4">Note</label>
                <textarea class="form-control" name="note" rows="3" value="{{$client->note}}"></textarea>
                @error('note')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@endsection
