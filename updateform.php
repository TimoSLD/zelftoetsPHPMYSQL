<?php
require ("includes/functions.php");
require ("includes/header.php");
$id = $_GET["id"];
$row = getOne();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>verjaardag kalender</title>
</head>
<body class="text-center">
    <div class="container">
      <form action="update.php" method="post">
        <p class="my-4">
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" value="<?php echo 
            $row["name"] ?>" required>
        </p>
        <p class="my-4">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="<?php echo 
            $row["date"] ?>" required>
        </p>
        <input type="number" name="id" value="<?php echo $id ?>" hidden>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</body>
</html>