<?php

include '../../mainfile.php';
include '../../header.php';
//standard for module name recognition
$ModName = 'couleurs';

global $xoopsDB, $xoopsConfig;
if ('meta' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

//make_cblock();
    //echo "<br>";
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}
OpenTable();
?>


<div align="center"><strong><font size="4">Module créé par bonjovi de<a href="http://www.totalgratuit.com" target="_blank">
                la team-totalgratuit</a></font></strong></div>

<div align="center">
    <IFRAME src="http://www.toutimages.com/generateur_part.htm" height="700" width="620" Marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="yes"><br>
    </IFRAME>
    </center></td>
</div>


<?php
CloseTable();
require XOOPS_ROOT_PATH . '/footer.php';
?>
</a>
