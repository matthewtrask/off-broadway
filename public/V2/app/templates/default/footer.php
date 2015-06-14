<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>

</div>

<!-- JS -->
<?php
//hook for plugging in javascript
$hooks->run('js');

//hook for plugging in code into the footer
$hooks->run('footer');
?>

    </div>
</div><!--/.page-container-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr />
                <p class="text-center">12315 Crabapple Rd Suite 122 - Alpharetta GA, 30004 <br /> 770-664-2410 <br /><span id="footerEmail"><a href="mailto:offbroadway@msn.com">offbroadway@msn.com</a></span></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="footerSM">
                <ul class="text-center">
                    <li><a href="https://www.facebook.com/offbroadwaydancetheater"><i class="fa fa-facebook-official fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/offbroadwayga"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                    <li><a href="https://offbroadwaydance.wordpress.com/"><i class="fa fa-wordpress fa-2x"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCYE5UAeKu42oT4NNTOH6YMQ"><i class="fa fa-youtube-square fa-2x"></i></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center" id="copy">&copy; <?php echo date("Y"); ?></p>
<!--                <p class="text-center">Site Visitors: --><?php //include('counter.php'); ?><!--</p>-->
            </div>
        </div>
    </div>
</footer>


</body>
</html>
