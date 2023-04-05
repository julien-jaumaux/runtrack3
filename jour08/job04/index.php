<!doctype html>


<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="h-screen">
    <header class="text-white-600 text-center bg-gray-500 h-10  ">
        <nav >
            <ul class="inline-flex space-x-10">
                <li class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100"><a href="#"><i class="fa-solid fa-house"></i>Accueil</a></li>
                <li class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100"><a href="#"><i class="fa-solid fa-user-pen"></i>Inscription</a></li>
                <li class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100"><a href="#"><i class="fa-solid fa-right-to-bracket"></i>Connexion</a></li>
                <li class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100"><a href="#"><i class="fa-solid fa-magnifying-glass"></i>Rechercher</a></li>
              </ul>
        </nav>
    </header>
    <div class="bg-purple-300 pb-64">
    <form action="" method="post">
        <div class="p-5 inline-block">
        <input type="radio" id="homme" name="drone" value="homme"
        checked>
        <label for="homme"><i class="fa-solid fa-person"></i>Homme</label>
        </div>
        <div class="p-5 inline-block">
        <input type="radio" id="femme" name="drone" value="femme">
        <label for="femme"><i class="fa-solid fa-person-dress"></i>femme</label>
        </div>
        <label class="p-5 inline-block" for="nom"><i class="fa-regular fa-keyboard"></i>Nom:</label>
        <input class="p-1 inline-block" type="text" id="nom" name="nom">
        <label class="p-5 inline-block" for="prenom"><i class="fa-regular fa-keyboard"></i>Prénom:</label>
        <input class="p-1 inline-block" type="text" id="prenom" name="prenom">
        <label class="p-5 inline-block" for="adresse"><i class="fa-regular fa-keyboard"></i>Adresse:</label>
        <input class="p-1 inline-block" type="text" id="adresse" name="adresse"><br>
        <label class="p-5 inline-block" for="email"><i class="fa-solid fa-envelope"></i>Entrez votre email:</label>
        <input class="p-1 inline-block" type="email" id="email" name="email"> <br> 
        <label class="p-5 inline-block" for="password"><i class="fa-solid fa-key"></i>Entrez votre password:</label>
        <input class="p-1 inline-block" type="password" placeholder="Password" id="password" required>
        <label class="p-5 inline-block" for="password"><i class="fa-solid fa-key"></i>Confirmer votre password:</label>
        <input class="p-1 inline-block " type="password" placeholder="Confirmez votre Password" id="confirm_password" required><br>
        <label class="p-5 inline-block" for="informatique"><i class="fa-solid fa-computer"></i>Informatique</label>
        <input class="p-5 inline-block" type="checkbox" id="informatique" name="informatique" checked>
        <label class="p-5 inline-block" for="voyages"><i class="fa-solid fa-plane"></i>Voyages</label>
        <input class="p-5 inline-block" type="checkbox" id="voyages" name="voyages" checked>
        <label class="p-5 inline-block" for="sport"><i class="fa-solid fa-person-running"></i>Sport</label>
        <input class="p-5 inline-block" type="checkbox" id="sport" name="sport" checked>
        <label class="p-5 inline-block " for="lecture"><i class="fa-solid fa-book"></i></i>Lecture</label>
        <input type="checkbox" id="lecture" name="lecture" checked><br>
        <div class="w-full text-center">
        <button class="ring-gray-100 ring-2 px-4 py-2 inline-block text-black font-semibold bg-teal-400 rounded  hover:bg-gray-50 hover:border-blue-100" type="submit" name="submit" id="submit">Envoyer formulaire</button>
        </div>

    </form>
    </div>
    <footer class="text-white-600 text-center bg-gray-500 h-5 space-x-10 ">
        <a class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100"  href="index.php">Accueil</a>
        <a class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100" href="index.php">Inscription</a>
        <a class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100" href="index.php">Connexion</a>
        <a class="inline-block group cursor-pointer hover:bg-gray-50 hover:border-blue-100" href="index.php">Rechercher</a>
    </footer>

    <script src="https://kit.fontawesome.com/93b34f5e90.js" crossorigin="anonymous"></script>
</body>
</html>