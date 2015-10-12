<?php

use Helpers\Assets;
use Helpers\Url;



?>

</main>

<!-- JS -->
<script src="/bower_components/foundation/js/foundation.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.dropdown.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.alert.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.abide.js"></script>
<script src='/bower_components/flowtype/flowtype.js'></script>

<?php
Assets::js(array(
	Url::template_path() . 'js/main.js',
	Url::template_path() . 'featherlight.js'
));
?>



</body>
</html>
