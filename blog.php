
<?php
$postsPerPage = 5; // Broj postova po stranici
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($current_page - 1) * $postsPerPage;
///////////////////////////////////////////////////////////////////////////////
$servername = "localhost";
$username = "hpwebartrs";
$password = "f^BwD2m(3JkW";
$database = "hpwebartrs_forma";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'partials/header2.php';
?>
<main>
    <?php
    include 'partials/lead-section.php';
    ?>
    <section id="blog">
        <div class="container py-4">
            <?php
            $query = "SELECT * FROM posts ORDER BY id DESC LIMIT $start, $postsPerPage";
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
                <article class="postcard dark">
                    <a class="postcard__img_link" href="https://hp-web-art.rs/blogs.php/<?php echo $postURI2; ?>">
                        <img class="postcard__img" src="images/blog-images/<?php echo $postImg2; ?>" alt="Dizajn web sajta">
                    </a>
                    <div class="postcard__text">
                        <h2 class="postcard__title">
                            <a href="https://hp-web-art.rs/blogs.php/<?php echo $postURI2; ?>"> 
                                <?php echo $postTitle2; ?>
                            </a>
                        </h2>
                        <div class="postcard__subtitle small">
                            <time>
                                <i class="fas fa-calendar-alt mr-2"></i>Objavljeno: <?php echo $postDate2; ?>
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            <?php echo $postDescription2 ?>
                        </div>
                        <a class="butt glow1" href="https://hp-web-art.rs/blogs.php/<?php echo $postURI2; ?>">Pročitajte više</a>
                    </div>
                </article>
                <?php
            }

// Close the database connection
            ?>

        </div>
        <?php
// Dohvati ukupan broj postova
        $sqlCount = "SELECT COUNT(*) AS total FROM posts";
        $resultCount = $conn->query($sqlCount);

// Proveri uspešnost upita
        if ($resultCount) {
            // Fetch the row from the result set
            $rowCount = $resultCount->fetch_assoc();
            $totalPosts = $rowCount['total'];

            // Izračunaj ukupan broj stranica
            $totalPages = ceil($totalPosts / $postsPerPage);

            // Prikaz linkova za navigaciju između stranica
            ?>
            <div class="paging">
                <?php
                // Previous page link
                if ($current_page > 1) {
                    $prevPage = $current_page - 1;
                    echo "<a href='?page=$prevPage'>Prev</a> ";
                }

                // Current page link
                echo "<a class='current'>Strana $current_page</a> ";

                // Next page link
                if ($current_page < $totalPages) {
                    $nextPage = $current_page + 1;
                    echo "<a href='?page=$nextPage'>Next</a> ";
                }
                ?>
            </div>
            <?php
        } else {
            echo "Query failed: " . $stmtCount->error;
        }

        $conn->close();
        ?>

    </section>


    <?php
    include 'partials/contact-section.php';
    ?>

</main>
<?php
include 'partials/footer2.php';
?>
