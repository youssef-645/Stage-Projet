<h1>dashboard</h1>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">logout</button>
</form>