@extends('app')

@section('content')
    <div class=" container-fluid custom-bg py-3">
        <div class=" row">
            <div class="col-md-12 text-center">
                <h4 class=" text-white fs-3">BIGNON DU BENIN</h4>
                <p class=" text-white">Ici, l'élégance rencontre l'artisanat pour transformer vos espaces de vie en œuvres
                    d'art.</p>
            </div>
        </div>

        <div class="row">
            <img class=" col-md-12" src="{{ asset('images/img_apropos.avif') }}" alt="">
        </div>

        <div class="row py-4">
            <div class=" col-md-12">
                <div class="row">
                    <div class=" col-md-8 py-5 bg-white px-5 ">
                        <h1 class=" text-danger text-center">Une vision portée par un leadership inspirant</h1>
                        <p class=" fs-4" style="text-align: justify;">À la tête de Bignon du Bénin, Innocent GBEDONOU a su
                            transformer une passion en une aventure. Grâce à son dynamisme et à une stratégie axée sur les
                            réseaux sociaux, notamment TikTok, où il compte plus de 250 000 abonnés, Innocent a fait
                            connaître l'entreprise bien au-delà des frontières béninoises.</p>
                        <p class=" fs-4" style="text-align: justify;">Son engagement pour l'excellence a été récompensé par
                            diverses distinctions nationales et internationales, saluant la qualité de nos meubles et
                            l'impact de notre entreprise sur la promotion du savoir-faire local.</p>
                        <div class="d-flex gap-3">
                            <i class="fa-brands fa-facebook-f rounded-circle bg-black px-2 py-2 text-white"></i>
                            <i class="fa-brands fa-tiktok rounded-circle  bg-black px-2  py-2 text-white"></i>
                        </div>
                    </div>
                    <div class=" col-md-4 position-relative overflow-hidden">
                        <img class="" src="{{ asset('images/personnel_bignon.avif') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-4">
            <div class=" col-md-12">
                <div class="row">
                    <div class=" col-md-4 py-5 px-5 ">
                        <p class=" fs-4 text-white" style="text-align: justify;">
                            Chaque pièce que nous créons – fauteuils, canapés, lits ou accessoires – est le fruit d'un
                            travail minutieux réalisé par des artisans locaux hautement qualifiés. Notre mission est de
                            valoriser le savoir-faire béninois tout en offrant à nos clients des meubles qui reflètent leur
                            style et répondent à leurs besoins.</p>
                    </div>
                    <div class=" col-md-8 position-relative overflow-hidden">
                        <img class="" src="{{ asset('images/img1_fauteil.avif') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
