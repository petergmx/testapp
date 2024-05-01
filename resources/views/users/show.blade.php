<x-layout>

<x-slot name="title">Detail používateľa</x-slot>

<div class="card text-center mt-5">
    <div class="card-header">
        <h5 class="card-title fw-bold mt-1">{{ $user->name }}</h5>
    </div>

        <div class="border-bottom mh-50 content-box text-center p-3">

            <div class="container">

              <div class="row">
                <div class="col">
                </div>
                <div class="col-7">

                    <div class="d-table text-center pt-3 mb-5 mx-auto">
                        <div class="d-table-row">
                            <div class="d-table-cell text-end">Id:</div>
                            <div class="d-table-cell text-start ps-3">{{ $user->id }}</div>
                        </div>
                        <div class="d-table-row">
                            <div class="d-table-cell text-end">Používateľ:</div>
                            <div class="d-table-cell text-start ps-3">{{ $user->name }}</div>
                        </div>
                        <div class="d-table-row">
                            <div class="d-table-cell text-end">E-mail:</div>
                            <div class="d-table-cell text-start ps-3">{{ $user->email }}</div>
                        </div>
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
                      <a href="{{ route('users.edit', ['user' => $user->id]) }}"><span class="btn btn-outline-primary mx-1">Upraviť</span></a>
                      <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger">Zmazať</button>
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
