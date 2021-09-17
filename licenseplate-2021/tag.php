<?php
/**
 * The template for displaying Tag pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package License_Plate
 */

get_header(); 
$tagSlug = single_tag_title("", false);
$image = get_field('featured_image', $category);
?>

<div class="tag">
    <?php 
    if ($image) {
    ?>
    <div class="hero" style="background: url(<?php echo $image['url'] ?>) no-repeat center center; background-size: cover;">
    <?php
    } else {
    ?>
    <div class="hero" style="background: url(https://www.georgiaclimateproject.org/wp-content/uploads/2020/02/bg-news-dark.jpg?fit=1600%2C1000) no-repeat center center; background-size: cover;">
    <?php
    }
    ?>
        <div class="container">
            <div class="row justify-content-md-center content">
                <div class="col-lg-7">
                    <h2 class="title"><?php echo $tagSlug; ?></h2>
                    <div class="mustache"></div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    $args = array(
        'post_type' => 'post', // enter custom post type
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'name',
                'terms'    => $tagSlug,
            ),
        ),
    );
      
    $loop = new WP_Query( $args );
    
    if ($loop->have_posts()) {
    ?>
    <div class="section posts">
        <div class="container">
            <div class="row justify-content-md-center">
                <?php
                while($loop->have_posts()) {
                    $loop->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="<?php echo the_permalink();?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    $image_id = get_post_thumbnail_id();
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                                    $image_title = get_the_title($image_id);
                                    ?>
                                    <figure>
                                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">
                                    </figure>
                                    <?php
                                }
                                ?>
                                <div class="card-body">
                                    <p class="card-pubdate"><?php the_date(); ?></p>
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </div>
                            </a>
                            <?php 
                            $tags = get_the_tags();
                            if ($tags) {
                                ?>
                                <div class="tags">
                                    <ul>
                                        <?php
                                        foreach($tags as $tag) {
                                            $tag_link = get_tag_link($tag->term_id);
                                            echo '<li><a href="' . $tag_link . '">' . $tag->name . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>