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
                            Notre liste des exposants
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
                    Au marché des gourmets d’Amay, nous avons sélectionné pour vous <b>plus de 30 exposants !</b> Ces
                    personnes passionnées donnent tous les jours <b>le meilleurs d’eux-mêmes</b> pour vous proposer <b>des
                        produits sains et de qualité.</b>
                </p>
                <p>
                    Alors, n’hésitez pas à devenir exposant à Amay lors de cette 21e édition.
                </p>
                <div>
                    <a href="#" class="btnCta">Devenir exposant</a>
                </div>
            </div>
        </div>
    </section>
    <div class="containerBecomeExposant">
        <div class="containerBecomeVigneron">
            <p>
                Vous êtes vigneron, producteur ou commerçant et vous souhaitez participer au marché des gourmets ? Alors
                vous êtes au bon endroit !
            </p>
        </div>
        <div class="containerButtonExpo">
            <a href="#" class="btnCta btnExposant">Devenir exposant</a>
        </div>
    </div>
@endsection
