<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app') 

@section('content')
    <!-- Header-->
    <header class="bg-black bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">About</h1>
            <hr>
            <p class="lead">
                On this page you will find the about page with a link to the Github of this projects and various other links to the used sources 
                <br>
                <br>
                One of the links leads to the github of another person Sander De Pauw, this is since the code for the 'FAQ.createwithID' route 
                was provided by him. 
                I have full consent to use that part of his code which is why I left the name of the route the same as his.
                <br>
                <br>
                As a sidenote I would like to thank Sander for his willingess to help me a couple of times when I didn't understand or see the error in my code
            </p>
        </div>
    </header>
    <!-- About section-->
    <section class="bg-black" id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8 text-white">
                    <h2>Sources</h2>
                    <a href="https://canvas.ehb.be/courses/30473/files/1995095?module_item_id=421304">Initial setup of laravel project</a>
                    <br>
                    <br>
                    <a href="https://startbootstrap.com/">Free bootstrap templates which were used to make the home page and reused for most other pages</a>
                    <br>
                    <br>
                    <a href="https://startbootstrap.com/template/business-frontpage">The exact bootstrap css that is used on this website</a>
                    <br>
                    <br>
                    <a href="https://laracasts.com/series/laravel-8-from-scratch">Basic thinks like creating routes and views to database connection</a>
                    <br>
                    <br>
                    <a href="https://laravel.com/docs/8.x/installation">Link to the Laravel documentation which was used extensively in this project</a>
                    <br>
                    <br>
                    <a href="https://ehb.instructuremedia.com/embed/edeb8a9e-3e8f-4af3-85f9-8be5ae754e7d">Tutorial to create a guestbook provided by Kevin Felix in the course Backend web</a>
                    <br>
                    <br>
                    <a href="https://www.youtube.com/watch?v=h9XAs14d63A&t=72s">Tutorial that some elements were used from to help create the admin page and admin validation</a>
                    <br>
                    <br>
                    <a href="https://laravel.com/docs/9.x/authentication">For login, register, logout and remember me, the template was given by laravel</a>
                    <br>
                    <br>
                    <a href="https://laravel.com/docs/8.x/eloquent-relationships">Eloquent ORM, used this to understand the Hasmany logic and database eloquent-relationships</a>
                    <br>
                    <br>
                    <a href="https://github.com/SanderDP/bw_Sander_DePauw_laravel">Link to the GitHub of Sander De Pauw which was used to create the 'createwithID' route. (permission was given in discord)</a>
                    <br>
                    <br>
                    <a href="https://www.php.net/manual/en/function.strtotime.php">PHP string to time feature to format the updated_at and created_at</a>
                    <br>
                    <br>
                    <a href="https://w3codegenerator.com/code-snippets/laravel/display-success-message-in-laravel">Site that was used to help with the displaying of sucess messages</a>
                    <br>
                    <br>
                    <a href="https://devdojo.com/bobbyiliev/how-to-rollback-database-migrations-in-laravel">Rolling back migrations</a>
                    <br>
                    <br>
                    <a href="https://github.com/MatsMardaga/TribeLand">Link to TribeLand Github</a>
                    <br>
                    <br>
                    <a href="https://www.youtube.com/watch?v=FbARge88vjk">Seeding database</a>
                </div>
            </div>
        </div>
@endsection
