<nav class="navbar navbar-expand-lg justify-content-between" style="background-color: dodgerblue;">
  <a class="mx-4 navbar-brand text-white font-weight-bold" href="#">
    <i class="fa fa-solid fa-school m-3"></i>
    Ecole Management</a>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit" class="m-0 mx-4 font-weight-bold btn btn-link text-dark">Logout</button>
  </form>
</nav>