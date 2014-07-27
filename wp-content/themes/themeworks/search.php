<?php
//Call the header
get_header();
?>
<div class="container" id="main">
    <div class="row">
        <h1><?php tw_title(); ?></h1>
        <div class="col-md-8">
            <?php if (have_posts()) : // Results Found ?>

                <h1>Résultat(s) de la recherche</h1>
                <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    </div>
                </article>
                <hr />

                <?php endwhile; ?>

                <ul class="pager">
                    <li><?php next_posts_link('<i class="icon-chevron-left"></i>&nbsp; Résultats moins récents') ?></li>
                    <li><?php previous_posts_link('Résultats plus récents &nbsp;<i class="icon-chevron-right"></i>') ?></li>
                </ul>

            <?php else : // No Results ?>

                <p>Désolé. Nous n"avons trouvé aucun résultat pour votre recherche. Veuillez essayer avec d'autres mots clés.</p>
                <div class="row">
                    <div class="col-md-6 posts">
                        <h3>Articles récents</h3>
                        <ul>
                            <?php
                                $args = array(
                                    'numberposts' => '5',
                                    'post_status' => 'publish'
                                );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ) {
                                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
                                }
                            ?>
                        </ul>
                    </div> <!-- .posts -->
                    <div class="col-md-6 pages">
                        <h3>Plan du site</h3>
                        <ul>
                            <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
                        </ul>
                    </div> <!-- .pages -->
                </div> <!-- .row -->

            <?php endif; ?>

        </div> <!-- .col-md-8 -->

        <?php get_sidebar(); ?>

    </div> <!-- .row -->
</div><!-- .container -->
<?php
//Call the footer
get_footer();
?>