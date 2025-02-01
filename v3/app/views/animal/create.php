
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter Etudiant</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=saveanimal" method="POST">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="mumber" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="sante" class="form-label">Sante</label>
                                <input type="text" class="form-control" id="sante" name="sante"  required> 
                            </div>
                            <div class="mb-3">
                                <label for="idEquipement" class="form-label">IdEquipement</label>
                                <input type="number" class="form-control" id="idEquipement" name="idEquipement"  > 
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