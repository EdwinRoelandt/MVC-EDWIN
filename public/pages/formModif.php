<?php
    require 'public/functions/bdd.php';
    require 'public/class/user-class.php';

    $id=$_GET['id'];
    $userManager = new UserManager($bdd);
    $myUser=$userManager->get($id);
?>
<?php
    if(isset($_GET["err"])){
?>
        <section class="container-fluid bg-danger border border-warning my-3">
            <div class="row">    
<?php
                switch($_GET["err"]){
                    case "1":
                        echo "<h3 class='col-12 txtBlack text-center'>Les 2 nouveaux mots de passe ne correspondent pas</h3>";
                    break;

                    case "2":
                        echo "<h3 class='col-12 txtBlack text-center'>Vous vous êtes trompé dans le mot de passe actuel</h3>";
                    break;

                    case "3":
                        echo "<h3 class='col-12 txtBlack text-center'>Il manque un des mots de passe</h3>";
                    break;

                    case "4":
                        echo "<h3 class='col-12 txtBlack text-center'>il manque l'adresse e-mail </h3>";
                    break;

                    case "5":
                        echo "<h3 class='col-12 txtBlack text-center'>il manque le prénom</h3>";
                    break;

                    case "6":
                        echo "<h3 class='col-12 txtBlack text-center'>il manque le nom</h3>";
                    break;
                }
?>
            </div>
        </section>
<?php
    }
?>
<div class="container-fluid my-3">
    <div class="row">
        <h2 class='col-12 text-center'>Modification</h2>
    </div>
    <form action="public/functions/modification.php?id=<?php echo $id; ?>" method="post" class="row g-2">
        <div class="col-12 my-2">
            <input class="form-control" type="hidden" value="<?php echo $myUser->id_user(); ?>">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="nom"><strong>Nom</strong></label>
            <input id="nom" name="nom" type="text" value="<?php echo $myUser->nom_u(); ?>" class="form-control border-dark">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="prenom"><strong>Prénom</strong></label>
            <input id="prenom" name="prenom" type="text" value="<?php echo $myUser->prenom_u(); ?>" class="form-control border-dark">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="mail"><strong>E-mail</strong></label>
            <input id="mail" name="mail" type="mail" value="<?php echo $myUser->mail_u(); ?>" class="form-control border-dark">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="date"><strong>Date de naissance</strong></label>
            <input id="date" name="anniv" type="date" value="<?php echo $myUser->date_naissance_u(); ?>" class="form-control border-dark">
        </div>
        <div class="col-sm-12 m-2">
            <label for="oldPassword" class="form-label"><strong>Entrez votre mot de passe actuel</strong></label>
            <input id="password" name="oldPassword" type="password" value="" class="form-control border-dark">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label for="password"  class="form-label"><strong>Nouveau Mot de passe</strong></label>
            <input id="password" name="password" type="password" value="" class="form-control border-dark">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label for="verifPassword" class="form-label"><strong>Confirmer votre nouveau Mot de passe</strong></label>
            <input id="verifPassword" name="verifPassword" type="password" value="" class="form-control border-dark">
        </div>
        <div  class="col-sm-12 m-2">
            <button type="submit" name="submit" class="btn btn-warning">Envoyer</button>
        </div>
    </form>
</div>