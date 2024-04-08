<x-layout>

<x-slot name="title">Zoznam kategórií</x-slot>

<h3 class="my-5 text-center">Zoznam kategórií</h3>



<div class="container">
    <div class="row">
        <div class="col-5"></div>
        <div class="col p-1">
            <span class="text-secondary">Kategória</span>
        </div>
        <div class="col-5"></div>
    </div>

    @foreach($categories as $category)
      <div class="row">
          <div class="col-5"></div>
          <div class="col p-1">
              <a href="/categories/{{$category->id}}/show">{{ $category->name }}</a>
          </div>
          <div class="col-5"></div>
      </div>
    @endforeach
</div>



</x-layout>
