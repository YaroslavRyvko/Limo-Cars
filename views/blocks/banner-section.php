<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-banner">
        <div class="section-banner__bg">
            <?php if (!empty($fields['background_desktop'])) : ?>
                <?php insertImage($fields['background_desktop'], 'background-desktop') ?>
            <?php endif ?>
            <?php if (!empty($fields['background_mobile'])) : ?>
                <?php insertImage($fields['background_mobile'], 'background-mobile') ?>
            <?php endif ?>
        </div>
        <?php if (!empty($fields['subtitle'])) : ?>
            <h3 class="section-banner__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h3>
        <?php endif ?>
        <?php if (!empty($fields['title'])) : ?>
            <h2 class="section-banner__title title_default"><?php echo $fields['title']; ?></h2>
        <?php endif ?>
        <?php if (!empty($fields['description'])) : ?>
            <div class="section-banner__description"><?php echo $fields['description']; ?></div>
        <?php endif ?>
        <?php if (!empty($fields['link'])) : ?>
            <a class="section-banner__btn contact-btn " href="<?php echo $fields['link']['url']; ?>"><?php echo $fields['link']['title']; ?></a>
        <?php endif ?>
    </section>
<?php endif ?>