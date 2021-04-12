<table id="tabAuteur" class="table my-3">
    <thead class="table-dark">
        <tr>
            <th>
                <strong>Nom </strong>
            </th>
            <th>
                <strong>Prénom </strong>
            </th>
            <th>
                <strong>Date de naissance </strong>
            </th>
            <th>
                <strong>Identifiant Pays </strong>
            </th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <tr>
            <td>
                <?php echo $author->nom_a(); ?>
            </td>
            <td>
                <?php echo $author->prenom_a(); ?>
            </td>
            <td>
                <?php echo $author->date_naissance_a(); ?>
            </td>
            <td>
                <?php echo $author->id_p(); ?>
            </td>
        </tr>
    </tbody>      
</table>
<div class="row">
    <div class="col-2"></div>
    <a href="index.php?action=listAuteur" class="btn btn-outline-warning col-3">Retour</a>
    <div class="col-2"></div>  
    <button id="book" class="btn btn-outline-warning col-3" data-id="<?php echo $author->id_a(); ?>">Voir la liste de ses livres</button>
    <div class="col-2"></div>
</div>
<!--    tableau caché qui sera visible apres avoir cliquer sur le boutton   -->
<table id="tabBook" class="table hide my-3">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Résumé</th>
        </tr>
    </thead>
    <tbody id="tabListBook" class="bg-white">
                <!-- completer par ajax.js -->
     </tbody>      
</table>
