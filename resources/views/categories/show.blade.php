<x-layout>

<x-slot name="title">Detail kategórie</x-slot>

          <div class="card text-center mt-5">
              <div class="card-body">
                  <div class="border-bottom vh-50">
                  <p class="card-text">{{$category->name}}</p>
                  </div>
                  <div class="d-inline-flex mt-3">
                    <a href="/categories/{{$category->id}}/edit"><span class="btn btn-outline-primary mx-1">Edit</span></a>
                    <form method="POST" action="/categories/{{$category->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                  </div>
              </div>
          </div>

</x-layout>
