@extends('layouts.backend.app')
@section('content')
    <div class="card">
        <table class="table table-striped table-dark bordered">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>mobile</th>
                <th>zip</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($reqs as $req)
                    <tr>
                        <td>{{ $req->name }}</td>
                        <td>{{ $req->email }}</td>
                        <td>{{ $req->mobile }}</td>
                        <td>{{ $req->zip }}</td>
                        <td><a class="btn-sm btn-dark" href="{{ route('agency.quote_details', $req->id) }}"><i
                                    class="fas fa-edit"></i>view</a></td>
                    </tr>
                @endforeach




            </tbody>
        </table>
    </div>
@endsection
