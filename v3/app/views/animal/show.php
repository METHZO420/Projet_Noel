
 
  <div style="display:flex;">
    <h2>Liste des Etudiants</h2>
    <a style="margin-left: 30%;" class="btn btn-outline-primary col-2 " href="?page=Ajoutanimal">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'>Type </th>
    <th class='col-1'>Age </th>
    <th class='col-1'>Sante </th>

    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($animals as $animal ){?>
  <tr>
    <td class='col-1'><?= $animal->getId(); ?></td>
    <td class='col-1'><?= $animal->getType(); ?></td>
    <td class='col-1'><?= $animal->getAge(); ?></td>
    <td class='col-1'><?= $animal->getSante(); ?></td>

    <td class='col-1'>
      <a href="?page=deletanimal&idanimal=<?= $animal->getId() ?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifieranimal&id=<?= $animal->getId() ?>&type=<?= $animal->getType(); ?>&age=<?= $animal->getAge(); ?>&sante=<?= $animal->getSante(); ?> " class="btn btn-outline-primary form-control">Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>