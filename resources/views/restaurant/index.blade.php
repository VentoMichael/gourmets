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
                            Un restaurant avec des aliments à votre goût
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
                    Le Marché des Gourmets vous propose un restaurant avec <b>des plats diversifiés</b>, à <b>tous les
                        goûts</b> ainsi qu’à tous les prix.
                </p>
                <p>
                    L'occasion idéale de déguster vos achats au salon autour d'une bonne table!
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
        <div class="containerMenu">
            <h2>
                Menu du restaurant
            </h2>
            <section class="containerPrincipalMeat">
                <h3 class="menuPrincipalMeat">
                    Plats
                </h3>
                <ul>
                    <li>
                        Croquettes aux crevettes grises et salade composée<span>13€</span>
                    </li>
                    <li>
                        Rigatoni aux petits lardons, basilic et tomates confites<span>13€</span>
                    </li>
                    <li>
                        Cannellonis a la ricotta et épinards (Végétarien)<span>13€</span>
                    </li>
                    <li>
                        Boulets à la Liégeoise (Frites, salades)<span>14€</span>
                    </li>
                    <li>
                        Boulets de volaille a l’estragon (Frites, salade)<span>14€</span>
                    </li>
                    <li>
                        Carbonnade de boeuf, carottes fondantes et galettes de pommes de terre<span>15€</span>
                    </li>
                </ul>
            </section>
            <section class="containerPrincipalMeat containerSandwichs">
                <h3 class="menuSandwichs">
                    Sandwichs
                </h3>
                <ul>
                    <li>
                        Dagobert
                        <span>5€</span>
                    </li>
                    <li>
                        Campagnard (Brie, miel, lardons, roquette)
                        <span>5€</span>
                    </li>
                    <li>
                        Italien (Jambon fumé, roquette, tomate confite)
                        <span>5€</span>
                    </li>
                </ul>
            </section>
            <section class="containerPrincipalMeat">
                <h3 class="menuDesserts">
                    Desserts
                </h3>
                <ul>
                    <li>
                        Mousse au chocolat, caramel au beurre salé
                        <span>5€</span>
                    </li>
                    <li>
                        Tiramisu au spéculoos et fruits rouges
                        <span>5€</span>
                    </li>
                </ul>
            </section>
            <div>
                <a href="{{route('tickets.index')}}" class="btnCta MenuCta">Acheter un billet <span class="arrowCta"></span></a>
            </div>
        </div>
    </section>
@endsection
