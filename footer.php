    <footer class="footer">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <h5 class="hdln-2">Contact Emiliana</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non enim efficitur orci volutpat eleifend faucibus vel erat. </p>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" placeholder="Your Message" rows="3" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <p class="legal-text">&copy; <?php echo date('Y'); ?> Emiliana Therapy | All Rights Reserved</p>
        </div>

        <?php wp_footer(); ?>
    </footer>

    </body>
</html>
