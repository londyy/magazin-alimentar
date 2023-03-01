<section class="section-content padding-y-sm bg">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg">Categorii Recomandate</h4>
        </header>
        <div class="row">
            @foreach($categoriiRecomandate as $categorie)
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('{{ asset('imaginicategorii/'.$categorie->imagine) }}');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">{{ $categorie->nume }}</h5>
                                <a href="{{ route('front.categorie.detalii', Str::slug($categorie->nume)) }}" class="btn btn-warning btn-sm"> Vezi toate produsele </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
            @endforeach

        </div>
    </div>
</section>
