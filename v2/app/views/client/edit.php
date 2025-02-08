
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Modifier Client</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=modifclient" method="POST">
                        <div class="mb-3">
                                <label for="id" class="form-label">id</label>
                                <input type="text" class="form-control" value="<?php echo"$idval"?>" id="id" name="id" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" value="<?php echo"$nomval"?>" id="nom" name="nom" required>
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
                                <label for="telephone" class="form-label">telephone</label>
                                <input type="text" class="form-control" id="telephone"value="<?php echo"$telephoneval"?>" name="telephone"  required> 
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