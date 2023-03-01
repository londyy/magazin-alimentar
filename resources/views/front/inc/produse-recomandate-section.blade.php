<section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg">Produse Recomandate</h4>
        </header>
        <div class="row">
            @foreach($produseRecomandate as $produs)
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="{{ asset('images/'.$produs->categorie->nume . '/' . $produs->imagine) }}"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">{{ $produs->nume }}</h4>
{{--                            <p class="desc">{{ $produs->nume }}</p>--}}
                            <div class="rating-wrap">

                                <div class="label-rating">{{ rand(200, 500) }} reviews</div>
                                <div class="label-rating">{{ rand(200, 500) }} orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">{{ $produs->pret }} MDL</span> <del class="price-old">{{ $produs->pret * 1.1 }} MDL</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
            @endforeach
        </div>
        <!-- row.// -->

    </div>
    <!-- container .//  -->
</section>
