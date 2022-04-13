@extends('layouts.backend.app')
@section('content')
    <div class="row">
        <div class="card border-0 col-lg-4  offset-lg-1  shadow">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>
                            <ul>Category</ul>
                        </h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-block btn-secondary mb-3 " data-toggle="modal"
                            data-target="#modal-default"><b>Create +</b></button>
                    </div>

                </div>
                <table class="table">

                    @foreach ($cats as $cat)
                        <tr>
                            <td>{{ $cat->cat_name }}</td>
                            <td style="width: 10%">
                                <a href="{{ route('admin.cat.edit', $cat->id) }}">
                                    <span class="fas fa-edit"></span>
                                </a>


                            </td>
                            <td style="width: 10%"><span style="color: rgba(172, 0, 0, 0.637)"
                                    class="fas fa-trash-alt"></span></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card border-0 col-lg-4 offset-lg-1  shadow">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>
                            <ul>Tags</ul>
                        </h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-block btn-secondary mb-3 " data-toggle="modal"
                            data-target="#modal-default-tag"><b>Create +</b></button>
                    </div>
                </div>
                <table class="table">

                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag_name }}</td>
                            <td style="width: 10%">
                                <a href="{{ route('admin.tag.edit', $tag->id) }}">
                                    <span class="fas fa-edit"></span>
                                </a>
                            </td>
                            <td style="width: 10%"><span style="color: rgba(172, 0, 0, 0.637)"
                                    class="fas fa-trash-alt"></span></td>
                        </tr>
                    @endforeach
                </table>
            </div>
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
    <div class="modal fade" id="modal-default-tag" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true"
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
                    <form action="{{ route('admin.tag.create') }}" method="POST">
                        @csrf
                        <label for="cat_name"> Enter New Tag</label>
                        <input class="form-control" type="text" name="tag_name">

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
