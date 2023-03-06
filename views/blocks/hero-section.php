<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-hero">
        <div class="section-hero__bg">
            <?php if (!empty($fields['background_image'])) : ?>
                <?php insertImage($fields['background_image'], 'background-image') ?>
            <?php endif ?>
        </div>
        <?php if (!empty($fields['title'])) : ?>
            <h2 class="section-hero__title"><?php echo $fields['title']; ?></h2>
        <?php endif ?>
        <?php if (function_exists('yoast_breadcrumb') && is_front_page() != true) {
            yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
        } ?>
    </section>
<?php endif ?>