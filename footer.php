<?php
$footer_company_name = get_field('footer_company_name');
$footer_kvk = get_field('footer_kvk');
$footer_location = get_field('footer_location');

?>

<footer class="site-footer bg-primary h-screen tall-tablet-scroll short-mobile-scroll">
    <section class="container-wide">
        <div class="color-shift bg-secondary rounded-2xl p-8 min-h-[80vh] flex justify-between flex-col">
            <div class="vertical-text-scroll w-full flex justify-start items-center mb-8">
                <h2 class="bold-105 font-manrope text-title p-10">[LET'S BUILD SOMETHING GREAT]</h2>
            </div>
            <!--menu-grid-->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 justify-center items-center">
                <!-- kvk -->
                <div class="flex flex-col ">
                    <h4 class="thin-12 font-kode text-font mb-2 py-4 pl-4"><?php echo esc_html($footer_company_name); ?></h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                        <p class="normal-14 text-title"><?php echo esc_html($footer_kvk); ?></p>
                        <p class="normal-14 text-title"><?php echo esc_html($footer_location); ?></p>
                    </div>
                </div>

                <!--menu-->
                <div class="w-full">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">01. Page</h4>
                    <div class="font-inter text-title normal-14 py-4 pl-4">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'space-y-1/2',
                            'fallback_cb' => false,
                        ));
                        ?>
                    </div>
                </div>

                <!--Social Media Icons/Links-->
                <div class="w-full flex flex-col">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">02. Socials</h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                        <a href="https://www.linkedin.com/company/hexcreate" target="_blank" class="font-inter normal-14 text-title">LinkedIn</a>
                        <a href="https://www.instagram.com/hexcreatenl" target="_blank" class="font-inter normal-14 text-title">Instagram</a>
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <h4 class="font-kode thin-12 text-font mb-2 py-4 pl-4">03. Legals</h4>
                    <div class="font-inter text-title normal-14 flex flex-col py-4 pl-4">
                         <a href="<?php echo esc_url(site_url('/cookie-policy')); ?>" target="_blank" class="font-inter normal-14 text-title">Cookie Policy</a>
                    </div>
                </div>

            </div>
            <!-- copyright -->
            <div class="flex justify-center items-center text-center py-4 w-full flex-col xl:flex-row mt-8 gap-2 ">
                <div class="flex shrink-0 z-40 items-center p-4 no-outline">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="home" class="relative inline-block">
                        <img class="logo-default w-15 xl:w-40 h-auto transition-opacity duration-300 hover:opacity-0" src="<?php echo get_template_directory_uri(); ?>/src/images/HexCreate-x-orange.png" alt="HexCreate Logo">
                        <img class="logo-black w-15 xl:w-40 h-auto absolute top-0 left-0 transition-opacity duration-300 opacity-0 hover:opacity-100" src="<?php echo get_template_directory_uri(); ?>/src/images/HexCreate-black.png" alt="HexCreate Logo">
                    </a>
                </div>
                <div class="flex flex-col no-outline text-center">
                    <div class="flex flex-row no-outline">
                        <h3 class="font-inter extrabold-220 text-title">HexCreate</h3>
                        <h3 class="font-inter bold-20 text-title border-2 border-title rounded-full p-2 h-1/2">HC</h3>
                    </div>
                    <p class="font-inter thin-12 text-title text-center">©2026</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>