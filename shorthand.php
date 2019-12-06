<?php
    $loggedIn = false;
    $arr = [1, 2, 3, 4, 5];

    if($loggedIn){
        echo 'You are logged in';
        echo '<br>';
    } else {
        echo 'You are NOT logged in';
        echo '<br>';
    };

    // Ternary operator (? and :):
    echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
    echo '<br>';

    // Conditional ternary:
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;
    echo '<br>';

    // Nested ternary:
    $age = 20;
    $score = 15;
    echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Avergare' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
    echo '<br>';
?>

<div>

    <?php if($loggedIn){ ?>

        <h1>Welcome User</h1>

    <?php } else { ?>

        <h1>Welcome Guest</h1>

    <?php } ?>

</div>

<div>

    <?php if($loggedIn) : ?>

        <h1>Welcome User</h1>

    <?php else: ?>

        <h1>Welcome Guest</h1>

    <?php endif; ?>

</div>

<div>

    <?php foreach($arr as $val): ?>

        <?php echo $val; ?>
        <?php echo '<br>'; ?>

    <?php endforeach; ?>

</div>

<div>

    <?php for($i = 0; $i < 10; $i++): ?>

    <li>

        <?php echo $i; ?>
        <?php echo '<br>'; ?>

    </li>

    <?php endfor; ?>

</div>