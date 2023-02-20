@extends('layouts.index')

@section('page_title', 'Home Page')

@section('content')

    <div class="wrapper">
        <section class="post">
            <div class="osnova-post">
                <div class="one-post">
                    <div class="header-post">
                        <img src="public/images/default-image.png" alt="post-image" class="post-image">
                    </div>
                    <div class="bottom-post">
                        <p class="title__post">
                            Самая крутая книга на свете
                        </p>
                        <p class="anons__post">
                            Подзаголовок круче, чем само название
                        </p>
                        <p class="category__post">Fantastic</p>
                    </div>
                    <div class="post-button">
                        <a href="#" class="button__post">More info</a>
                    </div>
                </div>
            </div>
            @auth
            <div class="button-post-page">
                <a href="{{route('book.create')}}" class="post-button-page">Add books</a>
            </div>
            @endauth
        </section>
    </div>
@endsection
