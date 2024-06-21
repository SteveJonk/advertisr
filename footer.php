    </main>

    <footer class="footer p1 p-2 flex flex-col text-white">
        <div class="footer__top p-4 pt-8 rounded-t-[40px]">
            <div
                class="container flex flex-wrap md:flex-row md:flex-nowrap md:justify-between lg:gap-2 gap-6 border-t-[1px] !pt-[30px]">
                <div class="">
                    <?php if (is_active_sidebar('Footer 1')) { ?>
                    <?php dynamic_sidebar('Footer 1'); ?>
                    <?php } ?>
                </div>
                <div class="">
                    <?php if (is_active_sidebar('Footer 2')) { ?>
                    <?php dynamic_sidebar('Footer 2'); ?>
                    <?php } ?>
                </div>
                <div class="">
                    <?php if (is_active_sidebar('Footer 3')) { ?>
                    <?php dynamic_sidebar('Footer 3'); ?>
                    <?php } ?>
                </div>
                <div class="">
                    <?php if (is_active_sidebar('Footer 4')) { ?>
                    <?php dynamic_sidebar('Footer 4'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="footer__bottom p-4 rounded-b-[40px]">
            <div class="container border-t-[1px] !pt-[20px]">
                <?php if (is_active_sidebar('footer-bottom')) { ?>
                <?php dynamic_sidebar('footer-bottom'); ?>
                <?php } ?>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>