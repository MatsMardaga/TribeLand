@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')
<section class="h-100 gradient-custom-2 bg-red">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                            <a href="{{route('Profile.edit', Auth::id())}}" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">Edit profile</a>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5>{{ Auth::user()->name }}</h5>
                            <p>{{ Auth::user()->country }}</p>
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-end text-center py-1">
                            <div>
                                <p class="mb-1 h5">{{ Auth::user()->created_at->format('d/m/y') }}</p>
                                <p class="small text-muted mb-0">Date of creation</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-1 h5">{{ date("j F, Y", strtotime(Auth::user()->birthday)) }}🎊</p>
                                <p class="small text-muted mb-0">Birthday</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4 text-black">
                        <div class="mb-5">
                            <p class="lead fw-normal mb-1">About me</p>
                            <div class="p-4" style="background-color: #f8f9fa;">
                                <p class="font-italic mb-1">
                                    {{ Auth::user()->about_me }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection