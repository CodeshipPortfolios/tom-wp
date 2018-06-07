<article class=l-post>
   <div class="blog-contents">
        <div class="content-block">
            <h2 class="change-color-tittle"><a href="<?php the_permalink(); ?>"><?php the_title( '', '' ); ?></a></h2>
                <div class="posted">
                    <?php 
                    // Get post date
                    $archive_year  = get_the_time( 'Y' ); 
                    $archive_month = get_the_time( 'm' ); 
                    $archive_day   = get_the_time( 'd' ); 
                    ?>
                    <a class="date-color" href="<?= get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time("Y/m/d") ?></a>
                    <?php the_category(",") ?>
                </div>
                 <div class="post-thumbnail">
                    <?php
                        if (has_post_thumbnail() ) {
                            the_post_thumbnail(array(),array('class' => "post-thumbnail-img",));
                        }
                        else {
                            echo '<img class="post-thumbnail-default-img" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png"/>';
                        }
                    ?>
                    </div>
                <div class="entry">
                    
                        <?php the_excerpt(); ?>
                    
                </div>
                <div class="next">
                    <button class="next-btn">
                        <a href="<?php the_permalink(); ?>">続きを読む</a>
                    </button>
                </div>
        </div>
    </div>
</article>