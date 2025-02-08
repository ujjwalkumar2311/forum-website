<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            width: 100%;
            height: 65vh;
            /* 65% of the viewport height */
            object-fit: cover;
            /* Ensures the image fits without distortion */
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
   

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/forum/partials/images/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="/forum/partials/images/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="/forum/partials/images/3.jpg" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Categories Section -->
    <div class="container my-3">
        <h2 class="text-center">Welcome to iDiscuss - Browse Categories</h2>
        <div class="row">

            <!-- Fetch categories and display cards -->
            <?php
            $sql = "SELECT * FROM `categories`"; 
            $result = mysqli_query($conn, $sql);

            // Map category_id to image file names
            $imageMap = [
                1 => "python.png",
                2 => "javascript.png",
                3 => "django.jpeg",
                4 => "flask.png",
                // Add more mappings as needed
            ];

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];

                // Use the mapped image or a default image if no mapping exists
                $image = isset($imageMap[$id]) ? $imageMap[$id] : "default.jpg";

                echo '<div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                            <img src="/forum/partials/images/' . $image . '" class="card-img-top" alt="Image for ' . $cat . '">
                            <div class="card-body">
                                <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                                <p class="card-text">' . substr($desc, 0, 90) . '... </p>
                                <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                            </div>
                        </div>
                      </div>';
            }
            ?>

        </div>
    </div>

    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
