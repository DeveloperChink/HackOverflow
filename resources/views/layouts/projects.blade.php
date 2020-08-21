@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{-- jumbotron --}}
        <div class="jumbotron">
            <div class="text-center text-responsive" style="font-size: 48px; font-weight:bold; color: #003E6B;">
                Lorem ipsum dolor amet
            </div>
            <div class="text-center mb-5 text-responsive" style="font-size: 24px; color: #2680C2;">
                Lorem ipsum dolor amet
            </div>
        </div>

        {{-- categories --}}
        <div class="row d-flex justify-content-center">
            <div class="categories-group col-lg-2 col-md-2 col-sm-2 col-2 mr-4 pt-5 pb-1 bg-white shadow-sm" style="border-radius: 20px;">
                <div style="font-weight: bold;">
                    <br>
                    All
                </div>
            </div>
            <div class="categories-group col-lg-2 col-md-2 col-sm-2 col-2 mr-4 pt-5 pb-1  shadow-sm" style="border-radius: 20px; background-color: #003E6B;">
                <div>
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.8056 8.41415L22.8627 7.47123C22.6023 7.21081 22.1802 7.21081 21.9198 7.47123L21.4485 7.94248L20.2444 6.73831C20.4789 5.8504 20.2594 4.86748 19.5631 4.17123L17.6777 2.28581C15.0744 -0.31752 10.8531 -0.31752 8.24936 2.28581L12.0206 4.17123V4.95248C12.0206 5.65956 12.3014 6.3379 12.8019 6.8379L14.8494 8.8854C15.5456 9.58165 16.5285 9.80123 17.4164 9.56665L18.6206 10.7708L18.1494 11.2421C17.8889 11.5025 17.8889 11.9246 18.1494 12.185L19.0923 13.1279C19.3527 13.3883 19.7748 13.3883 20.0352 13.1279L23.8064 9.35665C24.066 9.09665 24.066 8.67456 23.8056 8.41415ZM11.8589 7.78081C11.7048 7.62665 11.5739 7.45623 11.4485 7.2829L0.819355 17.2066C-0.246062 18.2016 -0.274812 19.8812 0.755605 20.9121C1.78602 21.9429 3.46602 21.9141 4.46102 20.8483L14.3831 10.2204C14.2181 10.0991 14.0539 9.97581 13.9064 9.82831L11.8589 7.78081Z" fill="white"/>
                    </svg>             
                </div>
                <div class="text-white" style="font-weight: bold;">
                    Infastructure
                </div>  
            </div>
            <div class="categories-group col-lg-2 col-md-2 col-sm-2 col-2 mr-4 pt-5 pb-1 shadow-sm" style="border-radius: 20px; background-color: #003E6B;">
                <div>
                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.4 8.79967H18C17.5455 8.79967 17.1296 9.05655 16.9264 9.46305L15.9311 11.4539L13.158 1.28392C13.0121 0.750297 12.5183 0.380547 11.9674 0.400422C11.4135 0.415797 10.9425 0.806922 10.8263 1.34842L8.2335 13.4489L7.15388 9.66967C7.0065 9.1548 6.53588 8.79967 6 8.79967H0.6C0.2685 8.79967 0 9.06817 0 9.39967V10.5997C0 10.9312 0.2685 11.1997 0.6 11.1997H5.09475L7.2465 18.7293C7.39425 19.2457 7.866 19.5993 8.39963 19.5993C8.41313 19.5993 8.427 19.5993 8.4405 19.5985C8.99063 19.5798 9.45825 19.189 9.57375 18.6505L12.1403 6.67305L14.4424 15.115C14.5064 15.3494 14.6401 15.5589 14.8257 15.7157C15.0113 15.8725 15.2401 15.9693 15.4819 15.9933C15.9754 16.0383 16.4509 15.7799 16.6736 15.3359L18.7418 11.1997H23.4C23.7315 11.1997 24 10.9312 24 10.5997V9.39967C24 9.06817 23.7315 8.79967 23.4 8.79967Z" fill="white"/>
                    </svg>                          
                </div>
                <div class="text-white" style="font-weight: bold;">
                    Healthcare
                </div>
            </div>
            <div class="categories-group col-lg-2 col-md-2 col-sm-2 col-2 mr-4 pt-5 pb-1 shadow-sm" style="border-radius: 20px; background-color: #003E6B;">
                <div>
                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.9629 18.4688L19.2296 0.794167C19.0917 0.279167 18.5671 -0.1325 17.9229 0.04L17.2792 0.2125C17.0217 0.281667 16.7988 0.479167 16.61 0.805833C16.0254 1.095 14.4308 1.52292 13.7767 1.565C13.45 1.37625 13.1579 1.31667 12.9004 1.38583L12.2563 1.55833C12.1554 1.58542 12.0813 1.63958 12 1.68667V1.33333C12 0.597083 11.4029 0 10.6667 0H8C7.26375 0 6.66667 0.597083 6.66667 1.33333V4H12L16.2358 20.5392C16.3738 21.0542 16.8983 21.4658 17.5425 21.2933L18.1863 21.1208C18.4438 21.0517 18.6667 20.8542 18.8554 20.5275C19.435 20.2408 21.0296 19.8108 21.6888 19.7683C22.0154 19.9571 22.3075 20.0167 22.565 19.9475L23.2092 19.775C23.8529 19.6025 24.1012 18.9838 23.9629 18.4688ZM18.3629 18.1746L14.5267 3.84875L17.1025 3.15875L20.9388 17.4846L18.3629 18.1746ZM0 16H5.33333V5.33333H0V16ZM4 0H1.33333C0.597083 0 0 0.597083 0 1.33333V4H5.33333V1.33333C5.33333 0.597083 4.73625 0 4 0ZM0 20C0 20.7362 0.597083 21.3333 1.33333 21.3333H4C4.73625 21.3333 5.33333 20.7362 5.33333 20V17.3333H0V20ZM6.66667 16H12V5.33333H6.66667V16ZM6.66667 20C6.66667 20.7362 7.26375 21.3333 8 21.3333H10.6667C11.4029 21.3333 12 20.7362 12 20V17.3333H6.66667V20Z" fill="white"/>
                    </svg>          
                </div>
                <div class="text-white" style="font-weight: bold;">
                    Education
                </div>
            </div>
        </div>

        {{-- search --}}
        <div class="container" id="project-search-container">
            <div class="d-flex">
                <div class="mr-auto ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                             <span class="input-group-text bg-white" id="basic-addon1" style="border: none;">
                                <i class="fa fa-search" style="color:#003E6B;"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search project" style="border:none;">
                    </div>
                </div>
                <div class="">
                    <div class="form-group ml-2">
                        <select class="form-control" id="sel1" style="border:none;">
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="form-group ml-2">
                        <select class="form-control" id="sel1" style="border:none;">
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="form-group ml-2">
                        <select class="form-control" id="sel1" style="border:none;">
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                          <option>test</option>
                        </select>
                    </div>
                </div>
              </div>
        </div>

        {{-- project list --}}
        <div class="container">
            <div class="row d-flex justify-content-center">
                {{-- project box --}}
                <x-project-box />         
                {{-- project box --}}
                <x-project-box />
                {{-- project box --}}
                <x-project-box />
                {{-- project box --}}
                <x-project-box />
                {{-- project box --}}
                <x-project-box />
                {{-- project box --}}
                <x-project-box />
            </div>
        </div>

        {{-- pagination --}}
        <div class="container mt-3">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
@endsection