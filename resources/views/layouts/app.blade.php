<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="Marché des gourmets - Produits locaux">
    <meta name="description"
          content="Des exposants venus partout de l'europe pour vous proposez les meilleurs produits locaux."/>
    <meta name="keywords" content="Vins, fromages, marché, exposants, billets">
    <meta name="language" content="French">
    <meta name="author" content="Vento Michael"/>
    <title>
        {{ 'Gourmets' }}
        {{ Request::is('/') ? " | Accueil" : "" }}
        {{ Request::is('exposants/*') || Request::is('exposants') ? ' | Exposants' : "" }}
        {{ Request::is('gallery') ? ' | Album photos' : "" }}
        {{ Request::is('restaurant') ? ' | Restaurant' : "" }}
        {{ Request::is('about') ? ' | À propos de nous' : "" }}
        {{ Request::is('contact') ? ' | Contact' : "" }}
        {{ Request::is('tickets') ? ' | Billets' : "" }}
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('resources/img/favicon.png') }}">
</head>
<body>

<nav class="navbar navbarId" id="navbar" role="navigation">
    <div class="navbrand" role="banner">
        <div></div>
        <div class="burger burgerId" id="burger" aria-label="menu">
            <span class="burger-open">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
					<g fill="rgba(78, 0, 47, 1)" fill-rule="evenodd">
						<path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z"/>
					</g>
				</svg>
			</span>
            <span class="burger-close" aria-label="menu">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
					<path fill="rgba(78, 0, 47, 1)" fill-rule="evenodd"
                          d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z"/>
				</svg>
			</span>
        </div>
    </div>
    <div>
        <ul class="menu menuId" id="menu">
            <li class="itemMenu">
                <a href="{{route('dashboard.index')}}">
                    <h1 aria-level="1" class="principalTitle">Le marché des gourmets</h1>
                </a>
            </li>
            <li class="itemMenu {{ Request::is('/') ? "current_page_item" : "" }}" aria-current="{{ Request::is('/') ? "page" : "" }}">
                <a href="{{route('dashboard.index')}}">
                    Accueil
                </a>
            </li>
            <li class="itemMenu {{ Request::is('exposants/*') || Request::is('exposants') ? "current_page_item" : "" }}">
                <a href="{{route('exposants.index')}}">
                    Exposants
                </a>
            </li>
            <li class="itemMenu {{ Request::is('gallery') ? "current_page_item" : "" }}" aria-current="{{ Request::is('gallery') ? "page" : "" }}">
                <a href="{{route('gallery.index')}}">
                    Photos
                </a>
            </li>
            <li class="itemMenu {{ Request::is('restaurant') ? "current_page_item" : "" }}" aria-current="{{ Request::is('restaurant') ? "page" : "" }}">
                <a href="{{route('restaurant.index')}}">
                    Restaurant
                </a>
            </li>
            <li class="itemMenu {{ Request::is('about') ? "current_page_item" : "" }}" aria-current="{{ Request::is('about') ? "page" : "" }}">
                <a href="{{route('about.index')}}">
                    À propos
                </a>
            </li>
            <li class="itemMenu {{ Request::is('contact') ? "current_page_item" : "" }}" aria-current="{{ Request::is('contact') ? "page" : "" }}">
                <a href="{{route('contact.index')}}">
                    Contact
                </a>
            </li>
            <li class="containerBtnTickets btnTicketsMenu">
                <a href="{{route('tickets.index')}}" class="btnTickets">
                    Billets
                </a>
            </li>
        </ul>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer>
    <section>
        <h2 aria-level="2" class="hidden">
            Informations pratiques
        </h2>
        <div class="containerPracticalInformation">
            <section>
                <div>
                    <div class="pictoDateFooter">
                    </div>
                    <h3 aria-level="3" class="titleDateFooter">
                        Quand ?
                    </h3>
                </div>
                <div class="textPracticalInformation">
                    <p>
                        Le 24 mars 2021 de 16h à 22h
                    </p>
                    <p>
                        Le 25 mars 2021 de 16h à 22h
                    </p>
                </div>
            </section>
            <section>
                <div>
                    <div class="pictoPriceFooter">
                    </div>
                    <h3 aria-level="3" class="titlePriceFooter">
                        Prix ?
                    </h3>
                </div>
                <div class="textPracticalInformation">
                    <p>
                        Entrée simple : 6 €
                    </p>
                    <p>
                        Entrée gratuite pour les moins de 16 ans.
                    </p>
                </div>
            </section>
            <section itemscope itemtype="https://schema.org/Place">
                <div>
                    <div class="pictoLocationFooter">
                    </div>
                    <h3 aria-level="3" class="titleLocationFooter">
                        Où ?
                    </h3>
                </div>
                <div class="textPracticalInformation" itemprop="address" itemscope itemtype="https://schema.org/Place">
                    <div>
                        <p>
                            À la salle des moines,
                        </p>
                        <p itemprop="streetAddress">
                            Val-Saint-Lambert, <span itemprop="postalCode">4540</span> Amay
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <a href="{{route('dashboard.index')}}">
        <img class="logoFooter" src="../resources/svg/Logo_club.png" alt="Redirection vers la page d'acceuil">
    </a>
    <div role="banner">

        <p class="actualityFooter"><a href="#" class="containerActualityFooter">Suivez notre actualité sur :<img
                    src="../resources/svg/facebook.svg"
                    class="logoFcb" alt="logo Facebook"></a>
        </p>
    </div>
    <small>Placé sous le patronage de : Simonis Isabelle, Mottard Paul-Emile et Javaux Jean-Michel</small>
</footer>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
