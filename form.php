<?php
// $data = ['hello', 'baby', 'ever'];
// if(isset($_POST["submit"])){
//   $name = $_POST["name"];
//   array_push($data, $name);
// }
// print_r($data);

// ? File handling
// ? ** must be $_POST
// ? ** must contain enctype=multipart/form-data
// ? ** input type file
// $_POST don't know Files 

if (isset($_POST["submit"])) {
  // echo"<pre>";
  // print_r($_POST);
  // echo '</pre><br>';

  // echo($_POST['name']);
  // echo '<br>';


  // ? testing
  // foreach ($_POST['hobby'] as $hobby) {
  //   echo "
  //   <ul>
  //     <li>$hobby</li>
  //   </ul>";
  // }

  // ? file system
  // print_r($_FILES);
  echo "<pre>" . print_r($_FILES, true) . "</pre>";
  $tmp_name = $_FILES['picture']['tmp_name'];
  $name = $_FILES['picture']['name'];
  $type = $_FILES['picture']['type'];
  // checking type of uploaded file. whether it is the same as the image formats. 
  if(in_array($type,['image/png', 'image/jpg', 'image/jpeg'])){
    move_uploaded_file($tmp_name, "photos/$name");
  }
}

// ? moving uploaded file
// move_uploaded_file($tmp_name, "photos/$name");
// * move_uploaded_file(from, to) from = tmp_name, to = folder name (in the server)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Html Form</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <!-- <input type="text" placeholder="Name" name="name"><br>

    <input type="radio" name="gender" id="male" value="Male">
    <label for="male">Male</label>

    <input type="radio" name="gender" id="female" value="Female">
    <label for="female">Female</label><br>

    <select name="address" id="address">Address
      <option value="Yangon">Yangon</option>
      <option value="Mandalay">Mandalay</option>
      <option value="Taung Gyi">Taung Gyi</option>
    </select>
    
    <div>
      <label for="hobby">Hobby</label><br>
      <input type="checkbox" name="hobby[]" id="coding" value="coding"><label for="coding" >Coding</label>
      <input type="checkbox" name="hobby[]" id="reading" value="reading"><label for="reading" >Reading</label>
      <input type="checkbox" name="hobby[]" id="swimming" value="swimming"><label for="swimming" >Swimming</label>
    </div> -->

    <input type="file" name="picture" id="">

    <input type="submit" name="submit" placeholder="SUBMIT">
  </form>
</body>

</html>

<!-- file system
Array
(
  [picture] => Array
    (
      [name] => Screenshot from 2024-01-13 14-35-14.png
      [full_path] => Screenshot from 2024-01-13 14-35-14.png
      [type] => image/png
      [tmp_name] => /tmp/phpCBxUfG
      [error] => 0
      [size] => 847333
    )

)
-->