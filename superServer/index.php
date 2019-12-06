<?php include 'server_info.php'; ?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>System Information</title>

    </head>

    <body>

        <div class="container">

            <h1>Server and File Information</h1>
            <?php if($server): ?>

                <ul class="list-group">

                    <?php foreach($server as $key => $value): ?>

                        <li class="list-group-item">

                            <strong><?php echo $key; ?>:</strong>
                            <?php echo $value; ?>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php endif; ?>

            <h1>Client Information</h1>
            <?php if($client): ?>

                <ul class="list-group">

                    <?php foreach($client as $key => $value): ?>

                        <li class="list-group-item">

                            <strong><?php echo $key; ?>:</strong>
                            <?php echo $value; ?>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php endif; ?>

        </div>

    </body>

</html>