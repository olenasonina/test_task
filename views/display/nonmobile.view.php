<?php
require_once 'response.php';
?>
<!--Image load dynamically and randomly-->
<div class="image-view">
    <div class="box-img">
        <?php $photo = getPhoto($json); ?>
        <img src='<?= $photo->src->landscape ?>' alt='<?= 'photo'.$photo->id ?>'>
    </div>
</div>
<div>
    <h6>This is not mobile version</h6>
</div>