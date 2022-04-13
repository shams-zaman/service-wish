@extends('layouts.backend.app')
@section('content')
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
            integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* .ck-editor__editable_inline {
                                        min-height: 800px; */

        </style>
    @endpush
    <div class="row">
        <div class="col-12  mb-4">



            <div style="width: 100%" class="card  border-0 shadow components-section">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.blog_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-5   col-sm-6">
                                <div class="mb-1">
                                    <label for="desc"> Add Description</label>
                                    <textarea style="min-height: 900px" class="form-control ck-editor__editable ck-editor__editable_inline" name="desc"
                                        id="editor" cols="20"
                                        rows="10">Heloo
                                                                                                                                                                                                                                                                                                                                                                                              </textarea>
                                </div>

                                <div id="" class="mb-3 {{ $errors->has('cat') ? 'focused error' : '' }}">
                                    <label class="my-1 me-2" for="">Select
                                        Category</label>
                                    <select class="form-select" id="category" name="cat[]" aria-label="">
                                        @foreach ($cats as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->cat_name }} </option>
                                        @endforeach

                                    </select>
                                </div>



                            </div>
                            <div class="col-lg-5 offset-lg-1  col-sm-6">
                                <div class="mb-3"><label for="Name">Blog Title</label> <small style=""
                                        id="emailHelp" class="form-text text-danger  text-muted">** to be unique.</small>
                                    <input type="text" name="title" class="form-control" id="ag_name"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 {{ $errors->has('tag') ? 'focused error' : '' }} ">
                                    <label class="my-1 me-2" for="">Select
                                        Tags</label>
                                    <select id="tag" class="form-select" id="" name="tag[]" aria-label="">
                                        @foreach ($tags as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->slug }} </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="mb-3"><label for="formFile" class="form-label">Default file
                                        input example</label> <input class="form-control" name="blog_cover_img"
                                        type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-2">

                            {{-- <div id="editor"></div> --}}
                        </div>
                        <div class="row mb-1">
                            <button style="width: 30%" class="btn btn-secondary offset-lg-4">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('assets/plugins/ckeditor.js') }}"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
                integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('#category').select2({
                placeholder: 'Select an option',
                multiple: true,
            });
        </script>
        <script>
            $('#tag').select2({
                placeholder: 'Select an option',
                multiple: true,
            });
        </script>
    @endpush
@endsection
