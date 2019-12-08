<?php
    // Import database connection file
    require ('config/config.php');
    require ('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        // Create query
        $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id={$update_id}";

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

            <h1>Edit Post</h1>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">

                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>"/>

                </div>
                <div class="form-group">

                    <label>Author</label>
                    <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>"/>

                </div>
                <div class="form-group">

                    <label>Body</label>
                    <textarea type="text" name="body" class="form-control"><?php echo $post['body']; ?></textarea>

                </div>

                <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>"/>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    <?php include('inc/footer.php'); ?>