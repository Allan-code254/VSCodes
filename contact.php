<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
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
        <h2>Get in Touch</h2>
        <form action="contact_submit.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>
            <button type="submit">Send Message</button>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Online Store. All Rights Reserved.</p>
    </footer>
</body>
</html>
