<?php include('header.php');

$id = intval($_GET['id']);
// print_r($id);
include('dbconnect.php');

$sql = "SELECT * FROM user where id='$id'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
// print_r($data);
?>
<div class="mainsection">
    <div class="container">
        <h4 class="text-secondary mt-3">Update user -</h4>
        <div class="row">
            <form method="POST" action="updateuser.php">
            <input type="text" class="form-control" name="id" value="<?php echo($id); ?>">
                <div class="form-group">
                    <label for="">Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo($data['name']) ?>">
                </div>
                <div class="form-group">
                    <label for="">Age </label>
                    <input type="number" class="form-control" name="age" placeholder="Age" value="<?php echo($data['age']) ?>">
                </div>
                <div class="form-group">
                    <label for="">Mobile </label>
                    <input type="varchar" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo($data['mobile']) ?>">
                </div>
                <div class="form-group">
                    <label for="">City </label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo($data['city']) ?>">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>