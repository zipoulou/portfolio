<?php
/**
 * Footer Template
 *
 * @package Portfolio_Nicolas
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="logo">N<span class="logo-dot">.</span>G</span>
                <p>&copy; <?php echo date( 'Y' ); ?> Nicolas GALZY — Étudiant en informatique</p>
            </div>
            <div class="footer-links">
                <a href="https://www.unilim.fr" target="_blank" rel="noopener noreferrer">Université de Limoges</a>
                <a href="mailto:nicolas.galzy@etu.unilim.fr">Contact</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
