 <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
     <div class="container-fluid">
         {{-- LOGO  --}}
         <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('accueil') }}">
             <!-- Image : toujours visible -->
             <img class="w-25 " src="{{ asset('images/logo_bignon.png') }}" alt="Logo Bignon">

             <!-- Texte : caché sur mobile, visible à partir de md -->
             <h1 class="fs-4 d-none d-md-block text-black">BIGNON DU BENIN</h1>
         </a>

         {{-- Button Toggle  --}}
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
             {{-- <a class="btn btn-primary fs-6" href="{{ route('login') }}">Connexion</a> --}}
         </div>
         <!-- Panier (badge) -->
         <div class="position-relative px-2" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
             aria-controls="staticBackdrop">
             <a href="#" class="text-danger px-3 position-relative d-inline-block">
                 <i class="fa-solid fa-cart-plus fa-lg text-secondary fs-3"></i>
                 <span id="cart-badge"
                     class="position-absolute top-25 start-75 translate-middle badge rounded-pill bg-danger font-bold">
                     0
                 </span>
             </a>
         </div>



     </div>
 </nav>


 <!-- Modal positionné à droite -->
 <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
     aria-labelledby="staticBackdropLabel">
     <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="staticBackdropLabel">Panier</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <div class=" table-responsive">
             <table class="table table-striped ">
                 <thead>
                     <tr>
                         <th class=" bg-secondary-subtle" style=" font-size: 12px">Produit</th>
                         <th class=" bg-secondary-subtle" style=" font-size: 12px">Quantité</th>
                         <th class=" bg-secondary-subtle" style=" font-size: 12px">Prix</th>
                         <th class=" bg-secondary-subtle" style=" font-size: 12px">Montant</th>
                         <th class=" bg-secondary-subtle" style=" font-size: 12px"></th>
                     </tr>
                 </thead>
                 <tbody id="cart-body">
                     <tr id="empty-row">
                         <td colspan="4" style=" font-size: 12px" class="text-center text-muted">
                             Aucun produit ajouté pour l’instant.
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
