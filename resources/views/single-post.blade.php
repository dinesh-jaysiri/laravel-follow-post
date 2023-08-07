<x-app-layout>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <div class="nav-link ">
                        {{ $post->title }}
                    </div>

                </li>
                @can('update', $post)
                    <li class="nav-item ms-auto">
                        <form action="post/{{$post->id}}">
                            @csrf
                            @method('PUT')
                        <button class="nav-link " type="submit">
                            <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                <path d="M13.5 6.5l4 4"></path>
                            </svg>
                        </button>
                        </form>
                    </li>
                @endcan
                @can('delete', $post)
                    <li class="nav-item">
                        <form action="/post/{{ $post->id }}" method="POST"><button class="nav-link " type="submit">
                                @csrf
                                @method('DELETE')
                                <!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7h16"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    <path d="M10 12l4 4m0 -4l-4 4"></path>
                                </svg>
                            </button></form>

                    </li>
                @endcan



            </ul>
        </div>
        <div class="card-body">
            <div class="mt-2">
                <div class="row">
                    <div class="col">
                        <div class="avatar-list">
                            <span class="avatar avatar-xs rounded"
                                style="background-image: url(./static/avatars/000f.jpg)"></span> by
                            {{ $post->user->username }}
                        </div>

                    </div>
                    <div class="col-auto">
                        <a href="#" class="link-warning">
                            <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
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
                <p class="text-secondary  mt-2">{{ $post->body }}</p>
            </div>
        </div>
</x-app-layout>
