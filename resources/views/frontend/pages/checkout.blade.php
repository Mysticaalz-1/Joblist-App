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
                        <h4>Paiement</h4>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"> Accueil </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paiement</li>
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


    <!--==========================
        PAYMENT PAGE START
    ===========================-->
    <section id="wsus__custom_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="wsus__payment_area">
                        <div class="row">
                            @if (config('payment.paypal_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment"
                                    href="{{ route('paypal.payment') }}">
                                    <img src="{{ asset('default/paypal.png') }}" alt="méthode de paiement" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif

                            @if (config('payment.stripe_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment" href="{{ route('stripe.payment') }}">
                                    <img src="{{ asset('default/stripe.png') }}" alt="méthode de paiement" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif
                            @if (config('payment.razorpay_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment" href="{{ route('razorpay.redirect') }}">
                                    <img src="{{ asset('default/razorpay.png') }}" alt="méthode de paiement" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif
                            
                            {{-- CinetPay Mobile Money (RDC) --}}
                            @if (config('payment.cinetpay_status', 'active') === 'active')
                            <div class="col-lg-8 col-12 mt-4">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <span class="d-inline-block px-3 py-1 rounded-pill text-uppercase small fw-semibold"
                                                          style="background: rgba(0,0,0,.04); letter-spacing: .08em;">
                                                        Paiement mobile · RDC
                                                    </span>
                                                </div>
                                                <h5 class="mb-1 fw-semibold">Payer avec votre téléphone</h5>
                                                <p class="mb-3 text-muted small">
                                                    Airtel Money, M‑Pesa (Vodacom) et Orange Money via CinetPay.
                                                </p>
                                                <div class="d-flex gap-2 flex-wrap">
                                                    <span class="badge rounded-pill bg-danger">Airtel Money</span>
                                                    <span class="badge rounded-pill bg-success">M‑Pesa</span>
                                                    <span class="badge rounded-pill bg-warning text-dark">Orange Money</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <form method="POST" action="{{ route('paiement.initier') }}">
                                                    @csrf
                                                    <div class="mb-2">
                                                        <label class="form-label small mb-1">Numéro de téléphone</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-light border-end-0">
                                                                +243
                                                            </span>
                                                            <input type="text"
                                                                   name="telephone"
                                                                   class="form-control border-start-0"
                                                                   placeholder="Ex. 81 234 56 78"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success w-100 mt-2">
                                                        Confirmer et recevoir la demande
                                                    </button>
                                                    <small class="d-block mt-2 text-muted">
                                                        Une demande de paiement vous sera envoyée sur votre téléphone. Suivez les instructions de votre opérateur pour valider.
                                                    </small>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7">
                    <div class="member_price">
                        <h4>{{ $package->name }}</h4>
                        <h5>{{ currencyPosition($package->price) }}
                            @if ($package->number_of_days === -1)
                            <span>/ À vie</span>
                            @else
                            <span>/ {{ $package->number_of_days }} jours</span>
                            @endif
                        </h5>
                        @if ($package->num_of_listing === -1)
                            <p>Annonces illimitées</p>
                        @else
                            <p>{{ $package->num_of_listing }} annonces</p>
                        @endif

                        @if ($package->num_of_amenities === -1)
                            <p>Équipements illimités</p>
                        @else
                            <p>{{ $package->num_of_amenities }} équipements</p>
                        @endif

                        @if ($package->num_of_photos === -1)
                            <p>Photos illimitées</p>
                        @else
                            <p>{{ $package->num_of_photos }} photos</p>
                        @endif

                        @if ($package->num_of_video === -1)
                            <p>Vidéos illimitées</p>
                        @else
                            <p>{{ $package->num_of_video }} vidéos</p>
                        @endif

                        @if ($package->num_of_featured_listing === -1)
                        <p>Annonces vedettes illimitées</p>
                        @else
                            <p>{{ $package->num_of_featured_listing }} annonces vedettes</p>
                        @endif

                        <a href="{{ route('checkout.index', $package->id) }}">Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wsus__payment_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wsus__pay_modal_info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, tempora cum optio
                                cumque rerum dolor impedit exercitationem. Eveniet suscipit repellat, quae natus hic
                                assumenda.</p>
                            <ul>
                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                <li>Dolor sit amet consectetur adipisicing elit tempora cum.</li>
                            </ul>
                            <form>
                                <input type="text" placeholder="Saisir un texte">
                                <input type="text" placeholder="Saisir un texte">
                                <textarea rows="4" placeholder="Saisir un message"></textarea>
                                <div class="wsus__payment_btn_area">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-success">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
        CUSTOM PAGE END
    ===========================-->
@endsection
