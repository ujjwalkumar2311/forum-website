<?php
// Include database connection
include 'partials/_dbconnect.php';

// Start the session only if it hasn't been started yet
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/forum">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forum">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/forum/about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
          
            $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<a class="dropdown-item" href="threadlist.php?catid=' . $row['category_id'] . '">' . htmlspecialchars($row['category_name']) . '</a>';
            }
          echo '</div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/forum/contact.php">Contact</a>
        </li>
      </ul>
      <div class="d-flex align-items-center justify-content-end w-100">';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '
        <form class="d-flex me-3" method="get" action="search.php">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <p class="text-light my-0 mx-2">Welcome ' . htmlspecialchars($_SESSION['useremail']) . '</p>
        <a href="partials/_logout.php" class="btn btn-outline-success me-2">Logout</a>';
} else {
    echo '
        <form class="d-flex me-3" method="get" action="search.php">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <button class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>';
}

echo '</div>
    </div>
  </div>
</nav>';

// Include modals
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

// Show success alert on signup
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] === "true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now log in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>
