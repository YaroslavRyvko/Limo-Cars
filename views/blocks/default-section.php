<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-default" <?php if (!empty($fields['background'])) : ?> style="background: <?php echo $fields['background']; ?>" <?php endif ?>>
        <div class="section-default__container <?= $fields['image_position'] === 'left' ? 'img-left' : 'img-right' ?>">
            <div class="section-default__img-block">
                <?php if (!empty($fields['image'])) : ?>
                    <?php insertImage($fields['image']) ?>
                <?php endif ?>
            </div>
            <div class="section-default__text-block">
                <?php if (!empty($fields['subtitle'])) : ?>
                    <h4 class="section-default__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
                <?php endif ?>
                <?php if (!empty($fields['title'])) : ?>
                    <h3 class="section-default__title title_default"><?php echo $fields['title']; ?></h3>
                <?php endif ?>
                <?php if (!empty($fields['descriptionq'])) : ?>
                    <div class="section-default__description"><?php echo $fields['descriptionq']; ?></div>
                <?php endif ?>
                <?php if (!empty($fields['features'])) : ?>
                    <div class="section-default__features">
                        <?php foreach ($fields['features'] as $f) : ?>
                            <div class="features-item">
                                <?php insertImage($f['image']) ?>
                                <p><?php echo $f['title']; ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <?php if (!empty($fields['link'])) : ?>
                    <a href="<?php echo $fields['link']['url']; ?>" class="section-default__btn contact-btn <?= $fields['button_color'] === 'solid black' ? 'contact-btn_black ' : 'contact-btn_transparent' ?>"><?php echo $fields['link']['title']; ?></a>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>