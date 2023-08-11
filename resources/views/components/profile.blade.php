<x-app-layout>
    <div class="card">
        <div class="card-header">
            <div class="avatar-list">
                <span class="avatar avatar-xs rounded" style="background-image: url({{ $user->avatar }})"></span>
                {{ $user->username }}


            </div>

            @auth
                @if ($isFollowing)
                    <form action="/remove-follower/{{ $user->username }}" style="margin-bottom: 0;" method="POST">
                        @csrf
                        <button class="btn ms-2 btn-secondery">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M16 19h6"></path>
                                <path d="M19 16v6"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                            </svg>
                            Unfollow
                        </button>
                    </form>
                @else
                    @if (auth()->user()->username != $user->username)
                        <form action="/create-follower/{{ $user->username }}" style="margin-bottom: 0;" method="POST">
                            @csrf
                            <button class="btn ms-2 btn-facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M16 19h6"></path>
                                    <path d="M19 16v6"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                </svg>
                                Fallow
                            </button>
                        </form>
                    @endif
                @endif
            @endauth



            @if (auth()->user()->username == $user->username)
                <a href="/manage-avatar" class="btn ms-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 8h.01"></path>
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z">
                        </path>
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                    </svg>
                    Update
                </a>
            @endif



        </div>
        {{$slot}}
    </div>
</x-app-layout>