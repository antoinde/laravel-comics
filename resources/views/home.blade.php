@extends('home-layout')


<!-- Main -->
@section('main')
<main>
    <div class="general-container">
        <span class="likeAButton"> CURRENT SERIES </span>
        <div class="cards-container">

            @foreach($comics as $fumetto)
            <div class="card">
                <div class="img-card-container">
                    <img src="{{ $fumetto['thumb'] }}" alt="fumetto {{ $fumetto['series'] }}">
                </div>
                <div class="info-card-container">
                    <div><strong>{{ $fumetto['series'] }}</strong></div>
                    <div>{{ $fumetto['title'] }}</div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="button-area">
            <button class="likeAButton">LOAD MORE</button>

        </div>
    </div>
</main>

@endsection


