<div class="row">
    <div class="col-12">
        <?php
        // checks the device: it is mobile or not.
        // If necessary, it is possible to add a separate test
        // tablets (isTablet()), phone devices (isPhone()) and robots (isRobot()).
        if($agent->isMobile()): ?>
            <div class="slider">
                <?php require_once 'mobile.view.php' ?>
            </div>
        <?php else: ?>
            <?php require_once 'mobile.view.php' ?>
        <?php endif ?>
    </div>
</div>
