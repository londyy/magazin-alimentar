@extends('front.app')

@section('content')
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- ================= main slide ================= -->
                    <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <img src="{{ asset('imaginigalerie/slider1.jpeg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('imaginigalerie/slider2.jpeg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('imaginigalerie/slider3.jpeg') }}">
                        </div>
                    </div>
                    <!-- ============== main slidesow .end // ============= -->
                </div>
                <!-- col.// -->
                <div class="col-md-3">
                    @foreach($produseRecomandate as $produs)
                        <div class="card mt-2 mb-2">
                            <figure class="itemside">
                                <div class="aside">
                                    <div class="img-wrap img-sm border-right"><img src="{{ asset('images/'.$produs->categorie->nume . '/' . $produs->imagine) }}"></div>
                                </div>
                                <figcaption class="p-3">
                                    <h6 class="title"><a href="#">{{ $produs->nume }}</a></h6>
                                    <div class="price-wrap">
                                        <span class="price-new b">{{ $produs->pret }} MDL</span>
                                        <del class="price-old text-muted">{{ $produs->pret * 1.1 }} MDL</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </figcaption>
                            </figure>
                        </div>
                        <!-- card.// -->
                    @endforeach
                </div>
                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    @include('front.inc.categorii-recomandate-section')
    @include('front.inc.produse-recomandate-section')
    @include('front.inc.produse-recente-section')
@endsection
