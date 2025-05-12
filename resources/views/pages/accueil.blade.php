@extends('app')
@section('content')
 {{-- HEADER  --}}
    @include('layouts.header')

    <div class="container-fluid bg-primary py-2">
        <div class="row bg-white rounded py-3">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row d-flex flex-wrap">
                    <div class="col-6 col-md-2 mb-3 ">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                    <div class="col-6 col-md-2  mb-3">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                    <div class="col-6 col-md-2  mb-3">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                    <div class="col-6 col-md-2  mb-3">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                    <div class="col-6 col-md-2  mb-3">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                    <div class="col-6 col-md-2  mb-3">
                        <img class="img-fluid rounded" src="{{ asset('images/canape1.webp') }}" alt="Canapé 1">
                        <div class=" row mt-3">
                            <h6>Table à Manger</h6>
                            <p>65 000 FCFA</p>
                        </div>
                        <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <div class="container-fluid  py-2">
        <div class="row rounded py-3 d-flex justify-content-center">
            <div class="col-12 col-md-4 d-flex flex-column align-items-center mb-3">
                <a href="#">Canapé et fauteuil</a>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column align-items-center mb-3">
                <a href="#">Canapé et fauteuil</a>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column align-items-center mb-3">
                <a href="#">Canapé et fauteuil</a>
            </div>
        </div>
    </div>

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
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
