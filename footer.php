                <div class="row justify-content-center my-5">
                    <?php
                    the_posts_pagination_clean([
                        'mid_size'=>2,
                        'prev_text' => __( '<span class="page-link"><i class="fa fa-arrow-left"></i></span>', 'textdomain' ),
                        'next_text' => __( '<span class="page-link"><i class="fa fa-arrow-right"></i></span>', 'textdomain' ),
                        'before_page_number'=>'<span class="page-link">',
                        'after_page_number'=>'</span>'
                    ]);
                    ?>
                </div>
            </div>
            <div class="col-sm-4 sidebar">
                    <?php get_sidebar() ?>
                <div class="category">
                    <h4>
                        <span>
                            <i class="fas fa-caret-down">カテゴリー</i>
                        </span>
                    </h4>
                    <div class="category-contents">
                        <?php 
                            $args = array(
                                'show_option_all'    => '',
                                'orderby'            => 'name',
                                'order'              => 'ASC',
                                'style'              => 'none',
                                'show_count'         => 0,
                                'hide_empty'         => 1,
                                'use_desc_for_title' => 1,
                                'child_of'           => 0,
                                'feed'               => '',
                                'feed_type'          => '',
                                'feed_image'         => '',
                                'exclude'            => '',
                                'exclude_tree'       => '',
                                'include'            => '',
                                'hierarchical'       => 1,
                                'title_li'           => __( 'Categories' ),
                                'show_option_none'   => __( '' ),
                                'number'             => null,
                                'echo'               => 1,
                                'depth'              => 0,
                                'current_category'   => 0,
                                'pad_counts'         => 0,
                                'taxonomy'           => 'category',
                                'walker'             => null
                            );
                            wp_list_categories( $args ); 
                        ?>
                    </div>
                </div>
                <?php get_sidebar("2nd"); ?>
                <p id="page-top">
                    <a href="#">PAGE TOP</a>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="home">
            <i class="fas fa-home fa-2x"></i>
            <a class="footer-goto-home" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
        </div>
        <div>
        <p class="copyright">
        Copyright © 2018 user_name All Rights Reserved.
        </p>
        </div>
    <?php if ( is_active_sidebar( 'footer-left-widget' ) ) : ?>
        <div class="footer-widget">
            <?php dynamic_sidebar( 'footer-left-widget' ); ?>
        </div>
    <?php endif; ?>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function () {
            var topBtn = $('#page-top');
            topBtn.hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 500) {
                    topBtn.fadeIn();
                } else {
                    topBtn.fadeOut();
                }
            });
            topBtn.click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</div>
</body>
</html>