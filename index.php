<?php
require ("includes/functions.php");
require ("includes/header.php");
$result = getAll();
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

<body>
  <table class="table">
    <thead>
      <tr>
        <th>Naam</th>
        <th>Verjaardag</th>
      </tr>
    </thead>
    <?php
     foreach ($result as $row) {
        ?>
       <tr>
       <a href="detail.php">
       <td><h2><?=$row["name"]?></h2></td>
       <td><h2><?=$row["date"]?></h2></td>
       </a>
       <td>
            <a href="updateform.php?id=<?php echo $row['id']; ?>"
            class="btn btn-info">edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Weet je zeker dat je deze verjaardag wilt verwijderen?')"confirm
            class="btn btn-danger">Delete</a>
       </td>
       </tr>
      <?php
          }
      ?>
    </table>
</div>
<?php
require ("includes/footer.php");
?>
</body>
</html>