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
            <div class="d-flex flex-column card-group featured-group ">

                {{-- added two example cards while logic for looping thru data is not yet implemented --}}

                {{-- card start --}}
                <div class="card mb-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title w-50 d-inline">Project Title <span class="badge badge-warning">Ongoing</span></h5>
                                    <span class="float-right d-inline">
                                        {{-- smiley icon --}}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                        </svg>
                                        {{-- smiley icon end --}}
                                        <span class="badge badge-light">50+</span>

                                        {{-- sad icon --}}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                        </svg>
                                        {{-- sad icon --}}
                                        <span class="badge badge-light">20+</span>
                                    </span>
                            </div>

                            <div>
                                <p class="card-text d-inline" style="margin-right: 2em;"><small class="text-muted">P 1.5 Million</small></p>
                                <p class="card-text d-inline">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
                                        <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
                                    </svg>
                                    <small class="text-muted">location</small>
                                </p>
                                <p class="float-right d-inline">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                    </svg>
                                    <small class="text-muted">August 20, 2020</small>
                                </p>
                            </div>
                         
                        </div>
                      </div>
                    </div>
                </div>
                {{-- card end --}}

                {{-- card start --}}
                 <div class="card mb-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title w-50 d-inline">Project Title <span class="badge badge-success">Finished</span></h5>
                                    <span class="float-right d-inline">
                                        {{-- smiley icon --}}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                        </svg>
                                        {{-- smiley icon end --}}
                                        <span class="badge badge-light">50+</span>

                                        {{-- sad icon --}}
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                        </svg>
                                        {{-- sad icon --}}
                                        <span class="badge badge-light">20+</span>
                                    </span>
                            </div>

                            <div>
                                <p class="card-text d-inline" style="margin-right: 2em;"><small class="text-muted">P 1.5 Million</small></p>
                                <p class="card-text d-inline">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
                                        <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
                                    </svg>
                                    <small class="text-muted">location</small>
                                </p>
                                <p class="float-right d-inline">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                    </svg>
                                    <small class="text-muted">August 20, 2020</small>
                                </p>
                            </div>
                         
                        </div>
                      </div>
                    </div>
                </div>
                {{-- card end --}}
            </div>
            {{-- card group div end --}}

            <h2 class="text-center">
                <a class="btn btn-light" href="#" role="button">View All Projects</a>
            </h2>

        </div>
        {{-- featured-projects end --}}

        <div class="featured-orgs-container container">
            <h1 class="text-center">Featured Organizations</h1>
            
            {{-- Card deck start --}}
            <div class="card-deck">

                {{-- added 4 org placeholders while logic for looping thru featured org data is not yet implemented --}}

                <div class="card bg-dark text-white">
                    <img src="..." class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    <img src="..." class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    <img src="..." class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">org image</h5>
                    </div>
                </div>

                <div class="card bg-dark text-white">
                    <img src="..." class="card-img" alt="...">
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