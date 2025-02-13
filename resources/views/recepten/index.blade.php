@extends('app')

@section('content')

</br>
    <div class="container">
        @if (Session::has('success_title'))
    <div class="alert alert-success_title">
            <h1 class="text-2xl" >{{ Session::get('success_title') }}</h1>
    </div>
@endif
        <h1 class="text-2xl font-bold mb-4">Recepten overzicht</h1>
        <div class="mb-4">
            <a href="{{url('recepten/new')}}" class="btn btn-purple">New</a>
        </div>
        <div>
        @foreach ($recipes as $recipe)
        
            <div class="rounded-md shadow-gray-400 shadow-sm bg bg-[#E0E1DD] mb-4"  >
                <div class="p-4 space-y-1">
                    <h2 class="text-lg font-bold">
                        <span>#{{ $recipe->id}}</span>
                        <span>Titel: {{ $recipe->titel }}</span>
                    </h2>
                    <p> beschrijving: {{ $recipe->beschrijving}}</p>
                    <a href="/recepten/{{$recipe -> id}}" class="btn btn-purple">Bekijk recept</a>
                    <a href="/recepten/edit/{{$recipe -> id}}" class="btn btn-red">Bewerk recept</a>
                </div>
            </div>
        @endforeach


        </div>
    </div>
</div>
@endsection
