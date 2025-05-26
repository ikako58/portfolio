    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 class="footer-title">About Me</h3>
                    <p class="footer-text">
                        A passionate developer creating modern web experiences with clean code and user-focused design.
                    </p>
                    <div class="social-links">
                        <a href="https://github.com/ikako58" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/irakli-dzotsenidze-417377258/" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/ikako.dzocenidze" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <?php foreach (getNavigation() as $item): ?>
                            <li><a href="<?= htmlspecialchars($item['url']) ?>"><?= htmlspecialchars($item['title']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Contact Info</h3>
                    <address class="contact-info">
                        <p><i class="fas fa-envelope"></i> ikakodzocenidze3@gmail.com</p>
                        <p><i class="fas fa-phone"></i> +995 599 679 077</p>
                        <p><i class="fas fa-map-marker-alt"></i> Tbilisi, Georgia</p>
                    </address>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Irakli Dzotsenidze. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>