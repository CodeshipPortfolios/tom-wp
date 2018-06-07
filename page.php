<?php get_header( ); ?>
    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
    <div class="page-content">
        <section class="page">
            <header class="profile-content-header">
                <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
            </header>
            <article class="page-content-body row">
                <?php the_content() ?>
            </article>
        </section>
    </div>
    <?php endwhile?>
<?php
get_footer( );