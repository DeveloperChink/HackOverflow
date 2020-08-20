<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 3</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Script --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="app">
        @include('partials.nav')
        <div class="container-fluid pb-5" style="background-color: #DCEEFB">
            <div class="container">

                {{-- back button --}}
                <div class="pt-3" style="font-size: 16px;">
                    <a href="" class="text-dark text-center">
                        <i class="fa fa-chevron-left"></i> 
                        Back to all projects
                    </a>
                </div>

                <div class="pt-3" style="font-size: 32px;">Overview</div>
                {{-- jumbotron --}}
                <div class="row p-4 mt-3 d-flex align-items-center text-center" style="background-color: #0F609B; border-radius: 20px;">
                    <div class="col-lg-4 col-sm-12">
                        <div class="page-3-title">Project Name</div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="page-3-desc mr-3">Project X</div>
                            <div class="pt-1 pb-1 pr-2 pl-2" style="font-size: 16px; border-radius: 100px; background-color: #FCEFC7;">
                                <span class="h6" style="color:#C99A2E;">Pending</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="page-3-title">Site Location</div>
                        <div class="page-3-desc">Location X</div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="page-3-title">Value</div>
                        <div class="page-3-desc">P xxx,xxx,xxx</div>
                    </div>
                
                </div>

                {{-- implementing agency and etc --}}
                <div class="row d-flex mt-4 justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Implementing Agency</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">Agency X</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Development Partner</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">Partner X</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div style="color:#829AB1;">Contractor</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">Contractor X</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 ml-auto">
                        <div style="color:#829AB1;">Implementation Date</div>
                        <div class="h3" style="color:#334E68; font-size: 24px;">August 21, 20XX</div>
                    </div>
                </div>

                {{-- description --}}
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="text-justify" style="color:#829AB1;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </div>
                    </div>
                </div>

                {{-- blockchain information --}}
                <div class="font-weight-bold mt-4" style="font-size: 24px; color:#334E68;">Blockchain Information</div>
                <div class="row pt-3">
                    <div class="col-lg-6 col-sm-12 ">
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Transaction Hash</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">0001 XXXX XXXX XXXX</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Published</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">August 21, 20XX</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Contract Number</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">0001 XXXX XXXX XXXX</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Block Number</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">0001 XX</div>
                        <div style="font-size: 16px; color: #334E68; font-weight: bold;">Signed Contract</div>
                        <div class="mb-2" style="font-size: 16px; color: #334E68;">0001 XX</div>
                    </div>
                    <div class="col-lg-6 col-sm-12 embed-responsive embed-responsive-21by9">
                        <iframe style="border-radius: 15px; class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.843835200221!2d123.90888391479719!3d10.354368992608785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99894d1b6ae25%3A0xc2d9b9e99316c59d!2sUniversity%20of%20San%20Carlos!5e0!3m2!1sen!2sph!4v1597951698190!5m2!1sen!2sph" width="600" height="260" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>

                {{-- satisfaction box --}}
                <div class="row mt-5">
                    <div class="mx-auto col-lg-8 col-sm-12 bg-white text-center p-5" style="border-radius: 20px;">
                        <div style="color: #486581; font-size: 24px;">
                            Are you happy with this project?
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="">
                                <i class="fa fa-smile-o fa-3x mr-3" aria-hidden="true" style="color:#0F609B;"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-frown-o fa-3x" aria-hidden="true" style="color:#0F609B;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

{{-- 3rd page
first component:project details
    -project name
    -description
    -implementing agency/ies
    -development partner
    -contractor/supplier
    -status(ongoing/finished/pending)
second component: blockchain details
    -transaction id(fake hash)
    -published, block number, contract index, signed contract
third component: location
    -maps --}}