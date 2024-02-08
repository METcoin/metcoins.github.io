<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MET Token</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-form">
        <h2>Send us a Message</h2>
        <form action="submit.php" method="post">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Your Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 MET Token. All rights reserved.</p>
    </footer>
</body>
</html>
