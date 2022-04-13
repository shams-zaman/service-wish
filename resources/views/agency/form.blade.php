@extends('layouts.backend.app')
@section('content')
    @if (auth()->user()->is_updated == true)
        <center>
            <h2> Your Profile is Completed </h2> <br>
            <a href="{{ route('agency.dashboard') }}"><b><u> Go to</u></b></a> you the Next Step
        </center>
    @elseif(auth()->user()->type == 'user')
        <center>
            <h1 class="m-4 p-3">
                You are Not permitted to access the Agency Page

            </h1>
        </center>
    @else
        <div class="row">
            <div class="col-12  mb-4">

                <div class="d-flex justify-content-center flex-row bd-highlight mb-3">
                    <div style="color: grey" class="p-2 bd-highlight">Step-1 </div>
                    <div class="p-2 btn-dark bd-highlight">Step 2</div>
                    <div style="color: grey" class="p-2 bd-highlight">Step 3</div>
                </div>
                <hr>

                <div style="width: 100%" class="card  border-0 shadow components-section">
                    <div class="card-body">
                        <form method="POST" action="{{ route('agency-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-5   col-sm-6">
                                    <div class="mb-3"><label for="Name">Agency Name</label> <small id="emailHelp"
                                            class="form-text  text-muted">** to be unique.</small>
                                        <input type="text" name="ag_name" class="form-control" id="ag_name"
                                            aria-describedby="emailHelp">
                                        @error('ag_name')
                                            <div style="color: red" class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputIconLeft">Address</label>
                                        <div class="input-group"><input name="address" type="text" class="form-control"
                                                id="exampleInputIconLeft" placeholder="Address" aria-label="address">
                                            @error('address')
                                                <div style="color: red" class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="exampleInputIconLeft">Address</label>
                                        <div class="input-group"><input name="address" type="text" class="form-control"
                                                id="exampleInputIconLeft" placeholder="Address" aria-label="address">
                                            @error('address')
                                                <div style="color: red" class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="exampleInputIconRight">Zip</label>
                                        <div class="input-group"><input type="text" class="form-control" name="zip"
                                                id="exampleInputIconRight" placeholder="zip" aria-label="zip">
                                            @error('zip')
                                                <div style="color: red" class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1  col-sm-6">
                                    <div class="mb-3">
                                        <label class="my-1 me-2" for="cat">Select
                                            Category</label>
                                        <select class="form-select" id="" name="cat" aria-label="">
                                            @foreach ($cats as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->cat_name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3"><label for="disabledTextInput">Mobile</label>
                                        <input type="number" id="mobile" class="form-control" name="mobile"
                                            placeholder="mobile No:">
                                        @error('mobile')
                                            <div style="color: red" class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3"><label for="formFile" class="form-label">Default file
                                            input example</label> <input class="form-control" name="sp_cover_img"
                                            type="file" id="formFile">
                                        @error('sp_cover_img')
                                            <div style="color: red" class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row  mb-2">
                                <div class="mb-1">
                                    <label for="desc"> Add Description</label>
                                    <textarea class="form-control" name="desc" id="about_agency" cols="20" rows="5">Heloo  </textarea>
                                    @error('sp_cover_img')
                                        <div style="color: red" class="error">{{ $message }}</div>
                                    @enderror


                                </div>
                            </div>
                            <div class="row mb-1">
                                <button style="width: 30%" class="btn btn-secondary offset-lg-4">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
