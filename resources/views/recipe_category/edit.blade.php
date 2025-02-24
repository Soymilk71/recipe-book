@extends('app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div>

    <!-- <h1>Hallo tis gelukt</h1> -->
    <form action="/recipe_category/edit/{{$recipe_category->id}}" method="POST">
    @csrf
    @method('PUT') 
    <h1 class="text-2xl font-bold mb-2">Bewerk categorie</h1>
    <h2 class="text-xl mb-1">Titel: {{$recipe_category->name}}</h2>
    <input class="p-1 border border-black rounded-sm w-4xs mb-2" name="name" type="text" placeholder="{{$recipe_category->name}}"></br>

    <!-- Buttons in a flex container -->
    <div class="flex space-x-4">
        <button class="btn btn-black">
            Opslaan!
        </button>
    </div>
</form>
<form action="/recipe_category/delete/{{$recipe_category->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-default">
        Verwijderen
    </button>
</form>


@endsection