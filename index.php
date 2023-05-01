<?php
//start session
session_start();
// including the path to the header
require_once __DIR__ . '/include/header.php';

$errors = [];  // for storing errors messages
$inputs = []; //for string sanitized input values

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);
if ($request_method === 'GET') {
    //generate a token
    $_SESSION['token'] = bin2hex(random_bytes(35));
    //showing the form
    require __DIR__ . '/include/get.php';
} elseif ($request_method === 'POST') {
    //handle the submission
    require __DIR__ . '/include/post.php';
    //re-display the form if the form display the errors
    if ($errors) {
        require __DIR__ . '/include/get.php';
    } else {
?>
        <section>
            <div class="circle">
                <div class="check"></div>
            </div>

            <h1 class="message">You have transfered</h1>
            <h2 class="amount">$<?= $amount ?></h2>

            <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" rel="prev">Done</a>
        </section>
<?php
    }
}

?>
<!-- < ?php if (!$errors) : ?>
    <section>
        <div class="circle">
            <div class="check"></div>
        </div>

        <h1 class="message">You've transfered</h1>
        <h2 class="amount">$<?= $amount ?></h2>

        <a href="< ?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" rel="prev">Done</a>
    </section>
< ?php endif ?> -->
<?php
include_once __DIR__ . '/include/footer.php';
?>