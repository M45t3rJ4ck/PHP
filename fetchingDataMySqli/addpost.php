<?php
    // Import database connection file
    require ('config/config.php');
    require ('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        // Create query
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        };
    };
?>
    <?php include('inc/header.php'); ?>

        <div class="container">

            <h1>Add Post</h1>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">

                    <label>Title</label>
                    <input type="text" name="title" class="form-control"/>

                </div>
                <div class="form-group">

                    <label>Author</label>
                    <input type="text" name="author" class="form-control"/>

                </div>
                <div class="form-group">

                    <label>Body</label>
                    <textarea type="text" name="body" class="form-control"></textarea>

                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    <?php include('inc/footer.php'); ?>