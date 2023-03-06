<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-gallery">
        <div class="section-gallery__container">
            <?php if (!empty($fields['subtitle'])) : ?>
                <h4 class="section-gallery__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
            <?php endif ?>
            <?php if (!empty($fields['title'])) : ?>
                <h3 class="section-gallery__title title_default"><?php echo $fields['title']; ?></h3>
            <?php endif ?>
            <div class="swiper-container">
                <div class="swiper SwiperGallery">
                    <div class="swiper-wrapper">
                        <?php foreach ($fields['slides'] as $s) : ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide__img">
                                    <?php if (!empty($s['image'])) : ?>
                                        <?php insertImage($s['image']) ?>
                                    <?php endif ?>
                                </div>
                                <?php if (!empty($s['title'])) : ?>
                                    <h4 class="swiper-slide__title"><?php echo $s['title']; ?></h4>
                                <?php endif ?>
                                <?php if (!empty($s['subtitle'])) : ?>
                                    <p class="swiper-slide__sub-title"><?php echo $s['subtitle']; ?></p>
                                <?php endif ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
<?php endif ?>