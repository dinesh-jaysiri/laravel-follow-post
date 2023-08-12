<x-profile :user="$sharedData['user']" :isFollowing="$sharedData['isFollowing']" >
    <div class="card-body">
        <div class="card-tabs">
            <!-- Cards navigation -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="/profile/{{ $sharedData['user']->username }}"
                        class="nav-link">Posts({{ $sharedData['postCount']  }})</a></li>
                <li class="nav-item"><a href="/profile/{{ $sharedData['user']->username }}/followers" class="nav-link active ">Followers({{$sharedData['followersCount']}})</a></li>
                <li class="nav-item"><a href="/profile/{{ $sharedData['user']->username }}/following" class="nav-link">Following({{$sharedData['followingCount']}})</a>
                </li>

            </ul>
            <div class="tab-content">
                <!-- Content of card #1 -->
                <div id="tab-top-1" class="card tab-pane active show" role="tabpanel">
                    <div class="card-body">
                        <div class="card-title">Followers List</div>
                        <div class="list-group list-group-flush list-group-hoverable overflow-auto "
                            style="max-height: 35rem;">
                            <div class="list-group-item">

                                 @foreach ($followers as $follow)
                                    {{-- user --}}
                                    <a href="/profile/{{ $follow->userDoingTheFollowing->username }}" class="row mb-3 ">
                                        <div class="col-auto">
                                            <div>
                                                <span class="avatar"
                                                    style="background-image: url({{ $follow->userDoingTheFollowing->avatar }})"></span>
                                            </div>
                                        </div>
                                        <div class="col text-truncate">
                                            <div class="text-body d-block">{{ $follow->userDoingTheFollowing->username }}
                                            </div>
                                            <div class="text-secondary text-truncate mt-n1">Started at
                                                {{ $follow->created_at->format('M Y') }}</div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-profile>
