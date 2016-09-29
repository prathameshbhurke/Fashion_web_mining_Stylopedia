// twitter 
jQuery(function($){
        $(".tweet").tweet({
            username: "envato",
            join_text: "auto",
            avatar_size: null,
            count: 1,
            auto_join_text_default: " we said,", 
            auto_join_text_ed: " we",
            auto_join_text_ing: " we were",
            auto_join_text_reply: " we replied to",
            auto_join_text_url: " we were checking out",
            loading_text: "loading tweets..."
        });
    });

// Initialize the plugin with no custom options
		$(document).ready(function () {
			// I just set some of the options
			$("#scroll").smoothDivScroll({
                                mousewheelScrolling: false,
				touchScrolling: true,
				manualContinuousScrolling: true,
				hotSpotScrolling: false,

			});
		});



// Project Planner

function CheckAll(x)
{
    
if (ISBLANK(x.fieldnm_1.value)) 
	{ 	
		    alert("Please define value for Your name field !!");
    	    return false;
    }

if (ISBLANK(x.fieldnm_2.value)) 
	{ 	
		    alert("Please define value for Your E-mail field !!");
    	    return false;
    }

if (ISBLANK(x.fieldnm_11.value)) 
	{ 	
		    alert("Please define value for Your project budget field !!");
    	    return false;
    }

 
	 return true;
}

/// email check

function checkemail(myemail)
{
var str=myemail;
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
{
testresults=true
}
else
{
testresults=false
}
return (testresults)
}

/// to check that perticular value is EMPTY OR NOT
function ISBLANK(xx)
{ 
        var cc=0,tt;
		for(tt=0; tt<xx.length; tt++)
		{
		     if (xx.charAt(tt)==' ')
			 {
			 	cc=cc+1; // count blank character
			 }
		}
		if (cc==xx.length)
		{
			return true;  //// means it is BLANK
		}
	     return false;	//// means it is NOT BLANK
}

function is_radio_button_selected(fieldnm)
{
// set var radio_choice to false
var radio_choice = false;

// Loop from zero to the one minus the number of radio button selections
for (counter = 0; counter < fieldnm.length; counter++)
{
// If a radio button has been selected it will return true
// (If not it will return false)
if (fieldnm[counter].checked)
radio_choice = true; 
}

if (!radio_choice)
{
return (false); /// means not selected
}
return (true); /// means selected
}

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

$(document).ready(function(){
		$("a[data-rel^='prettyPhoto']").prettyPhoto();
	});

 
// navivation 


selectnav('menu', {
  label: '### Table of content ### ',
  nested: true,
  indent: '-'
});