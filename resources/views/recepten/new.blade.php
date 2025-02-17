@extends('app')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
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
        <h1 class="text-2xl font-bold mb-4">Nieuw recept</h1>
            <div>
                <form action="/recepten/new" method="POST"> 
                    @csrf
                    <input name="titel" type="text" placeholder="Titel" class="p-1 border border-black rounded-sm w-4xs mb-2">
</br>
                    <textarea name="beschrijving" type="text" placeholder="Beschrijving" class="p-1 border border-black rounded-sm w-xl h-30 mb-2"></textarea>
</br>
                    <textarea name="recept" type="text" placeholder="Vul hier het recept in" class="p-1 border border-black rounded-sm w-xl h-50 mb-2"></textarea>
</br>

                    <button class="btn btn-purple">Submit!</button>
                </form>
            </div>
    </div>
@endsection
