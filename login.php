<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="transactions.php">Transactions</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
    </nav>
    <main>
        <h2>Please Enter Your Credentials</h2>
        <form action="login_handler.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Online Store. All Rights Reserved.</p>
    </footer>
</body>
</html>
