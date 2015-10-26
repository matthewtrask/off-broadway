<?php
use \helpers\form;
use \helpers\Url;
?>
<div class="row" id="classes">
    <div class="small-12 columns">
        <h4>Classes</h4>
        <ul class="tabs vertical" data-tab>
        <?php foreach($data['classes'] as $classId){
            echo '<li class="tab-title"><a href="#'.$classId->class_title.'">'.$classId->class_title.'</a></li>';
        }?>
        </ul>
        <div class="tabs-content">
            <?php foreach($data['classes'] as $classes){
                echo '<div class="content" id="'.$classes->class_title.'">';
                echo '<p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>';
                echo "<b>Class: </b>".$classes->class_title."<br>";
                echo "<b>Teaser: </b>".$classes->teaser."<br>";
                echo "<b>Description: </b>".$classes->description."<br>";
                echo "<b>Day: </b>".$classes->day."<br>";
                echo "<b>Time</b>: </b>".$classes->time."<br>";
                echo "<b>Price: </b>".$classes->price."<br>";
                echo "<b>Link: </b>".$classes->link."<br><br>";
                echo "<button class='button' id=".$classes->id." onclick=''>Edit</button>";
                echo '</div>';
            }?>
        </div>
    </div>
</div>