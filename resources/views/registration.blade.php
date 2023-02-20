@extends('layouts.index')

@section('page_title', 'Registration')

@section('content')
    <section class="registration">
        <div class="osnova-registration">
            <h1 class="title__page">
                Registration users
            </h1>
            <form action="{{route('register')}}" class="registration-form" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="repeat_password" placeholder="Repeat Password">
            <input type="submit" value="Registration" class="registration-button">

            @if($errors->any())
                <li class="errors">
                    @foreach($errors->all() as $error)
                        <p>
                            {{$error}}
                        </p>
                    @endforeach
                </li>
            @endif
            </form>
        </div>
    </section>

@endsection
