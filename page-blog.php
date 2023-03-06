<?php /* Template Name: Blog */ ?>

<?php get_header('small'); ?>

<?php
global $wp;
$current_url = home_url(add_query_arg(NULL, NULL));
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$action = '/' . $post->post_name . '/?paged=1';

$args = array(
    'posts_per_page' => 12,
    'post_status' => 'publish',
    'suppress_filters' => false,
    'paged' => $paged,
    'relation' => 'OR',
    'post_type' => 'post',
);

$search = NULL;
if (isset($_GET['events-search'])) {
    $search = $_GET['events-search'];
    $args['s'] = $search;
}

$date = NULL;
if (isset($_GET['events-date'])) {
    $date = $_GET['events-date'];
    if ($_GET['events-date'] !== '') {
        $args['date_query']['month'] = $date;
    }
}

$dates = [
    '' => 'Date',
    '1' => 'January',
    '2' => 'February',
    '3' => 'March',
    '4' => 'April',
    '5' => 'May',
    '6' => 'June',
    '7' => 'July',
    '8' => 'August',
    '9' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December',
];

$fields = $args['fields'];

$query = new WP_Query();
$posts = $query->query($args);
?>

<main class="blog-main">
    <?php get_template_part('views/partials/block-loader'); ?>
    <section class="section-filters">
        <div class="filters-panel">
            <form class="filter-date">
                <input type="hidden" name="events-search" value="<?php echo $search ?>" />
                <input type="hidden" name="paged" value="1" />
                <?php if (!empty($dates)) : ?>
                    <select class="filter-select" name="events-date">
                        <?php foreach ($dates as $key => $value) : ?>
                            <option value="<?php echo $key ?>" <?php if ($key == $date) : ?> selected <?php endif ?>><?php _e($value, 'theme') ?></option>
                        <?php endforeach ?>
                    </select>
                <?php endif ?>
            </form>

            <form class="filter-search" action="<?php echo $current_url ?>">
                <input type="hidden" name="news-date" value="<?php echo $date ?>" />
                <input type="hidden" name="paged" value="1" />
                <input class="filter-input" type="text" name="events-search" placeholder="<?php _e('Rechercher...', 'theme') ?>" value="<?php echo $search ?>" />
                <button class="filter-btn"><?php insertImage('/icons/search.svg') ?></button>
            </form>
        </div>
    </section>
    <section class="section-posts">
        <h4 class="section-posts__sub-title sub-title_default">Tout savoir sur</h4>
        <h3 class="section-posts__title title_default">Nos actualités & évenements</h3>
        <?php if (!empty($posts)) : ?>

            <div class="posts-wrapper">
                <?php foreach ($posts as $post) : ?>

                    <div class="posts-item">
                        <a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__image"><?php echo get_the_post_thumbnail($post->ID); ?></a>
                        <div class="posts-item__info">
                            <time datetime="<?php echo get_the_date('Y-m-d', $post->ID) ?>" class="posts-item__date">
                                <?php echo get_the_date('j F Y', $post->ID)  ?>
                            </time>
                            <a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__title"><?php echo $post->post_title ?></a>
                            <div class="posts-item__text"><?php echo custom_excerpt(['maxchar' => 160]); ?></div>
                            <a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__link">
                                <span class="posts-item__link-icon"><?php insertImage('/icons/arrow-right-black.svg') ?></span>
                                <span class="posts-item__link-title">Lire l’article</span>
                            </a>
                        </div>
                    </div>

                <?php endforeach ?>


            <?php else : ?>

                <div class="posts-nothing">
                    <h2 class="events-nothing__title title-regular"><?php _e('Nothing found', 'theme') ?></h2>
                </div>

            <?php endif ?>
    </section>

    <?php
    if (!$paged) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    }
    if (!empty($query)) {
        $big = 999999999;
        $pagination = paginate_links(
            array(
                'base'         => str_replace($big, '%#%', get_pagenum_link($big)),
                'total'        => $query->max_num_pages,
                'current'      => $paged,
                'format'       => '?paged=%#%',
                'prev_text'    => 'Page précédente',
                'next_text'    => 'Page suivante',
            )
        );
    }
    ?>
    <?php if (!empty($pagination)) : ?>
        <section class="pagination">
            <div class="pagination__wrapper">
                <div class="pagination__list">
                    <?php echo $pagination ?>
                </div>
            </div>
        </section>
    <?php endif ?>
</main>

<?php get_footer(); ?>