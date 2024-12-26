@extends('layout.app')
@section('content')
    <form action="{{ route('client.create') }}" method="POST">
        @csrf
        <h1> Client information</h1>
        <fieldset>
            <div>
                <label class="form-label mt-4">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
                @error('name')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                @error('email')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Company</label>
                <input type="text" class="form-control" name="commpany" placeholder="Enter company">
                @error('commpany')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label class="form-label mt-4">Phone number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone">
                @error('phone')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div>
                <label for="exampleTextarea" class="form-label mt-4">Note</label>
                <textarea class="form-control" name="note" rows="3"></textarea>
                @error('note')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@endsection
