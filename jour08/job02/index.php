<!doctype html>


<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
    <header class="text-white-600 text-center bg-gray-500 h-5 ">
        <nav >
            <ul class="inline-flex space-x-10 ">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Rechercher</a></li>
              </ul>
        </nav>
    </header>
    <form action="" method="post">
        <input type="radio" id="homme" name="drone" value="homme"
        checked>
        <label for="homme">Homme</label>
        </div>
        <div>
        <input type="radio" id="femme" name="drone" value="femme">
        <label for="femme">femme</label>
        </div>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse"><br>
        <label for="email">Entrez votre email:</label>
        <input type="email" id="email" name="email"> <br> 
        <label for="password">Entrez votre password:</label>
        <input type="password" placeholder="Password" id="password" required>
        <label for="password">Confirmer votre password:</label>
        <input type="password" placeholder="Confirmez votre Password" id="confirm_password" required><br>
        <input type="checkbox" id="scales" name="scales" checked>
        <label for="informatique">Informatique</label>
        <input type="checkbox" id="informatique" name="informatique" checked>
        <label for="voyages">Voyages</label>
        <input type="checkbox" id="voyages" name="voyages" checked>
        <label for="sport">Sport</label>
        <input type="checkbox" id="sport" name="sport" checked>
        <label for="lecture">Lecture</label>
        <input type="checkbox" id="lecture" name="lecture" checked><br>
        <button type="submit" name="submit" id="submit">Envoyer formulaire</button>
    </form>
    <footer>
        <a href="index.php">Accueil</a>
        <a href="index.php">Inscription</a>
        <a href="index.php">Connexion</a>
        <a href="index.php">Rechercher</a>
    </footer>
</body>
</html>