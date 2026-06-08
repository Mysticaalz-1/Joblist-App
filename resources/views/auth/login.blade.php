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
                        <h4>Connexion</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Accueil </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Connexion </li>
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
                        <h2>Bon retour !</h2>
                        <p>Connectez-vous pour continuer</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>email</label>
                                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>Mot de passe</label>
                                        <input type="password" placeholder="Mot de passe" name="password" required >
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="wsus__login_imput wsus__login_check_area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" name="remember">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Se souvenir de moi
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <button type="submit">Se connecter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>ou</span></p>
                        {{-- <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul> --}}
                        <p class="create_account">Dont’t have an aceount ? <a href="{{ route('register') }}">Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
            SIGN IN END
    ==========================-->
@endsection
