
 
  <div style="display:flex;">
    <h2>Liste des Etudiants</h2>
    <a style="margin-left: 30%;" class="btn btn-outline-primary " href="?page=Ajoutetd">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'>Nom </th>
    <th class='col-2'>Prenom </th>
    <th class='col-1'>Email </th>
    <th class='col-1'>filiere </th>

    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($etudiants as $etd){?>
  <tr>
    <td class='col-1'><?= $etd['id']; ?></td>
    <td class='col-1'><?= $etd['nom']; ?></td>
    <td class='col-1'><?= $etd['prenom']; ?></td>
    <td class='col-1'><?= $etd['email']; ?></td>
    <td class='col-1'><?= $etd['filiere']; ?></td>

    <td class='col-1'>
      <a href="?page=deletetd&idetd=<?= $etd['id'] ?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifieretd&idetd=<?= $etd['id'] ?>&nom=<?= $etd['nom']; ?>&prenom=<?= $etd['prenom'];; ?>&email=<?= $etd['email']; ?>&filiere=<?= $etd['filiere']; ?>" class="btn btn-outline-primary form-control">Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>