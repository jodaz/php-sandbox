<?php
    $loggedIn = true;
    $array = [1, 2, 3, 4, 5];

    // if ($loggedIn) {
    //     echo 'You are logged in';
    // } else {
    //     echo 'You are not logged in';
    // }

    // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

    /*
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    $age = 20;
    $score = 5;

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional')
                            : ($age > 10 ? 'Horrible' : 'Average'));
    */
?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php }?>
</div>

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($array as $val): 
        echo $val;
    endforeach; ?>
</div>