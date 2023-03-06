<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
    <section class="section-swiper">
        <div class="section-swiper__container">
            <div class="section-swiper__info">
                <?php if (!empty($fields['subtitle'])) : ?>
                    <h4 class="section-swiper__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
                <?php endif ?>
                <?php if (!empty($fields['title'])) : ?>
                    <h3 class="section-swiper__title title_default"><?php echo $fields['title']; ?></h3>
                <?php endif ?>
                <?php if (!empty($fields['description'])) : ?>
                    <p class="section-swiper__description"><?php echo $fields['description']; ?></p>
                <?php endif ?>
                <?php if (!empty($fields['link'])) : ?>
                    <a class="contact-btn contact-btn_black" href="<?php echo $fields['link']['url']; ?>"><?php echo $fields['link']['title']; ?></a>
                <?php endif ?>
            </div>
            <div class="swiper SwiperScroll">
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
                            <div class="swiper-slide__hidden-block">
                                <?php if (!empty($s['title'])) : ?>
                                    <h4 class="swiper-slide__title"><?php echo $s['title']; ?></h4>
                                <?php endif ?>
                                <?php if (!empty($s['description'])) : ?>
                                    <p><?php echo $s['description']; ?></p>
                                <?php endif ?>
                                <?php if (!empty($s['link'])) : ?>
                                    <a href="<?php echo $s['link']['url']; ?>"><?php echo $s['link']['title']; ?></a>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
<?php endif ?>