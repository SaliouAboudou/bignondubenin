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
    </div>
@endsection
