@extends('app')

@section('content')
   <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 w-100" style="max-width: 500px;">
        <h3>Connexcion</h3>
        <form action="">
            {{-- Email --}}
            <div class="form-group mb-3">
                <label for="email">Email/Nom Utilisateur</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            {{-- Mot de passe --}}
            <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            {{-- Bouton --}}
            <div class="form-group mb-0 text-end">
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</div>

@endsection
