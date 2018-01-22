@extends('layouts.app')

@section('title')
    Home
@endsection
@section('meta')
    <meta name="description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta name="keywords" content="Samiksha Fashions, Fashion Jewelry, Temple Jewelry, Oxidised Jewelry">

    <meta property="og:title" content="Home | Samiksha Fashions">
    <meta property="og:description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta property="og:image" content="{{ Request::root() }}/images/icon.svg">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="home" />

    <meta name="twitter:title" content="Home | Samiksha Fashions">
    <meta name="twitter:description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta name="twitter:image" content="{{ Request::root() }}/images/icon.svg">
    <meta name="twitter:card" content="{{ request()->fullUrl() }}">
@endsection


@section('content')

<!-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif -->
    <section class="angled-hero uk-light" style="background-image: linear-gradient(111deg, rgba(118, 96, 239, .75), rgba(214, 89, 234, 1)), url('/images/hero.jpg')">
        
        <div class="uk-container">
            <div class="hero-box">
                <h1 class="hero-title">
                    Flaunt your style.
                </h1>
                <h3 class="uk-width-3-4@m">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis obcaecati, necessitatibus officia animi consequatur praesentium! Aliquam itaque, distinctio, repellat cumque assumenda pariatur officia asperiores.</h3>
                <br>
                <a href="" class="uk-button uk-button-secondary">See Categories</a>
            </div>
        </div>

        <div class="skew"></div>
    </section>


    <section class="category-summary">
        <div class="uk-container">
            <h2>Categories</h2>
            <div class="summary-box">
                <div class="" uk-grid>
                    <div class="uk-width-1-3@m">
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/oxidized_j.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Oxidised Jewelry
                                </div>
                            </div>
                        </a>
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/oxidised_e.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Oxidised Earrings
                                </div>
                            </div>
                            
                        </a>
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/oxidised_tj.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Oxidised Thread Jewelry
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-1-3@m">
                        <a href="" class="card one-half" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/fashion_j.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Fashion Jewelry
                                </div>
                            </div>
                        </a>
                        <a href="" class="card one-half" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/traditional_j.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Traditional Jewelry
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-1-3@m">
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/bangles.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Bracelets/ Bangles
                                </div>
                            </div>
                        </a>
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/anklets.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Anklets
                                </div>
                            </div>
                        </a>
                        <a href="" class="card one-third" style="background-image: linear-gradient(0deg, rgba(40, 40, 40, .9), rgba(214, 89, 234, 0)), url('/images/maang_t.jpg')">
                            <div class="text-box">
                                <div class="cat-title">
                                    Maang Tika
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section class="testimonials">
        <div class="uk-container">
            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: slide; autoplay: true; min-height: 250; max-height: 600">
            
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-width-2-3@m each-slide">
                                <h3><span uk-icon="icon: quote-right; ratio: 2.5"></span> Really each product is worth the money! Felt really happy. It looks really pretty and unique product finishing is very nice. Great customer service. <span uk-icon="icon: quote-right; ratio: 2.5"></span></h3>
                                <div class="author">Sanjay</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-width-2-3@m each-slide">
                                <h3><span uk-icon="icon: quote-right; ratio: 2.5"></span> Excellent experience!! Just love the products from SamikshaFashions. Looking forward to buying more products from them. <span uk-icon="icon: quote-right; ratio: 2.5"></span></h3>
                                <div class="author">Snehal</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-width-2-3@m each-slide">
                                <h3><span uk-icon="icon: quote-right; ratio: 2.5"></span> Excellent quality..unique collections..love to shop more from SamikshaFashions. Excellent craftmanship.great fan of their jewellery. <span uk-icon="icon: quote-right; ratio: 2.5"></span></h3>
                                <div class="author">
                                    Aliya
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
            </div>
        </div>
    </section>

    <!-- <section class="top-sellers">
        <div class="uk-container">
            <h2>Top Sellers</h2>
            
            <div class="sellers-box">
                <div uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="item-card">
                            <div class="item-image" style="background-image: url('/images/oxidised_tj.jpg')">
                                
                            </div>
                            <div class="item-details">
                                <h4>Oxidised jewelry</h4>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        asdasd
                    </div>
                    <div class="uk-width-1-3@m">
                        asdasd
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="our-story">
        <div class="uk-container">
            <h2>Our story</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi adipisci non, nulla excepturi ut fuga nam aperiam in, quaerat cum officiis eaque culpa soluta ducimus eius similique eos voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad dolores, dolore, possimus necessitatibus libero.
            </p>
        </div>
    </section>
@endsection