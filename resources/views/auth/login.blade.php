@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <section class="d-flex justify-content-center align-items-center">

        <div class="login-container">

            <!-- Brand -->
            <div class="text-center mb-4">
                <div class="brand-icon mx-auto mb-3">
                    <img src="{{ asset('images/bunga_piknik_logo.png') }}" alt="Logo bunga " class="img-fluid">
                </div>

                <h1 class="brand-title text-primary">BungaPiknik</h1>
                <p class="text-secondary mb-0">Selamat Datang Kembali</p>
            </div>

            <!-- Login Card -->
            <div class="card login-card">
                <div class="card-body p-4">

                    <h2 class="text-center fs-5 fw-bold mb-4">
                        Masuk Ke Akun Anda
                    </h2>

                    <form method="POST" action="{{ route('proses.login') }}">

                        @csrf
                        <!-- Username -->
                        <div class="mb-4">
                            <label for="username" class="form-label fw-semibold">
                                Username
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Masukkan username">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">
                                Password
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock"></i>
                                </span>

                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan password">
                            </div>
                        </div>

                        <!-- Remember & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">

                                <label class="form-check-label small" for="remember">
                                    Ingat Saya
                                </label>
                            </div>

                            <a href="#" class="small text-decoration-none">
                                Lupa Password?
                            </a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="btn btn-primary w-100 login-button">
                            Masuk <i class="bi bi-box-arrow-in-right ms-1"></i>
                        </button>

                        @error('username')
                            <div class="text-danger text-center small mt-3">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Register Link -->
                        <p class="text-center text-secondary mt-4 mb-0">
                            Belum memiliki akun?
                            <a href="#" class="text-decoration-none fw-semibold">
                                Daftar di sini
                            </a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
