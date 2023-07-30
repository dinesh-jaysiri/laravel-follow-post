<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ 'https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css' }}>
    <title>Document</title>
</head>


<body class=" d-flex flex-column" data-bs-theme="dark">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('img/brand_logo.png') }}"height="36" alt=""></a>
            </div>
            <form class="card card-md" action="/register" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="username" value="{{ old('username') }}"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Enter User Name">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">

                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>

                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror " placeholder="Password"
                            autocomplete="off">
                        <div class="invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>


                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confiram Password</label>

                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confiram Password"
                            autocomplete="off">

                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Agree the terms and policy.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>

    <script src={{ 'https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js' }}></script>

</body>

</html>
