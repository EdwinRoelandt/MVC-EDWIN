<?php
    if(isset($_GET["err"])){
?>
        <div class="container-fluid bg-danger my-3">
<?php
            switch($_GET["err"]){
                case "champ":
                    echo "<h3 class='txtBlack'><strong>Remplisez tous les champs</strong></h3>";
                break;
            }
            if(isset($_GET["mail"])){
                switch($_GET["mail"]){
                    case "ok":
                        echo "
                                <p><strong>votre e-mail a bien etait envoyer</strong></p>
                                <hr>
                                <p>l'équipe met tous en oeuvre pour vous repondrent dans les plus brefs délais.</p>
                            ";
                    break;
                }
            }
?>
        </div>
<?php        
    }            
?>

<div class="container-fluid my-3 formContact">
    <div class="row">
        <h2 class='col-12 text-center text-dark'>Votre Message</h2>
    </div>

    <form action="public/functions/sendmail.php" method="post" class="row">
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="name">Nom</label>
            <input id="name" name="name" type="text" class="form-control border-dark" value="">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="surname">Prénom</label>
            <input id="surname" name="surname" type="text" class="form-control border-dark" value="">
        </div>
        <div class="col-sm-12 my-2">
            <label for="mail">Votre E-mail</label>
            <input id="mail" name="mail" type="mail" class="form-control border-dark" value="">
        </div>
        <div class="col-sm-12 my-2">
            <label class="form-label" for="subject">Objet</label>
            <input type="text" name="subject"  class="form-control border-dark">
        </div>
        <div class="col-sm-12 my-2">
            <label class="form-label" for="msg">Message à envoyer</label>
            <textarea id="msg" name="msg" rows="10" cols="50" class="form-control border-dark"></textarea>
        </div>

        <div class="col-sm-12 my-2">
            <button class="btn" type="submit" name="submit">Envoyer</button>
        </div>
    </form>
</div>