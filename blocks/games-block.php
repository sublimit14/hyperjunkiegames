<div class="container container-games" >
    <section id="games">
        <h2>Games</h2>
        <!-- Swiper -->
        <div class="swiper hyperSwiper">
            <div class="swiper-wrapper">


                <?php
                    $args = array('post_type' => 'games', 'posts_per_page' => 5);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                ?>

                <div class="swiper-slide">
                    <div class="game-wrapper">

                        <div class="wrapper-top">
                            <?php
                            $image = get_field('game_img');
                            if( !empty( $image ) ): ?>
                                <img class="wrapper-top-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <?php
                            $image = get_field('game_img_m');
                            if( !empty( $image ) ): ?>
                                <img class="wrapper-top-img-m" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <div class="wrapper-top__links">
                                <a href="<?php the_field('game_apple'); ?>" target="_blank">
                                    <div class="store-link">
                                        <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.0128 12.954C29.7905 13.1264 25.8909 15.3183 25.8909 20.1944C25.8909 25.8341 30.8518 27.829 31 27.8781C30.9754 28.0012 30.2102 30.6117 28.3837 33.2715C26.7548 35.6112 25.0516 37.9506 22.4602 37.9506C19.8687 37.9506 19.2022 36.4484 16.2157 36.4484C13.3033 36.4484 12.2667 38 9.8972 38C7.52775 38 5.87404 35.8327 3.9737 33.173C1.77703 30.0452 0 25.1936 0 20.5883C0 13.2001 4.81298 9.2842 9.55164 9.2842C12.0693 9.2842 14.167 10.9343 15.7466 10.9343C17.2522 10.9343 19.597 9.18572 22.4599 9.18572C23.5461 9.18596 27.4459 9.28468 30.0128 12.954ZM21.1028 6.0584C22.2874 4.65462 23.1267 2.70907 23.1267 0.763529C23.1267 0.492645 23.1021 0.221762 23.0526 0C21.1274 0.0739207 18.832 1.28074 17.4498 2.88148C16.3639 4.11285 15.3518 6.0584 15.3518 8.02874C15.3518 8.32419 15.4013 8.61987 15.4259 8.71835C15.5492 8.74291 15.7469 8.76771 15.9443 8.76771C17.6721 8.76747 19.8439 7.61001 21.1028 6.0584Z"/>
                                        </svg>
                                        <span>App<br>Store</span>
                                    </div>


                                </a>

                                <a href="<?php the_field('game_google'); ?>" target="_blank">
                                    <div class="store-link">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.3311 14.6438L6.53731 0.8125L24.0873 10.8875L20.3311 14.6438ZM2.9373 0C2.1248 0.425 1.58105 1.2 1.58105 2.20625V29.7875C1.58105 30.7938 2.1248 31.5688 2.9373 31.9937L18.9748 15.9937L2.9373 0ZM29.5123 14.1L25.8311 11.9688L21.7248 16L25.8311 20.0312L29.5873 17.9C30.7123 17.0063 30.7123 14.9938 29.5123 14.1ZM6.53731 31.1875L24.0873 21.1125L20.3311 17.3563L6.53731 31.1875Z"/>
                                        </svg>
                                        <span>Google<br>Play</span>
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="wrapper-bottom">

                            <?php
                            $image = get_field('game_icon');
                            if( !empty( $image ) ): ?>
                                <img class="bottom-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>



                            <div class="bottom-content">
                                <h3 class="bottom-content__title"><?php the_title(); ?></h3>
                                <div class="bottom-content-desc">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 19H19C19.2652 19 19.5196 19.1054 19.7071 19.2929C19.8946 19.4804 20 19.7348 20 20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20C4 19.7348 4.10536 19.4804 4.29289 19.2929C4.48043 19.1054 4.73478 19 5 19ZM13 13.175L16.243 9.933L17.657 11.347L12 17.004L6.343 11.347L7.757 9.933L11 13.175V2H13V13.175Z"/>
                                    </svg>
                                    <span><?php the_field('game_stat'); ?></span>
                                </div>
                            </div>
                        </div>

                  </div> <!-- game-wrapper-->
                </div>
                    <?php
                }
                wp_reset_postdata();

                ?>

            </div>
            <!--<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>-->
            <div class="swiper-pagination"></div>
        </div>




        </section>
</div>
