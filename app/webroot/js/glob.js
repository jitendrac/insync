$(document).ready(function() {
    (function($){
        $.fn.shuffle = function() {
            return this.each(function(){
                var items = $(this).children();
                return (items.length)
                ? $(this).html($.shuffle(items))
                : this;
            });
        }
 
        $.shuffle = function(arr) {
            for(
                var j, x, i = arr.length; i;
                j = parseInt(Math.random() * i),
                x = arr[--i], arr[i] = arr[j], arr[j] = x
            );
            return arr;
        }
    })(jQuery);


	
    /* Home Page slider */
		
    var numCategories = $("ul.FeaturedCategories li").length;
    //		alert(numCategories);
    //shuffle the cat LIs
    $("ul.FeaturedCategories").shuffle();
    //make the cat LIs have the correct identifiers
    $("ul.FeaturedCategories li").each(function(it){
        $(this).attr('id','img'+(it+1));
        $(this).find('a').attr('rel',(it+1));
    });
	
    var extended = $('li#img1');
    $(extended).addClass('extended');
    var startTitle = 0;
    $('.CategoriesBox li').each(function(){
        if($(this).is(":animated"))
        {
            isAnimated = true;
        }
    });
		
    $("ul.FeaturedCategories li a").click(function(e){
        if(!$(this).parent().is('.extended') && !$(this).parent().is("span"))
        {
            e.preventDefault();
        }
    })
		
		
    $("ul.FeaturedCategories li div span").each(function() {
        if(!$(this).parent().parent().is("#img1")) {
            $(this).hide();
        }
    });
		
    function sliderMove (el) {
        var mover = $(el);
        var isAnimated = false;
        extended = $("li.timg.extended");
			
			
			
        if($(el).attr('id') != $(extended).attr('id')) {
            $(extended).find("span").fadeOut("fast",function() {
                $(mover).animate({
                    width:'423px'
                },"slow",function() {
                    $(mover).find("span").fadeIn("slow");
                });
                $(extended).animate({
                    width:'84px'
                },"slow",function() {
                    $("ul.FeaturedCategories").animate({
                        left: -($(mover).position().left)
                        },"slow",function(){
                        currentOrder = parseInt($(mover).find('a').attr('rel'));
                        $("ul.FeaturedCategories li").each(function(i){
                            if(parseInt($(this).find('a').attr('rel')) < currentOrder)
                            {
                                y = parseInt($(this).find('a').attr('rel')) + 15;
                                $(this).find('a').attr('rel',y);
                                $("ul.FeaturedCategories").css('left',0);
                                $(this).appendTo("ul.FeaturedCategories");
                                if($(this).find('a').attr('rel') > startTitle) {
                                    startTitle = $(this).find('a').attr('rel');
                                }
                            }
                        }).each(function(i){
                            $(this).css('z-index',startTitle-i);
                        })
                    });
                });
                $(extended).removeClass('extended');
                extended = mover;
                $(extended).addClass('extended');
            });
        }
    }
		
    $('.CategoriesBox li').click(function() {
        sliderMove($(this));
    });
		
    window.autoSlideTimer = window.setInterval(function(){
        sliderMove($("li.timg.extended").next())
        },4000);
		
    $("div#viewport").hover(function(){
        window.clearInterval(window.autoSlideTimer);
    },function(){
        window.autoSlideTimer = window.setInterval(function(){
            sliderMove($("li.timg.extended").next())
            },4000);
    })
});/* ends window ready function */
