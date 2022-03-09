@extends('layouts.backend.app')
@section('content')
    <center>
        <ul>
            <li>
                Name: <b><u>
                        <h4>{{ $user->ag_name }}</h4>
                    </u></b><br>
                ({{ $user->address }}) <br>
                <h5 style="margin: 1.2rem">Mobile: {{ $user->mobile }}</h5>
                <br>
                <p>
                    <b>
                        <h5> About us:</h5>
                    </b>
                <p style="margin: 1rem; text-align:left">{{ $user->desc }}</p>
                </p>
            </li>
        </ul>
        <br>
        <br>
        <br>
        <a class="btn btn-success" href="{{ route('admin.agency-approve', $user->user->id) }}">Approve </a>
    </center>
@endsection
