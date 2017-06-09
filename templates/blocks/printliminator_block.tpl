<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_block.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_mod.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/printliminator/assets/css/style_help.css" />

<div id="myBlockId" class="bookmarklet">
  <p><{$block.text}></p>
  <a href="javascript:(function(){function%20loadScript(a,b){var%20c=document.createElement('script'),d=document.getElementsByTagName('head')[0],e=!1;c.type='text/javascript',c.src=a,c.onload=c.onreadystatechange=function(){e||this.readyState&&'loaded'!=this.readyState&&'complete'!=this.readyState||(e=!0,b())},d.appendChild(c)}loadScript('<{$xoops_url}>/modules/printliminator/assets/js/printliminator.min.js',function(){thePrintliminator.init()});})();" id="bookmarklet" class="bookmarklet'"><img src="<{$xoops_url}>/modules/printliminator/assets/images/icons/print.png" alt='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>' title='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>'></a>
<div class="widget_help"><{$smarty.const._MB_PRINTLIMINATOR_HELP}> 
            <span class="tooltip_help bookmarklet"> 
                <div class="footer_print">
                <div class="head_help" style="color: red;"><{$smarty.const._MB_PRINTLIMINATOR_CLICK_1}></div>
                <div class="head_help"><{$smarty.const._MB_PRINTLIMINATOR_CLICK_2}></div>
                <div class="keyboard-area"><span class="head_help"><{$smarty.const._MB_PRINTLIMINATOR_VIEW_KEY}></span> 
                  <table> 
                    <thead> 
                      <tr>
                        <th class="key"><{$smarty.const._MB_PRINTLIMINATOR_KEY}></th>
                        <th><{$smarty.const._MB_PRINTLIMINATOR_KEY_DESC}></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><kbd>PageUp</kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd class="bold" title="Up Arrow">&uarr;</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_PAGEUP}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd>PageDown</kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd class="bold" title="Down Arrow">&darr;</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_PAGEDOWN}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd class="bold" title="Right Arrow">&rarr;</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_RIGHT}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd class="bold" title="Left Arrow">&larr;</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_LEFT}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd>Enter</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_ENTER}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd>Backspace</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_BACKSPACE}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd title="Numpad Plus">Numpad&nbsp;<span class="bold">+</span></kbd>&nbsp;<span class="lower">or</span> <kbd title="Plus">+</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_NUMPAD_PLUS}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd title="Numpad Minus">NumPad&nbsp;<span class="bold">-</span></kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd title="Minus">-</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_NUMPAD_MINUS}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd title="Numpad Asterisk (Multiply)">NumPad&nbsp;<span class="bold asterisk">*</span></kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd title="Asterisk">*</kbd>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_RESET_FONT}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd>Alt</kbd>&nbsp;+&nbsp;<span class="icon left_click" title="left-click on mouse"></span>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_ALT}>
                        </td>
                      </tr>
                      <tr>
                        <td><kbd>Shift</kbd>&nbsp;+&nbsp;<span class="icon left_click" title="left-click on mouse"></span>
                        </td>
                        <td><{$smarty.const._MB_PRINTLIMINATOR_SHIFT}>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
          </span>  
</div>
</div>