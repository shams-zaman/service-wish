@extends('layouts.backend.app')
@section('content')
    <div class="container">

        {{-- <div class="d-block mb-4 mb-md-0"> --}}
        <table style="" class="table border">
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">name</th>
                <th scope="col">Address</th>
                <th style="text-align:center" scope="col">Description</th>
                {{-- <th scope="col">Month</th> --}}
                <th scope="col">action</th>
            </tr>
            @foreach ($profiles as $profile)
                <tr>
                    <td style="">{{ $loop->iteration }}</td>
                    <td style="">{{ $profile->ag_name }}</td>
                    <td style="">{{ $profile->address }}</td>
                    <td style=""> {{ Illuminate\Support\Str::limit($profile->desc, 90) }}</td>
                    <td><span class="btn btn-sm btn-secondary"><a
                                href="{{ route('admin.agency-desc', $profile->id) }}">view</a> </span>
                    </td>

                    {{-- <td>{{ $profile->unique_id }}</td>
                    <td>{{ $profile->referral_id }}</td>
                    <td>{{ \Carbon\Carbon::parse($profile->updated_at)->format('F') }}</td>
                    <td> <a href="{{ route('admin.take_payment', $profile->id) }}"> Aprove </a></td> --}}

                </tr>
            @endforeach
        </table>











    </div>
@endsection
