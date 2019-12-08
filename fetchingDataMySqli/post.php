<?php
    // Import database connection file
    require ('config/config.php');
    require ('config/db.php');

    // Check for submit
    if(isset($_POST['delete'])){
        // Get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Create query
        $query = "DELETE FROM posts WHERE id={$delete_id}";

        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        };
    };

    // Get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // Create query variable
    $query = 'SELECT * FROM posts WHERE id = ' . $id;
    // Get query results
    $result = mysqli_query($conn, $query);
    // Fecth posts data - return in accociative array
    $post = mysqli_fetch_assoc($result);
    // Output data for time being
    // var_dump($posts);
    // Free result from memory
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
?>
    <?php include('inc/header.php'); ?>

        <div class="container">

            <h1><?php echo $post['title']; ?></h1>

            <small>Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>

            <hr>

            <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>"/>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>

            </form>

            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit Post</a>

        </div>

    <?php include('inc/footer.php'); ?>