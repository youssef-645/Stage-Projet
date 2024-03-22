<div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $enseignant->nom ?? '') }}">
</div>
<div class="form-group">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom', $enseignant->prenom ?? '') }}">
</div>