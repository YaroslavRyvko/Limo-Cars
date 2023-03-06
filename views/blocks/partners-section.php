<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-partners" >
        <div class="section-partners__background">
            <?php if (!empty($fields['background_image'])) : ?>
                <?php insertImage($fields['background_image']) ?>
            <?php endif ?>
        </div>
        <div class="section-partners__wrapper">
            <?php if (!empty($fields['subtitle'])) : ?>
                <h4 class="section-partners__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
            <?php endif ?>
            <?php if (!empty($fields['title'])) : ?>
                <div class="section-partners__title"><?php echo $fields['title']; ?></div>
            <?php endif ?>
        </div>
        <div class="swiper swiperPartners">
            <div class="swiper-wrapper">
                <?php foreach ($fields['slides'] as $s) : ?>
                    <div class="swiper-slide">
                        <?php if (!empty($s['image'])) : ?>
                            <?php insertImage($s['image']) ?>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>