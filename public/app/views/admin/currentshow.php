<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/1/15
 * Time: 9:16 PM
 */

use \helpers\url;

?>

<div class="row">
    <div class="small-12 columns">
        <h2>Current Show</h2>
        <p>Update and edit the current show being preformed at OBCT</p>
    </div><hr>
</div>

<div class="row">
    <div class="small-6 columns">
        <h4>Current Show</h4>
        <?php foreach($data['currentShow'] as $currentShow){
            echo "<h5><b>Title</b>: ".$currentShow->show_title."</h5>";
            echo "<h5><b>Description</b>: ".$currentShow->description."</h5>";
            echo "<h5><b>Dates</b>: ".$currentShow->dates."</h5>";
            echo "<h5><b>Price</b>: ".$currentShow->price."</h5>";
            echo "<h5><b>Link</b>: ".$currentShow->box_office_link."</h5>";
            echo "<h5><b>Image</b>:</h5> <img src=data:image/jpg;base64,$currentShow->image>";
        } ?>
    </div>
    <div class="small-6 columns">
        <h4>Update Current Show</h4>
        <formset>

        </formset>
    </div>
</div>