<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/2/15
 * Time: 7:21 PM
 */
use \helpers\url;

?>

<div class="row">
    <div class="small-9 columns">
        <div id="currentShow">
            <h2>Current Show</h2><hr>
            <?php foreach($data['currentShow'] as $currentShow){
                echo "<div class='row'>";
                    echo "<div class='small-5 columns'>";
                        echo "<h3><b>Title</b>: ".$currentShow->show_title."</h3>";
                        echo "<h3><b>Description</b>: </h3><p> ".$currentShow->description."</p>";
                        echo "<h5><b>Dates</b>: ".$currentShow->dates."</h5>";
                        echo "<h5><b>Price</b>: ".$currentShow->price."</h5>";
                        echo "<h5><b>Buy Tickets</b>:</h5> <a href=".$currentShow->box_office_link."><button class='button register'>Tickets</button></a>";
                    echo "</div>";
                    echo "<div class='small-7 columns'>";
                        echo "<img src=data:image/jpg;base64,$currentShow->image>";
                    echo "</div>";
                echo "</div>";
            } ?>
        </div>
        <div id="upcomingShow">
            <h4>Upcoming Shows</h4><hr>
            <?php foreach($data['upcomingShows'] as $upcomingShow){
                echo "<div class='row'>";
                    echo "<div class='small-6 columns'>";
                        echo "<h5><b>Show Title: ".$upcomingShow->title."</b></h5>";
                        echo "<p>Dates: ".$upcomingShow->dates."</p>";
                        echo "<p>Auditions: ".$upcomingShow->auditions."</p>";
                        echo "<p>Price: ".$upcomingShow->price."</p>";
                    echo "</div>";
                    echo "<div class='small-6 columns'>";
                        echo "<img src=data:image/jpg;base64,$upcomingShow->image>";
                    echo "</div>";
                echo "</div><hr>";
            }?>
        </div>
    </div>
    <div class="small-3 columns">
        <img src="<?php echo IMGDIR; ?>green-logo.png">
        <div class="panel" style="margin-top: 4%">
            <p>Want to work behind the scenes?</p>
            <a href="#" data-reveal-id="btsHelp"><button class="button message expand">Click Here</button></a>
        </div>
        <div class="panel">
            <p>Some of the past performances we have done</p>
            <a href="#" data-reveal-id="prevShows"><button class="button register expand" width="100%">Past Shows</button></a>
        </div>
        <div class="panel">
            <p>Questions about the Show?</p>
            <a href="contact"><button class="button expand">Contact Us</button></a>
        </div>
    </div>
</div>


<div id="btsHelp" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Behind The Scenes</h2>
    <p class="lead">Our award-winning Children's Theatre prides itself on giving every child an equal chance. Auditions are engaging and fun, and new performers are highly encouraged to participate. OBCT produces 8 full musicals per year in our in-house blackbox theatre. Casting opportunities are available to students ages 5 - 18, depending on the production. Unlike other children's theatres, our casting decision is based upon your child's positive attitude and audition success – not on studio seniority, company member status, or how many classes they take!</p>
    <p class="lead">OBCT also provides students (age 12 and over) the ability to work behind the scenes of a production. Apprentice opportunities are available to all interested students, and include:</p>
    <div class="row">
        <div class="small-6 columns">
            <p><b>Student Director</b></p>
            <p><b>Student Choreographer</b></p>
            <p><b>Technical Lighting &amp; Sound</b></p>
        </div>
        <div class="small-6 columns">
            <p><b>Costume Design</b></p>
            <p><b>Theatrical Makeup/Hair</b></p>
            <p><b>Scenic/Set Design</b></p>
        </div>
    </div>
    <p>If you have an interest in working behind the scenes, contact us!</p>
    <a href="contact"><button class="button">Contact Us</button></a>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div id="prevShows" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Previous Shows</h2>
    <p class="lead">Some of our previous shows at OBCT</p>
    <div class="small-4 columns">
        <ul>
            <li>Thoroughly Modern Millie, Jr.</li>
            <li>Once On This Island, Jr. </li>
            <li>Aladdin, Jr.</li>
            <li>The Little Mermaid, Jr.</li>
            <li>Alice in Wonderland, Jr.</li>
        </ul>
    </div>
    <div class="small-4 columns">
        <ul>
            <li>High School Musical, Jr.</li>
            <li>Honk. Jr.</li>
            <li>Annie, Jr.</li>
            <li>Beauty &amp; The Beast, Jr.</li>
            <li>Schoolhouse Rock, Jr.</li>
        </ul>
    </div>
    <div class="small-4 columns">
        <ul>
            <li>Seussical, The Musical, Jr</li>
            <li>Cinderella, Kids</li>
            <li>The Jungle Book, Kids</li>
            <li>Guys &amp; Dolls, Jr.</li>
            <li>The Music Man, Jr.</li>
        </ul>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>