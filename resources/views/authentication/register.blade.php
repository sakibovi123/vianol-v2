@include("base")

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="mx-auto bg-white p-5 shadow-sm register-form w-25">
        <p class="text-center">Register new member</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="First name">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="e-mail">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="phone_number" type="number" class="form-control" placeholder="Phone">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label fw-bold" for="exampleCheck1">Remeber me</label>
                </div>
                <button type="submit" class="btn btn-primary px-4 py-2">Sign in</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('login_template') }}" class="text-primary">Already a member?</a>
        </div>
    </div>
</div>
