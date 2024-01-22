<?php
// Getting DB
// $connect = new PDO('mysql:host=localhost;dbname=hit-article-db', 'root', '');
// if (!$connect) {
//   echo "connection failed";
// }
include_once("connection.php");

print_r($_POST);

if (isset($_POST['saveBtn'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  // Prepare a Statement
  $createStatement = $connect->prepare("INSERT INTO articles (`title`, `description`) VALUES ('$title','$description')");
  //  Execute the statement
  $createStatement->execute();

  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ODP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
  <div class="d-flex justify-content-between mb-3">
    <h3>Create Articles</h3>
    <a href="index.php" class="btn btn-dark">Go back</a>
  </div>

  <form action="" method="post">

    <div class="mb-3">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" required>
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <input class="form-control" type="text" name="description" required>
    </div>

    <div>
      <input type="submit" class="btn btn-primary" name="saveBtn" value="Save">
    </div>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>