<div id="navbar_grey" class="d-flex flex-row-reverse bg-grey pr-3">
    <a href="https://dsg.dlrg.de/" class="p-2" target="_blank" rel="noopener noreferrer">DSG</a>
    <a href="https://dlrg-jugend.de/" class="p-2" target="_blank" rel="noopener noreferrer">DLRG-Jugend</a>
    <a href="https://www.dlrg.de/informieren/die-dlrg/kontakt-und-ansprechpartner/" class="p-2" target="_blank"
       rel="noopener noreferrer">Kontakt</a>
    <a href="https://shop.dlrg.de" class="p-2" target="_blank" rel="noopener noreferrer">Shop</a>
    <a href="https://www.dlrg.de/informieren/die-dlrg/presse/" class="p-2" target="_blank" rel="noopener noreferrer">Presse</a>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dlrg">
    <a class="navbar-brand mt-2 mb-2 ms-3" href="{{ route('welcome') }}">
        <img src="{{ asset('assets/images/DLRG-Logo.svg') }}" alt="DLRG-Logo" width="181" height="66" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto ms-3">
            <li class="nav-item">
                <a @class(['nav-link', 'active' => request()->is('/')]) href="{{ route('welcome') }}">
                    <i class="fa-solid fa-house fa-fw me-2"></i>Startseite</a>
            </li>
        </ul>
    </div>
</nav>
