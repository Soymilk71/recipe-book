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
    <form action="/recepten/edit/{{$recipes->id}}" method="POST">
    @csrf
    @method('PUT') 
    <h1 class="text-2xl font-bold mb-2">Bewerk recept</h1>
    <h2 class="text-xl mb-1">Titel:</h2>
    <input class="p-1 border border-black rounded-sm w-4xs mb-2" name="titel" type="text" value="{{$recipes->titel}}"></br>
    <h2 class="text-xl mb-1">Beschrijving:</h2>
    <textarea class="p-1 border border-black rounded-sm w-xl h-30 mb-2" name="beschrijving">{{$recipes->beschrijving}}</textarea></br>
    <h2 class="text-xl mb-1">Bereiding:</h2>
    <textarea class="p-1 border border-black rounded-sm w-xl h-50 mb-4" name="recept">{{$recipes->recept}}</textarea> <br>

    <!-- Buttons in a flex container -->
    <div class="flex space-x-4">
        <button class="btn btn-black">
            Opslaan!
        </button>
    </div>
</form>
<form action="/recepten/delete/{{$recipes->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-default">
        Verwijderen
    </button>
</form>


@endsection
