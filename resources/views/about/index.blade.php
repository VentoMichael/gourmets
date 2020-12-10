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
                            Des bénévoles dans le but d’aider
                        </h2>
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
                    Le Marché des Gourmets est une initiative du Rotary Club de Flémalle afin de <b>soutenir</b> des associations locales, nationales, voire internationales <b>d'aide aux plus démunis.</b> Tous les bénéfices du Marché sont intégralement <b>distribués à ces associations.</b>
                </p>
                <p>
                    Alors, n’hésitez pas à nous rendre visite à Amay lors de cette 21<sup>e</sup> édition.
                <div>
                    <a href="{{route('tickets.index')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="hidden">
            À propos de nous
        </h2>
        <div class="containerAboutUs">
            <section class="containerAboutUsWhySection">
                <img src="resources/svg/question.svg" alt="">
                <h3>
                    Pourquoi ?
                </h3>
                <div>
                    <p>
                        Afin de <b>soutenir</b> des associations locales, nationales et internationales pour aider les plus démunis. Tous les bénéfices du Marché sont intégralement <b>distribués à des associations.</b>
                    </p>
                </div>
            </section>
            <section class="containerAboutUsHowSection">
                <img src="resources/svg/how.svg" alt="">
                <h3>
                    Comment ?
                </h3>
                <div>
                    <p>
                        Une initiative réunissant plus de <b>30 exposants passionnés,</b> ils donnent tous les jours <b>le meilleurs d’eux-mêmes</b> pour vous proposer <b>des produits sains et de qualité.</b>
                    </p>
                </div>
            </section>
        </div>
        <div>
            <section>
                <h3 class="hidden">
                    Notre historique
                </h3>
                <div class="containerHistorical">
                    <img src="resources/img/market.jpg"
                         srcset="resources/img/market_small.jpg 320w, resources/img/market.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <p>
                        <b>Depuis plus de 20 ans,</b> nous organisons le marché des Gourmets, chaque année, dans lesquels <b>une trentaine d’exposants</b> vous proposent leurs meilleurs produits <b>d’une qualité irréprochable.</b>
                    </p>
                </div>
            </section>
        </div>
    </section>
@endsection
