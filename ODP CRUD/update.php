<?php
include_once("connection.php");
# Edit
$id = $_GET["id"];
$updateStatement = $connect->prepare("SELECT * FROM articles WHERE id=$id");
$updateStatement->execute();
$article = $updateStatement->fetch();

# Update
if (isset($_POST["updateBtn"])) {
  echo "yes";
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
    <h3>Update Articles</h3>
    <a href="index.php" class="btn btn-dark">Go back</a>
  </div>

  <form action="" method="post">

    <div class="mb-3">
      <label for="title">Title</label>
      <input class="form-control" value="<?php echo $article['title'] ?>" type="text" name="title" required>
    </div>

    <div class="mb-3">
      <label for="description">Description</label>
      <textarea name="description" id="" class="form-control" rows="10"><?php echo $article['description'] ?></textarea>
    </div>

    <div>
      <input type="submit" class="btn btn-primary" name="updateBtn" value="Save">
    </div>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>