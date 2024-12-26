@extends('layout.app')
@section('content')
    <div class="container py-4">
        @include('shares.success')
        <div class="row">
            <div class="col-3">
                @include('layout.search_box')
            </div>
            <div class="col-9">
                <a href="{{ route('client.index') }}">Create client</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">Company</th>
                            <th class="py-3 px-4 text-left">Phone</th>
                            <th class="py-3 px-4 text-left">Email</th>
                            <th class="py-3 px-4 text-left">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $client)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $client->id }}</td>
                            <td class="py-2 px-4">{{ $client->name }}</td>
                            <td class="py-2 px-4">{{ $client->commpany }}</td>
                            <td class="py-2 px-4">{{ $client->phone }}</td>
                            <td class="py-2 px-4">{{ $client->email }}</td>
                            <td class="py-2 px-4">{{ $client->note }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
