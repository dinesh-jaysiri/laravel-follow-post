<x-app-layout>
    <form class="card" action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            <h4 class="card-title"> Edit Post</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label required">Title</label>
                <input name="title" type="text" class="form-control" value="{{old('title',$post->title)}}" placeholder="Post Title">
            </div>

            <div class="mb-3">
                <label class="form-label">Body</label>
                <textarea name='body'   class="form-control"  rows="6" placeholder="Content..">{{old('body',$post->body)}}</textarea>
            </div>
            <div class="mb-3"></div>
        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</x-app-layout>