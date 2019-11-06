<?php require_once("./includes/header.php"); ?>

<script src="js/firebase/auth.js"></script>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Log In</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once("./includes/footer.php"); ?>
