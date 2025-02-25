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
    <form x-data="testForm()" @submit.prevent="formSubmit()" action="/recepten/edit/{{$recipes->id}}" method="POST">

        <template x-for="error in errors">
            <div class="bg-red-500">
                <span x-text="error"></span>
            </div>
        </template>
    <h1 class="text-2xl font-bold mb-2">Bewerk recept</h1>
    <h2 class="text-xl mb-1">Titel:</h2>
    <input x-model.fill="formData.titel" class="p-1 border border-black rounded-sm w-4xs mb-2" name="titel" type="text" value="{{$recipes->titel}}"></br>
    <h2 class="text-xl mb-1">Beschrijving:</h2>
    <textarea x-model.fill="formData.beschrijving" class="p-1 border border-black rounded-sm w-xl h-30 mb-2" name="beschrijving">{{$recipes->beschrijving}}</textarea></br>
    <h2 class="text-xl mb-1">Bereiding:</h2>
    <textarea x-model.fill="formData.recept" class="p-1 border border-black rounded-sm w-xl h-50 mb-4" name="recept">{{$recipes->recept}}</textarea> <br>
    <select x-model.fill="formData.category_id" class="mb-2 border-2 rounded" name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <div class="flex space-x-4">
        <button type="submit" class="btn btn-black mb-4">
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

<script>
    const testForm = () => {
        return {
            formData: {
                titel: '',
                beschrijving: '',
                recept: '',
                category_id: ''
            },
            message: '',
            errors: [],

            formSubmit() {
                let form = new FormData();
                for (let key in this.formData) {
                    form.append(key, this.formData[key]);
                }

                console.log(form);

                fetch('/recepten/edit/{{$recipes->id}}', {
                    method: 'PUT',
                    body: JSON.stringify(this.formData),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json' 
                     }
                })
                .then(response => response.json())
                .then((data) => {
                    // Success message
                    console.log(data);

                    if (data?.errors) {
                        this.errors = data.errors
                    }
                })
                .catch(error => {
                    // Error message
                    console.error("Error:", error);
                });
            }
        }
    };
</script>


@endsection
