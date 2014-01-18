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
	var $firstBG = $('#home');
	var $secondBG = $('#strategy');
	var $thirdBG = $('#creative');
	var $fourthBG = $('#about-us');
	var $fifthBG = $('#contact');
	var $sixthBG = $('#resources');
	var sprout = $("#home .sprout");
	var strategy = $("#strategy .sprout-strategy");	
	var lightbulb = $("#creative .light-bulb");
	var joetully = $("#about-us .joe-tully");		
	var clock = $("#about-us .clock");
	var silhouette = $("#about-us .silhouette");	
	var ipad = $("#contact .ipad");
	var contactbackground = $("#contact .contact-background");	
	var feed = $("#resources .sprout-feed");	
	var lihome = $('ul#nav #li-home');
	var listrategy = $('ul#nav #li-strategy');
	var licreative = $('ul#nav #li-creative');
	var liaboutus = $('ul#nav #li-about-us');
	var licontact = $('ul#nav #li-contact');
	var liresources = $('ul#nav #li-resources');	
	var story = $('.story');
	var resourcesstory = $('#resources .story');
	
	var windowWidth = $window.width();	
	var windowHeight = $window.height(); //get the height of the window
	
	function removeClasses() {
		lihome.removeClass("current");
		listrategy.removeClass("current");
		licreative.removeClass("current");
		liaboutus.removeClass("current");
		licontact.removeClass("current");
		liresources.removeClass("current");
	}
	
	//apply the class "inview" to a section that is in the viewport
	$('#home, #strategy, #creative, #about-us, #contact, #resources').bind('inview', function (event, visible) {
			thisid = this.id;																				   
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
		$('body','#main','#home','#strategy','#creative','#about-us','#contact','#resources').css({'width':windowWidth});	
		$('body','#main','#home','#strategy','#creative','#about-us','#contact','#resources').css({'height':windowHeight});	
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
		story.css({'width': windowWidth/2+"px",'height': windowHeight+"px"});  
		//resourcesstory.css({'width': windowWidth/1.5+"px",'height': windowHeight+"px"});
		//if the first section is in view...
		if($firstBG.hasClass("inview")){
			removeClasses();
			lihome.addClass("current");
			//call the newPos function and change the background position
			$firstBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster, 0.3),'width': windowWidth+"px",'height': windowHeight+"px"}); 
			sprout.css({'backgroundPosition': newPos(75, windowHeight, pos, initadjuster+windowHeight*0.75, 0.6),'width': windowWidth+"px",'height': windowHeight+"px"});
			//			
			
		}
		
		//if the second section is in view...
		if($secondBG.hasClass("inview")){
			removeClasses();
			listrategy.addClass("current");
			//call the newPos function and change the background position
			$secondBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			//call the newPos function and change the second background position
			strategy.css({'backgroundPosition': newPos(75, windowHeight, pos, initadjuster+windowHeight*1.75, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
			
		}
		
		//if the third section is in view...
		if($thirdBG.hasClass("inview")){
			removeClasses();
			licreative.addClass("current");
			//call the newPos function and change the background position
			$thirdBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*2.5, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			lightbulb.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*2.5, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
			
		}
		
		//if the fourth section is in view...
		if($fourthBG.hasClass("inview")){
			removeClasses();
			liaboutus.addClass("current");
			$fourthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*3, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			clock.css({'backgroundPosition': newPos(75, windowHeight, pos, initadjuster+windowHeight*3.6, 0.9),'width': windowWidth+ "px",'height': windowHeight+ "px"});			
			joetully.css({'backgroundPosition': newPos(55, windowHeight, pos, initadjuster+windowHeight*4.15, 0.5),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			silhouette.css({'backgroundPosition': -((1518/2)-(55/100*windowWidth))+130 + "px " + (-((windowHeight + pos) - (initadjuster+windowHeight*4.3)) * 0.5) + "px",'width': '1518px','height': windowHeight+ "px"});
			//silhouette.css({'backgroundPosition': newPos(-50, windowHeight, pos, initadjuster+windowHeight*4.3, 0.5),'width': '1518px','height': windowHeight+ "px"});	
			
		}
		
		//if the fifth section is in view...
		if($fifthBG.hasClass("inview")){
			removeClasses();
			licontact.addClass("current");
			//call the newPos function and change the background position
			$fifthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*4.4, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			ipad.css({'backgroundPosition': newPos(60, windowHeight, pos, initadjuster+windowHeight*4.525, 0.9),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
			contactbackground.css({'backgroundPosition': newPos(60, windowHeight, pos, initadjuster+windowHeight*4.4, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});	
			
		}
		
		//if the sixth section is in view...
		if($sixthBG.hasClass("inview")){
			removeClasses();
			liresources.addClass("current");
			//call the newPos function and change the background position
			$sixthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, initadjuster+windowHeight*5, 0.3),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			feed.css({'backgroundPosition': newPos(80, windowHeight, pos, initadjuster+windowHeight*5.525, 0.6),'width': windowWidth+ "px",'height': windowHeight+ "px"});
			
		}
		
		
		
		$('#pixels').html(pos); //display the number of pixels scrolled at the bottom of the page
	}
		
	RepositionNav(); //Reposition the Navigation to center it in the window when the script loads
	
	$window.resize(function(){ //if the user resizes the window...
		Move(); //move the background images in relation to the movement of the scrollbar
		RepositionNav(); //reposition the navigation list so it remains vertically central
	});		
	
	$window.bind('scroll', function(){ //when the user is scrolling...
		Move(); //move the background images in relation to the movement of the scrollbar
	});
	
});