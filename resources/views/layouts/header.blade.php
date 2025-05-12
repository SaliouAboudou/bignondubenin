
    <div class="container-fluid vh-100 w-100 bg-primary">
        <div class=" row bg-light py-1 w-full ">
            {{-- NavBAr  --}}
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
                                    href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="#">Canapés et fauteils</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="#">Lits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="#">Tables à manger</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fs-6" href="#">Contact</a>
                            </li>
                        </ul>
                        {{-- Buttons Connexion  --}}
                        <button class="btn btn-primary fs-6" type="submit">Connexion</button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-10 position-relative py-3">
                <!-- Image -->
                <img class="img-fluid w-100 full-height-mobile rounded"
                    src="https://static.wixstatic.com/media/641465_5fc4647dc99644749ffa3767b665ff97~mv2.png/v1/fill/w_1280,h_515,al_c,q_90,enc_avif,quality_auto/641465_5fc4647dc99644749ffa3767b665ff97~mv2.png"
                    alt="">

                <!-- Texte superposé -->
                <div
                    class="row col-4 textce-center position-absolute top-50 start-50 translate-middle text-white fw-bold fs-1 text-uppercase">
                    <h1 class=" text-center fs-1 fw-bolder">Bienvenue à Bignon du benin</h1>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
