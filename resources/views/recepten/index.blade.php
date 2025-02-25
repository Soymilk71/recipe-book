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
        <div class="grid">
            <table>
                <thead>
                    <tr>
                        <th class="text-left px-4 border border-gray-300">
                            ID
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                           Titel
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                            Categorie
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                            Beschrijving
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                            Bewerk
                        </th>
                    </tr>
                </thead>
                @foreach($recipes as $recipe)
                <tbody>
                    <tr>
                        <td class=" py-3 text-center border border-gray-300">
                            #{{$recipe->id}}
                        </td>
                        <td class="px-4 py-3 border border-gray-300">
                            {{$recipe->titel}}
                        </td>
                        <td class="px-4 py-3 border border-gray-300">
                            {{$recipe->category->name ?? null}} 
                        </td>
                        <td class="px-4 py-3 border border-gray-300">
                            {{$recipe->beschrijving}}
                        </td>
                        <td class="px-4 py-2 border border-gray-300"|>
                        <a href="/recepten/edit/{{$recipe -> id}}" class="underline">Bekijk recept</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <!-- dit is de paginatie van de controller. Veels te simpel????? -->
    <div>
        {{$recipes->links()}}
    </div>
</div>
@endsection
