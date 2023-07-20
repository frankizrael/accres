<?php
set_query_var('ENTRY', 'index');
$blog_id = get_option( 'page_for_posts' );
$idpost = get_the_ID();
get_header(); ?>
<main id="page_detalle" class="x-container">
    <div class="bloggin">
        <div class="leftLaterals">
            <div class="boxWhite">
                <div class="backbutton">
                    <a href="<?php echo get_permalink($blog_id); ?>">Regresar</a>
                </div>
                <div class="metadata">
                    <div class="tag">
                        <?php
                            $categories = get_the_terms( $idpost, 'category' );
                            foreach( $categories as $category ) {
                                echo '<a href="'.$category->slug.'">'.$category->name.'</a>';
                            }
                        ?>
                    </div>                                  
                    <span class="noticias__item__date flex">
                        <p><?php the_field('date',$idpost); ?></p>
                    </span>
                </div>
                <div class="title">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="content">
                <?php the_content();?>
                </div>
            </div>
        </div>        
        <div class="rightLaterals">
            <h2>Categorías</h2>
            <ul class="list_tags">
                <li><a href="<?php echo site_url(); ?>/noticias" class="active">Todos</a></li>
                <?php wp_list_categories( array(
                    'title_li' => '',
                    'orderby' => 'name'
                ) ); ?> 
            </ul>
            <h2>Destacados</h2>
            <div class="postdestacados">
                <?php
                    if ( have_posts() ) : ?>
                    <?php
                        // Start the loop.
                        while ( have_posts() ) :
                            the_post();
                            $myid = get_the_ID();
                            if (get_field('destacado',$myid)){
                            ?>
                                <div class="event" id="noticia_<?php echo $myid; ?>">
                                    <div class="eventPosition"> 
                                        <img src="<?php echo get_the_post_thumbnail_url($myid); ?>">                                    
                                        <div class="eventPosition__content">
                                            <div class="title">
                                                <h3><?php echo get_the_title($myid); ?></h3>
                                            </div>
                                            <div class="linkContent">
                                                <a href="<?php echo get_permalink($myid);?>" class="link">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>