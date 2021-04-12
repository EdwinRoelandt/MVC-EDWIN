<?php
    require 'public/functions/bdd.php';
    require 'public/class/user-class.php';
?>

<?php
    $login = $_SESSION['id_user'];
    $id=$_GET['id'];
    $userManager = new UserManager($bdd);
    $myUser=$userManager->get($id);
?>
    <div class="container-fluid">
<?php
        if($login==$id)
        {
?>    
            <div class="row bg-dark text-light">
                <h3 class="col-12 ">Voulez-vous VOUS supprimer?<h3>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <button href="./index.php?action=suppr&rep=oui&id=<?php echo $_GET["id"] ?>"class="btn btn-outline-warning col-3">OUI</button>
                <div class="col-2"></div>  
                <button href="./index.php?action=suppr&rep=non&id=<?php echo $_GET["id"] ?>" class="btn btn-outline-warning col-3">NON</button>
                <div class="col-2"></div>
            </div>
<?php
            if(isset($_GET["rep"])){
                switch($_GET["rep"]){
                    case "OUI":
                        $userManager->delete($myUser);
                        header('Location: ./public/pages/deconnexion.php');
                    break;
                    case "NON":
                        header('Location:./index.php?action=listUser');
                    break;
                }
            }
        }else{
?>
            <div class="row">
                <h3 class="col-12">Voulez vous supprimer l'utilisateur <?php echo $myUser->nom_u()." - ".$myUser->prenom_u(); ?> ?<h3> 
            </div>
            <div class="row">
                <div class="col-2"></div>
                <input type="button" class="btn col-3 btnOui" onclick="window.location.href = './index.php?action=suppr&rep=OUI&id=<?php echo $_GET["id"] ?>';" value="OUI"/>
                <div class="col-2"></div>  
                <input type="button" class="btn col-3 btnNon" onclick="window.location.href = './index.php?action=suppr&rep=NON&id=<?php echo $_GET["id"] ?>';" value="NON"/>
                <div class="col-2"></div>
            </div>
<?php
            if(isset($_GET["rep"])){
                switch($_GET["rep"]){
                    case "OUI":
                        $userManager->delete($myUser);
                        header('Location: ./index.php?action=listUser');
                    break;
                    case "NON":
                        header('Location: ./index.php?action=listUser');
                    break;
                }
            }
        }    
?>
</div>