@extends('app')
@section('content')
    <div class=" container-fluid">

        @include('layouts.navbar')



        <div class="row d-flex py-3 justify-content-center align-items-center position-relative">
            <div style="height: 10rem; overflow: hidden; width: 100%;" class="position-relative">
                <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('images/canape1.webp') }}" alt="">
                <!-- Texte superposé sur l'image -->
                <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white font-bold">Politique de
                    confidentialite</h1>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <em class=" fs-6">Dernière mise à jour : 04/03/2025</em>
                <p>Chez Bignon du Bénin, nous respectons et protégeons la vie privée de nos clients. Cette politique de
                    confidentialité décrit comment nous collectons, utilisons et protégeons vos informations personnelles
                    lorsque vous visitez notre site internet.</p>
                <ol type="1">
                    {{-- 1  --}}
                    <li class=" fs-2">Informations collectées</li>
                    <p>Nous collectons uniquement les informations que vous nous fournissez via le formulaire de contact
                        présent sur notre site internet. Ces informations incluent :</p>
                    <ul>
                        <li>Votre adresse e-mail</li>
                        <li>Votre numéro de téléphone</li>
                    </ul>
                    <p>Ces données sont collectées dans le but de vous recontacter si vous avez exprimé un besoin concernant
                        un service sur mesure ou toute autre demande liée à nos articles.</p>

                    {{-- 2 --}}
                    <li class=" fs-2">Utilisation des informations</li>
                    <p>Les informations collectées sont utilisées exclusivement pour :</p>
                    <ul>
                        <li>Répondre à vos demandes ou vous fournir des informations sur nos services.</li>
                        <li>Vous contacter pour un suivi ou des précisions supplémentaires sur votre requête.</li>
                    </ul>
                    <p>Nous ne partageons, ne vendons ni ne louons vos informations personnelles à des tiers.</p>

                    {{-- 3 --}}
                    <li class=" fs-2">Sécurité des informations</li>
                    <p>Nous mettons tout en œuvre pour protéger vos données personnelles contre l'accès non autorisé, la
                        perte ou la modification. </p>

                    {{-- 4 --}}
                    <li class=" fs-2">Durée de conservation des données</li>
                    <p>Les informations que vous fournissez via le formulaire de contact sont conservées uniquement pour la
                        durée nécessaire à répondre à votre demande. </p>

                    {{-- 5 --}}
                    <li class=" fs-2">Vos droits</li>
                    <p>En vertu des lois sur la protection des données, vous disposez des droits suivants :</p>
                    <ul>
                        <li>Accéder aux informations que nous détenons à votre sujet.</li>
                        <li>Demander la correction ou la suppression de vos données personnelles.</li>
                        <li>Vous opposer à l'utilisation de vos informations.</li>
                    </ul>
                    <p>Pour exercer ces droits, contactez-nous par mail, WhatsApp ou tout autre canal par lequel nous sommes
                        joignable</p>

                    {{-- 6 --}}
                    <li class=" fs-2">Collecte de données supplémentaires</li>
                    <p>Nous tenons à préciser que nous ne collectons aucune autre information personnelle via notre site
                        internet. Nous n’utilisons pas de cookies ou d’outils de suivi.
                    </p>

                    {{-- 7 --}}
                    <li class=" fs-2">Modification de notre politique</li>
                    <p>Nous nous réservons le droit de mettre à jour cette politique de confidentialité pour refléter les
                        changements dans nos pratiques ou les exigences légales. Toute modification sera publiée sur cette
                        page avec une date de mise à jour.
                    </p>

                    {{-- 8 --}}
                    <li class=" fs-2">Contactez-nous</li>
                    <p>Pour toute question concernant notre politique de confidentialité ou la manière dont vos données sont
                        traitées, vous pouvez nous contacter :</p>
                    <ul>
                        <li>Adresse e-mail : innobignon@gmail.com</li>
                        <li>Téléphone : +229 01 97 06 93 05</li>
                    </ul>
                    <p>Nous vous remercions de votre confiance et de votre intérêt pour Bignon du Bénin.</p>
                </ol>
            </div>
        </div>





    </div>
@endsection
