<div>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" value="{{ old('nom', $eleve->nom ?? '') }}">
</div>
<div>
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" value="{{ old('prenom', $eleve->prenom ?? '') }}">
</div>
<div>
    <label for="date_naissance">Date de Naissance:</label>
    <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance', $eleve->date_naissance ?? '') }}">
</div>
<div>
    <label for="adresse">Adresse:</label>
    <input type="text" name="adresse" id="adresse" value="{{ old('adresse', $eleve->adresse ?? '') }}">
</div>
<div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $eleve->email ?? '') }}">
</div>