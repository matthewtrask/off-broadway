<div class="row" style="margin-top: 4%">
    <div class="small-12 medium-9 columns" id="summer">
        <?php echo "<h2>".$data['title']."</h2>"; ?><hr>
        <?php foreach($data['info'] as $info){
                echo "<p>".$info->summer_info."</p>";
        }?>
        <?php
            foreach($data['summer'] as $summer) {
                echo "<button id='".$summer->id."' class='button'><a href='#' data-reveal-id='summer_".$summer->id."'>".$summer->show_title."</a></button>";
            }
        ?>

    </div>
    <div class="small-12 medium-3 columns">
        <img src="<?php echo IMGDIR ?>green-logo.png"><br><br>
        <div class="panel">
            <h4 class="text-center">Questions?</h4>
            <a href="contact"><button class="button message expand">Contact Us</button></a>
        </div>
    </div>
</div>


<?php
foreach($data['summer'] as $summer){
    echo "<div id='summer_".$summer->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
    echo "<h2 id='modalTitle'>".$summer->show_title."</h2>";
    echo "<p>".$summer->about_show."</p>";
    echo "<div class='row'>";
        echo "<div class='small-5 columns'>";
            echo "<p><b>Dates</b>: ".$summer->dates."</p>";
            echo "<p><b>Times</b>: ".$summer->time."</p>";
            echo "<p><b>Ages</b>: ".$summer->ages."</p>";
            echo "<p><b>Show Dates</b>: ".$summer->show_dates."</p>";
            echo "<p><b>Price</b>: $".$summer->cost."</p>";
        echo "</div>";
        echo "<div class='small-7 columns'>";
            echo "<img style='height: 300px; width: 300px' src=data:image/jpg;base64,$summer->show_image>";
        echo "</div>";
    echo "</div>";
    echo "<button class='button'><a href='https://app.jackrabbitclass.com/reg.asp?id=277946'>Register Now!</a></button>";
    echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
    echo "</div>";
}
?>