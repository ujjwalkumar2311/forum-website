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
   

  

   <!-- Search Results start here-->
        <div class="container my-3">
          <h1 class="py-3">Search results for  <?php echo $_GET['search'] ?> </h1>

          <?php  
    
    $noresults = true;
    $query = $_GET["search"];
    $sql = "SELECT * FROM threads where MATCH(thread_title, thread_desc ) against ('$query')"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_id = $row['thread_id'];
        $url = "thread.php?threadid=". $thread_id;
        $noresults = false;

        //display the search result

        echo '<div class="result">
            <h3> <a href=" '. $url . ' " class="test-dark"> '.$title.'Connot install pyaudio</a> </h3> 

            <p> '. $desc.'</p>
            
        </div>';
    }

    if ($noresults){
        echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No Results Found</p>
                    <p class="lead"> Suggestions: <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords. </li></ul>
                    </p>
                </div>
             </div>';
    }

    ?>

                
          

 </div>
  
      

    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


