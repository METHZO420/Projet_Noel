
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter Cours</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=savecours" method="POST">
                            <div class="mb-3">
                                <label for="nomcours" class="form-label">Nom du Cours</label>
                                <input type="text" class="form-control" id="nomcours" name="nomcours" required>
                            </div>
                            <div class="mb-3">
                                <label for="codecours" class="form-label">Code du cours</label>
                                <input type="text" class="form-control" id="codecours" name="codecours" required>
                            </div>
                            <div class="mb-3">
                                <label for="nbheures" class="form-label">Nombre d'heures</label>
                                <input type="number" class="form-control" id="nbheures" name="nbheures"  required> 
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