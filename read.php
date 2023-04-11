<?php include('header.php');

include('dbconnect.php');

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
// $data = $result->fetch_assoc();
// print_r($result );
?>

<div class="mainsection">
    <div class="container">
        <div class="row mt-3">
            <h4 class="text-secondary">Read all users info -</h4>
            <table class="table table-sm table-bordered table-hover table-stripped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) {
                        foreach ($result as $data) { ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['age']; ?></td>
                                <td><?php echo $data['mobile']; ?></td>
                                <td><?php echo $data['city']; ?></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><a class="text-white" href="update.php?id=<?php echo $data['id']; ?>">Update</a></button>
                                    <button class="ml-2 btn btn-sm btn-primary"><a class="text-white" href="deleteuser.php?id=<?php echo $data['id']; ?>">Delete</a></button>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>