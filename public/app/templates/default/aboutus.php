<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 6/14/15
 * Time: 4:45 PM
 */
?>

<div class="row">
    <div class="small-12 columns">
        <h2 class="text-center">About Off Broadway Children's Theatre</h2>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-8 columns">
        <?php
            foreach($data['points'] as $points){
                echo '<p class="text-left"><b>'.$points->title.'</b>: '.$points->content.'</p>';
            }
            echo "<img alt='OBCT Logo' id='ObctLogo' src=".IMGDIR."green-logo.png>";
        ?>
    </div>
    <div class="small-12 medium-4 columns">
        <div class="panel">
            <?php
                foreach($data['summary'] as $summary){
                    echo '<h4>'.$summary->title.'</h4>';
                    echo '<p>'.$summary->content.'</p>';
                }
            ?>
        </div>
    </div>
</div>

