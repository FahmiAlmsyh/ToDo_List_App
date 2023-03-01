<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo App</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <!-- header -->
    <h1 class="my-5 d-flex justify-content-center "><i class="fa-sharp fa-regular fa-list-check"></i> <span style="margin-right:5px; margin-left:5px; color: #1476C1;">Todo</span>List</h1>
    <!-- card -->
    <div class="card shadow-lg mb-5 bg-body-tertiary border border-dark">
  <div class="card-body">
    <form class="d-flex" action="insert.php" method="post">
      <input class="form-control me-2" name="Data" type="text" placeholder="Apa yang mau Anda lakukan hari ini?">
      <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-circle-plus"></i></button>
    </form>
  </div>
</div>
<!-- end card -->

<!-- php language -->
  <?php
  include('config.php');
  $alldata = mysqli_query($connect, "SELECT * FROM list");
  ?>

    <!-- table -->
    <table class="table">

<tbody>
  <?php while ($row = mysqli_fetch_array($alldata)) { ?>
    <tr>
      <th scope="row"><?php echo $row['Id']?></th>
      <td><?php echo $row['Data']?></td>
      <td style="width:5%;">
         <a href="edit.php?ID=<?php echo $row['Id']?>" class="btn btn-outline-primary"><i class="fa-regular fa-pen-to-square"></i></a>
      </td>
      <td style="width:5%;">
          <a href="delete.php?ID=<?php echo $row['Id']?>" class="btn btn-outline-danger"><i class="fa-regular fa-square-check"></i></a>
    </td>
    </tr>
    <?php } ?>
</tbody>
</table>
<!-- end table -->


    </div>
    

    <!-- cdn bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>