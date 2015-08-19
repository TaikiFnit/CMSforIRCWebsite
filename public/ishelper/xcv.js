// JavaScript Document
$(function(){
	
	$('.moji1,.moji2,.moji3').css('dislplay','none');
	$('.bag,.bag2').css('dislplay','none');
	$('.newicon, .setu, .riri').css('display','none');
});

start();


function start()
{
	$(function(){
	
		$('.i').css('float','none');
		
		$('.shelper').animate({
			'opacity':'1'
		},{complete:
		
		function(){
			$('.i').animate({
			'marginLeft':'126px',
			'opacity':'1'
			},{complete:
			
				function(){
					$('.icon').animate({
						'opacity':'1'
					},{complete:
					
						function(){
							$('.top').animate({
								'opacity':'0'
							},{complete:
								function (){
									$('.top').hide();
									mozi();
								}
							,duration:2000})
							
						}
						
						
					,duration:3000});
					
				}
			
			,duration:3000});
		}
		
		
		,duration:2000});
	
	});
}




function mozi(){
	
	$('.top, .setu, .riri').css('display','none');
	$('.newicon').css('display','block');
	
	$('.moji1').animate({
		'display':'block',
		'opacity':'1',
	},{complete:
	
		function(){
			$('.moji2').animate({
				'display':'block',
				'opacity':'1'
			},{complete:
			
				function()
				{
					$('.moji3').animate({
						'display':'block',
						'opacity':'1'
					},{complete:
						function()
						{
							$('.newicon').animate({
								'opacity':'0'
							},{complete:
								function (){
									$('.newicon').hide();
									bousai();	
								}
							,duration:2000});
						}
					,duration:2000});
				}
				
			,duration:1000});
		}
		
	,duration:2000});
	
}


function bousai()
{
	
	$('.top ,.newicon  ,.riri').css('display','none');
	$('.setu').css('display','block');
	
	$('.bag').animate({
		'display':'block',
		'opacity':'1'
	},{complete:
		
		function(){
			$('.bag2').animate({
				'display':'block',
				'opacity':'1'
			},{complete:
			
				function()
				{
					$('.setu').animate({
						'opacity':'0'
						},{complete:
							function()
							{
								$('.setu').hide();
								opener();
							}							
						,duration:2000});
				}
				
			,duration:2000});
		}
		
	,duration:2000});
}



function opener()
{
	$('.top, .setu,.newicon ').css('display','none');
	$('.riri').css('display','block');
	
	$('.last').animate({
		'display':'block',
		'opacity':'1'
	},{complete:
				
		function(){
			$('.replay').animate({
				'display':'block',
				'opacity':'1'
			,duration:500});	
		}
		
  ,duration:3000});
}


function rrr()
{
	location.reload();	
}