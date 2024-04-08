<x-layout>

<x-slot name="title">Upraviť úlohu</x-slot>


<h3 class="mt-5 text-center">Upraviť úlohu</h3>


    <form action="/todos/{{$todo->id}}/update" method="POST">
    @csrf
    @method('PATCH')
            <x-form.input name="name" labeltext="Názov úlohy" value="{{ $todo->name }}" class="form-control" required />
            <x-form.textarea name="description" labeltext="Detail úlohy" :value="old('description', $todo->description)" rows="3" class="form-control" required></x-form.textarea>

            <x-form.input type="date" name="bydate" value="{{ $todo->bydate->format('Y-m-d') }}" labeltext="Dátum" class="form-control" required />


            <label for="category_id" class="mt-4 text-secondary">Kategória:</label>
            <select id="category_id" name="category_id" class="form-control">

            @foreach ($categories as $category)
              @if ($category->id === $todo->category_id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach

            </select>


            <x-form.button class="btn btn-outline-primary float-end mt-3">Uložiť úlohu</x-form.button>
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
