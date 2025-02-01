
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter Etudiant</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=modifanimal" method="POST">
                        <div class="mb-3">
                                <label for="id" class="form-label">id</label>
                                <input type="text" class="form-control" value="<?php echo"$idval"?>" id="id" name="id" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="mb-3">
                                <label for="type" class="form-label">Nom</label>
                                <input type="text" class="form-control" value="<?php echo"$typeval"?>" id="type" name="type" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" value="<?php echo"$ageval"?>"name="age"  required> 
                            </div>
                            <div class="mb-3">
                                <label for="sante" class="form-label">Sante</label>
                                <input type="text" class="form-control" id="codecours"value="<?php echo"$santeval"?>"  name="sante" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="idEquipement" class="form-label">idEquipement</label>
                                <input type="text" class="form-control" id="idEquipement"value="" name="idEquipement"  > 
                            </div>
                            <button type="submit" class="btn btn-outline-success" >Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>