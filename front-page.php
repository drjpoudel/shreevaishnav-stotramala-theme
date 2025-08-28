<?php get_header(); ?>
<div class="main-contain">
  <div class="container">    
    <div class="row" style="margin-bottom: 20px;">
        <!-- Left Sidebar: Browse by Categories -->
        <div class="col-md-3 col-sm-12 col-12 ">
            <div class="container-fluid ep-white-bg cat-cont">
                <?php 
                    if (is_active_sidebar('category_sidebar')) {
                        dynamic_sidebar('category_sidebar');
                    } else {
                        echo '<p>Please add widgets to the "Browse By Category Sidebar".</p>';
                    }
                ?>
            </div>
        </div>

        <!-- Right Main Content -->
        <div class="col-md-9 col-sm-12 col-12 ">
            <div class="container">
                <div id="rlwp" class="row">
                    <!-- Hardcoded Read, Listen, Watch Links -->
                    <div class='col-lg-3 col-md-6 col-6' align="center">
                      <a href='<?php echo site_url('/type/document/'); ?>'>
                          <div class ="circleDiv"><img style="width: 75%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/circlebook.svg" alt="Read"></div>
                          <div class="circleCaption"><h1 class="unbold">Read</h1></div>
                      </a>
                    </div>
                    <div class='col-lg-3 col-md-6 col-6' align="center">
                      <a href='<?php echo site_url('/type/audio/'); ?>'>
                          <div class ="circleDiv"><img style="width: 65%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/circleaudio.svg" alt="Listen"></div>
                          <div class="circleCaption"><h1 class="unbold">Listen</h1></div>
                      </a>
                    </div>
                    <div class='col-lg-3 col-md-6 col-6' align="center">
                      <a href='<?php echo site_url('/type/video/'); ?>'>
                          <div class ="circleDiv"><img style="width: 65%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/education_videos.svg" alt="Watch"></div>
                          <div class="circleCaption"><h1 class="unbold">Watch</h1></div>
                      </a>
                    </div>
                    <!-- Add more static content as needed -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Featured Titles Slider Section -->
        <div class="col-md-12 featured-title-section">
            <h1 class="text-btn-lines"><span>Featured Titles</span></h1>
            <div class="featured-slider">
                <?php
                    $featured_query = new WP_Query([
                        'post_type' => 'library_item',
                        'posts_per_page' => 12,
                        'tax_query' => [[
                            'taxonomy' => 'featured_status',
                            'field'    => 'slug',
                            'terms'    => 'featured', // Add 'featured' tag to items to show them here
                        ]],
                    ]);
                    if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post();
                ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="slider-item">
                            <div class="slid-img-container">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="slid-books" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php else: ?>
                                     <img class="slid-books" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="No Image" />
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Stats Section -->
    <div class="row" style="text-align: center; margin-top: 40px; padding: 20px; background: #fff; border: 1px solid #eee;">
        <div class="col-md-3 col-sm-6 col-6">
            <h2 class="home-stats"><?php echo wp_count_posts('library_item')->publish; ?></h2>
            <span><h1>Total Items</h1></span>
        </div>
        <!-- Add more dynamic stats as needed -->
    </div>
  </div>
</div>
<?php get_footer(); ?>
