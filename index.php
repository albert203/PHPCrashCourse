<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" name="firstname" placeholder="Firstname..." type="text">

            <label for="lastname">Lastname?</label>
            <input name="lastname" type="text" id="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="fish">Fish</option>
                <option value="bird">Bird</option>
                <option value="cat">Cat</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>

</body>
</html>