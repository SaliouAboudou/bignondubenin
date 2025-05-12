@extends('app')
@section('content')
    @include('layouts.navbar')
    <div class="container  py-2">
        <div class="row d-flex py-3 justify-content-center align-items-center position-relative">
            <div style="height: 10rem; overflow: hidden; width: 100%;" class="position-relative">
                <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('images/canape1.webp') }}" alt="">
                <!-- Texte superposé sur l'image -->
                <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white font-bold">CANAPES</h1>
            </div>
        </div>

        <div>
            <h5>Faites votre choix parmi une large gamme de canapés et de fauteuils haut de gamme</h5>
        </div>

        <div class="row d-flex justify-content-end">
            <div class="col-md-2 py-2 mx-3">
                <form action="">
                    <div class="row d-flex ">
                        <label for="">Trier Par</label>
                        <select class="form-select" name="" id="">
                            <option value="">Faite un choix</option>
                            <option value="">Prix (bas à élévé)</option>
                            <option value="">Prix (élévé à bas)</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="container-fluid  py-2">
            <div class="row bg-white rounded py-3">
                <div class="col-12">
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
            </div>
        </div>

    </div>
@endsection
