/* share42.com | 22.08.2016 | (c) Dimox */
window.addEventListener('load',function(){var e=document.getElementsByTagName('div');for(var k=0;k<e.length;k++){if(e[k].className.indexOf('share42init')!=-1){if(e[k].getAttribute('data-url')!=-1)var u=e[k].getAttribute('data-url');if(e[k].getAttribute('data-title')!=-1)var t=e[k].getAttribute('data-title');if(e[k].getAttribute('data-image')!=-1)var i=e[k].getAttribute('data-image');if(e[k].getAttribute('data-description')!=-1)var d=e[k].getAttribute('data-description');if(e[k].getAttribute('data-path')!=-1)var f=e[k].getAttribute('data-path');if(e[k].getAttribute('data-icons-file')!=-1)var fn=e[k].getAttribute('data-icons-file');if(!f){function path(name){var sc=document.getElementsByTagName('script'),sr=new RegExp('^(.*/|)('+name+')([#?]|$)');for(var p=0,scL=sc.length;p<scL;p++){var m=String(sc[p].src).match(sr);if(m){if(m[1].match(/^((https?|file)\:\/{2,}|\w:[\/\\])/))return m[1];if(m[1].indexOf("/")==0)return m[1];b=document.getElementsByTagName('base');if(b[0]&&b[0].href)return b[0].href+m[1];else return document.location.pathname.match(/(.*[\/\\])/)[0]+m[1];}}return null;}f=path('share42s.js');}if(!u)u=location.href;if(!t)t=document.title;if(!fn)fn='iconss.png';function desc(){var meta=document.getElementsByTagName('meta');for(var m=0;m<meta.length;m++){if(meta[m].name.toLowerCase()=='description'){return meta[m].content;}}return'';}if(!d)d=desc();u=encodeURIComponent(u);t=encodeURIComponent(t);t=t.replace(/\'/g,'%27');i=encodeURIComponent(i);d=encodeURIComponent(d);d=d.replace(/\'/g,'%27');var fbQuery='u='+u;if(i!='null'&&i!='')fbQuery='s=100&p[url]='+u+'&p[title]='+t+'&p[summary]='+d+'&p[images][0]='+i;var vkImage='';if(i!='null'&&i!='')vkImage='&image='+i;var s=new Array('"#" onclick="window.open(\'//www.blogger.com/blog_this.pyra?t&u='+u+'&n='+t+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="BlogThis!"','"//bobrdobr.ru/add.html?url='+u+'&title='+t+'&desc='+d+'" title="Share on BobrDobr"','"#" data-count="dlcs" onclick="window.open(\'//delicious.com/save?url='+u+'&title='+t+'&note='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=710, height=660, toolbar=0, status=0\');return false" title="Save to Delicious"','"//designbump.com/node/add/drigg/?url='+u+'&title='+t+'" title="Bump it!"','"//www.designfloat.com/submit.php?url='+u+'" title="Float it!"','"//digg.com/submit?url='+u+'" title="Share on Digg"','"//www.evernote.com/clip.action?url='+u+'&title='+t+'" title="Share on Evernote"','"#" data-count="fb" onclick="window.open(\'//www.facebook.com/sharer/sharer.php?u='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Facebook"','"//www.friendfeed.com/share?title='+t+' - '+u+'" title="Share on FriendFeed"','"#" onclick="window.open(\'//www.google.com/bookmarks/mark?op=edit&output=popup&bkmk='+u+'&title='+t+'&annotation='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=500, toolbar=0, status=0\');return false" title="Save to Google Bookmarks"','"#" data-count="gplus" onclick="window.open(\'//plus.google.com/share?url='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Google+"','"//identi.ca/notice/new?status_textarea='+t+' - '+u+'" title="Share on Identi.ca"','"//www.juick.com/post?body='+t+' - '+u+'" title="Share on Juick"','"#" data-count="lnkd" onclick="window.open(\'//www.linkedin.com/shareArticle?mini=true&url='+u+'&title='+t+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=600, height=400, toolbar=0, status=0\');return false" title="Share on Linkedin"','"//www.liveinternet.ru/journal_post.php?action=n_add&cnurl='+u+'&cntitle='+t+'" title="Post to LiveInternet"','"//www.livejournal.com/update.bml?event='+u+'&subject='+t+'" title="Post to LiveJournal"','"#" data-count="mail" onclick="window.open(\'//connect.mail.ru/share?url='+u+'&title='+t+'&description='+d+'&imageurl='+i+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Мой Мир@Mail.Ru"','"//memori.ru/link/?sm=1&u_data[url]='+u+'&u_data[name]='+t+'" title="Save to Memori.ru"','"//www.mister-wong.ru/index.php?action=addurl&bm_url='+u+'&bm_description='+t+'" title="Save to Mister Wong"','"#" onclick="window.open(\'//chime.in/chimebutton/compose/?utm_source=bookmarklet&utm_medium=compose&utm_campaign=chime&chime[url]'+u+'=&chime[title]='+t+'&chime[body]='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=600, height=440, toolbar=0, status=0\');return false" title="Share on Mixx"','"//share.yandex.ru/go.xml?service=moikrug&url='+u+'&title='+t+'&description='+d+'" title="Share on Moi Krug"','"//www.myspace.com/Modules/PostTo/Pages/?u='+u+'&t='+t+'&c='+d+'" title="Share on MySpace"','"//www.newsvine.com/_tools/seed&save?u='+u+'&h='+t+'" title="Share on Newsvine"','"#" data-count="odkl" onclick="window.open(\'//ok.ru/dk?st.cmd=addShare&st._surl='+u+'&title='+t+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share to ok.ru"','"//pikabu.ru/add_story.php?story_url='+u+'" title="Share on Pikabu.ru"','"#" data-count="pin" onclick="window.open(\'//pinterest.com/pin/create/button/?url='+u+'&media='+i+'&description='+t+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=600, height=300, toolbar=0, status=0\');return false" title="Pin It"','"//postila.ru/publish/?url='+u+'&agregator=share42" title="Share on Postila"','"//reddit.com/submit?url='+u+'&title='+t+'" title="Share on Reddit"','"//rutwit.ru/tools/widgets/share/popup?url='+u+'&title='+t+'" title="Share on RuTwit.ru"','"//www.stumbleupon.com/submit?url='+u+'&title='+t+'" title="Share on StumbleUpon"','"#" onclick="window.open(\'//surfingbird.ru/share?url='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Surfingbird"','"//technorati.com/faves?add='+u+'&title='+t+'" title="Share on Technorati"','"#" onclick="window.open(\'//www.tumblr.com/share?v=3&u='+u+'&t='+t+'&s='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=450, height=440, toolbar=0, status=0\');return false" title="Share on Tumblr"','"#" data-count="twi" onclick="window.open(\'//twitter.com/intent/tweet?text='+t+'&url='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on Twitter"','"#" data-count="vk" onclick="window.open(\'//vk.com/share.php?url='+u+'&title='+t+vkImage+'&description='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on VK"','"#" onclick="window.open(\'//webdiscover.ru/share.php?url='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0\');return false" title="Share on WebDiscover.ru"','"#" onclick="window.open(\'//bookmarks.yahoo.com/toolbar/savebm?u='+u+'&t='+t+'&d='+d+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=400, toolbar=0, status=0\');return false" title="Save to Yahoo! Bookmarks"','"#" onclick="window.open(\'//yosmi.ru/index.php?do=share&url='+u+'\', \'_blank\', \'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=650, height=400, toolbar=0, status=0\');return false" title="Share on yoSMI"');var l='';for(j=0;j<s.length;j++)l+='<a rel="nofollow" style="display:inline-block;vertical-align:bottom;width:24px;height:24px;margin:0 6px 6px 0;padding:0;outline:none;background:url('+f+fn+') -'+24*j+'px 0 no-repeat" href='+s[j]+' target="_blank"></a>';e[k].innerHTML='<span id="share42">'+l+'</span>';}};},false);