	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-center">Off Broadway Dance Studio</p>
					<p class="text-center">12350 Crabapple Rd, Ste. 122</p>
					<p class="text-center">Alpharetta GA, 30049</p>
					<p class="text-center">770-664-2410</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p class="text-center" id="copy">&copy; <?php echo date("Y"); ?> <?php echo $studio; ?></p>
					<p class="text-center">Site Visitors: <?php include('counter.php'); ?></p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="socialmedia">
					<p class="text-center">Where we are on the web:</p>
					<ul class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<li class="text-left" id="1"><a href="https://www.facebook.com/offbroadwaydancetheater">Off Broadway Facebook</a></li>
						<li class="text-left" id="2"><a href="https://twitter.com/offbroadwayga">@Offbroadway</a></li>
						<li class="text-left" id="3"><a href="https://offbroadwaydance.wordpress.com">Shannon's Blog</a></li>
						<li class="text-left" id="4"><a href="mailto:offbroadway@msn.com?subject=Dance Classes!">Email us!</a></li>
					</ul>
				</div>
			</div>
		</div>

	</footer>

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});  
</script>

<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55615150-1', 'auto');
    ga('send', 'pageview');
</script>

// <script>
//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

//   ga('create', 'UA-55630047-1', 'auto');
//   ga('send', 'pageview');

// </script>


</body>
</html>