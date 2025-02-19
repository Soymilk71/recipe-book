
@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Categorieën</h1>
        <div class="mb-4">
            <a href="{{url('recipe_category/new')}}" class="btn btn-purple">New</a>
        </div>
        <div>
            <table>
                <tr>
                    <th><strong>erboven</strong></th>
                    <td> bla bla bla  </td>
                    <td> v </td>
                </tr>
                <tr>
                    <th><strong>er onder</strong></th>
                    <td> v </td>
                    <td> v </td>
                </tr>
            </table>

        </div>
    <div>

        

@endsection
