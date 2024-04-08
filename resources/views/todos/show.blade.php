<x-layout>

<x-slot name="title">Detail úlohy</x-slot>

          <div class="card text-center mt-5">
              <div class="card-header">
                  <h5 class="card-title fw-bold mt-1">{{$todo->name}}</h5>
              </div>
              <div class="card-body">
                  <div class="border-bottom vh-50">
                  <p class="card-text">{{$todo->description}}</p>
                  </div>
                  <div class="d-inline-flex mt-3">
                    <a href="/todos/{{$todo->id}}/edit"><span class="btn btn-outline-primary mx-1">Edit</span></a>
                    <form method="POST" action="/todos/{{$todo->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                  </div>
              </div>
          </div>

</x-layout>
