<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<div class="logout col col-1 offset-11">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
     @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
</nav>