 $(window).load(function() {
	// suckerfish
	sfHover = function() {
		var sfEls = document.getElementById("main-menu").getElementsByTagName("LI");
		for (var i=0; i<sfEls.length; i++) {
			sfEls[i].onmouseover=function() {
				this.className+=" sfhover";
			}
			sfEls[i].onmouseout=function() {
				this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
			}
		}
	}

	$( "#nav-toggle" ).toggle();

});