<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ 'Gourmets' }}
        {{ Request::is('*/users/*') || Request::is('*/users') || Request::is('*/dashboard') ? " | Étudiants" : "" }}
        {{ Request::is('*/books/*') || Request::is('*/books') ? " | Livres" : "" }}
        {{ Request::is('*/purchases/*') || Request::is('*/purchases') ? " | Achats" : "" }}
        {{ Request::is('*/settings') ? " | Paramètres" : "" }}
    </title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<h1 class="hidden">Le marché des gourmets</h1>
<nav class="navbar">
    <div class="navbrand">
        <a href="/"><img class="logo" src="../resources/svg/Logo_club.png" alt=""></a>
        <div class="burger" id="burger">
			<span class="burger-open">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
					<g fill="rgba(78, 0, 47, 1)" fill-rule="evenodd">
						<path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z"/>
					</g>
				</svg>
			</span>
            <span class="burger-close">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
					<path fill="rgba(78, 0, 47, 1)" fill-rule="evenodd"
                          d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z"/>
				</svg>
			</span>
        </div>
    </div>
    <ul class="menu" id="menu">
        <li {{ Request::is('*/home/*') || Request::is('*/home') || Request::is('*/dashboard') ? "current_page_item" : "" }}>
            <a href="#">
                Accueil
            </a>
        </li>
        <li {{ Request::is('*/exposants/*') || Request::is('*/exposants') ? "current_page_item" : "" }}>
            <a href="#">
                Exposants
            </a>
        </li>
        <li {{ Request::is('*/archive/*') || Request::is('*/archive') ? "current_page_item" : "" }}>
            <a href="#">
                Photos
            </a>
        </li>
        <li {{ Request::is('*/restaurant/*') || Request::is('*/restaurant') ? "current_page_item" : "" }}>
            <a href="#">
                Restaurant
            </a>
        </li>
        <li {{ Request::is('*/about/*') || Request::is('*/about') ? "current_page_item" : "" }}>
            <a href="#">
                Qui sommes-nous ?
            </a>
        </li>
        <li {{ Request::is('*/contact/*') || Request::is('*/contact') ? "current_page_item" : "" }}>
            <a href="#">
                Contact
            </a>
        </li>
        <li class="containerBtnTickets">
            <a href="#" class="btnTickets">
                Billets
            </a>
        </li>
    </ul>
</nav>
<main>
    @yield('content')
</main>
@yield('footer')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
