<?php


  $servername = "localhost";
  $username = "hpwebartrs";
  $password = "f^BwD2m(3JkW";
  $database = "hpwebartrs_forma";
  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['imgURL'])) {
  $postImg = $_POST['imgURL'];
  $postURI = $_POST['postURI'];
  $postTitle = $_POST['title'];
  $postDescription = $_POST['description'];
  $postDate = $_POST['date'];
  $postContent = $_POST['content'];
  $postZakljucak = $_POST['zakljucak'];
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $a1 = $_POST['a1'];
  $a2 = $_POST['a2'];
  $a3 = $_POST['a3'];
  $a4 = $_POST['a4'];
  $a5 = $_POST['a5'];
  $a6 = $_POST['a6'];
  $a7 = $_POST['a7'];
  $a8 = $_POST['a8'];

  $sql = "INSERT INTO posts (imgURL, postURI, title, description, date, content, zakljucak, q1, q2, q3, q4, q5, q6, q7, q8, a1, a2, a3, a4, a5, a6, a7, a8) VALUES ('$postImg', '$postURI', '$postTitle', '$postDescription', '$postDate', '$postContent', '$postZakljucak', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8')";

  if ($conn->query($sql) === TRUE) {
  echo "Uspešno ste kreirali novi post";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }

  $conn->close();

 
?>
<style>
    *{
        font-size: 18px;
    }
    hr{
        margin-bottom: 50px;
    }
    .col-12{
        text-align: center;
    }
    input{
        width: 300px;
        height: 30px;
        border: 2px solid white;
        margin-bottom: 50px;
    }

    input.browse{
        border: none !important;
    }
    label{
        display: block;
        margin-bottom: 10px;
    }
    textarea{
        width: 600px;
        border: 2px solid black;
        margin-bottom: 60px;
        border: 2px solid white !important;
    }
    
    button{
    display: inline;
    font-size: 1.8rem;
    color: #424242 !important;
    padding: 15px 30px !important;
    border-radius: 2rem;
    background: linear-gradient(45deg, #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C);
    margin-bottom: 150px;
    }
    button:hover{
        background: linear-gradient(45deg, #FCF6BA, #BF953F, #B38728,  #AA771C, #FBF5B7);
        color: white !important;
    }
    form{
        margin-bottom: 0;
        padding-top: 100px;
    }
    main{
        background: linear-gradient(45deg, #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C);
        text-align: center;
    }
    body{
        margin: 0;
    }
}
</style>
<main>
<form id="form" method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 mb-4">
            <label for="imgURL">IMG URL</label>
            <input type="text" id="imgURL" name="imgURL">
        </div>
        <div class="col-12 mb-4">
            <label for="file">SELECT IMAGE:</label>
            <input class="browse" type="file" name="file" id="file" accept="image/*">
        </div>
        <div class="col-12 mb-4">
            <label for="postURI">POST URI</label>
            <input type="text" name="postURI" id="postURI">
            <p><span></span></p>
        </div>
        <div class="col-12 mb-4">
            <label for="title">POST TITLE</label>
            <input name="title" id="title">
        </div>
        <div class="col-12 mb-4">
            <label for="date">POST DATE</label>
            <input name="date" id="date">
        </div>
        <div class="col-12 mb-4">
            <label for="description">POST DESCRIPTION</label>
            <textarea rows="12" name="description" id="description"></textarea>
        </div>
        <hr>
        <hr>
        <div class="col-12 mb-4">
            <label for="content">POST CONTENT</label>
            <textarea rows="12" name="content" id="content"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="zakljucak">ZAKLJUCAK</label>
            <textarea rows="12" name="zakljucak" id="zakljucak"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q1">PITANJE 1</label>
            <textarea name="q1" id="q1"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a1">ODGOVOR 1</label>
            <textarea rows="4" name="a1" id="a1"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q2">PITANJE 2</label>
            <textarea name="q2" id="q2"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a2">ODGOVOR 2</label>
            <textarea rows="4" name="a2" id="a2"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q3">PITANJE 3</label>
            <textarea name="q3" id="q3"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a3">ODGOVOR 3</label>
            <textarea rows="4" name="a3" id="a3"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q4">PITANJE 4</label>
            <textarea name="q4" id="q4"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a4">ODGOVOR 4</label>
            <textarea rows="4" name="a4" id="a4"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q5">PITANJE 5</label>
            <textarea name="q5" id="q5"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a5">ODGOVOR 5</label>
            <textarea rows="4" name="a5" id="a5"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q6">PITANJE 6</label>
            <textarea name="q6" id="q6"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a6">ODGOVOR 6</label>
            <textarea rows="4" name="a6" id="a6"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q7">PITANJE 7</label>
            <textarea name="q7" id="q7"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a7">ODGOVOR 7</label>
            <textarea rows="4" name="a7" id="a7"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="q8">PITANJE 8</label>
            <textarea name="q8" id="q8"></textarea>
        </div>
        <div class="col-12 mb-4">
            <label for="a8">ODGOVOR 8</label>
            <textarea rows="4" name="a8" id="a8"></textarea>
        </div>
        <div class="col-12 mb-4">
            <button type="submit" name="submit" value="Upload"><b><a>OBJAVI</a></b></button>
        </div>
    </div>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $targetDirectory = "../images/blog-images/"; 
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image or a fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can customize this)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can customize this)
    $allowedFormats = ["jpg", "jpeg", "png", "gif", "webp"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and WEBP files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is OK, try to upload the file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "";
}
?>

<?php
  $servername = "localhost";
  $username = "hpwebartrs";
  $password = "f^BwD2m(3JkW";
  $database = "hpwebartrs_forma";
  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

// Fetch posts as an associative array
$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

// Close the database connection
$conn->close();

?>
<h1>Posts</h1>
    <table  border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><a href="newPost.php?id=<?php echo $post['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
  $servername = "localhost";
  $username = "hpwebartrs";
  $password = "f^BwD2m(3JkW";
  $database = "hpwebartrs_forma";
  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform delete operation
    $sql = "DELETE FROM posts WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection


?>
</main>