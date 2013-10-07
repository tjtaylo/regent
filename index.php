<?php get_header(); ?>

    <div id="container" class="clear grid">
        <div id="content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>                    
                    <div class="entry">

                        <?php get_template_part( 'parts/postdata', 'index' ); ?>

                    </div><!-- .entry -->
                </div><!-- .article -->
                <?php comments_template(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <h2>Not found</h2>
            <?php endif; ?>
        </div><!-- #content -->
        <div id="sidebar">
            <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
        </div>
    </div><!-- #container -->

<?php get_footer(); ?>