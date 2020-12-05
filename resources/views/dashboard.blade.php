@extends('layouts.app')
@section('content')
    <section class="containerHome">
        <div class="containerPresentationHome">
            <div class="containerTicketsHome" id="containerTicketsHome">
                <a class="ctaTickets" id="ctaTickets" href="#" title="Billets">Billet</a>
            </div>
            <div class="logo">
                <img src="" alt="Logo des marchés des gourmets">
            </div>
            <div class="containerTitleHome">
                <div>
                    <h2>
                        Le marché des gourmets
                    </h2>
                </div>
                <div class="containerTitle">
                    <p class="textTitle">
                        <span>
                            produits des terroirs européens
                        </span>
                    </p>
                    <p class="marketTitle">
                        <span>
                            21<sup>e</sup> marché
                        </span>
                    </p>
                </div>
            </div>
            <div class="containerImagesHome">
                <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                     srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                     sizes="100vw" alt="Image du salon du marché des gourmets">
                <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                     srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                     sizes="100vw" alt="Image du salon du marché des gourmets">
                <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                     srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                     sizes="100vw" alt="Image du salon du marché des gourmets">
            </div>
        </div>
        <div class="containerTextHome">
            <p>
                Le Marché des Gourmets est <b>un événement annuel</b> organisé par le Rotary Club de Flémalle sur le
                prestigieux site <b>de Val-Saint-Lambert à la salle des moines</b> afin d'obtenir des fonds pour aider
                <b>les plus démunis.</b>
            </p>
            <p>
                Depuis lors, la fréquentation n'a cessé d'augmenter pour <b>atteindre 4000 visiteurs</b> et plusieurs
                pays et régions se sont succédé comme notamment : l'Irlande, le Portugal, l'Italie et tant d’autres.
            </p>
            <div>
                <a href="#" class="btnCta">Devenir exposant</a>
            </div>
            <!-- picto fleche -->
        </div>
    </section>
@endsection
@section('footer')
    <footer>
        <section>
            <h2 class="hidden">
                Informations pratiques
            </h2>
            <div class="containerPracticalInformation">
                <section>
                    <!-- picto -->
                    <div>
                        <div class="pictoDateFooter">
                        </div>
                        <h3 class="titleDateFooter">
                            Quand ?
                        </h3>
                    </div>
                    <p>
                        Le 24 mars 2021 de 16h à 22h
                    </p>
                    <p>
                        Le 25 mars 2021 de 16h à 22h
                    </p>
                </section>
                <section>
                    <!-- picto -->
                    <div>
                        <div class="pictoPriceFooter">
                        </div>
                        <h3 class="titlePriceFooter">
                            Prix ?
                        </h3>
                    </div>
                    <p>
                        Entrée simple : 6 €
                    </p>
                    <p>
                        Entrée gratuite pour les moins de 16 ans.
                    </p>
                </section>
                <section>
                    <!-- picto -->
                    <div>
                        <div class="pictoLocationFooter">
                        </div>
                        <h3 class="titleLocationFooter">
                            Où ?
                        </h3>
                    </div>
                    <div>
                        <p>
                            À la salle des moines,
                        </p>
                        <p>
                            Val-Saint-Lambert, 4540 Amay
                        </p>
                    </div>
                </section>
            </div>
        </section>
        <a href="/">
            <img class="logoFooter" src="../resources/svg/Logo_club.png" alt="Logo du marché des gourmets">
        </a>
        <div>
            <a href="#" class="containerActualityFooter">
                <p class="actualityFooter">Suivez notre actualité sur :<img src="../resources/svg/facebook.svg"
                                                                            class="logoFcb" alt="logo Facebook"></p>
            </a>
        </div>
        <small>Placé sous le patronage de : Simonis Isabelle, Mottard Paul-Emile et Javaux Jean-Michel</small>
    </footer>
@endsection
