<?php 
    require_once'part/db.php';

    if(isset($_POST['submit'])){

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);                                
        $mdp = $_POST['mdp'];                                     

        if(!empty($nom) AND !empty($prenom) AND !empty($mdp)){					
               //code en cas de bonne connection
               echo 'sa marche';
                
            } 
        else{
                echo"tout les champs doivent ettre completer";
        }
    }
    else{}    
    require_once'part/nav.php';

?>
 <!--   -->
<html lang="fr">
  
<body>
    <main role="main" class="container">
    <br>
    <div class="starter-template">
        <h1></h1>
        <p class="lead">Ceci est un formulair pour l inscription de la base au marathon.<br> maintenant esayer de vous inscrire!!!.</p>
    </div>
    <fieldset>
        <legend>Contact</legend>
            <form id="formulair" method="POST"  name="formulair" autocomplete="on">         
                <p>
                    <label for="nom">nom:</label> 
                    <input id="nom" type="text" name="nom"  placeholder="Entrer votre nom" required/>
                </p>
                <p>
                    <label for="prenom">prenom:</label> 
                    <input id="prenom" type="text" name="prenom" placeholder="prenom" required/>
                </p>
                <p>
                    <label for="mdp">mdp:</label> 
                    <input id="mdp" type="text" name="mdp" placeholder="mdp" required/>
                </p>
            </form>
    </fieldset>
    </main><!-- /.container -->
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VoPFvGr9GxhDT3n8vqqZ46twP5lgex+raTCfICQy73NLhN7ZqSfCtfSn4mLA2EFA" crossorigin="anonymous"></script>
    
      
</html>
<script>
    var myForm = document.getElementById('myForm'); 
    myForm.addEventListener('submit', function(e) {
        alert('voila comment on fait un script');
        e.preventDefault();
    });
</script>