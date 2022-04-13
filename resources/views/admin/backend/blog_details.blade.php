@extends('layouts.backend.app')
@section('content')
    <div class="card pb-1 mb-2">
        <div class="container">
            <div style="center" class="row ">
                <h3 class="ml-2">{{ $blog->title }}</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="d-flex">
                        <li> <b><u> Categories Are:</u></b></li>
                        @foreach ($bcats as $item)
                            <li class="ml-4 pl-2">{{ $item->cat_name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="d-flex">
                        <li> <b><u> Tags :</u></b></li>
                        @foreach ($btags as $item)
                            <li class="ml-4 pl-2">{{ $item->tag_name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-2 pb-2">
        <div class="container">
            <div class="row">
                <h3><u>Details:</u></h3><br>
                <p>{{ strip_tags($blog->desc) }}</p>
            </div>

        </div>
    </div>
    <br>

    <a href="{{ route('admin.blog-edit', $blog->id) }}" class="btn pl-4 ml-4 btn-warning">Edit</a>
@endsection
