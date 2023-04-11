<?php include('header.php'); ?>

<div class="mainsection">
    <div class="container">
        <h4 class="text-secondary mt-3">Create user -</h4>
        <div class="row">
            <form method="POST" action="saveuser.php">
                <div class="form-group">
                    <label for="">Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Age </label>
                    <input type="number" class="form-control" name="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="">Mobile </label>
                    <input type="varchar" class="form-control" name="mobile" placeholder="Mobile">
                </div>
                <div class="form-group">
                    <label for="">City </label>
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>