<?php
// GETTING DB
// $connect = new PDO("mysql:host=localhost;dbname=hit-article-db", "root", "");
// if (!$connect) {
//   echo "connection failed";
// }
include_once("connection.php");
// PREPARE A STATEMENT
$readStmt = $connect->prepare('SELECT * FROM articles');
// EXECUTE STATEMENT
$readStmt->execute();
// Fetch
$articles = $readStmt->fetchAll();
// $articles = $readStmt->fetchAll(PDO::FETCH_OBJ);

// print_r($articles);
if(isset($_POST['deleteBtn'])){
  print_r($_POST['id']);
  $id = $_POST['id'];
  $delStatement = $connect->prepare("DELETE FROM articles WHERE id=$id");
  $delStatement->execute();
  header("location:index.php");
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
  <div class="d-flex justify-content-between mb-3" >
    <h3>Articles</h3>
    <a href="create.php" class="btn btn-primary">Add Article</a>
  </div>
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th class="bg-primary">ID</th>
        <th class="bg-primary">Title</th>
        <th class="bg-primary">Description</th>
        <th class="bg-primary">Options</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($articles as $key => $article) : ?>
        <tr>
          <td><?php echo $key+1 ?></td>
          <td><?php echo $article['title'] ?></td>
          <td><?php echo $article['description'] // echo $article->description ?></td>
          <td>
            <form action="" method="post">
              <a href="update.php?id=<?php echo $article['id']?>" class="btn btn-sm btn-info">EDIT</a>
              <input hidden type="text" name="id" value="<?php echo $article['id']; ?>">
              <button name="deleteBtn" class="btn btn-sm btn-danger" >DELETE</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>