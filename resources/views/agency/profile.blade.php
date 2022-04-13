@extends('layouts.backend.app')
@section('content')
<div class="card col-lg-8 offset-lg-2 shadow p-4">
    <div class="card-header d-flex align-items-center justify-content-between border-0 p-0 mb-3">
        <div class="d-flex flex-row">
            <div class="p-2">
                <h2>{{ $profile->ag_name }}</h2>
            </div>

        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p-2">{{ $profile->mobile }}</div>
            <div class="p-2">{{ $profile->address }},{{ $profile->zip }}</div>
            {{-- <div class="p-2">{{ $profile->zip }}</div> --}}
        </div>


    </div>
    <div class="card-body p-0">
        <div class="card-img-top">
            <img style="width: 70% ; height: auto ;" src="{{ $profile->image }}" class="card-img-top w-60 mb-1 mb-lg-2"
                alt="themesberg marketplace">

        </div>

        <b>
            <h4>Description:</h4>
        </b>
        <p>{{ $profile->desc }}
        </p>
        <div class="card-header d-flex align-items-center justify-content-between border-0 p-0 mb-3">

            <div class="d-flex flex-row">
                <h5 class="fs-6 fw-normal mt-4">Services:</h5>
            </div>

            <div class="d-flex flex-row">
                <button type="button" class="btn btn-block btn-secondary mb-3 " data-toggle="modal"
                    data-target="#modal-default"><b>Create a Service</b></button>
            </div>
        </div>


        @if ($profile->services->count() <1) <div>NO services has been added
    </div>
    @else
    <ul style="list-style: none" class="d-flex">
        @foreach ($profile->services as $item)
        <li class="list-item p-1"><img style="width: 80%" src="{{ $item->image }}" alt=""><br>
            {{$item->title}}
        </li>
        @endforeach


    </ul>
    @endif

    <a href="{{ route('agency.profile_edit', $profile->id) }}" class="btn  btn-warning"> Edit <span><i
                class="fas fa-edit"></i></span></a>

</div>
</div>


<!-- Carousel wrapper -->
{{-- Modal? --}}
<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Terms of Service</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('agency.services.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="service_name"> Enter New Category</label>
                    <input name="service_name" class="form-control @error('service_name') is-invalid @enderror"
                        type="text" required>
                    <label for="service_pic"> Enter New Tag</label>
                    <input name="service_pic" class="form-control @error('service_pic') is-invalid @enderror"
                        type="file" required>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn  btn-primary">Submit</button>
                </form>

                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection