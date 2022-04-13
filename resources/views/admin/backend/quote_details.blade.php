@extends('layouts.backend.app')
@section('content')
    <div class=" col-md-6 offset-lg-2 col-xxl-6 mb-4">
        <div class="card notification-card border-0 shadow">
            <div style="padding-bottom:.2rem;" class="card-header d-flex justify-content-between">

                <h4 class="fs-5 fw-bold mb-0">{{ $sp->ag_name }}</h4>
                <div>

                    <span style="margin: 0;padding:0;" class="fs-5 fw-bold mb-0">{{ $req->name }},
                        ({{ $req->mobile }})</span><br>
                    <span style="margin: 0;padding:0;" class="fs-5 fw-bold mb-0">{{ $req->email }}</span><br>
                    <span style="margin: 0;padding:0;" class="fs-5 fw-bold mb-0">{{ $req->mobile }}</span><br>
                </div>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush list-group-timeline">
                    <div class="list-group-item border-0">
                        <div class="row ps-lg-1">
                            <div class="col-auto">

                            </div>
                            <div class="col ms-n2 mb-3">
                                <h6 class="fs-6 fw-bold mb-1">{{ $service->title }}</h6>
                                <p class="mb-1">{{ $req->desc }}</p>
                                <div class="d-flex align-items-center"><span
                                        class="small">{{ $req->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <form action="{{ route('admin.quote_assign', $req->id) }}" method="POST">
                    @csrf
                    <button type="submit" class=" border-danger btn btn-scondary">Assign</button>
                </form>
            </div>

        </div>
    </div>
@endsection
