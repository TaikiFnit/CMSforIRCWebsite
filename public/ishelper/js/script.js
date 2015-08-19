// this functions clear background-color of mode
var flag = new Array(6);
var i;

for(i = 0; i < 6; i++)
{
    flag[i] = false;
}

// the function for clear
function clear(){

    for(i = 0; i < 6; i++)
    {
        flag[i] = false;
    }
    
    $('#header').css('background-color', '#000');

}

// スムーススクロール
$(function(){

    $('a[href^=#]').click(function(){
        
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
    
});

// insert delta on the icon of pagetop
$(function(){

    var w = $(window).width();
    var e = document.getElementById('insertd');
    if(w >= 960)
    {
        e.innerHTML = "▲";
    }
    else
    {
        e.innerHTML = "";
    }
    
});

// insert delta when the window resizes 
$(window).resize(function(){

    var w = $(window).width();
    var e = document.getElementById('insertd');
    if(w >= 960)
    {
        e.innerHTML = "▲";
    }
    else
    {
        e.innerHTML = "";
    }
});

// hover on mode
$(function(){
        
        // バッテリー緊急モード
        $('#focusb').hover(function(){
            
            $('#battery').css('background-color', 'rgba(255, 150, 150, 0.8)');
            
        }, function(){
        	if(flag[0] === false)
				$('#battery').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[0] === true)
                $('#battery').css('background-color', 'rgba(255, 150, 150, 0.5)');
        });
    
        // ホイッスルモード
        $('#focusv').hover(function(){
           
            $('#volume').css('background-color', 'rgba(113, 228, 255, 0.8)');
            
        }, function(){
        	if(flag[1] === false)
            	$('#volume').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[1] === true)
                $('#volume').css('background-color', 'rgba(113, 228, 255, 0.5)');
            
        });
    
        // 懐中電灯モード
        $('#focusl').hover(function(){
            
            $('#light').css('background-color', 'rgba(255, 225, 85, 0.8)');
            
        }, function(){
        	if(flag[2] === false)
           	 $('#light').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[2] === true)
                $('#light').css('background-color', 'rgba(255, 225, 85, 0.5)');           
        });
    
        // 避難所検索モード
        $('#focuss').hover(function(){
           
            $('#search').css('background-color', 'rgba(99, 255, 116, 0.8)');
            
        }, function(){
        	if(flag[3] === false)
            	$('#search').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[3] === true)
                $('#search').css('background-color', 'rgba(99, 255, 116, 0.5)');
            
        });
    
        // ワンプッシュ居場所送信モード
        $('#focusp').hover(function(){
          
            $('#push').css('background-color', 'rgba(109, 130, 255, 0.8)');
            
        }, function(){
        	if(flag[4] === false)
            	$('#push').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[4] === true)
                $('#push').css('background-color', 'rgba(109, 130, 255, 0.5)');
            
        });
    
        // 防災袋モード
        $('#focusg').hover(function(){
           
            $('#bag').css('background-color', 'rgba(186, 186, 186, 0.8)');
            
        }, function(){
        	if(flag[5] === false)
                $('#bag').css('background-color', 'rgba(255,255,255,0)');
            else if(flag[5] === true)
                $('#bag').css('background-color', 'rgba(186, 186, 186, 0.5)');
            
        }); 
});

// click on mode
$(function(){

    function clear(){
        $('#battery').css('background-color', 'rgba(255,255,255,0)');
        $('#volume').css('background-color', 'rgba(255,255,255,0)');
        $('#light').css('background-color', 'rgba(255,255,255,0)');
        $('#search').css('background-color', 'rgba(255,255,255,0)');
        $('#push').css('background-color', 'rgba(255,255,255,0)');
        $('#bag').css('background-color', 'rgba(255,255,255,0)');
        $('html').css('background-color', '#000');
        
        for(i = 0; i < 6; i++)
        {
            flag[i] = false;
        }
    }
    
    // バッテリー緊急モード
        $('#focusb').on('click',function(){    
            clear();
            flag[0] = true;
            $('#battery').css('background-color', 'rgba(255, 150, 150, 0.5)');
            
        });
    
        // ホイッスルモード
        $('#focusv').click(function(){
            clear();
            flag[1] = true;
            $('#volume').css('background-color', 'rgba(113, 228, 255, 0.5)');
            
        });
    
        // 懐中電灯モード
        $('#focusl').click(function(){
            clear();
            flag[2] = true;
            $('#light').css('background-color', 'rgba(255, 225, 85, 0.5)');
            
        });
    
        // 避難所検索モード
        $('#focuss').click(function(){
            clear();
            flag[3] = true;
            $('#search').css('background-color', 'rgba(99, 255, 116, 0.5)');
            
        });
    
        // ワンプッシュ居場所送信モード
        $('#focusp').click(function(){
            clear();
            flag[4] = true;
            $('#push').css('background-color', 'rgba(109, 130, 255, 0.5)');
            
        });
    
        // 防災袋モード
        $('#focusg').click(function(){
            clear();
            flag[5] = true;
            $('#bag').css('background-color', 'rgba(186, 186, 186, 0.5)');
            
        }); 
});

// page top 
$(document).ready(function() {
    var pagetop = $('.pagetop');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            pagetop.addClass('show');
        } else {
            pagetop.removeClass('show');
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});

$(function(){

// hover on nav
$('nav ul li p').hover(function(){

    $(this).css('background-color', 'rgba(191, 191, 191, 0.8)');
    $(this).css('color', '#222');
    
}, function(){

    $(this).css('background-color', 'rgba(0, 0, 0, 0.8)');
    $(this).css('color', '#ddd');
    
});
    
});
    
/* navの動き */
/*
$(document).ready(function() {
    var pagetop = $('nav');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 000) {
            pagetop.addClass('show');
        } else {
            pagetop.removeClass('show');
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});*/
