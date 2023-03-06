<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-intro">
        <?php if (!empty($fields['subtitle'])) : ?>
            <h4 class="section-intro__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
        <?php endif ?>
        <?php if (!empty($fields['title'])) : ?>
            <h3 class="section-intro__title title_default"><?php echo $fields['title']; ?></h3>
        <?php endif ?>
    </section>
<?php endif ?>