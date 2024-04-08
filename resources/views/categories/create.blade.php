<x-layout>

<x-slot name="title">Nová kategória</x-slot>


<h3 class="mt-5 text-center">Nová kategória</h3>



    <form action="/categories/store" method="POST">
    @csrf
            <x-form.input name="name" labeltext="Názov kategórie" class="form-control" required />
            <x-form.button class="btn btn-outline-primary float-end mt-3">Vytvoriť kategóriu</x-form.button>
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
