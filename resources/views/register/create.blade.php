<x-layout>

<x-slot name="title">Registrácia</x-slot>


      <h3 class="mt-5 text-center">Registrácia</h3>

      <form action="/register" method="POST">
      @csrf
          <x-form.input name="name" class="form-control" required />
          <x-form.input name="email" type="email" class="form-control" required />
          <x-form.input name="password" type="password" class="form-control" required />
          <x-form.input name="password_confirmation" type="password" class="form-control" required />
          <x-form.button class="btn btn-primary float-end mt-3">Registrovať</x-form.button>
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
