<?php
$pathIcon32 = \Xmf\Module\Admin::iconUrl('', 32);
echo "<div style='float:right;'><a href=\"https://www.shmel.org\" target=\"_blank\"><img src=" . XOOPS_URL ."/modules/printliminator/assets/images/logo_mini.png"." alt=\"SHMEL.ORG\" title=\"SHMEL.ORG\" style='height:28px;'></a></div>";
echo "<div class='center smallsmall italic pad5'><strong>" . $xoopsModule->getVar("name") . "</strong> is maintained by the <br /><br /><a class='tooltip' rel='external' href='http://www.xoops.org/' title='Visit XOOPS Community'><img src='{$pathIcon32}/xoopsmicrobutton.gif' alt='XOOPS' title='XOOPS'></a></div>";
xoops_cp_footer();
