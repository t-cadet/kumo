//EVENTS
$('#font').slider({
	tooltip_position:'bottom',
	formatter: function(value) {
		return value + ' %';
	}
});
$("#resetFontSize").click(function(){
	setFontSize(120);
});	


//VARIABLES
var sizeChange = function() {
	setFontSize(size.getValue());
};

var size = $('#font').slider()
	.on('slide', sizeChange)
	.data('slider');

var fontSize=getCookie("fontSize");
if (fontSize!=null) { //load user chosen fontsize from cookie if there is one stored
	setFontSize(fontSize);
}	
	


//FUNCTIONS
function getFontSize() {
	s = getCookie("fontSize");
	if(s == null) {
		s = 120;
	}
	return s;
}
function setFontSize(font_size) {
	$('#chapter_content').css('font-size', font_size + '%');
	size.setValue(font_size);
	setCookie("fontSize", font_size, 60);
} 

function setCookie(name, value, days) {
var expireDate = new Date()
//set "expstring" to either future or past date, to set or delete cookie, respectively
var expstring=(typeof days!="undefined")? expireDate.setDate(expireDate.getDate()+parseInt(days)) : expireDate.setDate(expireDate.getDate()-5)
document.cookie = name+"="+value+"; expires="+expireDate.toGMTString()+"; path=/";
}

function getCookie(Name) { 
var re=new RegExp(Name+"=[^;]+", "i"); //construct RE to search for target name/value pair
if (document.cookie.match(re)) //if cookie found
return document.cookie.match(re)[0].split("=")[1] //return its value
return null
}