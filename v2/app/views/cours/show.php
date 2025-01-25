
 
  <div style="display:flex;">
    <h2>Liste des Cours</h2>
    <a style="margin-left: 50px;" class="btn btn-outline-primary " href="?page=Ajout">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'>Nom du cours</th>
    <th class='col-1'>Code du cours</th>
    <th class='col-1'>Nbres d'heures</th>
    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($cours as $cour){?>
  <tr>
    <td class='col-1'><?= $cour['id']; ?></td>
    <td class='col-1'><?= $cour['nomcours']; ?></td>
    <td class='col-1'><?= $cour['codecours']; ?></td>
    <td class='col-1'><?= $cour['nbheures']; ?></td>
    <td class='col-1'>
      <a href="?page=deletecours&idcours=<?= $cour['id'] ?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifiercours&idcours=<?= $cour['id'] ?>&nomcours=<?= $cour['nomcours']; ?>&codecours=<?= $cour['codecours']; ?>&nbheures=<?= $cour['nbheures']; ?>" class='btn btn-outline-primary form-control'>Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>