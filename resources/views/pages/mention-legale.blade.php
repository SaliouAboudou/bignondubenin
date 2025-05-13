@extends('app')
@section('content')
    <div class=" container-fluid">

        @include('layouts.navbar')



        <div class="row d-flex py-3 justify-content-center align-items-center position-relative">
            <div style="height: 10rem; overflow: hidden; width: 100%;" class="position-relative">
                <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('images/canape1.webp') }}" alt="">
                <!-- Texte superposé sur l'image -->
                <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white font-bold">Mentions
                    légales</h1>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <em class=" fs-6">Dernière mise à jour : 04/03/2025</em>
                <p>Conformément à la réglementation en vigueur, nous mettons à votre disposition les informations suivantes
                    concernant l’entreprise Bignon du Bénin et son site internet.</p>
                <ol type="1">
                    {{-- 1  --}}
                    <li class=" fs-2">Informations sur l’éditeur du site</li>
                    <ul>
                        <li>Forme juridique : Établissement (Ets)</li>
                        <li>Siège social : Cadjèhoun, à côté de la pharmacie Cadjèhoun, Cotonou, Bénin</li>
                        <li>Téléphone : +229 01 97 06 93 05</li>
                        <li>E-mail : innobignon@gmail.com</li>
                        <li>RCCM : RB/PNO/19 A 95 46</li>
                        <li>Identifiant Fiscale Unique (IFU) : 0201910594677</li>
                    </ul>


                    {{-- 2 --}}
                    <li class=" fs-2">Hébergement du site</li>
                    <ul>
                        <li>Hébergeur : Wix.com Ltd.</li>
                        <li>Siège social de l’hébergeur : 40 Port de Tel Aviv Jaffa 6350671 Israël</li>
                        <li>Site internet : www.wix.com</li>
                    </ul>

                    {{-- 3 --}}
                    <li class=" fs-2">Propriété intellectuelle</li>
                    <p>Le contenu du site internet Bignon du Bénin (textes, images, graphiques, logo, etc.) est protégé par
                        les lois relatives à la propriété intellectuelle. Toute reproduction, représentation ou diffusion de
                        ces éléments sans autorisation écrite préalable est strictement interdite et constitue une violation
                        des droits d’auteur.</p>

                    {{-- 4 --}}
                    <li class=" fs-2">Limitation de responsabilité</li>
                    <p>Bignon du Bénin s’efforce d’assurer l’exactitude et la mise à jour des informations présentes sur le
                        site. Cependant, l’entreprise ne saurait être tenue responsable : </p>
                    <ul>
                        <li>d’un dysfonctionnement technique rendant le site inaccessible temporairement ;</li>
                        <li>de tout dommage direct ou indirect résultant de l’utilisation du site ou des informations qu’il
                            contient.</li>
                    </ul>


                    {{-- 5 --}}
                    <li class=" fs-2">Données personnelles</li>
                    <p>Conformément à notre Politique de confidentialité, Bignon du Bénin s’engage à respecter la
                        confidentialité des données personnelles que vous fournissez via le formulaire de contact.
                        Nous ne collectons aucune autre donnée personnelle sans votre consentement explicite.</p>
                    <ul>
                        <li>Accéder aux informations que nous détenons à votre sujet.</li>
                        <li>Demander la correction ou la suppression de vos données personnelles.</li>
                        <li>Vous opposer à l'utilisation de vos informations.</li>
                    </ul>
                    <p>Pour exercer ces droits, contactez-nous par mail, WhatsApp ou tout autre canal par lequel nous sommes
                        joignable</p>

                    {{-- 6 --}}
                    <li class=" fs-2">Contact</li>
                    <p>Pour toute question ou réclamation concernant les présentes mentions légales ou le site internet, veuillez nous contacter à l’adresse suivante :
                    </p>

                    <ul>
                        <li>Adresse e-mail : innobignon@gmail.com</li>
                        <li>Téléphone : +229 01 97 06 93 05</li>
                    </ul>
                </ol>
            </div>
        </div>
    </div>
@endsection
