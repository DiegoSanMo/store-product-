$(document).ready(function(){

	$(".banner").css({"height":$(window).height() + "px"});
    var flag = false;
    var scroll;

    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        if (scroll > 200)
        {
			if (!flag)
			{
					$(".logo").css({"margin-top": "-5px", "width": "50px","height":"50px"});
					$("header").css({"background-color": "rgb(86, 85, 89)"});
					flag = true;
			}
        }
        else
		{
			if (flag)
			{
					$(".logo").css({"margin-top": "150px", "width": "250px","height":"250px"});
					$("header").css({"background-color": "transparent"});
					flag = false;
			}
        }
    });

});
