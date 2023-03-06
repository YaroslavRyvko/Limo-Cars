<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-vehicles">
        <div class="section-vehicles__container">
            <?php if (!empty($fields['subtitle'])) : ?>
                <h4 class="section-vehicles__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
            <?php endif ?>
            <?php if (!empty($fields['title'])) : ?>
                <h3 class="section-vehicles__title title_default"><?php echo $fields['title']; ?></h3>
            <?php endif ?>
            <?php if (!empty($fields['description'])) : ?>
                <div class="section-vehicles__description"><?php echo $fields['description']; ?></div>
            <?php endif ?>
            <div class="swiper SwiperVehicles">
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
                            <?php if (!empty($s['description'])) : ?>
                                <p class="swiper-slide__description"><?php echo $s['description']; ?></p>
                            <?php endif ?>
                             <?php if (!empty($s['features'])) : ?>
                                <div class="section-vehicles__features">
                                    <?php foreach ($s['features'] as $f) : ?>
                                        <div class="features-item">
                                            <?php insertImage($f['image']) ?>
                                            <p><?php echo $f['title']; ?></p>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                            <?php if (!empty($s['vehicle_link'])) : ?>
                                <a href="<?php echo $s['vehicle_link']['url']; ?>" class="swiper-slide__vehicle-link"><?php echo $s['vehicle_link']['title']; ?></a>
                            <?php endif ?>
                            <?php if (!empty($s['button_link'])) : ?>
                                <a href="<?php echo $s['button_link']['url']; ?>" class="contact-btn contact-btn_transparent swiper-slide__btn-link"><?php echo $s['button_link']['title']; ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
<?php endif ?>