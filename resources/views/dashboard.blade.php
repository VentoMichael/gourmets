@extends('layouts.app')
@section('content')
    <section class="containerHome">
        <div class="containerPresentationHome">
            <div class="containerTicketsHome" id="containerTicketsHome">
                <a class="ctaTickets" id="ctaTickets" href="#" title="Billets">Billet</a>
            </div>
            <div class="logo logoHome">
                <img src="../resources/svg/Logo_club.png" alt="Logo des marchés des gourmets">
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
        </div>
    </section>
    <div class="containerAimHome">
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="resources/img/sausage.jpg"
                         srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                         sizes="100vw" alt="Image de saucissons">
                </div>
                <div class="containerText">
                    <h2>
                        Qu'est ce que l'on y retrouve ?
                    </h2>
                    <p>
                        Le marché des gourmets vous propose <b>une large gamme de produits</b> comestible (charcuteries,
                        vins,
                        fromages
                        …), une gamme que <b>vous ne trouverez pas ailleurs,</b> car nos commerçants viennent des quatre
                        coins
                        du
                        monde.
                    </p>
                    <div class="containerCtaButton">
                        <a href="#" class="btnCta">Acheter un billet</a>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="containerTextTitleAim containerTextTitleAimSecond">
                <div class="containerImageHome">
                    <img src="resources/img/market.jpg"
                         srcset="resources/img/market_small.jpg 320w, resources/img/market.jpg 640w"
                         sizes="100vw" alt="Image récente du salon du marché des gourmets">
                </div>
                <div class="containerText">
                    <h2>
                        Les années passées
                    </h2>
                    <p>
                        Le marché des gourmets existe depuis plus de 20 ans. Dans le but de vous faire plaisir, <b>une
                            trentaine
                            d’exposants</b> y présenteront divers produits, mais également pour y passer un <b>délicieux
                            moment de
                            dégustations</b> et de rencontres et ce dans la bonne humeur bien sûr !
                    </p>
                    <div class="containerCtaButton">
                        <a href="#" class="btnCta">Acheter un billet</a>
                    </div>
                </div>

            </div>

        </section>
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="resources/img/restaurant.jpg"
                         srcset="resources/img/restaurant_small.jpg 320w, resources/img/restaurant.jpg 640w"
                         sizes="100vw" alt="Image d'un sandwiche">
                </div>
                <div class="containerText">
                    <h2>
                        Notre restaurant
                    </h2>
                    <p>Le marché des gourmets vous propose une carte digne de ce nom. <b>Prix généralement faible et
                            varié</b>
                        dans le
                        goût, nous mettons tout en oeuvre pour que votre visite se passe pour le mieux.
                    </p>
                    <div class="containerCtaButton">
                        <a href="#" class="btnCta">Notre restaurant</a>
                    </div>
                </div>

            </div>

        </section>
    </div>
    <section class="slider">
        <div class="containerTitleSlide">
            <h2>
                Nos 3 derniers exposants
            </h2>
            <div class="arrowsSlide">
                <a class="prev" id="prev"></a>
                <a class="next" id="next"></a>
            </div>
        </div>
        <div class="slideshow-container">

            <section class="mySlides fade">
                <div class="containerSlide">
                    <div>
                        <h3>
                            Vins nobles de la sicile
                        </h3>
                        <p class="regionExposant">
                            Sicile
                        </p>
                        <div class="containerImagesHome">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                        </div>
                    </div>
                    <div class="containerTextExposant">
                        <p class="textExposant">Situé à 600 mètres d'altitude, au nord-est de l'Etna. Des vins
                            classiques
                            qui
                            expriment pleinement son extraordinaire terroir, à savoir celui de l'Etna, le plus grand
                            volcan
                            actif d'Europe. Son caractère à la fois raffiné, austère et puissant lui donne un goût
                            original
                            et
                            unique!</p>
                        <div>
                            <a href="#" class="btnCta">Vins nobles de la sicile</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mySlides fade">
                <div class="containerSlide">
                    <div>
                        <h3>
                            Aveve
                        </h3>
                        <p class="regionExposant">
                            Belgique
                        </p>
                        <div class="containerImagesHome">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                            <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                                 srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                                 sizes="100vw" alt="Image d'un exposant">
                        </div>
                    </div>
                    <div class="containerTextExposant">
                        <p class="textExposant">Situé à 600 mètres d'altitude, au nord-est de l'Etna. Des vins
                            classiques
                            qui
                            expriment pleinement son extraordinaire terroir, à savoir celui de l'Etna, le plus grand
                            volcan
                            actif d'Europe. Son caractère à la fois raffiné, austère et puissant lui donne un goût
                            original
                            et
                            unique!</p>
                        <div>
                            <a href="#" class="btnCta">Vins nobles de la sicile</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="containerAllExposants">
                <a href="#" class="btnCta">Tous les exposants</a>
            </div>
        </div>
    </section>
@endsection
