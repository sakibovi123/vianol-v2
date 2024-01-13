@include('base')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="mx-auto bg-white w-25 p-5 shadow-sm login-form">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/logo_default-icon.jpg') }}" class="" alt="">
        </div>

        <p class="text-center">Login to start the session</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input required type="email" name="email" class="form-control" placeholder="e-mail">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            </div>
            <div class="input-group mb-3">
                <input required name="password" type="password" class="form-control" placeholder="password">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label fw-bold" for="exampleCheck1">remember me</label>
                </div>
                <button type="submit" class="btn btn-primary px-4 py-2">login</button>
            </div>
        </form>
        <div class="text-center d-flex flex-column mt-3 gap-1">
            <a href="#" class="text-primary">Forgot password?</a>
            <a href="{{ route('register_template') }}" class="text-primary">Register new member</a>
        </div>
    </div>
</div>
