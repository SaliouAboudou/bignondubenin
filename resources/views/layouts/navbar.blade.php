 <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
                <div class="container-fluid">
                    {{-- LOGO  --}}
                    <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                        <!-- Image : toujours visible -->
                        <img class="w-25 " src="{{ asset('images/logo_bignon.png') }}" alt="Logo Bignon">

                        <!-- Texte : caché sur mobile, visible à partir de md -->
                        <h1 class="fs-4 d-none d-md-block text-black">BIGNON DU BENIN</h1>
                    </a>

                    {{-- Button Toggle  --}}
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- MENU  --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-black active fs-6" aria-current="page"
                                    href="{{ route('accueil') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="{{ route('canape-fauteils') }}">Canapés et fauteils</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="{{ route('lits') }}">Lits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="{{ route('table-manger') }}">Tables à manger</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                        {{-- Buttons Connexion  --}}
                        <button class="btn btn-primary fs-6" type="submit">Connexion</button>
                    </div>
                </div>
            </nav>
