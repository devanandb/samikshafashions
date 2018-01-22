@extends('layouts.app')

@section('title')
    Dashboard
@endsection
@section('meta')
    <!-- <meta name="description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta name="keywords" content="Samiksha Fashions, Fashion Jewelry, Temple Jewelry, Oxidised Jewelry">

    <meta property="og:title" content="Home | Samiksha Fashions">
    <meta property="og:description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta property="og:image" content="{{ Request::root() }}/images/icon.svg">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="home" />

    <meta name="twitter:title" content="Home | Samiksha Fashions">
    <meta name="twitter:description" content="Samiksha Fashions is a leading vendor for women's jewellery needs, be it for day to day or a special occassion!">
    <meta name="twitter:image" content="{{ Request::root() }}/images/icon.svg">
    <meta name="twitter:card" content="{{ request()->fullUrl() }}"> -->
@endsection


@section('content')

    <br><br><br>
    <div class="uk-container">
        <h1>Admin dashboard</h1>
        <br><br>

        <ul class="uk-tab-left tag-links uk-list" >
            <li><a href="#">Articles</a></li>
            <li><a href="/admin/dashboard/categories">Categories {{ count($categories) }}</a></li>
            <li><a href="#">Tags</a></li>
            <li><a href="#">Subscriptions</a></li>
        </ul>
    </div>
    <br><br><br>
    
@endsection