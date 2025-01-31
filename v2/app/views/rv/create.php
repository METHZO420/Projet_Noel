
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5>Ajouter rv</h5>
                    </div>
                    <div class="card-body">
                        <form action="?action=saverv" method="POST">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="heure" class="form-label">heure du rv</label>
                                <input type="time" class="form-control" id="heure" name="heure" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">description du rv</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="mb-3">
                                <label for="client" class="form-label">Id Client</label>
                                <input type="number" class="form-control" id="client" name="client"  required> 
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