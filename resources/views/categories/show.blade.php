<x-layout>

<x-slot name="title">Detail kategórie</x-slot>

<div class="card text-center mt-5">
    <div class="card-header">
        <h5 class="card-title fw-bold mt-1">{{ $category->name }}</h5>
    </div>

        <div class="border-bottom mh-50 content-box text-center p-3">

            <div class="container">

              <div class="row">
                <div class="col">
                </div>
                <div class="col-7">

                    <div class="text-center pt-3 mb-5">
                    <p class="card-text">{{ $category->name }}</p>
                    </div>

                </div>
                <div class="col">
                </div>
              </div>

              <div class="row">
                <div class="col">
                </div>
                <div class="col-7">

                    <div class="d-inline-flex mt-3">
                      <a href="/categories/{{$category->id}}/edit"><span class="btn btn-outline-primary mx-1">Edit</span></a>
                      <form method="POST" action="/categories/{{$category->id}}/delete">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger">Delete</button>
                      </form>
                    </div>

                </div>
                <div class="col">
                </div>
              </div>
            </div>
        </div>
</div>

</x-layout>
