<aside class="sidebar">
  <ul class="list-group">
    <li class="list-group-item list-group-item-action" data-route="{{ route('dashboard') }}">Dashboard</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('enseignants.index') }}">Enseignates</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('matieres.index') }}">Matieres</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('notes.index') }}">Notes</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('parents.index') }}">Parents</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('classes.index') }}">Classes</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('eleves.index') }}">Eleves</li>
    <li class="list-group-item list-group-item-action" data-route="{{ route('account.info') }}">Account</li>
  </ul>
</aside>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var listItems = document.querySelectorAll('.list-group-item');

    listItems.forEach(function(item) {
      item.addEventListener('click', function() {
        var route = this.getAttribute('data-route');
        window.location.href = route;

        listItems.forEach(function(item) {
          item.classList.remove('activated');
        });

        this.classList.add('activated');
      });
    });
  });
</script>