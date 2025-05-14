@extends('app')
@section('content')
    @include('layouts.navbar')
    <div class="container-fluid  py-2">
        <div class="row rounded py-3 d-flex justify-content-center align-items-center">
            <div class="col-md-6 d-flex justify-content-center ">
                <img class="rounded-3 w-50" src="{{ asset('images/image_contact.avif') }}" alt="">
            </div>
            <div class="col-md-6 d-flex flex-wrap justify-content-center">
                <h1 class=" fs-6">Un projet d'ameublement à nous confier ?</h1>
                <form action="" class="w-75">
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class=" btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div
                class="col-md-2 border border-secondary card py bg-primary d-flex flex-column justify-items-center px-5 py-5  text-white ">
                <h4>Cotonou</h4>
                <p>Cadjèhoun, à côté de la pharmacie Cadjèhoun</p>
            </div>

            <div
                class="col-md-2 border border-tertiary card py bg-tertiary d-flex flex-column justify-items-center px-5 py-5 ">
                <h4>Porto-Novo</h4>
                <p>Akonaboè, à côté de la bibliothèque nationale</p>
            </div>

            <div
                class="col-md-2 border border-secondary card py bg-primary d-flex flex-column justify-items-center px-5 py-5  text-white ">
                <h4>Téléphone</h4>
                <p>(229) 01 97 06 93 05</p>
            </div>
            <div
                class="col-md-2 border border-tertiary card py bg-tertiary d-flex flex-column justify-items-center px-5 py-5 ">
                <h4>E-mail</h4>
                <p>innobignon@gmail.com</p>
            </div>
            <div
                class="col-md-2 border border-tertiary card py bg-primary d-flex flex-column justify-items-center px-5 py-5 text-white">
                <h4>Nous suivre</h4>
                <p>innobignon@gmail.com</p>
                <div class=" d-flex gap-2">
                    <i class="fa-brands fa-facebook-f p-2 rounded-circle bg-secondary"></i>
                    <i class="fa-brands fa-tiktok p-2 rounded-circle bg-secondary"></i>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>


    </div>
@endsection
