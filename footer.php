</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-primary py-[40px]" role="contentinfo">
    <?php do_action( 'tailpress_footer' ); ?>

    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between items-center border-b-[1px] border-gray">
            <h4 class="text-white font-bold text-xxxl">Are you interested in working with us?</h4>
            <div class="my-[50px]">
                <a href="#" class="btn bg-white rounded-full font-medium hover:bg-terciary">Let's Chat</a>
                <a href="#"
                    class="btn border-[1px] border-white rounded-full font-medium text-white hover:border-terciary hover:text-terciary">Schedule
                    Meet</a>
            </div>
        </div>
        <div class="flex flex-wrap gap-[1.5rem] justify-between my-[30px]">
            <div class="md:w-[35%]">
                <p class="text-white">lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia!</p>
            </div>
            <div class="flex flex-wrap gap-[1rem] justify-between mb:no-wrap md:w-[40%]">
                <div>
                    <h5 class="text-white text-xl font-medium">Company</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'company-menu',
                                'theme_location'  => 'company_menu',
                                'li_class'        => 'mx-0 text-gray hover:text-terciary',
                                'fallback_cb'     => false,
                            )
                        );
                    ?>
                </div>
                <div>
                    <h5 class="text-white text-xl font-medium">Resources</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'resources-menu',
                                'theme_location'  => 'resources_menu',
                                'li_class'        => 'mx-0 text-gray hover:text-terciary',
                                'fallback_cb'     => false,
                            )
                        );
                    ?>
                </div>
                <div>
                    <h5 class="text-white text-xl font-medium">Links</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'links-menu',
                                'theme_location'  => 'links_menu',
                                'li_class'        => 'mx-0 text-gray hover:text-terciary',
                                'fallback_cb'     => false,
                            )
                        );
                    ?>
                </div>
                <div>
                    <h5 class="text-white text-xl font-medium">Follow Us</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'follow-menu',
                                'theme_location'  => 'follow_menu',
                                'li_class'        => 'mx-0 text-gray hover:text-terciary',
                                'fallback_cb'     => false,
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </div>


</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>