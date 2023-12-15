
<?php
$servername = "localhost";
$username = "hpwebartrs";
$password = "f^BwD2m(3JkW";
$database = "hpwebartrs_forma";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<div id="last3posts">
    <h2 class="text-center">POSLEDNJI POSTOVI:</h2>
    <div class="row">
        <?php
        $query = "SELECT * FROM posts ORDER BY RAND() LIMIT 3";
        $result = $conn->query($query);

// Check if the query was successful
        if (!$result) {
            die("Query failed: " . $conn->error);
        }

// Fetch the rows from the result set
        while ($row = $result->fetch_assoc()) {
            // Assuming you have these variables defined somewhere
            $postImg2 = $row['imgURL'];
            $postURI2 = $row['postURI'];
            $postTitle2 = $row['title'];
            $postDescription2 = $row['description'];
            $postDate2 = $row['date'];
            ?>
            <article class="col-12 col-lg-4 animation" data-animation="slideRight">
                <div class="card card-custom border-0" style="height: 450px">
                    <div class="card-custom-img" style="background-image: linear-gradient(to right, rgba(255,255,255,0.1),rgba(214,168,107,0.6)), url(https://hp-web-art.rs/images/blog-images/<?php echo $postImg2; ?>)"></div>

                    <div class="card-body">
                        <h3 class="card-title mb-4"><?php echo $postTitle2; ?></h3>
                        <p class="card-text">
                            <?php echo $postDescription2 ?>
                        </p>
                    </div>
                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                        <a href="https://hp-web-art.rs/blogs.php/<?php echo $postURI2; ?>" class="butt glow1">Pročitajte više</a>
                    </div>
                </div>
            </article>
            <?php
        }

// Close the database connection
        $conn->close();
        ?>

    </div>
</div>