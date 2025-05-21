<?php
session_start();
include 'processData/connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"> Data from the Database 
                            <a class=" btn btn-warning float-end" href="insert.php">Add</a>
                        </h2>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-border text-center table-striped table-hover">
                            <thead>
                                <tr class="br-dark text-white table-warning">
                                <td><strong>Unique ID #.</strong></td>
                                <td><strong>First Name</strong></td>
                                <td><strong>Last Name</strong></td>
                                <td><strong>Fav Pet</strong></td>
                                <td><strong>Edit</strong></td>
                                <td><strong>Delete</strong></td>
                                </tr>   
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM `userinfo`";
                                $statement = $pdo->prepare($query);
                                $statement -> execute();

                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                                if($result){
                                    foreach($result as $row){
                                        ?>
                                        <tr>
                                            <td><?= $row['id'];?></td>
                                            <td><?= $row['firstname'];?></td>
                                            <td><?= $row['lastname'];?></td>
                                            <td><?= $row['favPet'];?></td>
                                            <td><a class="btn btn-primary" href="update.php?id=<?= $row['id'];?>">Edit</a></td>
                                            <td><a class="btn btn-danger" href="processData/infoDelete.php?id=<?= $row['id'];?>">Delete</a></td>
                                        </tr>
                                        <?php

                                    }


                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="6">No data found</td>
                                    </tr>
                                    <?php
                                    
                                }
                                ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>