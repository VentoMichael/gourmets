@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome">
                <div class="containerTicketsHome" id="containerTicketsHome">
                    <a class="ctaTickets" id="ctaTickets" href="#" title="Billets">Billet</a>
                </div>
                <div class="logo logoHome">
                    <img src="../resources/svg/Logo_club.png" alt="Logo des marchés des gourmets">
                </div>
                <div class="containerTitleHome">
                    <div>
                        <h2 class="titleExposant">
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
            <div class="containerTextHome">
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
        <div class="containerMenu containerPersoExpo">
            <h2 class="hidden">
                Informations personnelles de Vins nobles de Sicile
            </h2>
            <div>
                <div>
                    <p class="label">
                        Nom du commerce
                    </p>
                    <p>
                        Vins noble de la Sicile
                    </p>
                </div>
                <div>
                    <p class="label">
                        Adresse et n°
                    </p>
                    <p>
                        Rue blanche, 4, bp 10
                    </p>
                </div>
                <div>
                    <p class="label">
                        Email
                    </p>
                    <p>
                        <a href="mailto:noblessicile@hotmail.com"></a>noblessicile@hotmail.com
                    </p>
                </div>
                <div>
                    <p class="label">
                        Pays
                    </p>
                    <p>
                        Sicile
                    </p>
                </div>
                <div>
                    <p class="label">
                        Téléphone
                    </p>
                    <p>
                        <a href="tel:+32494827265">0494 827 265</a>
                    </p>
                </div>
                <div>
                    <p class="label">
                        Site internet
                    </p>
                    <p>
                        <a href="http://www.champagne-leseurre.com"></a>http://www.champagne-leseurre.com
                    </p>
                </div>
                <div>
                    <p class="label">
                        Descriptif des produits
                    </p>
                    <p>
                        Le domaine Murgo est situé dans une position privilégiée sur le versant sud-est de l'Etna sur la
                        côte est de la Sicile, à une hauteur de 500 mètres au-dessus du niveau de la mer.
                    </p>
                </div>
            </div>
            <div>
                <!-- Google map -->
                <div>
                    <p class="label">
                        Tags associé aux produits
                    </p>
                    <div class="tagsContainer">
                        <div class="moduleTag">
                            Vins
                        </div>
                        <div class="moduleTag">
                            Sicile
                        </div>
                        <div class="moduleTag">
                            Multifruits
                        </div>
                        <div class="moduleTag">
                            Bio
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="btnCta MenuCta">Visiter son site internet <span class="arrowCta"></span></a>
            </div>
        </div>
    </section>
@endsection
