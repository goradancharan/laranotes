@extends('User.UserLayout.main')
@section('title')
    Index
@endsection

@section('mainsection')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>To install Laravel,</strong> follow these steps:</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        {{-- <div class="card-header">
                            <h5 class="card-title mb-0">Overview of Laravel</h5>
                        </div> --}}
                        <div class="card-body">

                            <strong>Step 1: Check Prerequisites.</strong>
                            
                            <p class="mx-3">Make sure php already install and its Local Development Environment is working (XAMP).</p>
                            
                            <strong>Step 2: Install composer For managing dependencies.</strong>
                            
                            <p class="mx-3">You can download composer from below the link.<br><a href="https://getcomposer.org" target="blank"><i class="align-middle me-2" data-feather="link-2"></i> <span class="align-middle">https://getcomposer.org</span></a></p>

                            <p class="mx-3">After installing Composer, you can verify that it was successfully installed by running the following command in command prompt as showing in screenshot.</p>
                           <p> <i class="align-middle me-2" data-feather="terminal"></i><span class="align-middle">composer</span></p>
                            <img class="mb-3" src="{{url('img/photos/composer.jpg')}}" alt="composer"></img>
                            
                           <br> <strong>Step 3: Install laravel.</strong>
                            <p class="mx-3">To install Laravel globally via Composer use the following command in htdocs:</p> 
                            <p> <i class="align-middle me-2" data-feather="terminal"></i><span class="align-middle">composer global require laravel/installer</span></p>
                            <img class="mb-3" src="{{url('img/photos/laravelinstall.png')}}" alt="laravelinstall"></img>
                            <p class="mx-3">After installation of laravel you can create your own laravel project and develop it.</p> 

                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </main>
@endsection

@section('Script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection


