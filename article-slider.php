<?php

$block->open('section');
?>
<div id="carousel-video-articles" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <div class="col-sm-4 item-picker">
        <div class="row">
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                $arrayCount = count($block);
                $block->document->each('@list', function ($prop, $value) use ($block, &$i, $arrayCount) {
                    $arrayCount = count($value['name']);?>
                    <li data-target="#carousel-video-articles" data-slide-to="<?= $i ?>" class="<?php if($i == 0){ echo 'active no-border'; } if($arrayCount == $i){ echo ' add-radius-bl'; } if($i == 0){ echo ' add-radius-tl'; } ?>">
                        <h3><?php echo $value['name']; ?></h3>
                        <p><?php echo $value['description']; ?></p>
                    </li>
                    <?php
                    $i++;
                });
                ?>
            </ol>
        </div>
    </div>
    <!-- Wrapper for slides -->
    <div class="col-sm-8">
        <div class="row">
            <div class="carousel-inner">
                <?php
                $i = 0;
                $block->document->each('@list', function ($prop, $value) use ($block, &$i) {
                    if($i == 0){
                        $active='active';
                    } ?>
                    <div class="item<?php if($i == 0){echo ' active'; } ?>">
                        <?php if(!$value['video']){
                            echo '<img src="'.$value['image'].'" alt="'.$value['name'].'" />';
                        } else {
                            echo html_entity_decode($value['video']);
                        }
                        echo '</div>';
                        $i++;
                    });
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
    <?php $block->close(); ?>
