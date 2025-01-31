
 
  <div style="display:flex;">
    <h2>Liste des Client</h2>
    <a style="margin-left: 30%;" class="btn btn-outline-primary " href="?page=Ajoutclient">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'>Nom </th>
    <th class='col-2'>Prenom </th>
    <th class='col-1'>Email </th>
    <th class='col-1'>Telephone </th>

    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($client as $clt){?>
  <tr>
    <td class='col-1'><?= $clt['id']; ?></td>
    <td class='col-1'><?= $clt['nom']; ?></td>
    <td class='col-1'><?= $clt['prenom']; ?></td>
    <td class='col-1'><?= $clt['email']; ?></td>
    <td class='col-1'><?= $clt['telephone']; ?></td>

    <td class='col-1'>
      <a href="?page=deleteclient&id=<?= $clt['id'] ?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifierclient&id=<?= $clt['id'] ?>&nom=<?= $clt['nom']; ?>&prenom=<?= $clt['prenom'];; ?>&email=<?= $clt['email']; ?>&telephone=<?= $clt['telephone']; ?>" class="btn btn-outline-primary form-control">Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>