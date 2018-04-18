<?php include "Header.php"; ?>
<div class="content col-lg-12">
<?php if (!isset($_COOKIE['login_user'])) header("Location: index.php");?>
    <div id="content">
        <h1>Reparatie aanvraag</h1>
        <div class="row">
            <form action="reparatie_aanvraag_plaatsen.php" method="POST" class="center-block myForm needs-validation">
                <div class="form-group col-sm-4">
                    <label for="artNumber">Artikelnummer</label>
                    <input type="number" name="artNumber" class="form-control">
                </div>
                <div class="form-group col-sm-8">
                    <label for="productName">Productnaam</label>
                    <input type="text" name="productName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-default">Aanvraag plaatsen</button>
            </form>
        </div>
    </div>
</div>
<?php include "Footer.php"; ?>