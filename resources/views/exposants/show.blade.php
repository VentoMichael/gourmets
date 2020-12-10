@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome" itemscope itemtype="https://schema.org/Thing">
            <div class="containerPresentationHome">
                <div class="containerTicketsHome" id="containerTicketsHome">
                    <a class="ctaTickets" id="ctaTickets" href="{{route('tickets.index')}}" title="Billets">Billet</a>
                </div>
                <div class="logo logoHome" role="banner">
                    <img src="../resources/svg/Logo_club.png" alt="Logo des marchés des gourmets">
                </div>
                <div class="containerTitleHome">
                    <div>
                        <h2 aria-level="2" itemprop="name" class="titleExposant">
                            Vins nobles de Siciles
                        </h2>
                    </div>
                    <p class="regionExposant">
                        Belgique
                    </p>
                </div>
                <div class="containerImagesHome">
                    <img src="../resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="../resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, ../resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="../resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="../resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, ../resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="../resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="../resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, ../resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                </div>
            </div>
            <div itemprop="description" class="containerTextHome">
                <p>
                    Situé à 600 mètres d'altitude, au nord-est de l'Etna. Des vins classiques qui expriment pleinement
                    son extraordinaire terroir, à savoir celui de l'Etna, le plus grand volcan actif d'Europe.
                </p>
                <p>
                    Alors, n’hésitez pas à nous rendre visite à Amay lors de cette 21<sup>e</sup> édition.
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="containerMenu containerPersoExpo" itemscope itemtype="https://schema.org/Organization">
            <h2 aria-level="2" class="hidden">
                Informations personnelles de Vins nobles de Sicile
            </h2>
            <div class="containerInformationsPerso">
                <div>
                    <p class="label">
                        Nom du commerce
                    </p>
                    <p class="infoPersoExpo" itemprop="legalName">
                        Vins noble de la Sicile
                    </p>
                </div>
                <div itemprop="location" itemscope itemtype="https://schema.org/PostalAddress">
                    <p class="label">
                        Adresse et n°
                    </p>
                    <p class="infoPersoExpo" itemprop="streetAddress">
                        Rue blanche, 4, bp 10
                    </p>
                </div>
                <div>
                    <p class="label">
                        Email
                    </p>
                    <p class="infoPersoExpo" itemprop="email">
                        <a href="mailto:noblessicile@hotmail.com"></a>noblessicile@hotmail.com
                    </p>
                </div>
                <div itemprop="location" itemscope itemtype="https://schema.org/PostalAddress">
                    <p class="label">
                        Pays
                    </p>
                    <p class="infoPersoExpo" itemprop="addressCountry">
                        Sicile
                    </p>
                </div>
                <div>
                    <p class="label">
                        Téléphone
                    </p>
                    <p class="infoPersoExpo" itemprop="telephone">
                        <a href="tel:+32494827265">0494 827 265</a>
                    </p>
                </div>
                <div>
                    <p class="label">
                        Site internet
                    </p>
                    <p class="infoPersoExpo" itemprop="sameAs">
                        <a href="http://www.champagne-leseurre.com"></a>http://www.champagne-leseurre.com
                    </p>
                </div>
                <div>
                    <p class="label">
                        Descriptif des produits
                    </p>
                    <p class="infoPersoExpo">
                        Le domaine Murgo est situé dans une position privilégiée sur le versant sud-est de l'Etna sur la
                        côte est de la Sicile, à une hauteur de 500 mètres au-dessus du niveau de la mer.
                    </p>
                </div>

            </div>
            <div class="containerExpoPlaceTagInfo">
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.353993366886!2d4.29603331574703!3d50.88015827953696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c16fcb77f069%3A0xf913948a7a585e16!2sZone1%20Research%20Park%20120%2C%201731%20Asse!5e0!3m2!1sfr!2sbe!4v1607590415394!5m2!1sfr!2sbe" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="containerTagsExpo">
                    <p class="label">
                        Tags associé aux produits
                    </p>
                    <div class="containerModulesTagsExpo">
                        <div class="moduleTag moduleTagExpo">
                            Vins
                        </div>
                        <div class="moduleTag moduleTagExpo">
                            Sicile
                        </div>
                        <div class="moduleTag moduleTagExpo">
                            Multifruits
                        </div>
                        <div class="moduleTag moduleTagExpo">
                            Bio
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="btnCta MenuCta ctaExpoPerso ctaVisitWebsite">Visiter son site internet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
