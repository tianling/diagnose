// JavaScript 
window.onload=function(){
		my("#contain").css("width","488px");		
		setTimeout(function(){curediv(0)},1300);
		Event();	
	};
function Event(){
	var deliver=function(i){
		return function(ev){surefirst(i);}
	};
	var deliversecond=function(i){
		return function(ev){suresecond(i);}
	};
	for(var i=0;i<$$("cure").length;i++){
	$$("cure")[i].addEventListener("click",deliver(i),false);
	};
	for(var i=0;i<$$("Pagecure").length;i++){
	$$("Pagecure")[i].addEventListener("click",deliversecond(i),false);
	};
	page();
};
var left=15;
var top_l=21;
var $$=function(x){
	return document.getElementsByClassName(x);	
};
function curediv(count){
	for(var i=count;i<count+4;i++){
	 $$("cure")[i].style.top=top_l+"%";
	 $$("cure")[i].style.left=left+"%";
	 			left=left+20;
	};
	top_l=top_l+18;
	left=15;
		count=count+4;
	if(count==20){return;}
	curediv(count);
};
function surefirst(i){
	if($$("hiden")[i].checked==true){
		$$("cure")[i].style.backgroundImage="URL(images/curebackgroundAf.jpg)";
									}
	else{
		$$("cure")[i].style.backgroundImage="URL(images/curebackground.gif)"
		}
};
function suresecond(i){
	if($$("hidens")[i].checked==true){
		$$("Pagecure")[i].style.backgroundImage="URL(images/curebackgroundAf.jpg)";
									}
	else{
		$$("Pagecure")[i].style.backgroundImage="URL(images/curebackground.gif)"
		}
};
var $page=0;
function page(){
	my("#nextpage").click(function(){
		$page=$page+488;
		if($page>488*3){$page=488*3;}		
		else{my(".choose").css("right",$page+"px");
		my("#beforepage").css("display","inline-block")};
									});
	my("#beforepage").click(function(){
		$page=$page-488;
		if($page<0){$page=0;my("#beforepage").css("display","none");}		
		else{my(".choose").css("right",$page+"px");my("#beforepage").css("display","inline-block")}
									})		
};

function check(){
	if(message.name.value.length==0){
		alert("请输入姓名！");
		message.name.focus();
		return false;
	}
	
	if(message.age.value.length==0){
		alert("请输入您的年龄！");
		message.name.focus();
		return false;
	}
	
	if(message.address.value.length==0){
		alert("请输入家庭住址！");
		message.address.focus();
		return false;
	}
	if(message.telephone.value.length==0){
		alert("请输入联系电话！");
		message.telephone.focus();
		return false;
	}
	var tel=message.telephone.value;
	var pattern=/^([0-9]+){8,11}/;
	flag=pattern.test(tel);
	if(!flag){
		alert("电话格式不合法！");
		message.telephone.focus();
		return false;
	}

	
	if(message.history.value.length==0){
		alert("请输入您的病史! ");
		message.history.focus();
		return false;
	}
};
