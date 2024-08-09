<?php
/**
 * Template part for displaying posts
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */
?>

<?php
/**
 * Template part for displaying posts
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

?>
<?php $mehndi_tattoo_artist_column_layout = get_theme_mod( 'mehndi_tattoo_artist_sidebar_post_layout');
if($mehndi_tattoo_artist_column_layout == 'four-column' || $mehndi_tattoo_artist_column_layout == 'three-column' ){ ?>
  <div id="category-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="page-box">
        <?php if (!is_single() && function_exists('get_post_gallery')) {
          $gallery = get_post_gallery(get_the_ID(), false);
          if ($gallery) { 
            $gallery_ids = explode(',', $gallery['ids']); ?>
            <div class="container entry-gallery">
              <div class="row">
                <?php $max_images = min(count($gallery_ids), 4);
                for ($index = 0; $index < $max_images; $index++) {
                  $id = $gallery_ids[$index];
                  $image_url = wp_get_attachment_image_url($id, 'full'); ?>
                  <div class="col-md-6 mb-1 align-self-center">
                    <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="Gallery Image <?php echo ($index + 1); ?>">
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php }
        } ?>
        <div class="box-content mt-2 text-center">
            <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
          <div class="box-info">
            <?php $mehndi_tattoo_artist_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
            foreach ($mehndi_tattoo_artist_blog_archive_ordering as $mehndi_tattoo_artist_blog_data_order) : 
              if ('date' === $mehndi_tattoo_artist_blog_data_order) : ?>
                <i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
              <?php elseif ('author' === $mehndi_tattoo_artist_blog_data_order) : ?>
                <i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
              <?php elseif ('comment' === $mehndi_tattoo_artist_blog_data_order) : ?>
                <i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'mehndi-tattoo-artist'), __('0 Comments', 'mehndi-tattoo-artist'), __('% Comments', 'mehndi-tattoo-artist')); ?></span>
              <?php elseif ('category' === $mehndi_tattoo_artist_blog_data_order) :?>
                <i class="fas fa-list mb-1"></i><span class="entry-category"><?php mehndi_tattoo_artist_display_post_category_count(); ?></span>
              <?php endif;
            endforeach; ?>
          </div>
          <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('mehndi_tattoo_artist_excerpt_count',35) );?></p>
          <?php if(get_theme_mod('mehndi_tattoo_artist_remove_read_button',true) != ''){ ?>
            <div class="readmore-btn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'mehndi-tattoo-artist' ); ?>"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_read_more_text',__('Read More','mehndi-tattoo-artist')));?></a>
            </div>
          <?php }?>
        </div>
        <div class="clearfix"></div>
      </div>
    </article>
  </div>
<?php } else{ ?>
<div id="category-post">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-box row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?php if (!is_single() && function_exists('get_post_gallery')) {
          $gallery = get_post_gallery(get_the_ID(), false);
             if ($gallery && isset($gallery['ids'])) { 
              $gallery_ids = explode(',', $gallery['ids']); ?>
            <div class="container entry-gallery">
              <div class="row">
                <?php $max_images = min(count($gallery_ids), 4);
                for ($index = 0; $index < $max_images; $index++) {
                  $id = $gallery_ids[$index];
                  $image_url = wp_get_attachment_image_url($id, 'full'); ?>
                  <div class="col-md-6 mb-1 align-self-center">
                    <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="Gallery Image <?php echo ($index + 1); ?>">
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php }
        } ?>
      </div>
      <div class="box-content col-lg-6 col-md-12">
        <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
        <div class="box-info">
          <?php $mehndi_tattoo_artist_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
          foreach ($mehndi_tattoo_artist_blog_archive_ordering as $mehndi_tattoo_artist_blog_data_order) : 
            if ('date' === $mehndi_tattoo_artist_blog_data_order) : ?>
              <i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
            <?php elseif ('author' === $mehndi_tattoo_artist_blog_data_order) : ?>
              <i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
            <?php elseif ('comment' === $mehndi_tattoo_artist_blog_data_order) : ?>
              <i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'mehndi-tattoo-artist'), __('0 Comments', 'mehndi-tattoo-artist'), __('% Comments', 'mehndi-tattoo-artist')); ?></span>
            <?php elseif ('category' === $mehndi_tattoo_artist_blog_data_order) :?>
              <i class="fas fa-list mb-1"></i><span class="entry-category"><?php mehndi_tattoo_artist_display_post_category_count(); ?></span>
            <?php endif;
          endforeach; ?>
        </div>
        <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('mehndi_tattoo_artist_excerpt_count',35) );?></p>
        <?php if(get_theme_mod('mehndi_tattoo_artist_remove_read_button',true) != ''){ ?>
          <div class="readmore-btn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'mehndi-tattoo-artist' ); ?>"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_read_more_text',__('Read More','mehndi-tattoo-artist')));?></a>
          </div>
        <?php }?>
      </div>
      <div class="clearfix"></div>
    </div>
  </article>
</div>
<?php } ?>