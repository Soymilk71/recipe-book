
@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Categorieën</h1>
        <div class="mb-4">
            <a href="{{url('recipe_category/new')}}" class="btn btn-black">Nieuwe categorie</a>
        </div>
        <div>
        <table>
                <thead>
                    <tr>
                        <th class="text-left px-4 border border-gray-300">
                            ID
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                            Categorie
                        </th>
                        <th class="text-left px-4 border border-gray-300">
                            Bewerk
                        </th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                <tbody>
                    <tr>
                        <td class=" py-3 text-center border border-gray-300">
                            #{{$category->id}}
                        </td>
                        <td class="px-4 py-3 border border-gray-300">
                            {{$category->name}}
                        </td>
                        <td class="px-4 py-2 border border-gray-300"|>
                        <a href="/recipe_category/edit/{{$category->id}}" class="underline">Bewerk categorie</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </div>
        {{$categories->links()}}
    <div>


        

@endsection
