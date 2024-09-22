<?php
/*
Template Name: Page Builder
Template Post Type: post, page
*/
get_header(); ?>

<section class="container mx-auto px-4 py-8 text-center">
    <h1 class="text-5xl font-bold text-gray-900 mb-4"><?php _e(get_field('page_hero_title'), 'tailpress') ?></h1>

    <?php _e(get_field('page_hero_description'), 'tailpress'); ?>

    <?php
    $page_hero_image = get_field('page_hero_image');
    if ($page_hero_image):
        $image_url = $page_hero_image['url'];
        $image_alt = $page_hero_image['alt'];
        ?>
        <div class="w-full max-w-md mx-auto">
            <img class="rounded-lg shadow-lg" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        </div>
    <?php endif; ?>
</section>

<?php get_footer();