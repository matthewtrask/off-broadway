<?php

use Helpers\Assets;
use Helpers\Url;



?>



<!-- JS -->
<script src="/bower_components/foundation/js/foundation.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.dropdown.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.accordian.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.alert.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.abide.js"></script>
<!-- <script src='../bower_components/flowtype/flowtype.js'></script>
 -->
<?php
Assets::js(array(
	Url::admin_template_path() . 'js/admin.js',
));
?>



</body>
</html>
