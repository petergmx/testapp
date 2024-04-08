<x-layout>

<x-slot name="title">Zoznam úloh</x-slot>

<h3 class="my-5 text-center">Zoznam úloh</h3>

  <div class="container">
      <div class="row">
          <div class="col-3 p-1">
              <span class="text-secondary">Úloha</span>
          </div>
          <div class="col-3 p-1">
              <span class="text-secondary">Dátum</span>
          </div>
          <div class="col-3 p-1">
              <span class="text-secondary">Kategória</span>
          </div>
          <div class="col-3 p-1">
              <span class="text-secondary">Používateľ</span>
          </div>
      </div>

      @foreach($todos as $todo)
        <div class="row">
            <div class="col-3 p-1">
                <a href="/todos/{{$todo->id}}/show">{{ $todo->name }}</a>
            </div>
            <div class="col-3 p-1">
                {{--$todo->bydate->format('d. m. Y')--}}
                {{ Carbon\Carbon::parse($todo->bydate)->format('Y-m-d') }}
            </div>
            <div class="col-3 p-1">
                {{ $todo->category_name }}
            </div>
            <div class="col-3 p-1">
                {{ $todo->user_name }}
            </div>
        </div>
      @endforeach
  </div>

</x-layout>
