<!-- Footer -->
<div class="clb-page-footer">
    <div class="clb-page-container">
        <div class="copyright">
            Copyright © <?php echo date("Y"); ?>, Ohio Version <?php
                    $ohio_theme = wp_get_theme( get_template() );
                    $ohio_version = $ohio_theme->get( 'Version' ) ? $ohio_theme->get( 'Version' ) : '2.0.0';
                    echo $ohio_version;
                ?> by <a target="_blank" href="https://themeforest.net/user/colabrio">Colabrio</a>.
        </div>
        <div class="social-networks">
            <a target="_blank" href="https://docs.clbthemes.com/ohio/">Documentation</a>&nbsp;|&nbsp;<a target="_blank" href="https://colabrio.ticksy.com/">Help Center</a>&nbsp;|&nbsp;Follow Us -&nbsp;<a target="_blank" href="https://www.facebook.com/"><span class="dashicons dashicons-facebook"></span> Facebook</a>
        </div>  
    </div>
</div>
