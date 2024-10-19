@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
    <h1>Comics List</h1>
    <div class="comics-list">
        @foreach($comics as $comic)
            <div class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
                <p><strong>Price:</strong> {{ $comic['price'] }}</p>
                <p><strong>Series:</strong> {{ $comic['series'] }}</p>
                <p><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>
                <p><strong>Artists:</strong> {{ implode(', ', $comic['artists']) }}</p>
                <p><strong>Writers:</strong> {{ implode(', ', $comic['writers']) }}</p>
            </div>
        @endforeach
    </div>
@endsection

@section('styles')
<style>
    
    .comics-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding: 20px;
    }
    .comic-card {
        background-color: white;
        padding: 15px;
        border: 1px solid #ddd;
        text-align: center;
    }
    .comic-card img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
    .comic-card h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    .comic-card p {
        font-size: 0.9em;
        margin-bottom: 5px;
    }
</style>
@endsection
