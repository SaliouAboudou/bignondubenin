@extends('app')
@section('content')
    @include('layouts.navbar')
    <div class="container  py-2">
        <div class="row d-flex py-3 justify-content-center align-items-center position-relative">
            <div style="height: 10rem; overflow: hidden; width: 100%;" class="position-relative">
                <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('images/table_a_manger.avif') }}"
                    alt="">
                <!-- Texte superposé sur l'image -->
                <h1
                    class="position-absolute top-50 start-50 translate-middle text-center text-white font-bold text-uppercase">
                    Table à Manger</h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center justify-content-md-end">
            <div class="col-12 col-md-3 py-2">
                <form action="">
                    <div class="row">
                        <label for="trierPar" class="form-label">Trier Par</label>
                        <select class="form-select" name="trier" id="trierPar">
                            <option value="">Faites un choix</option>
                            <option value="asc">Prix (bas à élevé)</option>
                            <option value="desc">Prix (élevé à bas)</option>
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
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
                            <div class=" row mt-3">
                                <h6>Table à Manger</h6>
                                <p>65 000 FCFA</p>
                            </div>
                            <button class="w-25 btn btn-sm btn-success rounded font-bold">+</button>
                        </div>

                        <div class="col-6 col-md-2 mb-3 ">
                            <img class="img-fluid rounded" src="{{ asset('images/table_a_manger.avif') }}" alt="Canapé 1">
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
