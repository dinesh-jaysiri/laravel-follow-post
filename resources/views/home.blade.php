<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Card title</h3>
        </div>
        <div class="card-body">
            <div class="card-tabs">
                <!-- Cards navigation -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#tab-top-1" class="nav-link active"
                            data-bs-toggle="tab" aria-selected="true" role="tab">Posts(3)</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab"
                            aria-selected="false" tabindex="-1" role="tab">Followers</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab"
                            aria-selected="false" tabindex="-1" role="tab">Following</a></li>

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
</x-app-layout>
