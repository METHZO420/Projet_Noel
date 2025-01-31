
 
  <div style="display:flex;">
    <h2>Liste des Rendez-Vous</h2>
    <a style="margin-left: 50px;" class="btn btn-outline-primary " href="?page=Ajout">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'> Date</th>
    <th class='col-1'>heure</th>
    <th class='col-1'>Description</th>
    <th class='col-1'>Client</th>
    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($rv as $rendv){?>
  <tr>
    <td class='col-1'><?= $rendv['id']; ?></td>
    <td class='col-1'><?= $rendv['dates']; ?></td>
    <td class='col-1'><?= $rendv['heure']; ?></td>
    <td class='col-1'><?= $rendv['descriptions']; ?></td>
    <td class='col-1'><?= $rendv['client']; ?></td>
    <td class='col-1'>
      <a href="?page=deleterv&id=<?= $rendv['id'] ?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifierrv&id=<?= $rendv['id'] ?>&date=<?= $rendv['dates']; ?>&heure=<?= $rendv['heure']; ?>&description=<?= $rendv['descriptions'];?>&client=<?= $rendv['client']; ?>" class='btn btn-outline-primary form-control'>Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>