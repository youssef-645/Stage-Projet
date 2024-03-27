<aside class="sidebar">
  <ul class="list-group ">
    <li class="list-group-item list-group-item-action border-top-0 activated">

      <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Dashboard</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action ">

      <form action="{{ route('enseignants.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Enseignates</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action">

      <form action="{{ route('matieres.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Matieres</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action">

      <form action="{{ route('notes.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Notes</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action">

      <form action="{{ route('parents.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Parents</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action">
      <form action="{{ route('classes.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Classes</button>
      </form>
    </li>
    <li class="list-group-item list-group-item-action">
      <form action="{{ route('eleves.index') }}" method="GET">
        <button type="submit" class="btn btn-link btn-sm">Eleves</button>
      </form>
    </li>
  </ul>
</aside>