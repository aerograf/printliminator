<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_block.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_mod.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_help.css" />

<div id="myBlockId" class="bookmarklet">
  <p><{$block.text}></p>
   <img alt="QRcode" style="border:1px solid;" src="<{$xoops_url}>/modules/printliminator/include/php/qr_img.php?d=<{$xoops_sitename}> - <{$xoops_pagetitle}> <{$xoops_url}><{$xoops_requesturi}>&amp;e=M&amp;s=2" />
<div class="widget_help"><{$smarty.const._MB_PRINTLIMINATOR_HELP_QR}> 
            <span class="tooltip_help bookmarklet"> 
                <div class="footer_print"><{$xoops_sitename}> - <{$xoops_pagetitle}> <{$xoops_url}><{$xoops_requesturi}>
                </div>
          </span>  
</div>
</div>