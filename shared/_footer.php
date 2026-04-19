<footer id="site-footer">
    <!-- Brand -->
    <a href="index.php" class="ftr-brand">
        <img src="images/logo.png" alt="ENSSM" class="ftr-brand-logo">
        <div class="ftr-brand-text">
            <span class="ftr-brand-name">ENSSM</span>
            <span class="ftr-brand-sub">Beni Messous · Alger</span>
        </div>
    </a>
    
    <!-- Animated top accent line -->
    <div class="ftr-accent-line"></div>

    <!-- Main compact body -->
    <div class="ftr-body">
        <div class="container">

            <!-- Row 2: Contact info + Socials -->
            <div class="ftr-row-mid">

                <!-- Contact pills -->
                <div class="ftr-contacts">
     <a href="mailto:contact@enssm.dz" class="ftr-contact-item">
        <i class="fas fa-envelope"></i>
        <span>contact@enssm.dz</span>
     </a>
     <span class="ftr-contact-item">
        <i class="fas fa-phone-alt"></i>
        <span>+213 (0) 23 12 34 56</span>
     </span>
     </div>
                <div class="ftr-map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.5788099573824!2d2.987798774965821!3d36.780670468801674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb1007e68470f%3A0xf731518a2d27b517!2zRU5TU00t2KfZhNmF2K_Ysdiz2Kkg2KfZhNi52YTZitinINmE2KPYs9in2KrYsNipINin2YTYtdmFINmI2KfZhNio2YPZhQ!5e0!3m2!1sfr!2sdz!4v1766235632105!5m2!1sfr!2sdz" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                <!-- Social section avec titre au-dessus -->
                <div class="ftr-social-section">
                    <p class="ftr-social-title">Suivez-nous sur:</p>
                    <div class="ftr-socials">
                        <a href="https://www.facebook.com/ENS.SourdsMuets.dz" target="_blank" class="ftr-social" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="ftr-social" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="ftr-social" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="ftr-social" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="ftr-divider"></div>

            <!-- Row 3: Copyright avec spans positionnés -->
            <div class="ftr-row-bottom">
                <div class="ftr-tags">
                    <span><i class="fas fa-shield-alt"></i> Site officiel</span>
                </div>
                
                <p class="ftr-copy">
                    &copy; <?php echo date('Y'); ?> <strong>ENSSM</strong> — Tous droits réservés.
                    <span class="ftr-time">
                        <i class="far fa-clock"></i>
                        <?php
                            date_default_timezone_set('Africa/Algiers');
                            echo date('H:i') . ' (GMT+1)';
                        ?>
                    </span>
                </p>
                
                <div class="ftr-tags">
                    <span><i class="fas fa-globe-africa"></i> Algérie</span>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="./shared/app.js"></script>
<script src="./shared/chatbot.js"></script>
<script src="js/oranbyte-google-translator.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>