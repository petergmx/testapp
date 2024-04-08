<x-layout>

<x-slot name="title">Nová úloha</x-slot>


<h3 class="mt-5 text-center">Nová úloha</h3>



    <form action="/todos/store" method="POST">
    @csrf
            <x-form.input name="name" labeltext="Názov úlohy" class="form-control" required />
            <x-form.textarea name="description" labeltext="Detaily úlohy" rows="3" class="form-control" required />
            <x-form.input type="date" name="bydate" labeltext="Dátum" class="form-control" required />

            <label for="category_id" class="mt-4 text-secondary">Kategória:</label>
            <select id="category_id" name="category_id" class="form-control">

            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

            </select>

            <x-form.button class="btn btn-outline-primary float-end mt-3">Vytvoriť úlohu</x-form.button>
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
