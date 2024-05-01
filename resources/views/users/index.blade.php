<x-layout>

<x-slot name="title">Zoznam používateľov</x-slot>

<h3 class="my-5 text-center">Zoznam používateľov</h3>

    <div class="container">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">

                <div class="d-table text-center mb-5">
                    @foreach($users as $user)
                        <div class="d-table-row">
                            <div class="d-table-cell text-start text-secondary">{{ $user->id }}</div>
                            <div class="d-table-cell text-end ps-3">
                                <a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a>
                            </div>
                            <div class="d-table-cell text-start ps-3">{{ $user->email }}</div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-4"></div>
        </div>

    </div>

</x-layout>
