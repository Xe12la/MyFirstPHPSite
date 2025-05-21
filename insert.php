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
                    <h1 class="h1">Insert Data Form</h1>
                        <form action="processData/formholder.php" method="post">
                                <input type="text"class="form-control" id="firstname" name="firstname" placeholder="Enter fisrtname...">
                                <br>                
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name...">
                                <br>
                                <select name="favPet" id="favPet" class="form-select">
                                    <option selected>Seelect a Favorite Pet</option>
                                    <option value="none">none</option>
                                    <option value="dog">dog</option>
                                    <option value="cat">cat</option>
                                    <option value="bird">bird</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="index.php" class="btn btn-danger">Back</a>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>