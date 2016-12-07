//= require bootstrap
$(document).ready(function() { 
    
    
    
    $("#expandme").click(function() {
		$('#expand_section').toggle();
	});

	$('#expand_section ul').find((':has(div)')).parent().addClass('nolink');

	window.prettyPrint && prettyPrint();
	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation();
	});

	$('#expand_section ul>li:has(ul)').click(function(event) {
		//alert("onclick="+$(this).attr('class'));
		$newul = $(this).find("ul:first");
		if ($newul.css("display") == "none") {
			$newul = $(this).find("ul:first");
			$newul.parent().removeClass("drop");
			$newul.parent().addClass("opendrop");
			$newul.show("fast");
			$newul.parent().removeClass("togopen");
		} else {
			$newul = $(this).find("ul:first");
			$newul.parent().removeClass("opendrop");
			$newul.parent().addClass("drop");
			$newul.hide("fast");
			$newul.parent().removeClass("togopen");
		}
		event.stopPropagation();
	});
    
    
    /* Menu accessibility for Enter */
    $('.dropdown > a[tabindex]').keydown(function(event) {
        if (event.keyCode == 13) {
          $(this).dropdown('toggle');
        }
    });
    $('.dropdown-submenu > a').submenupicker();
    
    window.prettyPrint && prettyPrint();
	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation();
	});
 
    $("#menu-nav").click(function() {
	 	$(this).toggleClass('mobile-active');
		$('.topnav-action').toggle();
	});
 
	// Fix for IE8 window resize
	var lastWindowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var currentW = 'small';

	if (lastWindowWidth >= 768) {
		currentW = 'large';	}  
    
	$(window).resize(function() {
		//confirm window was actually resized
		if (Math.max(document.documentElement.clientWidth, window.innerWidth || 0) != lastWindowWidth) {

			
			lastWindowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

			//call my function
			if ((lastWindowWidth < 768) && ((currentW == 'large') || (currentW ='xs'))) {
				currentW = 'small';
 				smallWindow();
                xsWindow();
			}
			if ((lastWindowWidth >= 768) && (currentW == 'small')) {
				currentW = 'large';
 		 	$('#yamm-placeholder').append($('.yamm'));
                
                 $('.topnav-action').show();
			} 
        }
	});

	

	if ((Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) < 768) {
	 	smallWindow();
        xsWindow();
 	}
     
	function smallWindow() {
      
    }
    
    function xsWindow() { 
            $('.topnav-action').hide();
            $("#yamm-placeholder").each(function() {
			$('.yamm').prependTo('.topnav-action').removeClass('visible');
			$('#menu-nav').show().removeClass('mobile-active').removeClass('open');
		});
    }

	//Direct Edit swap code to make ob work in dynamic templates:
	$('#ouc-direct-edit-wrapper a').attr('href', $('#ouc-ob-fill a').attr('href'));
	$('#ouc-ob-fill').remove();
	$('#ouc-direct-edit-wrapper').contents().unwrap();
	$('footer div.maxwidth').append($('#de'));
    
    /* Quicklinks even columns on tablet */
    var varcount = $(".subfeature-quicklinks ul li").length;
     $(".subfeature-quicklinks ul li").slice(0,Math.ceil(varcount/2)).addClass('first-col');

    
    function addButtonCaret() {
    
    
        $('.btn.orange-caret').each(function () {
            $(this).append(' <span class="fa color-brand fa-caret-right" aria-hidden="false"><span class="sr-only">Expand</span></span>');
        });
    }
    
    
    addButtonCaret();
    
    
}); 

