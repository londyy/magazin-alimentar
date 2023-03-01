<section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Produse Adaugate Recent</h4>
        </header>
        <div class="row">
            @foreach($produseRecente as $produs)
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="{{ asset('images/'.$produs->categorie->nume . '/' . $produs->imagine) }}"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">{{ $produs->nume }}</h4>
{{--                            <p class="desc">{{ $produs->nume }}</p>--}}
                        </figcaption>
                        <div class="bottom-wrap">
{{--                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>--}}
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $produs->id }}" name="id">
                                <input type="hidden" value="{{ $produs->nume }}" name="name">
                                <input type="hidden" value="{{ $produs->pret }}" name="price">
                                <input type="hidden" value="{{ $produs->imagine }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button type="submit" class="btn btn-sm btn-primary float-right">Add To Cart</button>
                            </form>
                            <div class="price-wrap h5">
                                <span class="price-new">{{ $produs->pret }} MDL</span> <del class="price-old">{{ $produs->pret * 1.1 }} MDL</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            @endforeach
        </div>
        <!-- row.// -->

    </div>
    <!-- container // -->
</section>
