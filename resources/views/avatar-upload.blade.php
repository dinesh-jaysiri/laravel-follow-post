<x-app-layout>

    <form action="/manage-avatar" method="POST" enctype="multipart/form-data" style="max-width:350px">
        @csrf
        <div class="mb-3">
            <label class="form-label">Avatar</label>

            <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror "
                placeholder="Password" autocomplete="off">
            <div class="invalid-feedback">
                @error('avatar')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary ">Upload Image</button>
        </div>
    </form>
</x-app-layout>
