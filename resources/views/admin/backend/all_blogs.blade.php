@extends('layouts.backend.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2">
        <div class="d-block mb-2 mb-md-0">

            <h2 class="h4 mb-2">All Orders</h2>
            <a href="{{ route('admin.blog-create') }}">
                <span class="btn btn-secondary mb-1">Create</span>
            </a>

        </div>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
            </div>
        </div> --}}
    </div>

    @livewire('show-posts')
@endsection
