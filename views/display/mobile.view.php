<?php
require_once 'response.php';
?>
<div class="swiper-container">
    <div class="swiper-wrapper">
<!--        slides are loaded in a cycle and an array of downloaded images is recorded-->
        <?php for ($i=0; $i<10; $i++): ?>
        <div class="swiper-slide">
            <div class="box-img">
                <?php $photo = checkRenderResult($album, $json); ?>
                <img src='<?= $photo->src->landscape ?>' alt='<?= 'photo'.$photo->id ?>'>
                <?php $album = updateAlbum ($album, $photo); ?>
            </div>
        </div>
        <?php endfor ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div>
    <h6>This is mobile version</h6>
</div>


