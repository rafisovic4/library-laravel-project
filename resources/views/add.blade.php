@extends('layouts.index')

@section('page_title', 'Add books')

@section('content')
    <section class="registration">
        <div class="osnova-registration">
            <h1 class="title__page">
                Add books
            </h1>
            <form action="{{route('book.create')}}" class="registration-form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Write Title">
                <input type="text" name="anons_title" placeholder="Write Anons Title">
                <textarea type="text" name="description" placeholder="Description"></textarea>
                <input type="file" name="file">
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category['id']}}">
                            {{$category['name']}}
                        </option>
                    @endforeach
                </select>
                <input type="submit" value="Add books" class="registration-button">
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

