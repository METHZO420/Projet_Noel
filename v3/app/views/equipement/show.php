
 
  <div style="display:flex;">
    <h2>Liste des equipement</h2>
    <a style="margin-left: 50px;" class="btn btn-outline-primary " href="?page=Ajout">Ajout</a>
  </div>

  <?php ?>
  <table class='border table table-responsive table-dark'>
    <th class='col-1'>ID</th>
    <th class='col-1'>Nom du equipement</th>
    <th class='col-1'>Etat de l'equipement</th>
    <th class='col-1'>Disponibilite</th>
    <th class='col-1'></th>
    <th class='col-1'></th>
  </thead>

  <?php  foreach ($equipement as $equipmt){?>
  <tr>
    <td class='col-1'><?= $equipmt->getId(); ?></td>
    <td class='col-1'><?= $equipmt->getNom(); ?></td>
    <td class='col-1'><?= $equipmt->getEtat(); ?></td>
    <td class='col-1'><?= $equipmt->getDisponibilite(); ?></td>
    <td class='col-1'>
      <a href="?page=deleteequipement&id=<?= $equipmt->getId()?>" class='btn btn-outline-danger form-control'>Supprimer</a>
    </td>
    <td class='col-1'>
      <a href="?page=modifierequipement&id=<?=  $equipmt->getId(); ?>&nom=<?= $equipmt->getNom(); ?>&etat=<?=  $equipmt->getEtat(); ?>&disponibilite=<?=  $equipmt->getDisponibilite(); ?>" class='btn btn-outline-primary form-control'>Modifier</a>
    </td>
  </tr>
  <?php } ?>

  </table>
  

</body>
</html>