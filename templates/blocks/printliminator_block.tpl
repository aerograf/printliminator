<div id="myBlockId" class="bookmarklet">
  <p><{$block.text}></p>
  <a href="javascript:(function(){function%20loadScript(a,b){var%20c=document.createElement('script'),d=document.getElementsByTagName('head')[0],e=!1;c.type='text/javascript',c.src=a,c.onload=c.onreadystatechange=function(){e||this.readyState&&'loaded'!=this.readyState&&'complete'!=this.readyState||(e=!0,b())},d.appendChild(c)}loadScript('<{$xoops_url}>/modules/printliminator/assets/js/printliminator.min.js',function(){print_close='<{$block.print_close}>';print_drag='<{$block.print_drag}>';print_click_1='<{$block.print_click_1}>';print_click_2='<{$block.print_click_2}>';print_superpowers='<{$block.print_superpowers}>';print_undo_last='<{$block.print_undo_last}>';print_print_style='<{$block.print_print_style}>';print_remove='<{$block.print_remove}>';print_send_to='<{$block.print_send_to}>';print_view_key='<{$block.print_view_key}>';print_key='<{$block.print_key}>';print_key_desc='<{$block.print_key_desc}>';print_pageup='<{$block.print_pageup}>';print_pagedown='<{$block.print_pagedown}>';print_right='<{$block.print_right}>';print_left='<{$block.print_left}>';print_enter='<{$block.print_enter}>';print_backspace='<{$block.print_backspace}>';print_numpad_plus='<{$block.print_numpad_plus}>';print_numpad_minus='<{$block.print_numpad_minus}>';print_reset_font='<{$block.print_reset_font}>';print_alt='<{$block.print_alt}>';print_shift='<{$block.print_shift}>';thePrintliminator.init()});})();" id="bookmarklet" class="bookmarklet'"><img src="<{$xoops_url}>/modules/printliminator/assets/images/icons/print.png" alt='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>' title='<{$smarty.const._MB_PRINTLIMINATOR_PRINT}>'></a>

<{if $block.layout == 0}>
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
                        <td class="td_help"><kbd class="kbd_help">PageUp</kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd  class="kbd_help" title="Up Arrow">&uarr;</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_PAGEUP}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help">PageDown</kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd  class="kbd_help" title="Down Arrow">&darr;</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_PAGEDOWN}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd  class="kbd_help" title="Right Arrow">&rarr;</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_RIGHT}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd  class="kbd_help" title="Left Arrow">&larr;</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_LEFT}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help">Enter</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_ENTER}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help">Backspace</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_BACKSPACE}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help" title="Numpad Plus">Numpad&nbsp;<span class="bold">+</span></kbd>&nbsp;<span class="lower">or</span> <kbd class="kbd_help" title="Plus">+</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_NUMPAD_PLUS}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help" title="Numpad Minus">NumPad&nbsp;<span class="bold">-</span></kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd class="kbd_help" title="Minus">-</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_NUMPAD_MINUS}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help" title="Numpad Asterisk (Multiply)">NumPad&nbsp;<span class="bold asterisk">*</span></kbd>&nbsp;<span class="lower">or</span>&nbsp;<kbd class="kbd_help" title="Asterisk">*</kbd>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_RESET_FONT}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help">Alt</kbd>&nbsp;+&nbsp;<span class="icon left_click" title="left-click on mouse"></span>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_ALT}>
                        </td>
                      </tr>
                      <tr>
                        <td class="td_help"><kbd class="kbd_help">Shift</kbd>&nbsp;+&nbsp;<span class="icon left_click" title="left-click on mouse"></span>
                        </td>
                        <td class="td_help"><{$smarty.const._MB_PRINTLIMINATOR_SHIFT}>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
          </span>  
</div>
<{/if}>
</div>