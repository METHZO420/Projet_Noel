
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter Etudiant</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=modifetd" method="POST">
                        <div class="mb-3">
                                <label for="idcours" class="form-label">id</label>
                                <input type="text" class="form-control" value="<?php echo"$idval"?>" id="idetd" name="idetd" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="mb-3">
                                <label for="nometd" class="form-label">Nom</label>
                                <input type="text" class="form-control" value="<?php echo"$nomval"?>" id="nometd" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="codecours"value="<?php echo"$prenomval"?>" name="prenom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" value="<?php echo"$emailval"?>"name="email"  required> 
                            </div>
                            <div class="mb-3">
                                <label for="filiere" class="form-label">Filiere</label>
                                <input type="text" class="form-control" id="filiere"value="<?php echo"$filiereval"?>" name="filiere"  required> 
                            </div>
                            <button type="submit" class="btn btn-outline-success" >Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>