
<?php include 'header.php'; ?>

    <!-- Contact Us Section -->
    <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out to us by filling out the form below or using the contact details provided.</p>
            
            <div class="row">
                <div class="col-md-6">
                    <form action="process_contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message" name="message"  required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h4>Contact Information</h4>
                    <p><strong>Phone:</strong> +355-123-456-789</p>
                    <p><strong>Email:</strong> contact@albania.al</p>
                    <p><strong>Address:</strong> 123 Albanian St, Tirana, Albania</p>
                    
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
include 'db_config.php';


$query = $pdo->query("SELECT * FROM contacts");

$results = $query->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query('SELECT * FROM contacts');
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'footer.php'; ?>
