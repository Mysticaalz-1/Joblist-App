@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
            BREADCRUMB PART START
        ===========================-->
        <div id="breadcrumb_part">
            <div class="bread_overlay">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center text-white">
                            <h4>Réinitialiser le mot de passe</h4>
                            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"> Accueil </a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Réinitialiser le mot de passe </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==========================
                BREADCRUMB PART END
        ===========================-->


        <!--=========================
                SIGN IN START
        ==========================-->
        <section class="wsus__login_page">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="wsus__login_area">
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__login_imput">
                                            <label>email</label>
                                            <input type="email" placeholder="Email" name="email" value="{{ old('email', $request->email) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_imput">
                                            <label>Mot de passe</label>
                                            <input type="password" placeholder="Mot de passe" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_imput">
                                            <label>Confirmer le mot de passe</label>
                                            <input type="password" placeholder="Confirmer le mot de passe" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_imput">
                                            <button type="submit">Réinitialiser le mot de passe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================
                SIGN IN END
        ==========================-->
@endsection
