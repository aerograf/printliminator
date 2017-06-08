<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_block.css" />

<div id="myBlockId" class="bookmarklet">
	<p><{$block.text}></p>
  <a href="javascript:(function(){function%20loadScript(a,b){var%20c=document.createElement('script'),d=document.getElementsByTagName('head')[0],e=!1;c.type='text/javascript',c.src=a,c.onload=c.onreadystatechange=function(){e||this.readyState&&'loaded'!=this.readyState&&'complete'!=this.readyState||(e=!0,b())},d.appendChild(c)}loadScript('<{$xoops_url}>/modules/printliminator/assets/js/<{$smarty.const._MB_PRINTLIMINATOR_FILE}>',function(){thePrintliminator.init()});})();" id="bookmarklet" class="bookmarklet"><img src="<{$xoops_url}>/modules/printliminator/assets/images/icons/print.png" alt='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>' title='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>'></a>
</div>
