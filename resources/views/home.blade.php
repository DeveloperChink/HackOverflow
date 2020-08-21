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

        {{-- search bar --}}
        <div class=" row justify-content-center">
            {{-- left side --}}
            <div class="col-11 col-lg-7 d-flex col-md-10 col-sm-10 search-bar bg-white shadow-sm">
                <div class="col-6 d-flex align-items-center p-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                             <span class="input-group-text bg-white" id="basic-addon1" style="border: none;">
                                <i class="fa fa-search" style="color:#003E6B;"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search project" style="border:none;">
                    </div>
                </div>
                {{-- right side --}}
                <div class="col-6 d-flex align-items-center" style="border-left:2px solid #D9E2EC;">
                    <div class="pl-4">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 3.99969C16 3.59844 15.7647 3.23688 15.4025 3.08031L8.58125 0.120937C8.21219 -0.0403125 7.78813 -0.0403125 7.41906 0.120937L0.59875 3.07969C0.235312 3.23687 0 3.59844 0 3.99969C0 4.40094 0.235313 4.7625 0.5975 4.91906L3.08812 5.99969L0.598437 7.07969C0.235312 7.23687 0 7.59844 0 8.00031C0 8.40156 0.235313 8.76312 0.5975 8.91969L7.41875 11.8787C7.60199 11.9587 7.79976 12 7.99969 12C8.19781 11.9994 8.39625 11.9594 8.58062 11.8794L15.4009 8.92031C15.7641 8.76312 15.9997 8.40187 15.9997 8.00031C15.9997 7.59844 15.7644 7.23719 15.4022 7.08031L12.9122 5.99969L15.4012 4.91969C15.7647 4.7625 16 4.40094 16 3.99969ZM13.7559 8.00125L8.01656 10.5031L2.24719 7.99969L4.97281 6.81719L7.41906 7.87844C7.6023 7.9584 7.80007 7.99968 8 7.99969C8.19812 7.99906 8.39656 7.95906 8.58094 7.87906L11.0278 6.81719L13.7559 8.00125ZM8.01656 6.50312L2.24719 3.99969L8 1.50344L13.755 4.00062L8.01656 6.50312Z" fill="#003E6B"/>
                        </svg>
                    </div>
                        
                    <div class="form-group btn-block m-3">
                        <select class="form-control" id="sel1" style="border:none;">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                    </div>
                    <div>
                        <div class="col-2 ">
                            <button class="btn text-white" style="background-color:#003E6B;">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- featured projects --}}
        <div class="container text-center" style="font-size: 36px; font-weight: bold; color: #486581;">
            Featured Projects
        </div>
        <div class="container bg-white shadow-sm mt-5 p-5" style="border-radius: 20px;">
            {{-- row --}}
            <div class="row d-flex align-items-start pb-5 mb-5" style="border-bottom: 2px solid #D9E2EC;">

                {{-- icon --}}
                <div class="col-lg-1 p-1 col-md-12 col-sm-12">
                    <div class="text-center p-3" style="background-color:#003E6B; border-radius: 10px;">
                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.8055 8.41415L22.8626 7.47123C22.6022 7.21081 22.1801 7.21081 21.9197 7.47123L21.4485 7.94248L20.2443 6.73831C20.4789 5.8504 20.2593 4.86748 19.563 4.17123L17.6776 2.28581C15.0743 -0.31752 10.853 -0.31752 8.24929 2.28581L12.0205 4.17123V4.95248C12.0205 5.65956 12.3014 6.3379 12.8018 6.8379L14.8493 8.8854C15.5455 9.58165 16.5285 9.80123 17.4164 9.56665L18.6205 10.7708L18.1493 11.2421C17.8889 11.5025 17.8889 11.9246 18.1493 12.185L19.0922 13.1279C19.3526 13.3883 19.7747 13.3883 20.0351 13.1279L23.8064 9.35665C24.066 9.09665 24.066 8.67456 23.8055 8.41415ZM11.8589 7.78081C11.7047 7.62665 11.5739 7.45623 11.4485 7.2829L0.819294 17.2066C-0.246123 18.2016 -0.274873 19.8812 0.755544 20.9121C1.78596 21.9429 3.46596 21.9141 4.46096 20.8483L14.383 10.2204C14.218 10.0991 14.0539 9.97581 13.9064 9.82831L11.8589 7.78081Z" fill="white"/>
                        </svg>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="" style="font-size: 24px; color: #486581;">
                        Title of the Project
                    </div>
                    <div style="color: #9FB3C8; font-size: 16px;">
                        P 1.5 Million
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    {{-- status --}}
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-lg-6">
                            <div class="ml-2 text-center" style="font-size: 14px;color: #079A82; background-color: #C6F7E9; border-radius: 100px;">
                                Done
                            </div>
                        </div>
                    </div>
                    {{-- site location --}}
                    <div>
                        <div class="row">
                            <div class="col-10 d-flex">
                                <div style="color:#9FB3C8;">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C9.31553 0 12 2.68794 12 6C12 8.22241 11.2503 8.91691 7.27278 15.2945C6.68575 16.2357 5.31359 16.2346 4.72725 15.2945C0.747656 8.91356 0 8.22197 0 6C0 2.68447 2.68794 0 6 0ZM6 14.5C9.982 8.11519 10.5 7.71212 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 7.70478 1.97394 8.04453 6 14.5ZM8.5 6C8.5 4.61928 7.38072 3.5 6 3.5C4.61928 3.5 3.5 4.61928 3.5 6C3.5 7.38072 4.61928 8.5 6 8.5C7.38072 8.5 8.5 7.38072 8.5 6Z" fill="#9FB3C8"/>
                                    </svg>
                                </div>
                                <div class="ml-2 text-center" style="color: #9FB3C8; font-size: 16px;">
                                    Site Location
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-sm-6 col-6">
                    <div class="row pt-3">
                        <div class="ml-auto d-flex align-items-center">
                            <i style="color:#9FB3C8;" class="fa fa-smile-o" aria-hidden="true"></i>
                            <div class="pl-1 mr-1" style="color: #9FB3C8; font-size: 16px;">50+</div>
                            <i style="color:#9FB3C8;" class="fa fa-frown-o" aria-hidden="true"></i>
                            <div class="pl-1" style="color: #9FB3C8; font-size: 16px;">20+</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto d-flex align-items-center">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5161 11.5H6.50227C6.77601 11.5 6.99997 11.275 6.99997 11V8C6.99997 7.725 6.77601 7.5 6.50227 7.5H3.5161C3.24237 7.5 3.0184 7.725 3.0184 8V11C3.0184 11.275 3.24237 11.5 3.5161 11.5ZM12.4746 2H10.9815V0.5C10.9815 0.225 10.7576 0 10.4838 0H9.48845C9.21472 0 8.99075 0.225 8.99075 0.5V2H5.00919V0.5C5.00919 0.225 4.78522 0 4.51149 0H3.5161C3.24237 0 3.0184 0.225 3.0184 0.5V2H1.52531C0.701005 2 0.0322266 2.67188 0.0322266 3.5V14.5C0.0322266 15.3281 0.701005 16 1.52531 16H12.4746C13.2989 16 13.9677 15.3281 13.9677 14.5V3.5C13.9677 2.67188 13.2989 2 12.4746 2ZM12.4746 14.3125C12.4746 14.4156 12.3906 14.5 12.288 14.5H1.71195C1.6093 14.5 1.52531 14.4156 1.52531 14.3125V5H12.4746V14.3125Z" fill="#9FB3C8"/>
                            </svg>
                            <div class="ml-1" style="font-size: 16px; color: #9FB3C8;">May 16, 20XX</div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- new row --}}
            <div class="row d-flex align-items-start pb-5 mb-5" style="border-bottom: 2px solid #D9E2EC;">

                {{-- icon --}}
                <div class="col-lg-1 p-1 col-md-12 col-sm-12">
                    <div class="text-center p-3" style="background-color:#003E6B; border-radius: 10px;">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4 8.79966H18C17.5455 8.79966 17.1296 9.05653 16.9264 9.46303L15.9311 11.4539L13.158 1.28391C13.0121 0.750282 12.5183 0.380532 11.9674 0.400407C11.4135 0.415782 10.9425 0.806907 10.8263 1.34841L8.2335 13.4489L7.15388 9.66966C7.0065 9.15478 6.53588 8.79966 6 8.79966H0.6C0.2685 8.79966 0 9.06816 0 9.39966V10.5997C0 10.9312 0.2685 11.1997 0.6 11.1997H5.09475L7.2465 18.7293C7.39425 19.2457 7.866 19.5993 8.39963 19.5993C8.41313 19.5993 8.427 19.5993 8.4405 19.5985C8.99063 19.5798 9.45825 19.189 9.57375 18.6505L12.1403 6.67303L14.4424 15.115C14.5064 15.3494 14.6401 15.5589 14.8257 15.7157C15.0113 15.8725 15.2401 15.9693 15.4819 15.9933C15.9754 16.0383 16.4509 15.7799 16.6736 15.3359L18.7418 11.1997H23.4C23.7315 11.1997 24 10.9312 24 10.5997V9.39966C24 9.06816 23.7315 8.79966 23.4 8.79966Z" fill="white"/>
                        </svg>
                            
                            
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="" style="font-size: 24px; color: #486581;">
                        Title of the Project
                    </div>
                    <div style="color: #9FB3C8; font-size: 16px;">
                        P 1.5 Million
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    {{-- status --}}
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-lg-6">
                            <div class="ml-2 text-center" style="font-size: 14px;color: #C99A2E; background-color: #FCEFC7; border-radius: 100px;">
                                Pending
                            </div>
                        </div>
                    </div>
                    {{-- site location --}}
                    <div>
                        <div class="row">
                            <div class="col-10 d-flex">
                                <div style="color:#9FB3C8;">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C9.31553 0 12 2.68794 12 6C12 8.22241 11.2503 8.91691 7.27278 15.2945C6.68575 16.2357 5.31359 16.2346 4.72725 15.2945C0.747656 8.91356 0 8.22197 0 6C0 2.68447 2.68794 0 6 0ZM6 14.5C9.982 8.11519 10.5 7.71212 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 7.70478 1.97394 8.04453 6 14.5ZM8.5 6C8.5 4.61928 7.38072 3.5 6 3.5C4.61928 3.5 3.5 4.61928 3.5 6C3.5 7.38072 4.61928 8.5 6 8.5C7.38072 8.5 8.5 7.38072 8.5 6Z" fill="#9FB3C8"/>
                                    </svg>
                                </div>
                                <div class="ml-2 text-center" style="color: #9FB3C8; font-size: 16px;">
                                    Site Location
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-sm-6 col-6">
                    <div class="row pt-3">
                        <div class="ml-auto d-flex align-items-center">
                            <i style="color:#9FB3C8;" class="fa fa-smile-o" aria-hidden="true"></i>
                            <div class="pl-1 mr-1" style="color: #9FB3C8; font-size: 16px;">50+</div>
                            <i style="color:#9FB3C8;" class="fa fa-frown-o" aria-hidden="true"></i>
                            <div class="pl-1" style="color: #9FB3C8; font-size: 16px;">20+</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto d-flex align-items-center">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5161 11.5H6.50227C6.77601 11.5 6.99997 11.275 6.99997 11V8C6.99997 7.725 6.77601 7.5 6.50227 7.5H3.5161C3.24237 7.5 3.0184 7.725 3.0184 8V11C3.0184 11.275 3.24237 11.5 3.5161 11.5ZM12.4746 2H10.9815V0.5C10.9815 0.225 10.7576 0 10.4838 0H9.48845C9.21472 0 8.99075 0.225 8.99075 0.5V2H5.00919V0.5C5.00919 0.225 4.78522 0 4.51149 0H3.5161C3.24237 0 3.0184 0.225 3.0184 0.5V2H1.52531C0.701005 2 0.0322266 2.67188 0.0322266 3.5V14.5C0.0322266 15.3281 0.701005 16 1.52531 16H12.4746C13.2989 16 13.9677 15.3281 13.9677 14.5V3.5C13.9677 2.67188 13.2989 2 12.4746 2ZM12.4746 14.3125C12.4746 14.4156 12.3906 14.5 12.288 14.5H1.71195C1.6093 14.5 1.52531 14.4156 1.52531 14.3125V5H12.4746V14.3125Z" fill="#9FB3C8"/>
                            </svg>
                            <div class="ml-1" style="font-size: 16px; color: #9FB3C8;">May 16, 20XX</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- new row --}}
            <div class="row d-flex align-items-start pb-5 mb-5" style="border-bottom: 2px solid #D9E2EC;">

                {{-- icon --}}
                <div class="col-lg-1 p-1 col-md-12 col-sm-12">
                    <div class="text-center p-3" style="background-color:#003E6B; border-radius: 10px;">
                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9629 18.4688L19.2296 0.794167C19.0917 0.279167 18.5671 -0.1325 17.9229 0.04L17.2792 0.2125C17.0217 0.281667 16.7988 0.479167 16.61 0.805833C16.0254 1.095 14.4308 1.52292 13.7767 1.565C13.45 1.37625 13.1579 1.31667 12.9004 1.38583L12.2563 1.55833C12.1554 1.58542 12.0813 1.63958 12 1.68667V1.33333C12 0.597083 11.4029 0 10.6667 0H8C7.26375 0 6.66667 0.597083 6.66667 1.33333V4H12L16.2358 20.5392C16.3738 21.0542 16.8983 21.4658 17.5425 21.2933L18.1863 21.1208C18.4438 21.0517 18.6667 20.8542 18.8554 20.5275C19.435 20.2408 21.0296 19.8108 21.6888 19.7683C22.0154 19.9571 22.3075 20.0167 22.565 19.9475L23.2092 19.775C23.8529 19.6025 24.1012 18.9838 23.9629 18.4688ZM18.3629 18.1746L14.5267 3.84875L17.1025 3.15875L20.9388 17.4846L18.3629 18.1746ZM0 16H5.33333V5.33333H0V16ZM4 0H1.33333C0.597083 0 0 0.597083 0 1.33333V4H5.33333V1.33333C5.33333 0.597083 4.73625 0 4 0ZM0 20C0 20.7362 0.597083 21.3333 1.33333 21.3333H4C4.73625 21.3333 5.33333 20.7362 5.33333 20V17.3333H0V20ZM6.66667 16H12V5.33333H6.66667V16ZM6.66667 20C6.66667 20.7362 7.26375 21.3333 8 21.3333H10.6667C11.4029 21.3333 12 20.7362 12 20V17.3333H6.66667V20Z" fill="white"/>
                        </svg>
                            
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="" style="font-size: 24px; color: #486581;">
                        Title of the Project
                    </div>
                    <div style="color: #9FB3C8; font-size: 16px;">
                        P 1.5 Million
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    {{-- status --}}
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-lg-6">
                            <div class="ml-2 text-center" style="font-size: 14px;color: #A61B1B; background-color: #FACDCD; border-radius: 100px;">
                                On Going
                            </div>
                        </div>
                    </div>
                    {{-- site location --}}
                    <div>
                        <div class="row">
                            <div class="col-10 d-flex">
                                <div style="color:#9FB3C8;">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C9.31553 0 12 2.68794 12 6C12 8.22241 11.2503 8.91691 7.27278 15.2945C6.68575 16.2357 5.31359 16.2346 4.72725 15.2945C0.747656 8.91356 0 8.22197 0 6C0 2.68447 2.68794 0 6 0ZM6 14.5C9.982 8.11519 10.5 7.71212 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 7.70478 1.97394 8.04453 6 14.5ZM8.5 6C8.5 4.61928 7.38072 3.5 6 3.5C4.61928 3.5 3.5 4.61928 3.5 6C3.5 7.38072 4.61928 8.5 6 8.5C7.38072 8.5 8.5 7.38072 8.5 6Z" fill="#9FB3C8"/>
                                    </svg>
                                </div>
                                <div class="ml-2 text-center" style="color: #9FB3C8; font-size: 16px;">
                                    Site Location
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-sm-6 col-6">
                    <div class="row pt-3">
                        <div class="ml-auto d-flex align-items-center">
                            <i style="color:#9FB3C8;" class="fa fa-smile-o" aria-hidden="true"></i>
                            <div class="pl-1 mr-1" style="color: #9FB3C8; font-size: 16px;">50+</div>
                            <i style="color:#9FB3C8;" class="fa fa-frown-o" aria-hidden="true"></i>
                            <div class="pl-1" style="color: #9FB3C8; font-size: 16px;">20+</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto d-flex align-items-center">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5161 11.5H6.50227C6.77601 11.5 6.99997 11.275 6.99997 11V8C6.99997 7.725 6.77601 7.5 6.50227 7.5H3.5161C3.24237 7.5 3.0184 7.725 3.0184 8V11C3.0184 11.275 3.24237 11.5 3.5161 11.5ZM12.4746 2H10.9815V0.5C10.9815 0.225 10.7576 0 10.4838 0H9.48845C9.21472 0 8.99075 0.225 8.99075 0.5V2H5.00919V0.5C5.00919 0.225 4.78522 0 4.51149 0H3.5161C3.24237 0 3.0184 0.225 3.0184 0.5V2H1.52531C0.701005 2 0.0322266 2.67188 0.0322266 3.5V14.5C0.0322266 15.3281 0.701005 16 1.52531 16H12.4746C13.2989 16 13.9677 15.3281 13.9677 14.5V3.5C13.9677 2.67188 13.2989 2 12.4746 2ZM12.4746 14.3125C12.4746 14.4156 12.3906 14.5 12.288 14.5H1.71195C1.6093 14.5 1.52531 14.4156 1.52531 14.3125V5H12.4746V14.3125Z" fill="#9FB3C8"/>
                            </svg>
                            <div class="ml-1" style="font-size: 16px; color: #9FB3C8;">May 16, 20XX</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- new row --}}
            <div class="row d-flex align-items-start pb-5 mb-5" style="border-bottom: 2px solid #D9E2EC;">

                {{-- icon --}}
                <div class="col-lg-1 p-1 col-md-12 col-sm-12">
                    <div class="text-center p-3" style="background-color:#003E6B; border-radius: 10px;">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4 8.79966H18C17.5455 8.79966 17.1296 9.05653 16.9264 9.46303L15.9311 11.4539L13.158 1.28391C13.0121 0.750282 12.5183 0.380532 11.9674 0.400407C11.4135 0.415782 10.9425 0.806907 10.8263 1.34841L8.2335 13.4489L7.15388 9.66966C7.0065 9.15478 6.53588 8.79966 6 8.79966H0.6C0.2685 8.79966 0 9.06816 0 9.39966V10.5997C0 10.9312 0.2685 11.1997 0.6 11.1997H5.09475L7.2465 18.7293C7.39425 19.2457 7.866 19.5993 8.39963 19.5993C8.41313 19.5993 8.427 19.5993 8.4405 19.5985C8.99063 19.5798 9.45825 19.189 9.57375 18.6505L12.1403 6.67303L14.4424 15.115C14.5064 15.3494 14.6401 15.5589 14.8257 15.7157C15.0113 15.8725 15.2401 15.9693 15.4819 15.9933C15.9754 16.0383 16.4509 15.7799 16.6736 15.3359L18.7418 11.1997H23.4C23.7315 11.1997 24 10.9312 24 10.5997V9.39966C24 9.06816 23.7315 8.79966 23.4 8.79966Z" fill="white"/>
                        </svg>
                            
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="" style="font-size: 24px; color: #486581;">
                        Title of the Project
                    </div>
                    <div style="color: #9FB3C8; font-size: 16px;">
                        P 1.5 Million
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    {{-- status --}}
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-lg-6">
                            <div class="ml-2 text-center" style="font-size: 14px;color: #A61B1B;  background-color: #FACDCD; border-radius: 100px;">
                                On Going
                            </div>
                        </div>
                    </div>
                    {{-- site location --}}
                    <div>
                        <div class="row">
                            <div class="col-10 d-flex">
                                <div style="color:#9FB3C8;">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C9.31553 0 12 2.68794 12 6C12 8.22241 11.2503 8.91691 7.27278 15.2945C6.68575 16.2357 5.31359 16.2346 4.72725 15.2945C0.747656 8.91356 0 8.22197 0 6C0 2.68447 2.68794 0 6 0ZM6 14.5C9.982 8.11519 10.5 7.71212 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 7.70478 1.97394 8.04453 6 14.5ZM8.5 6C8.5 4.61928 7.38072 3.5 6 3.5C4.61928 3.5 3.5 4.61928 3.5 6C3.5 7.38072 4.61928 8.5 6 8.5C7.38072 8.5 8.5 7.38072 8.5 6Z" fill="#9FB3C8"/>
                                    </svg>
                                </div>
                                <div class="ml-2 text-center" style="color: #9FB3C8; font-size: 16px;">
                                    Site Location
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-sm-6 col-6">
                    <div class="row pt-3">
                        <div class="ml-auto d-flex align-items-center">
                            <i style="color:#9FB3C8;" class="fa fa-smile-o" aria-hidden="true"></i>
                            <div class="pl-1 mr-1" style="color: #9FB3C8; font-size: 16px;">50+</div>
                            <i style="color:#9FB3C8;" class="fa fa-frown-o" aria-hidden="true"></i>
                            <div class="pl-1" style="color: #9FB3C8; font-size: 16px;">20+</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto d-flex align-items-center">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5161 11.5H6.50227C6.77601 11.5 6.99997 11.275 6.99997 11V8C6.99997 7.725 6.77601 7.5 6.50227 7.5H3.5161C3.24237 7.5 3.0184 7.725 3.0184 8V11C3.0184 11.275 3.24237 11.5 3.5161 11.5ZM12.4746 2H10.9815V0.5C10.9815 0.225 10.7576 0 10.4838 0H9.48845C9.21472 0 8.99075 0.225 8.99075 0.5V2H5.00919V0.5C5.00919 0.225 4.78522 0 4.51149 0H3.5161C3.24237 0 3.0184 0.225 3.0184 0.5V2H1.52531C0.701005 2 0.0322266 2.67188 0.0322266 3.5V14.5C0.0322266 15.3281 0.701005 16 1.52531 16H12.4746C13.2989 16 13.9677 15.3281 13.9677 14.5V3.5C13.9677 2.67188 13.2989 2 12.4746 2ZM12.4746 14.3125C12.4746 14.4156 12.3906 14.5 12.288 14.5H1.71195C1.6093 14.5 1.52531 14.4156 1.52531 14.3125V5H12.4746V14.3125Z" fill="#9FB3C8"/>
                            </svg>
                            <div class="ml-1" style="font-size: 16px; color: #9FB3C8;">May 16, 20XX</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- new row --}}
            <div class="row d-flex align-items-start pb-5 mb-5" style="border-bottom: 2px solid #D9E2EC;">

                {{-- icon --}}
                <div class="col-lg-1 p-1 col-md-12 col-sm-12">
                    <div class="text-center p-3" style="background-color:#003E6B; border-radius: 10px;">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4 8.79966H18C17.5455 8.79966 17.1296 9.05653 16.9264 9.46303L15.9311 11.4539L13.158 1.28391C13.0121 0.750282 12.5183 0.380532 11.9674 0.400407C11.4135 0.415782 10.9425 0.806907 10.8263 1.34841L8.2335 13.4489L7.15388 9.66966C7.0065 9.15478 6.53588 8.79966 6 8.79966H0.6C0.2685 8.79966 0 9.06816 0 9.39966V10.5997C0 10.9312 0.2685 11.1997 0.6 11.1997H5.09475L7.2465 18.7293C7.39425 19.2457 7.866 19.5993 8.39963 19.5993C8.41313 19.5993 8.427 19.5993 8.4405 19.5985C8.99063 19.5798 9.45825 19.189 9.57375 18.6505L12.1403 6.67303L14.4424 15.115C14.5064 15.3494 14.6401 15.5589 14.8257 15.7157C15.0113 15.8725 15.2401 15.9693 15.4819 15.9933C15.9754 16.0383 16.4509 15.7799 16.6736 15.3359L18.7418 11.1997H23.4C23.7315 11.1997 24 10.9312 24 10.5997V9.39966C24 9.06816 23.7315 8.79966 23.4 8.79966Z" fill="white"/>
                        </svg>
                            
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="" style="font-size: 24px; color: #486581;">
                        Title of the Project
                    </div>
                    <div style="color: #9FB3C8; font-size: 16px;">
                        P 1.5 Million
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    {{-- status --}}
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-lg-6">
                            <div class="ml-2 text-center" style="font-size: 14px;color: #079A82; background-color: #C6F7E9; border-radius: 100px;">
                                Done
                            </div>
                        </div>
                    </div>
                    {{-- site location --}}
                    <div>
                        <div class="row">
                            <div class="col-10 d-flex">
                                <div style="color:#9FB3C8;">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C9.31553 0 12 2.68794 12 6C12 8.22241 11.2503 8.91691 7.27278 15.2945C6.68575 16.2357 5.31359 16.2346 4.72725 15.2945C0.747656 8.91356 0 8.22197 0 6C0 2.68447 2.68794 0 6 0ZM6 14.5C9.982 8.11519 10.5 7.71212 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 7.70478 1.97394 8.04453 6 14.5ZM8.5 6C8.5 4.61928 7.38072 3.5 6 3.5C4.61928 3.5 3.5 4.61928 3.5 6C3.5 7.38072 4.61928 8.5 6 8.5C7.38072 8.5 8.5 7.38072 8.5 6Z" fill="#9FB3C8"/>
                                    </svg>
                                </div>
                                <div class="ml-2 text-center" style="color: #9FB3C8; font-size: 16px;">
                                    Site Location
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-sm-6 col-6">
                    <div class="row pt-3">
                        <div class="ml-auto d-flex align-items-center">
                            <i style="color:#9FB3C8;" class="fa fa-smile-o" aria-hidden="true"></i>
                            <div class="pl-1 mr-1" style="color: #9FB3C8; font-size: 16px;">50+</div>
                            <i style="color:#9FB3C8;" class="fa fa-frown-o" aria-hidden="true"></i>
                            <div class="pl-1" style="color: #9FB3C8; font-size: 16px;">20+</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto d-flex align-items-center">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5161 11.5H6.50227C6.77601 11.5 6.99997 11.275 6.99997 11V8C6.99997 7.725 6.77601 7.5 6.50227 7.5H3.5161C3.24237 7.5 3.0184 7.725 3.0184 8V11C3.0184 11.275 3.24237 11.5 3.5161 11.5ZM12.4746 2H10.9815V0.5C10.9815 0.225 10.7576 0 10.4838 0H9.48845C9.21472 0 8.99075 0.225 8.99075 0.5V2H5.00919V0.5C5.00919 0.225 4.78522 0 4.51149 0H3.5161C3.24237 0 3.0184 0.225 3.0184 0.5V2H1.52531C0.701005 2 0.0322266 2.67188 0.0322266 3.5V14.5C0.0322266 15.3281 0.701005 16 1.52531 16H12.4746C13.2989 16 13.9677 15.3281 13.9677 14.5V3.5C13.9677 2.67188 13.2989 2 12.4746 2ZM12.4746 14.3125C12.4746 14.4156 12.3906 14.5 12.288 14.5H1.71195C1.6093 14.5 1.52531 14.4156 1.52531 14.3125V5H12.4746V14.3125Z" fill="#9FB3C8"/>
                            </svg>
                            <div class="ml-1" style="font-size: 16px; color: #9FB3C8;">May 16, 20XX</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <div >
                        <button class="btn" style="color:#486581; font-size: 16px; font-weight: bold;">
                            View All Projects...
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5 d-flex">
            <div class="mx-auto" style="font-size: 36px;color: #486581;">
                Featured Organizations
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
                <div class="col-lg-3 mr-1 mt-2" style="background-color:#BCCCDC; border-radius: 20px; height: 245px;">
                    
                </div>
            </div>
        </div>
    </div>    
@endsection