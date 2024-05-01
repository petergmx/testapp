<x-layout>

<x-slot name="title">Nový používateľ</x-slot>


      <h3 class="mt-5 text-center">Nový používateľ</h3>

      <form action="{{ route('users.store') }}" method="POST">
      @csrf
          <x-form.input name="name" labeltext="Používateľ" class="form-control" required />
          <x-form.input name="email" type="email" labeltext="E-mail" class="form-control" required />
          <x-form.input name="password" type="password" labeltext="Heslo" class="form-control" required />
          <x-form.input name="password_confirmation" type="password" labeltext="Heslo znova" class="form-control" required />
          <x-form.button class="btn btn-outline-primary float-end mt-3">Vytvoriť</x-form.button>
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
