<?php get_header(); ?>

<section class="site-section">
    <div class="hero bg-primary flex justify-center items-center h-screen">
        <div class="hero-container container object-center">
            <div class="hero-text text-center mb-10">
                <div class="hero-text__big text-white mb-5">
                    <h1 class="text-heading font-bold">We create digital products <br /> and solve your problems</h1>
                </div>
                <div class="hero-text__small text-gray">
                    <p class="font-normal text-regular">A fully integrated digital factory that will help you <br />
                        achieve your goals in your company</p>
                </div>
            </div>
            <div class="flex justify-center hero-buttons">
                <a href="#" class="btn bg-white text-primary rounded-full font-medium hover:bg-terciary">Get Started
                    --></a>
                <a href="#" class="btn text-white hover:text-terciary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="site-section">
    <div class="container mx-auto">
        <div class="homepage-video-container relative">
            <iframe class="homepage-video" src="https://www.youtube.com/embed/zwUsFN__jtE" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div>
            <div class="flex flex-wrap md:flex-nowrap justify-between text-center">
                <div class="mb-4 min-w-[50%] md:min-w-[25%]">
                    <span class="font-bold text-xxxl">2.5K+</span>
                    <span class="text-regular text-gray block">Jobs done successfully</span>
                </div>
                <div class="mb-4 min-w-[50%] md:min-w-[25%]">
                    <span class="font-bold text-xxxl">2.2K+</span>
                    <span class="text-regular text-gray block">Happy Clients</span>
                </div>
                <div class="mb-4 min-w-[50%] md:min-w-[25%]">
                    <span class="font-bold text-xxxl">94%</span>
                    <span class="text-regular text-gray block">Active Engagement</span>
                </div>
                <div class="mb-4 min-w-[50%] md:min-w-[25%]">
                    <span class="font-bold text-xxxl">58+</span>
                    <span class="text-regular text-gray block">Trusted Partners</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="site-section my-[80px]">

    <div class="container mx-auto">

        <div class="flex justify-between flex-wrap md:no-wrap items-center mb-[60px]">
            <div class="md:max-w-[30%]">
                <h2 class="text-terciary">-- Services</h2>
                <span class="font-bold text-xxxl">Our services, how can we help you?</span>
            </div>
            <div class="md:max-w-[30%]">
                <p class="text-gray text-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec
                    pharetra dui. Donec bibendum
                    facilisis metus in ullamcorper.</p>
            </div>
        </div>
        <div class="flex flex-wrap gap-[1rem]">
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center text-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/design.svg"
                            alt="UI/UX Design" />
                    </figure>
                    <h3 class="font-bold my-[30px]">UI/UX Design</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center text-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/coding.svg"
                            alt="development" />
                    </figure>
                    <h3 class="font-bold my-[30px]">Development</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center text-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/writing.svg"
                            alt="Content Writing" />
                    </figure>
                    <h3 class="font-bold my-[30px]">Content Writing</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center text-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/branding.svg" alt="branding" />
                    </figure>
                    <h3 class="font-bold my-[30px]">Branding</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center text-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/illustration.svg"
                            alt="Illustration" />
                    </figure>
                    <h3 class="font-bold my-[30px]">Illustration</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
            <div
                class="text-center w-[50%] basis-[48%] md:basis-[31.8%] lg:basis-[32.2%] border-[1px] border-gray p-[10px]">
                <div>
                    <figure
                        class="h-[60px] w-[60px] mx-auto mt-[20px] flex items-center rounded-full p-[10px] bg-lightgray">
                        <img class="h-[30px] mx-auto"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svgs/motion.svg"
                            alt="Motion Graphics" />
                    </figure>
                    <h3 class="font-bold my-[30px]">Motion Graphics</h3>
                    <p class="text-regular text-gray mb-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam
                        nec pharetra dui. Donec bibendum
                        facilisis metus in ullamcorper.</p>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="site-section steps-section bg-primary">

    <div class="container mx-auto flex items-center">

        <figure class="hidden md:block md:w-[50%] m-[40px]">
            <image src="<?php echo get_template_directory_uri(); ?>/assets/imgs/planning.jpg" alt="how it works" />
        </figure>

        <div class="text-white md:w-[50%] py-[30px]">
            <h2 class="text-terciary">-- How it works</h2>
            <span class="font-bold text-xxxl">Steps to get powerful services</span>
            <div>
                <div class="my-[20px]">
                    <h4 class="font-medium">1. Sitemap & User Flow</h4>
                    <p class="text-regular">lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam nec.</p>
                </div>
                <div class="my-[20px]">
                    <h4 class="font-medium">2. Wireframing / Lofi</h4>
                    <p class="text-regular">lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam nec.</p>
                </div>
                <div class="my-[20px]">
                    <h4 class="font-medium">3. Visualize / Hifi</h4>
                    <p class="text-regular">lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam nec.</p>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="site-section py-[80px]">

    <div class="container mx-auto">
        <h2 class="text-terciary text-center">-- Products</h2>
        <span class="font-bold text-xxxl text-center block mb-[80px]">Award winning products</span>
        <div class="flex gap-[1.5rem]">
            <article class="hidden md:block w-[50%]">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/work1.jpg" alt="Work One">
                </figure>
            </article>
            <div class="md:w-[50%] flex flex-wrap gap-[1rem]">
                <article class="md:w-[48%]">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/work2.jpg" alt="Work Two">
                    </figure>
                    <div>
                        <h3 class="font-bold py-[20px]">Fashion Landing Page</h3>
                        <p class="text-regular text-gray mb-[15px]">Lorem ipsum dolor sit amet, consectetur adipis elit
                            iquam
                            nec pharetra dui.</p>
                    </div>
                </article>
                <article class="md:w-[48%]">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/work3.jpg" alt="Work Two">
                    </figure>
                    <h3 class="font-bold py-[20px]">Insurance Landing Page</h3>
                    <p class="text-regular text-gray mb-[15px]">Lorem ipsum dolor sit amet, consectetur adipis elit
                        iquam
                        nec pharetra dui.</p>
                </article>
                <article class="md:w-[48%]">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/work4.jpg" alt="Work Two">
                    </figure>
                    <h3 class="font-bold py-[20px]">NFT Dashboard</h3>
                    <p class="text-regular text-gray mb-[15px]">Lorem ipsum dolor sit amet, consectetur adipis elit
                        iquam
                        nec pharetra dui.</p>
                </article>
                <article class="md:w-[48%]">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/work5.jpg" alt="Work Two">
                    </figure>
                    <h3 class="font-bold py-[20px]">Donation Mobile App</h3>
                    <p class="text-regular text-gray mb-[15px]">Lorem ipsum dolor sit amet, consectetur adipis elit
                        iquam
                        nec pharetra dui.</p>
                </article>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();