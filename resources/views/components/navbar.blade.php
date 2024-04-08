<nav class="navbar">
    <ul class="nav justify-content-end fixed-top" style="padding-right:5em; background-color:#f1f1f1;">
        @auth
            <li class="nav-item">
              <a class="nav-link" href="/">Úlohy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/todos/create">Nová úloha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categories">Kategórie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categories/create">Nová kategória</a>
            </li>

            <li class="nav-item ms-5 odskok">
            <div class="mt-2 py-0">Prihlásený: {{ auth()->user()->name }}</div>
            </li>

            <form method="POST" action="/logout" class="nav-form ms-2">
              @csrf
              <button type="submit" class="btn btn-link text-decoration-none">Odhlásiť</button>
            </form>
        @else
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrovať</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Prihlásiť</a>
            </li>
        @endauth
    </ul>
</nav>
