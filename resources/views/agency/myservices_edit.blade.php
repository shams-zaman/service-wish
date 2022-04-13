@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card border-0 col-lg-4  offset-lg-1  shadow">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <h5>
                        <ul>My Services</ul>
                    </h5>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button type="button" class="btn btn-block btn-secondary mb-3 " data-toggle="modal"
                        data-target="#modal-default"><b>Create +</b></button>
                </div>

            </div>
            <table class="table">

                @foreach ($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td><img style="width: 85%;height:auto" src="{{ $service->image }}" alt=""></td>
                    <td style="width: 10%">
                        <a href="{{ route('agency.service.edit', $service->id) }}">
                            <span class="fas fa-edit"></span>
                        </a>


                    </td>
                    <td style="width: 10%"><span style="color: rgba(172, 0, 0, 0.637)" class="fas fa-trash-alt"></span>
                    </td>
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
                <form action="{{ route('agency.services.update',$service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="service_name"> Enter New Tag</label>
                    <input class="form-control mb-2" value="{{$service->title}}" type="text" name="service_name"
                        required>
                    <label for="service_pic"> Enter New Tag</label>
                    <input class="form-control" type="file" name="service_pic">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn  btn-primary">Submit</button>
                </form>

                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    $(document).ready(function(){
        $("#modal-default").modal('show');
    });
</script>

@endpush
@endsection

<!-- Button Modal -->
{{-- <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal"
    data-target="#modal-default">Default</button> --}}
<!-- Modal Content -->

<!-- End of Modal Content -->