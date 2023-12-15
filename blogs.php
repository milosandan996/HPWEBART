

<?php
// Povezivanje na bazu podataka
$servername = "localhost";
$username = "hpwebartrs";
$password = "f^BwD2m(3JkW";
$database = "hpwebartrs_forma";

$conn = new mysqli($servername, $username, $password, $database);

// Provjera konekcije
if ($conn->connect_error) {
    die("Konekcija na bazu podataka nije uspjela: " . $conn->connect_error);
}

// Function to get a post by URL
function getPostByURI($conn, $uri) {
    $uri = $conn->real_escape_string($uri); // Sanitize the URI
    $sql = "SELECT * FROM posts WHERE postURI = '$uri'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Get the URI from the request
$urlParts = explode('/', $_SERVER['REQUEST_URI']);
$postURI = isset($urlParts[2]) ? $urlParts[2] : null;

// Check if a URI is specified
if ($postURI !== null) {
    // Get post data by URI
    $post = getPostByURI($conn, $postURI);

    if ($post !== null) {
        ?>
        <?php
        include 'partials/header2.php';
        ?>
        <main>
            <section id="single-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">

                            <h1>
                                <?php echo $post['title']; ?>
                            </h1>
                            <div>
                                <?php echo $post['content']; ?>
                            </div>
                            <h2>
                                ZAKLJUČAK
                            </h2>
                            <p>
                                <?php echo $post['zakljucak']; ?>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="text-center plate">
                                <img src="https://hp-web-art.rs/images/blog-images/<?php echo $post['imgURL']; ?>" alt="Vrste sajtova">
                            </div>
                            <h2 class="text-left">
                                NAJČEŠĆE POSTAVLJANA PITANJA:
                            </h2>
                            <div class="panel-group mb-6" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo $post['q1']; ?>
                                                <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                            </a>
                                        </h4>

                                    </div>

                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo $post['a1']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <?php echo $post['q2']; ?>
                                                <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo $post['a2']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <?php echo $post['q3']; ?>
                                                <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo $post['a3']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <?php echo $post['q4']; ?>
                                                <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo $post['a4']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if (!empty($post['q5'])) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    <?php echo $post['q5']; ?>
                                                    <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                <p>
                                                    <?php echo $post['a5']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if (!empty($post['q6'])) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    <?php echo $post['q6']; ?>
                                                    <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                <p>
                                                    <?php echo $post['a6']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if (!empty($post['q7'])) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSeven">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    <?php echo $post['q7']; ?>
                                                    <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                            <div class="panel-body">
                                                <p>
                                                    <?php echo $post['a7']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                                <?php
                                if (!empty($post['q8'])) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingEight">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    <?php echo $post['q8']; ?>
                                                    <i class="fa-solid fa-hand-point-left fa-beat-fade"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                            <div class="panel-body">
                                                <p>
                                                    <?php echo $post['a8']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>


                            </div>
                            <?php
                            include 'partials/form.php';
                            ?>
                        </div>
                        <?php
                        include 'partials/last3posts.php';
                        ?>
                        <div class="row pagination">
                            <div class="col-12 text-center">
                                <a href="https://hp-web-art.rs/blog.php">
                                    Povratak na BLOG
                                </a>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include 'partials/footer2.php';
        ?>
        <?php
    } else {
        echo "No result for URI: $postURI";
    }
} else {
    echo "No post URI specified.";
}
?>
            

