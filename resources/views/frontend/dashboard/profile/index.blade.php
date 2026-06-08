@extends('frontend.layouts.master')

@section('contents')
    <section id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.dashboard.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard_content">
                        <div class="my_listing">
                            <h4>Informations de base</h4>
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-8 col-md-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>Nom <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Nom" name="name" value="{{ $user->name }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="my_listing_single">
                                                    <label>Téléphone <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="1234" name="phone" value="{{ $user->phone }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>email <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="Email" placeholder="Email" name="email" value="{{ $user->email }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>Adresse <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Adresse" name="address" value="{{ $user->address }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="my_listing_single">
                                                    <label>À propos de moi <span class="text-danger">*</span></label>
                                                    <div class="input_area">
                                                        <textarea cols="3" rows="3" placeholder="Votre texte" name="about" required>{!! $user->about !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Website</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Website" name="website" value="{{ $user->website }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Facebook</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Facebook" name="fb_link" value="{{ $user->fb_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>X</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="X" name="x_link" value="{{ $user->x_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Linkedin</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Linkedin" name="in_link" value="{{ $user->in_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Whatsapp</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Whatsapp" name="wa_link" value="{{ $user->wa_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="my_listing_single">
                                                    <label>Instragram</label>
                                                    <div class="input_area">
                                                        <input type="text" placeholder="Instragram" name="instra_link" value="{{ $user->instra_link }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-5">
                                        <div class="my_listing_single">
                                            <label for="">Photo de profil</label>
                                            <div class="profile_pic_upload">
                                                <img src="{{ asset($user->avatar) }}" alt="img" class="imf-fluid w-100">
                                                <input type="file" name="avatar">
                                                <input type="hidden" name="old_avatar" value="{{ $user->avatar }}">

                                            </div>
                                        </div>

                                        <div class="my_listing_single">
                                            <label for="">Bannière</label>

                                            <div class="profile_pic_upload">

                                                <img src="{{ asset($user->banner) }}" alt="img" class="imf-fluid w-100">
                                                <input type="file" name="banner">
                                                <input type="hidden" name="old_banner" value="{{ $user->banner }}">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <button type="submit" class="read_btn">Mettre à jour</button>
                                </div>
                            </form>
                        </div>
                        <div class="my_listing list_mar">
                            <h4>Changer le mot de passe</h4>
                            <form action="{{ route('user.profile-password.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>Mot de passe actuel</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Mot de passe actuel" name="current_password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="my_listing_single">
                                            <label>Nouveau mot de passe</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Nouveau mot de passe" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="my_listing_single">
                                            <label>Confirmer le mot de passe</label>
                                            <div class="input_area">
                                                <input type="password" placeholder="Confirmer le mot de passe" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="read_btn">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
