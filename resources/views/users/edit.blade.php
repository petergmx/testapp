<x-layout>

<x-slot name="title">Upraviť používateľa</x-slot>


<h3 class="mt-5 text-center">Upraviť používateľa</h3>


    <form action=" {{ route('users.update', ['user' => $user->id]) }} " method="POST">
    @csrf
    @method('PATCH')
        <x-form.input name="name" labeltext="Používateľ" value="{{ $user->name }}" class="form-control" required />
        <x-form.input name="email" type="email" labeltext="E-mail" value="{{ $user->email }}" class="form-control" required />
        <x-form.input name="password" type="password" labeltext="Heslo" class="form-control" required />
        <x-form.input name="password_confirmation" type="password" labeltext="Heslo znova" class="form-control" required />
        <x-form.button class="btn btn-outline-primary float-end mt-3">Uložiť používateľa</x-form.button>
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
