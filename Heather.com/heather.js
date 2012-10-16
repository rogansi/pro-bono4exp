$(init);
var newDir;
var picShow = new Array("artwork", "makeup2", "clothing");
function init(){
	var projFile;
	
	$("#contact").load("contact.html");
	$("#opening").slideDown();
	$("#artwork").load("loadArt.php");
	$("#makeup2").load("loadMakeup.php");
	$("#clothing").load("loadClothing.php");
	$("#writtenIntro").slideUp();
	$("#otherMedia").load("otherMedia.html");
	$("#home").css("background-image", "url(pics/home.png)");
	$("#paint").css("background-image", "url(pics/paint.png)");
	$("#makeup").css("background-image", "url(pics/makeup.png)");
	$("#craft").css("background-image", "url(pics/crafts.png)");
	$("#about").css("background-image", "url(pics/aboutMe.png)");
}
function reShow(){
location.reload();
}
function showPic(x, y){
	$("#writtenIntro").load(x+"Info.html");
	$("#writtenIntro").slideDown();
	$("#"+y).slideToggle();
	for(i=0; i<picShow.length; i++){
		if(picShow[i]!=y){
			$("#"+picShow[i]).slideUp();
		}
	}
	$("#opening").slideUp();
}
function showMe(x){
	$("#writtenIntro").load(x+".html");
	$("#writtenIntro").slideDown();
	$("#opening").slideDown();
	$("#artwork").slideUp();
	$("#makeup2").slideUp();
	$("#clothing").slideUp();
	$("#opening").css("top", "360px");
	$("#contact").css("top", "500px");
}
function enLarge(x){
	$.post("upClosePaint.php", {'namer': x,}, function(data, statusText){
		$("#artwork").html(data);
	});
}
function newProject(){
	$("#newFile").slideDown();
	$("#oldFile").slideUp();
}
function startProject(){
	var projName = $("#newProj").val();
	$.post("createFile.php", {'newName': projName});
	$.post("uploadify.php", {'goodTime': projName}, function(data, textStatus){
		$("#heathMin").html(data);
		})
}
function editProject(){
	newDir = $("#dirFind").val();
	$.post("uploadify.php", {'goodTime': newDir}, function(data, textStatus){
		$("#heathMin").html(data);
		})
}
function pickProject(){
	$("#newFile").slideUp();
	$("#oldFile").slideDown();
}
function toggleArt(x){
			$("#"+x).slideToggle();
}
function switchArt(dir, pic, x){
	var content = "<img src = '"+x;
	content +="/"+dir+"/"+pic+"' height='230' width = '300' />";
	$("#main"+dir).html(content);
}