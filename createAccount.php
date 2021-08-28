<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {
    $roll_no = isset($_POST['roll_no']) ? $_POST['roll_no'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $stmt = $pdo->prepare('INSERT INTO users (roll_no, password) VALUES (?, ?)');
    $stmt->execute([ $roll_no, $password]);

    $msg = 'Account Created Successfully!';
}
?>

<head>
    <title>Make Account Pls</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
    <nav class="navtop">
        <div>
            <h1>hi, dis where u make account</h1>
        </div>
    </nav>
    <div class="content update">
	    <h2>Create Account</h2>
        <form action="createAccount.php" method="post">
            <label for="roll_no">UserName: </label>
            <input type="text" name="roll_no" id="roll_no" required>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Create">
        </form>
        <?php if ($msg): ?>
        <p><?=$msg?></p>
        <?php endif; ?>
    </div>
</body>
