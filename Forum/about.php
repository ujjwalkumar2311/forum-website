<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - iDiscuss</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include 'partials/_header.php'; ?>

    <!-- About Section -->
    <div class="container my-5">
        <h1 class="text-center mb-4">About iDiscuss</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" alt="Forum Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <p>
                    Welcome to <strong>iDiscuss</strong>, the go-to platform for sharing knowledge, resolving queries,
                    and engaging in meaningful discussions. Our mission is to create an inclusive community where users
                    can collaborate, learn, and grow together.
                </p>
                <p>
                    Whether you're looking for help with a programming problem, want to discuss the latest tech trends,
                    or share your insights, iDiscuss is here for you.
                </p>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-md-4 text-center">
                <h4>Community Driven</h4>
                <p>
                    iDiscuss thrives on the participation of its users. Ask questions, share answers, and make an
                    impact.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Topics for Everyone</h4>
                <p>
                    From technology to lifestyle, explore a wide range of categories that cater to diverse interests.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Easy to Use</h4>
                <p>
                    Our user-friendly interface ensures you spend more time engaging and less time navigating.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>