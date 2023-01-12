@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')
<section class="h-100 gradient-custom-2 bg-red">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <form method="POST" class="card" action="{{route('Profile.update',Auth::id())}}">
                    @csrf
                    @method('PUT')
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img  alt="Upload image by clicking the bar below and fill in the rest of your profile" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                            <input id="image" type="file" class="img-fluid img-thumbnail mt-4 mb-2 form-control @error('image') is-invalid @enderror" value="---" style="width: 150px; z-index: 1" name="image" autofocus>
                            <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                Save Profile
                            </button>


                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" required autofocus>
                            <br>
                            <input id="country" type="text" name="country" value="{{ Auth::user()->country }}" required autofocus>
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-end text-center py-1">
                            <div>
                                <p class="mb-1 h5">{{ Auth::user()->created_at->format('d/m/y') }}</p>
                                <p class="small text-muted mb-0">Date of creation</p>
                            </div>
                            <div class="px-3">
                                <input id="Birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ Auth::user()->birthday}}" required autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p class="small text-muted mb-0">Birthday</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4 text-black">
                        <div class="mb-5">
                            <p class="lead fw-normal mb-1">About me</p>
                            <div class="p-4" style="background-color: #f8f9fa;">
                                <textarea class="font-italic mb-1" name="bio" id="bio" cols="85" rows="20">{{ Auth::user()->about_me }}</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection