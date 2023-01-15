<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')
@section('content')
    <!--Section: Contact v.2-->
    <section class="mb-4 container">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->

        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
            directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">


            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5 justify-content-center container">
                <!--used to show message when contact form is sent-->
                <form id="contact-form" name="contact-form" method="POST" action="{{ route('Contact.store') }}">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ Auth::user()->name }}">
                                <label for="name" class="">Name</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ Auth::user()->email }}">
                                <label for="email" class="">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject"
                                    class="form-control @error('subject') is-invalid @enderror">
                                <label for="subject" class="">Subject</label>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="10"
                                    class="form-control md-textarea @error('message') is-invalid @enderror"></textarea>
                                <label for="message">Message</label>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                    <div class="text-center text-md-left">
                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                    </div>

                </form>


                <div class="status"></div>
            </div>
        </div>
        <br>
        <div class="col-md-3 container justify-content-center">
            <p class="text-center">TribeLand Belgium</p>
            <p class="text-center">+32 471 783 306</p>
            <p class="text-center">mats.mardaga@gmail.com</p>


        </div>

    </section>
@endsection
