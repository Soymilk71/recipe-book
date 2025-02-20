@extends('app')

@section('content')
    <div class="container">
        <div>
            <form action="/recipe_category/new" method="POST">
                @csrf
                <h1 class="text-2xl font-bold mb-2">Voeg een nieuwe categorie toe</h1>
                <input name="name" type="text" placeholder="Categorie" class="p-1 border border-black rounded-sm w-4xs mb-2">
                <br>
                <button class="btn btn-purple">Opslaan!</button>
            </form>
        </div>
    </div>
@endsection