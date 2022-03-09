@extends('layouts.backend.app')
@section('content')
    <div class="card border-0 col-lg-4 offset-lg-4  shadow">
        {{-- <div class="card-header"><span class="btn btn-dark">Create</span></div> --}}
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                <div>
                    <button type="button" class="btn btn-block btn-secondary mb-3 " data-toggle="modal"
                        data-target="#modal-default"><b>Create +</b></button>

                </div>

            </div>
            @foreach ($cats as $cat)
                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                    <div>
                        <div class="h6 mb-0 d-flex align-items-center">
                            {{ $cat->cat_name }}</div>
                    </div>
                    <div><a href="#" class="d-flex  align-items-center fw-bold"> <span
                                class="btn btn-sm btn-dark">Delete</span>
                        </a>
                    </div>

                </div>
            @endforeach



        </div>
    </div>
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
                    <form action="{{ route('admin.cat.create') }}" method="POST">
                        @csrf
                        <label for="cat_name"> Enter New Category</label>
                        <input class="form-control" type="text" name="cat_name">

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

<!-- Button Modal -->
{{-- <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal"
    data-target="#modal-default">Default</button> --}}
<!-- Modal Content -->

<!-- End of Modal Content -->
