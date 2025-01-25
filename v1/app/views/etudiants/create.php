
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter Etudiant</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=savetd" method="POST">
                            <div class="mb-3">
                                <label for="nometd" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nometd" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="codecours" name="prenom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"  required> 
                            </div>
                            <div class="mb-3">
                                <label for="filiere" class="form-label">Filiere</label>
                                <input type="text" class="form-control" id="filiere" name="filiere"  required> 
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