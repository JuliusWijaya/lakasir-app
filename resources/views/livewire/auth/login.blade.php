<div>
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>

                        <form wire:submit="login">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('form.email') is-invalid @enderror"
                                    wire:model="form.email" id="email" placeholder="Enter Email Address...">
                                @error('form.email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('form.password') is-invalid @enderror"
                                    wire:model="form.password" id="password" placeholder="Password">
                                @error('form.password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="my-3">
                                <button type="submit" class="btn btn-primary form-control">
                                    Login
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <a class="small text-decoration-none" href="register.html">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
