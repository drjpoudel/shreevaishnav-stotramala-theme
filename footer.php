    <footer class="site-footer">
        <p>
            <?php
                $options = get_option('stotramala_theme_settings');
                echo esc_html($options['footer_text'] ?? '&copy; ' . date('Y') . ' ' . get_bloginfo('name'));
            ?>
        </p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
