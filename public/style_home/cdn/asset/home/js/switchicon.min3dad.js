function switchicon(a,b){switchcontent.call(this,a,b)}switchicon.prototype=new switchcontent;switchicon.prototype.constructor=switchicon;switchicon.prototype.setStatus=null;switchicon.prototype.setColor=null;switchicon.prototype.setHeader=function(a,b){this.openHTML=a;this.closeHTML=b};switchicon.prototype.contractcontent=function(a){document.getElementById(a.id.replace("-title","")).style.display="none";a.innerHTML=this.closeHTML};
switchicon.prototype.expandcontent=function(a){var b=document.getElementById(a.id.replace("-title",""));"waiting"==a.ajaxstatus&&switchcontent.connect(a.ajaxfile,a);b.style.display="block";a.innerHTML=this.openHTML};