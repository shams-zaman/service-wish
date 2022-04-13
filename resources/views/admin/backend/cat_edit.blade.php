@extends('layouts.backend.app')
@section('content')
    <div class="row">
        <div class="card border-0 col-lg-4  offset-lg-1  shadow">
            <div class="card-body">
                <div class=" border-bottom pb-2">
                    <div class=" align-items-center">
                        <h5>
                            <ul>Category</ul>
                        </h5>
                    </div>
                    <form method="POST" action="{{ route('admin.cat.update', $cat->id) }}">
                        @csrf
                        <table class="table">
                            <tr>
                                <td> <input type="text" name="cat_name" class="form-control"
                                        value="{{ $cat->cat_name }}">
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="  btn btn-dark">Update</button>
                                </td>
                            </tr>
                        </table>
                        {{-- @method('put') --}}
                        <div class="d-flex align-items-center justify-content-between">
                        </div>



                </div>

                </form>


            </div>
        </div>

    </div>
@endsection

<!-- Button Modal -->
{{-- <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal"
    data-target="#modal-default">Default</button> --}}
<!-- Modal Content -->

<!-- End of Modal Content -->
