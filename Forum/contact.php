<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - iDiscuss</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    .contact-header {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        padding: 60px 0;
    }

    .contact-header h1 {
        font-weight: bold;
    }

    .contact-header p {
        font-size: 1.2rem;
    }

    .form-control:focus {
        box-shadow: 0 0 5px rgba(32, 201, 151, 0.8);
        border-color: rgba(32, 201, 151, 0.8);
    }

    .contact-info ul {
        list-style-type: none;
        padding: 0;
    }

    .contact-info li {
        margin-bottom: 15px;
        font-size: 1.1rem;
    }

    .contact-info li i {
        color: #2575fc;
        margin-right: 10px;
    }

    .social-icons a {
        margin: 0 10px;
        color: #2575fc;
        font-size: 1.5rem;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #6a11cb;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php'; ?>

    <!-- Contact Header -->
    <div class="contact-header text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Reach out to us with your queries, feedback, or suggestions.</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-7">
                <h2 class="mb-4">Send Us a Message</h2>
                <form action="process_contact.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                            placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-md-5">
                <h2 class="mb-4">Get In Touch</h2>
                <div class="contact-info">
                    <ul>
                        <li><i class="fas fa-envelope"></i> Email: support@idiscuss.com</li>
                        <li><i class="fas fa-phone"></i> Phone: +1 123-456-7890</li>
                        <li><i class="fas fa-map-marker-alt"></i> Address: 123 Forum Street, Tech City, USA</li>
                    </ul>
                </div>
                <h3 class="mt-4">Follow Us</h3>
                <div class="social-icons">
                    <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'partials/_footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>