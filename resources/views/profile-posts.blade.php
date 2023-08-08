<x-app-layout>
    <div class="card">
        <div class="card-header">
            <div class="avatar-list">
                <span class="avatar avatar-xs rounded"
                    style="background-image: url(https://preview.tabler.io/static/avatars/000m.jpg)"></span>
                {{ $user->username }}
            </div>
        </div>
        <div class="card-body">
            <div class="card-tabs">
                <!-- Cards navigation -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#" class="nav-link active">Posts({{$postCount}})</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Following</a></li>

                </ul>
                <div class="tab-content">
                    <!-- Content of card #1 -->
                    <div id="tab-top-1" class="card tab-pane active show" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Latest Posts</div>
                            <div class="list-group list-group-flush list-group-hoverable overflow-auto " style="max-height: 35rem;" >
                                <div class="list-group-item">

                                    @foreach ($posts as $post)
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <a href="#">
                                                        <span class="avatar"
                                                            style="background-image: url(https://preview.tabler.io/static/avatars/000m.jpg)"></span>
                                                    </a>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-reset d-block">{{ $post->title }}</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        {{ $post->body }}</div>
                                                </div>

                                                <div class="col-auto">
                                                    <a href="#" class="link-warning">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                                            </path>
                                                            <path d="M16 3v4"></path>
                                                            <path d="M8 3v4"></path>
                                                            <path d="M4 11h16"></path>
                                                            <path d="M11 15h1"></path>
                                                            <path d="M12 15v3"></path>
                                                        </svg>
                                                        {{ $post->created_at->format('d M Y') }}
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- tab content

<div id="tab-top-2" class="card tab-pane" role="tabpanel">
    <div class="card-body">
        <div class="card-title">Content of tab #2</div>
        <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
            alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
            molestias odit.
        </p>
    </div>
</div> --}}