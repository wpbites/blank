<?php include('header.php'); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?>"><h1 class="post-title"><?php the_title(); ?></h1></a>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; ?>
    <?php else: ?>
        <p>No posts found. 😢</p>
    <?php endif; ?>
</main>
<?php include('footer.php'); ?>