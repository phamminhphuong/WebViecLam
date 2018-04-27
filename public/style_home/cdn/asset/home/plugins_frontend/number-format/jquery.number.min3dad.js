(function(e){function d(i,h){if(this.createTextRange){var g=this.createTextRange();g.collapse(true);g.moveStart("character",i);g.moveEnd("character",h-i);g.select()}else{if(this.setSelectionRange){this.focus();this.setSelectionRange(i,h)}}}function b(i){var l=this.value.length;i=(i.toLowerCase()=="start"?"Start":"End");if(document.selection){var g=document.selection.createRange(),h,j,k;h=g.duplicate();h.expand("textedit");h.setEndPoint("EndToEnd",g);j=h.text.length-g.text.length;k=j+g.text.length;return i=="Start"?j:k}else{if(typeof(this["selection"+i])!="undefined"){l=this["selection"+i]}}return l}var a={codes:{188:44,109:45,190:46,191:47,192:96,220:92,222:39,221:93,219:91,173:45,187:61,186:59,189:45},shifts:{96:"~",49:"!",50:"@",51:"#",52:"$",53:"%",54:"^",55:"&",56:"*",57:"(",48:")",45:"_",61:"+",91:"{",93:"}",92:"|",59:":",39:'"',44:"<",46:">",47:"?"}};e.fn.number=function(l,h,j,g){g=(typeof g==="undefined")?",":g;j=(typeof j==="undefined")?".":j;h=(typeof h==="undefined")?0:h;var m=("\\u"+("0000"+(j.charCodeAt(0).toString(16))).slice(-4)),k=new RegExp("[^"+m+"0-9]","g"),i=new RegExp(m,"g");if(l===true){if(this.is("input:text")){return this.on({"keydown.format":function(u){var v=e(this),r=v.data("numFormat"),o=(u.keyCode?u.keyCode:u.which),s="",n=b.apply(this,["start"]),q=b.apply(this,["end"]),p="",x=false;if(a.codes.hasOwnProperty(o)){o=a.codes[o]}if(!u.shiftKey&&(o>=65&&o<=90)){o+=32}else{if(!u.shiftKey&&(o>=69&&o<=105)){o-=48}else{if(!u.shiftKey&&o==110){s=j}else{if(u.shiftKey&&a.shifts.hasOwnProperty(o)){s=a.shifts[o]}}}}if(s==""){s=String.fromCharCode(o)}if(o!==8&&s!=j&&!s.match(/[0-9]/)){var t=true;if(s.match(/[-]/)){if(!r.isNegative){r.isNegative=true;t=false}}if(t){var w=(u.keyCode?u.keyCode:u.which);if(w==46||w==8||w==9||w==27||w==13||((w==65||w==82)&&(u.ctrlKey||u.metaKey)===true)||((w==86||w==67)&&(u.ctrlKey||u.metaKey)===true)||((w>=35&&w<=39))){return}u.preventDefault();return false}}if(n==0&&q==this.value.length||v.val()==0){if(o===8){n=q=1;this.value="";r.init=(h>0?-1:0);r.c=(h>0?-(h+1):0);d.apply(this,[0,0])}else{if(s===j){n=q=1;this.value="0"+j+(new Array(h+1).join("0"));r.init=(h>0?1:0);r.c=(h>0?-(h+1):0)}else{r.init=(h>0?-1:0);r.c=(h>0?-(h):0)}}}else{r.c=q-this.value.length}if(o==8&&n<=1&&r.isNegative){u.preventDefault();r.isNegative=false;r.c--;x=this.value.length+r.c}else{if(h>0&&s==j&&n==this.value.length-h-1){r.c++;r.init=Math.max(0,r.init);u.preventDefault();x=this.value.length+r.c}else{if(s==j){r.init=Math.max(0,r.init);u.preventDefault()}else{if(h>0&&o==8&&n==this.value.length-h){u.preventDefault();r.c--;x=this.value.length+r.c}else{if(h>0&&o==8&&n>this.value.length-h){if(this.value===""){return}if(this.value.slice(n-1,n)!="0"){p=this.value.slice(0,n-1)+"0"+this.value.slice(n);v.val(p.replace(k,"").replace(i,j))}u.preventDefault();r.c--;x=this.value.length+r.c}else{if(o==8&&this.value.slice(n-1,n)==g){u.preventDefault();r.c--;x=this.value.length+r.c}else{if(h>0&&n==q&&this.value.length>h+1&&n>this.value.length-h-1&&isFinite(+s)&&!u.metaKey&&!u.ctrlKey&&!u.altKey&&s.length===1){if(q===this.value.length){p=this.value.slice(0,n-1)}else{p=this.value.slice(0,n)+this.value.slice(n+1)}this.value=p;x=n}}}}}}}if(x!==false){d.apply(this,[x,x])}v.data("numFormat",r)},"keyup.format":function(r){var q=e(this),o=q.data("numFormat"),n=(r.keyCode?r.keyCode:r.which),s=b.apply(this,["start"]),p;if(this.value===""||(n<48||n>57)&&(n<96||n>105)&&n!==8&&n!==110){return}q.val(q.val());if(h>0){if(o.init<1){s=this.value.length-h-(o.init<0?1:0);o.c=s-this.value.length;o.init=1;q.data("numFormat",o)}else{if(s>this.value.length-h&&n!=8){o.c++;q.data("numFormat",o)}}}if(!q.get(0).value.length){o.isNegative=false}else{if(o.isNegative){q.get(0).value=this.value}}p=this.value.length+o.c;d.apply(this,[p,p])},"paste.format":function(p){var o=e(this),n=p.originalEvent,q=null;if(window.clipboardData&&window.clipboardData.getData){q=window.clipboardData.getData("Text")}else{if(n.clipboardData&&n.clipboardData.getData){q=n.clipboardData.getData("text/plain")}}o.val(q);p.preventDefault();return false}}).each(function(){var n=e(this).data("numFormat",{c:-(h+1),decimals:h,thousands_sep:g,dec_point:j,regex_dec_num:k,regex_dec:i,init:false});if(this.value===""){return}n.val(n.val())})}else{return this.each(function(){var p=e(this),n=p.text().match(/^-/)?-1:1,o=+p.text().replace(k,"").replace(i,".")*n;p.number(!isFinite(o)?0:+o,h,j,g)})}}return this.text(e.number.apply(window,arguments))};var f=null,c=null;if(e.isPlainObject(e.valHooks.text)){if(e.isFunction(e.valHooks.text.get)){f=e.valHooks.text.get}if(e.isFunction(e.valHooks.text.set)){c=e.valHooks.text.set}}else{e.valHooks.text={}}e.valHooks.text.get=function(h){var j=e(h),g,i=j.data("numFormat");if(!i){if(e.isFunction(f)){return f(h)}else{return undefined}}else{if(h.value===""){return""}if(h.value.match(/^-/)){i.isNegative=true}g=+(h.value.replace(i.regex_dec_num,"").replace(i.regex_dec,"."));g=(isFinite(g)?g:0);if(g!=0&&i.isNegative){g*=-1}return""+g}};e.valHooks.text.set=function(g,j){var i=e(g),h=i.data("numFormat");if(!h){if(e.isFunction(c)){return c(g,j)}else{return undefined}}else{if(j==""){return g.value=""}return g.value=e.number(j,h.decimals,h.dec_point,h.thousands_sep)}};e.number=function(l,i,o,j){j=(typeof j==="undefined")?",":j;o=(typeof o==="undefined")?".":o;i=!isFinite(+i)?0:Math.abs(i);var k=("\\u"+("0000"+(o.charCodeAt(0).toString(16))).slice(-4));var g=("\\u"+("0000"+(j.charCodeAt(0).toString(16))).slice(-4));l=(l+"").replace(".",o).replace(new RegExp(g,"g"),"").replace(new RegExp(k,"g"),".").replace(new RegExp("[^0-9+-Ee.]","g"),"");var h=!isFinite(+l)?0:+l,p="",m=function(s,q){var r=Math.pow(10,q);return""+Math.round(s*r)/r};p=(i?m(h,i):""+Math.round(h)).split(".");if(p[0].length>3){p[0]=p[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,j)}if((p[1]||"").length<i){p[1]=p[1]||"";p[1]+=new Array(i-p[1].length+1).join("0")}return p.join(o)}})(jQuery);