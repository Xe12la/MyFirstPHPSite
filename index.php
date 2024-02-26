<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <main>
            <form action="formholder.php" method="post">
                <label for="fisrtname">First Name?</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter fisrtname...">
                <br>                
                <label for="lastname">Last Name?</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter last name...">
                <br>
                <label for="favPet">Favorite Pets?</label>
                <select name="favPet" id="favPet">
                    <option value="none">none</option>
                    <option value="dog">dog</option>
                    <option value="cat">cat</option>
                    <option value="bird">bird</option>
                </select>
            </form>
        </main>
    </body>
</html>