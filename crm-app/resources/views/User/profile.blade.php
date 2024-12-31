@extends('layout.app')
@section('content')
@include('shares.success')
<div class="container py-4">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="px-3 pt-4 pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{Auth::user()->name}}" alt="Mario Avatar">
                            <div>
                                <h3 class="card-title mb-0"><a href="#"> {{Auth::user()->name}}
                                    </a></h3>
                                <span class="fs-6 text-muted">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 mt-4">
                        <div class="d-flex justify-content-start">
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                                </span> 120 Followers </a>
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                                </span> 2 </a>
                            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                                </span> 2 </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </div>
</div>

@endsection