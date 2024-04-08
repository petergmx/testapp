<x-layout>

<x-slot name="title">Prihlásenie</x-slot>

<h3 class="mt-5 text-center">Prihlásenie</h3>


    <div class="container w-75">
        <form action="/login" method="POST">
            @csrf
            <x-form.input name="email" type="email" labeltext="E-mail" class="form-control" required />
            <x-form.input name="password" type="password" labeltext="Heslo" class="form-control" required />
            <x-form.button class="btn btn-outline-primary float-end mt-3">Prihlásiť</x-form.button>
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
      </div>

</x-layout>
