<div class="page">
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                {{-- menu button --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- brand logo --}}
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="{{ asset('img/brand_logo.png') }}" width="110" height="32" alt="OurApp"
                            class="navbar-brand-image">
                    </a>
                </h1>


                <div class="navbar-nav flex-row order-md-last">
                    {{-- logout button --}}
                    <div class="nav-item d-none d-md-flex me-3">
                        <div class="btn-list">
                            <a href="#" class="btn" target="_blank" rel="noreferrer">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M9 12h12l-3 -3"></path>
                                    <path d="M18 15l3 -3"></path>
                                </svg>
                                Sign Out
                            </a>

                        </div>
                    </div>
                    {{-- chat icon --}}
                    <div class="d-none d-md-flex me-3 ">
                        <a href="" class="nav-link px-0 ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-hipchat"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 3 -3.49 3 -5.789c0 -4.286 -4.03 -7.764 -9 -7.764c-4.97 0 -9 3.478 -9 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29z">
                                </path>
                                <path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0"></path>
                            </svg>
                        </a>

                    </div>

                    {{-- avatar --}}
                    <div class="nav-item dropdown">


                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0">
                            <span class="avatar avatar-sm"
                                style="background-image: url(https://tabler.io/demo/static/avatars/000m.jpg)"></span>

                        </a>
                    </div>


                </div>


            </div>
        </header>

        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <div></div>
                        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                            <form action="./" method="get" autocomplete="off" novalidate=""
                                style="margin-block-end:0;">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                            <path d="M21 21l-6 -6"></path>
                                        </svg>
                                    </span>
                                    <input type="text" value="" class="form-control" placeholder="Search…"
                                        aria-label="Search in website">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </header>

        <div class="page-wrapper">
            {{-- page header --}}

            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h2 class="page-title">
                                Dashboard
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block"
                                    data-bs-toggle="modal" data-bs-target="#modal-report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>
                                    Create new Post
                                </a>
                                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                                    data-bs-target="#modal-report" aria-label="Create new report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- page body  --}}

            <div class="page-body">
                <div class="container-xl">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Card title</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-tabs">
                                <!-- Cards navigation -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a href="#tab-top-1"
                                            class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                            role="tab">Posts(3)</a></li>
                                    <li class="nav-item" role="presentation"><a href="#tab-top-2" class="nav-link"
                                            data-bs-toggle="tab" aria-selected="false" tabindex="-1"
                                            role="tab">Followers</a></li>
                                    <li class="nav-item" role="presentation"><a href="#tab-top-3" class="nav-link"
                                            data-bs-toggle="tab" aria-selected="false" tabindex="-1"
                                            role="tab">Following</a></li>

                                </ul>
                                <div class="tab-content">
                                    <!-- Content of card #1 -->
                                    <div id="tab-top-1" class="card tab-pane active show" role="tabpanel">
                                        <div class="card-body">
                                            <div class="card-title">Content of tab #1</div>
                                            <p class="text-muted">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                                                alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
                                                molestias odit.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Content of card #2 -->
                                    <div id="tab-top-2" class="card tab-pane" role="tabpanel">
                                        <div class="card-body">
                                            <div class="card-title">Content of tab #2</div>
                                            <p class="text-muted">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                                                alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
                                                molestias odit.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Content of card #3 -->
                                    <div id="tab-top-3" class="card tab-pane" role="tabpanel">
                                        <div class="card-body">
                                            <div class="card-title">Content of tab #3</div>
                                            <p class="text-muted">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
                                                alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
                                                molestias odit.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
