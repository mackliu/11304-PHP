<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>登入</h1>
    <?php include("common/navbar.php"); ?>
    <main>
        <h2>請登入</h2>
        <form action="handle_login.php" method="POST">
            <div>
                <label for="username">帳號：</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="登入">
        </form>
    </main>
    <?php include("common/footer.html"); ?>

</body>
</html>