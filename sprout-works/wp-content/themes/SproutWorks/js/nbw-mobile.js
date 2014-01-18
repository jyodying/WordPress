/*
JavaScript for the demo: Recreating the Nikebetterworld.com Parallax Demo
Demo: Recreating the Nikebetterworld.com Parallax Demo
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/recreate-nikebetterworld-parallax/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/recreate-nikebetterworld-parallax/

License: http://creativecommons.org/licenses/by-sa/3.0/ (Attribution Share Alike). Please attribute work to Ian Lunn simply by leaving these comments in the source code or if you'd prefer, place a link on your website to http://www.ianlunn.co.uk/.

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

$(function() { //when the document is ready...


	//save selectors as variables to increase performance
	var $window = $(window);
	var $firstBG = $('#home-2');
	var $secondBG = $('#depth');
	var $thirdBG = $('#work');
	var $fourthBG = $('#us');
	var sprout = $("#home-2 .sprout");
	var strategy = $("#depth .depth-strategy");	
	var lightbulb = $("#work .light-bulb");
	var lihome = $('ul#nav #li-home-2');
	var lidepth = $('ul#nav #li-depth');
	var liwork = $('ul#nav #li-work');
	var lius = $('ul#nav #li-us');
	var story = $('.story');
	var home2story = $('#home-2 .story'); 
	var depthstory = $('#depth .story');
	var workstory = $('#work .story');
	var usstory = $('#us .story');
	
	var windowWidth = $window.width();	
	var windowHeight = $window.height(); //get the height of the window
	
	function removeClasses() {
		lihome.removeClass("current");
		lidepth.removeClass("current");
		liwork.removeClass("current");
		lius.removeClass("current");
	}
	
	//apply the class "inview" to a section that is in the viewport
	$('#home-2, #depth, #work, #us').bind('inview', function (event, visible) {
			if (visible == true) {
				$(this).addClass("inview");
			} else {
				$(this).removeClass("inview");
			}
		});
	
			
	//function that places the navigation in the center of the window
	function RepositionNav(){
		var windowWidth = $window.width();		
		var windowHeight = $window.height(); //get the height of the window
		var navHeight = $('#nav').height() / 2;
		var windowCenter = (windowHeight / 2); 
		var newtop = windowCenter - navHeight;
		$('#nav').css({"top": newtop}); //set the new top position of the navigation list
		$('body','#main','#home-2','#depth','#work','#us').css({'width':windowWidth});	
		$('body','#main','#home-2','#depth','#work','#us').css({'height':windowHeight});	
	}
	
	//function that is called for every pixel the user scrolls. Determines the position of the background
	/*arguments: 
		x = horizontal position of background
		windowHeight = height of the viewport
		pos = position of the scrollbar
		adjuster = adjust the position of the background
		inertia = how fast the background moves in relation to scrolling
	*/
	function newPos(x, windowHeight, pos, adjuster, inertia){
		return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
	}
	
	//function to be called whenever the window is scrolled or resized
	function Move(){ 
		var pos = $window.scrollTop(); //position of the scrollbar
		windowWidth = $window.width();		
		if ($window.height()<768) {
			windowHeight = 768*1.1;
		} else {
			windowHeight = $window.height()*1.1; //get the height of the window
		}
		var initadjuster = windowHeight/2;
		//story.css({'width': windowWidth/2+"px",'height': windowHeight+"px"});  
		//home2story.css({'width': windowWidth/1.7+"px",'height': windowHeight+"px"});		
		//depthstory.css({'width': windowWidth/1.5+"px",'height': windowHeight+"px"});
		//workstory.css({'width': windowWidth/1.35+"px",'height': windowHeight+"px"});
		//usstory.css({'width': windowWidth/1.25+"px",'height': windowHeight+"px"});
		//if the first section is in view...
		if($firstBG.hasClass("inview")){
			removeClasses();
			lihome.addClass("current");
			//call the newPos function and change the background position
			//$firstBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster, 0.3),'width': windowWidth+"px",'height': windowHeight+"px"}); 
			//sprout.css({'backgroundPosition': newPos(75, windowHeight, pos, initadjuster+windowHeight*0.65, 0.6),'width': windowWidth+"px",'height': windowHeight+"px"});
			//			
		}
		
		//if the second section is in view...
		if($secondBG.hasClass("inview")){
			removeClasses();
			lidepth.addClass("current");
			//call the newPos function and change the background position
			//$secondBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			//call the newPos function and change the second background position
			//strategy.css({'backgroundPosition': newPos(90, windowHeight, pos, initadjuster+windowHeight*1.4, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
		}
		
		//if the third section is in view...
		if($thirdBG.hasClass("inview")){
			removeClasses();
			liwork.addClass("current");
			//call the newPos function and change the background position
			//$thirdBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*2.5, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			//lightbulb.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*2.5, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
		}
		
		//if the fourth section is in view...
		if($fourthBG.hasClass("inview")){
			removeClasses();
			lius.addClass("current");
			//$fourthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*3, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
		}
	}
		
//if ($window.width() > 768) {		
	RepositionNav(); //Reposition the Navigation to center it in the window when the script loads
//}
	$window.resize(function(){ //if the user resizes the window...
		//if ($window.width() > 768) {
		Move(); //move the background images in relation to the movement of the scrollbar
		RepositionNav(); //reposition the navigation list so it remains vertically central
		//}
	});		
	
	$window.bind('scroll', function(){ //when the user is scrolling...
		//if ($window.width() > 768) {
		Move(); //move the background images in relation to the movement of the scrollbar
		//}
	});
	
});