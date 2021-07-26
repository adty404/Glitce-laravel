M.AutoInit();

const br2nl = (str) => str.replace(/<br\s*\/?>/mg,"\n");
const previewImage = (fromInput, fromImage) => {

	const file = document.querySelector(fromInput).files;

	if (!file) return;

	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.querySelector(fromInput).files[0]);

	oFReader.onload = function(oFREvent) {
		const image = document.createElement("img");
		image.src = oFREvent.target.result;

		image.onload = function(e) {
			const canvas = document.createElement("canvas");
			const MAX_WIDTH = document.querySelector(fromImage).width;

			const scaleSize = MAX_WIDTH / e.target.width;
			canvas.width = MAX_WIDTH;
			canvas.height = e.target.height * scaleSize;

			const ctx = canvas.getContext("2d");

			ctx.drawImage(e.target, 0, 0, canvas.width, canvas.height);

			const srcEncoded = ctx.canvas.toDataURL(e.target, "image/jpeg");

			$(fromImage).attr('src', srcEncoded);
		};                
	};
};

$(document).ready(function(){
	var prevScrollpos = 0,
	headerOrg = 100;

	$('#navbar').height($('#navwrap').height());

	var nav = $('nav');

	if($(window).height() - $(window).scrollTop() < 608)
	{	
		nav.addClass('main-color');
		// nav.addClass('z-depth-1');

		nav.removeClass('transparent');
		// nav.removeClass('z-depth-0');

		nav.css({ "height" : "70px", "line-height" : "3.8em", "border-bottom": "none" });
		if ($('body').width() > 991){
			$('#logo-container').css({'margin-top' : ".5em"});
			$('.menu_ .btn-glitche').css({'top' : ".65em"});
			// $('.menu_ a').css({'margin-bottom' : "0.3em"});

			// $('#logo-container .brand-logo:nth-child(1)').css({ "top" : "-1.9em" });
			// $('#logo-container .brand-logo:nth-child(2)').css({ "top" : "-1.82em" });
		} else if($('body').width() >= 600 && $('body').width() <= 991) {
			$('#logo-container').css({'margin-top' : "1em"});
			$('.sidenav-trigger').css({"margin-top" : "0em"});

			// $('#logo-container .brand-logo:nth-child(1)').css({ "top" : "-2em" });
			// $('#logo-container .brand-logo:nth-child(2)').css({ "top" : "-2em" });
		} else if($('body').width() < 600) {
			$('#logo-container').css({'margin-top' : "0.4em"});
			$('.sidenav-trigger').css({"margin-top" : "0.3em"});

			// $('#logo-container .brand-logo:nth-child(1)').css({ "top" : "-1.95em" });
			// $('#logo-container .brand-logo:nth-child(2)').css({ "top" : "-1.95em" });
		}

	} else {
		const getAttr = nav.attr("class").split(" ")
		let changeIt = getAttr[0] == "main-color";

		if(!changeIt){
			nav.removeClass('main-color');
			nav.addClass('transparent');
		}
		// nav.removeClass('z-depth-1');
		// nav.addClass('z-depth-0');

		if ($('body').width() > 991){
			// $('#logo-container').css({"margin-top" : "0em"});
			$('.menu_ a').css({'margin-bottom' : "0em"});
		} else if($('body').width() >= 600 && $('body').width() <= 991) {
			// $('#logo-container').css({"margin-top" : "0.3em"});
			$('.sidenav-trigger').css({"margin-top" : "0.5em"});
		} else if($('body').width() < 600) {
			// $('#logo-container').css({"margin-top" : "0.6em"});
			$('.sidenav-trigger').css({"margin-top" : "0.7em"});
		}

		nav.css({ "height" : "80px", "line-height" : "5em", "border-bottom": "1px solid rgba(236,239,241,0.5)" });
			$('.sidenav-trigger').css({"line-height" : "0.5em"});
			$('#logo-container').css({"margin-top" : "0.75em"});
			$('.menu_ .btn-glitche').css({'top' : "1.15em"});
	}

	if($(window).scrollTop() >= 200)
	{
		$('.button-contact').css({ "opacity" : "1" });
	} else {
		$('.button-contact').css({ "opacity" : "0" });
	}

	$(window).scroll(function(){

		/* 			Hide Navbar			 */

		var currentScrollpos = $(this).scrollTop();
		// console.log($(this).scrollTop());
		if(currentScrollpos > headerOrg)
		{
			if(prevScrollpos > currentScrollpos)
			{
				$("#navbar").css('top','0');
			} else {
				$("#navbar").css('top','-100px');
			}
			
		} else {
			$("#navbar").css('top','0');
		}

		prevScrollpos = currentScrollpos;

		if($(this).scrollTop() >= 200)
		{
			$('.button-contact').css({ "opacity" : "1" });
		} else {
			$('.button-contact').css({ "opacity" : "0" });
		}

		if($(this).scrollTop() >= 500)
		{
			$('.counter').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 2500,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			    }

			  });  
			  
			});
		}

		var windowpos = $(window).scrollTop();

		if (windowpos > 20) {
			
			nav.addClass('main-color');
			// nav.addClass('z-depth-1');

			nav.removeClass('transparent');
			// nav.removeClass('z-depth-0');

			nav.css({ "height" : "70px", "line-height" : "3.8em", "border-bottom": "none" });			

			if ($('body').width() > 991){
				$('#logo-container').css({'margin-top' : "0.5em"});		
				$('.menu_ .btn-glitche').css({'top' : ".65em"});		
				// $('.menu_ a').css({'margin-bottom' : "0.3em"});
			} else if($('body').width() >= 600 && $('body').width() <= 991) {
				$('#logo-container').css({'margin-top' : "0.5em"});
				$('.sidenav-trigger').css({"margin-top" : "0em"});
			} else if($('body').width() < 600) {
				$('#logo-container').css({'margin-top' : "0.4em"});
				$('.sidenav-trigger').css({"margin-top" : "0.3em"});
			}

		} else {
			
			const getAttr = nav.attr("class").split(" ")
			let changeIt = getAttr[0] == "main-color";

			if(!changeIt){
				nav.removeClass('main-color');
				nav.addClass('transparent');
			}
			// nav.addClass('z-depth-0');
			
			if ($('body').width() > 991){
				$('#logo-container').css({"margin-top" : ".5em"});
				$('.menu_ a').css({'margin-bottom' : "0em"});
			} else if($('body').width() >= 600 && $('body').width() <= 991) {
				$('#logo-container').css({"margin-top" : "0.3em"});
				$('.sidenav-trigger').css({"margin-top" : "0.5em"});
			} else if($('body').width() < 600) {
				$('#logo-container').css({"margin-top" : "0.6em"});
				$('.sidenav-trigger').css({"margin-top" : "0.7em"});
			}

			nav.css({ "height" : "80px", "line-height" : "5em", "border-bottom": "1px solid rgba(236,239,241,0.5)" });
			$('.sidenav-trigger').css({"line-height" : "0.5em"});
			$('#logo-container').css({"margin-top" : "0.75em"});
			$('.menu_ .btn-glitche').css({'top' : "1.15em"});
			
		}

	});

	$('a[href*="#"]')	  
	.not('[href="#"]')
	.not('[href="#!"]')
	.not('[href="#0"]')
	.click(function(event) {
		    
		if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			&& 
			location.hostname == this.hostname
		) {
		      
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		     
			if (target.length) {
		        
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1500, function() {
		          
					var $target = $(target);
					$target.focus();
					
					// if ($target.is(":focus")) {
					// 	return false;
					// } else {
					// 	$target.attr('tabindex','-1');
					// 	$target.focus(); 
					// };
				});
			}
		}
	});

});