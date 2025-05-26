<section class="contact">
    <div class="container">
        <h2 class="section-title">Contact <span>Me</span></h2>
        
        <div class="contact-content">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p>ikakodzocenidze3@gmail.com</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <p>+995 599 679 077</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Tbilisi, Georgia</p>
                </div>
                
                <div class="social-links">
                    <a href="https://www.facebook.com/ikako.dzocenidze"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/irakli-dzotsenidze-417377258/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/ikako58"><i class="fab fa-github"></i></a>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Send Me a Message</h3>
                <?php 
                $formResult = handleContactForm();
                if ($formResult): ?>
                    <div class="alert <?php echo $formResult['success'] ? 'alert-success' : 'alert-error'; ?>">
                        <?php echo $formResult['message']; ?>
                    </div>
                <?php endif; ?>
                
                <form action="index.php?page=contact" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>