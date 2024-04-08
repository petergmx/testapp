<x-layout>

<x-slot name="title">Upraviť kategóriu</x-slot>


<h3 class="mt-5 text-center">Upraviť kategóriu</h3>


    <form action="/categories/{{$category->id}}/update" method="POST">
    @csrf
    @method('PATCH')
            <x-form.input name="name" labeltext="Názov kategórie" value="{{ $category->name }}" class="form-control" required />
            <x-form.button class="btn btn-outline-primary float-end mt-3">Uložiť kategóriu</x-form.button>
    </form>

    @if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</x-layout>
