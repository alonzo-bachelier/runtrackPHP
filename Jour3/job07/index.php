
<form action="options-text.php" method="GET">
    <label for="str">Entrez du texte</label>
    <input type="text" name="str">
    <label for="options">Réglages du texte :</label>
    <select name="function" id="options">
        <optgroup label="Veuillez choisir une option : ">
            <option value="aucun">Aucun</option>
            <option name="gras" value="gras" title="“gras” : une fonction qui prend en paramètre une chaîne de caractères et écrit celle-ci en mettant en gras les mots commençant par une lettre majuscule.">gras</option>
            <option name="césar" value="césar" title="“césar” : une fonction qui prend en paramètre une chaîne de caractères et un nombre (qui vaut 2 par défaut). Elle doit afficher la chaîne de caractères en décalant chaque caractère d’un nombre égal au nombre passé en paramètre. ex : Si le paramètre vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient “c”.">césar</option>
            <option name="plateforme" value="plateforme" title="“plateforme”, une fonction qui prend en paramètre une chaîne de caractères. Elle affiche la chaîne de caractères en ajoutant un “_” aux mots finissant par “me”.">plateforme</option>
        </optgroup>
    </select>
    <button type="submit">Résultat</button>
    <p>sortie : </p>
</form>