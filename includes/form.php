<div class="col-sm-12 col-md-4 mt-4">
    <h3>Hibajegy</h3>
    <form class="foum-control" action="tickets" method="POST">
        <div class="form-control mb-3">
            <label for="name" class="form-label">Náv</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Náv">
            <small id="nameHelp" class="form-text text-muted">A jegyet létrehozó teljes neve</small>
        </div>
        <div class="form-control mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">A jegyet létrehozó email címe</small>
        </div>
        <div class="form-control mb-3">
            <label for="description" class="form-label">Hibajelenség leírása</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            <small id="descriptionHelp" class="form-text text-muted">A hibajelenség rövid leírása</small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary m-2">Küldés</button>
    </form>
</div>