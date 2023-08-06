<x-app-layout>
    <form class="card" action="/create-post" method="POST">
        @csrf
        <div class="card-header">
            <h4 class="card-title"> New Post</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label required">Title</label>
                <input name="title" type="text" class="form-control" name="example-required-input" placeholder="Post Title">
            </div>

            <div class="mb-3">
                <label class="form-label">Body</label>
                <textarea name='body'  class="form-control"  rows="6" placeholder="Content.."></textarea>
            </div>
            <div class="mb-3"></div>
        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Save Post</button>
        </div>
    </form>
</x-app-layout>
