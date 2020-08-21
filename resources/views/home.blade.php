@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="homepage-container">
        
        <div class="jumbotron">
            <h1 class="display-4 text-center align-middle">Lorem ipsum dolor sit amet</h1>
            <p class="lead text-center align-middle">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="search-bar container shadow-sm p-3 mb-5 bg-white">
            <form class="form-inline my-2 my-lg-0">
                <span>
                     {{-- bootstrap search icon start --}}
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                     {{-- bootstrap search icon end --}}
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-field">
                </span>
                
                <div class="dropdown" id="filter">
                    <button class="btn btn-light bg-white dropdown-toggle text-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- bootstrap stack icon start --}}
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-layers" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.188 8L.264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l-1.063.567L14.438 10 8 13.433 1.562 10 4.25 8.567 3.187 8z"/>
                            <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4zM1.563 6L8 9.433 14.438 6 8 2.567 1.562 6z"/>
                        </svg>
                        {{-- bootstrap stack icon end --}}
                        Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Something</a>
                      <a class="dropdown-item" href="#">Something</a>
                      <a class="dropdown-item" href="#">Something</a>
                    </div>
                </div>
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>

        <div class="featured-projects-container container">
            <h1 class="text-center">Featured Projects</h1>

            {{-- card group for featured projects --}}
            <div class="d-flex flex-column card-group featured-group bg-white p-2">

                {{-- added two example cards while logic for looping thru data is not yet implemented --}}
                
                {{-- card start --}}
                <div class="card mb-3" >
                    <a href="" class="homecard-links">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                {{-- <img src="..." class="card-img" alt="..."> --}}
                                <div class="type-icon-container bg-dark"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title w-50 d-inline">Project Title <span class="badge badge-warning">Ongoing</span></h5>
                                            <span class="float-right d-inline">
                                                <i class="far fa-smile"></i>
                                                <span class="badge badge-light">50+</span>

                                                <i class="far fa-frown"></i>
                                                <span class="badge badge-light">20+</span>
                                            </span>
                                    </div>

                                    <div>
                                        <p class="card-text d-inline" style="margin-right: 2em;"><small class="text-muted">P 1.5 Million</small></p>
                                        <p class="card-text d-inline">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <small class="text-muted">location</small>
                                        </p>
                                        <p class="float-right d-inline">
                                            <i class="far fa-calendar"></i>
                                            <small class="text-muted">August 20, 2020</small>
                                        </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        </a>
                </div>
                {{-- card end --}}
                
                

                {{-- card start --}}
                 <div class="card mb-3" >
                    <a href="" class="homecard-links">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                {{-- <img src="..." class="card-img" alt="..."> --}}
                                <div class="type-icon-container bg-dark"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title w-50 d-inline">Project Title <span class="badge badge-success">Finished</span></h5>
                                            <span class="float-right d-inline">
                                                <i class="far fa-smile"></i>
                                                <span class="badge badge-light">50+</span>

                                                <i class="far fa-frown"></i>
                                                <span class="badge badge-light">20+</span>
                                            </span>
                                    </div>

                                    <div>
                                        <p class="card-text d-inline" style="margin-right: 2em;"><small class="text-muted">P 1.5 Million</small></p>
                                        <p class="card-text d-inline">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <small class="text-muted">location</small>
                                        </p>
                                        <p class="float-right d-inline">
                                            <i class="far fa-calendar"></i>
                                            <small class="text-muted">August 20, 2020</small>
                                        </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- card end --}}
                <h2 class="text-center">
                    <a class="btn btn-light" href="#" role="button">View All Projects</a>
                </h2>
            </div>
            {{-- card group div end --}}

            <h2 class="text-center">
                <a class="btn btn-light" href="{{ url('/projects') }}" role="button">View All Projects</a>
            </h2>

        </div>
        {{-- featured-projects end --}}

        <div class="featured-orgs-container container">
            <h1 class="text-center">Featured Organizations</h1>
            
            {{-- Card deck start --}}
            <div class="card-deck">

                {{-- added 4 org placeholders while logic for looping thru featured org data is not yet implemented --}}

                <div class="card bg-dark text-white">
                    {{-- <img src="..." class="card-img" alt="..."> --}}
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    {{-- <img src="..." class="card-img" alt="..."> --}}
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    {{-- <img src="..." class="card-img" alt="..."> --}}
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    {{-- <img src="..." class="card-img" alt="..."> --}}
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>
                
            </div>
              {{-- card deck end --}}
        </div>

    </div>
    {{-- homepage-container end --}}
    
@endsection