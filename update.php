<?php
session_start();
include 'processData/connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Insert Data</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card">
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                        $data_id = $_GET['id'];

                        $query = "SELECT * FROM `userinfo` WHERE id=? LIMIT 1";
                        $statement = $pdo->prepare($query);
                        $statement -> bindParam(1, $data_id, PDO::PARAM_INT);
                        $statement->execute();

                        $data = $statement ->fetch(PDO::FETCH_ASSOC);

                        ?>
                
                    <h1 class="h1">Update Data Form</h1>
                        <form action="processData/infoUpdate.php" method="post">
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                <input type="text"class="form-control" id="firstname" value="<?= $data['firstname'];?>" name="firstname">
                                <br>                
                                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $data['lastname'];?>">
                                <br>
                                <select name="favPet" id="favPet" class="form-select">
                                    <option selected><?= $data['favPet'];?></option>
                                    <option value="none">none</option>
                                    <option value="dog">dog</option>
                                    <option value="cat">cat</option>
                                    <option value="bird">bird</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                                <a href="index.php" class="btn btn-danger">Back</a>
                        </form> 
                        <?php
                        
                    }else{
                        echo "<h5>No data found.</h5>";
                    }
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>