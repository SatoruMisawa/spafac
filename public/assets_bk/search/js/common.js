// JavaScript Document
    $(document).ready( function() {

  $(".menu-trigger").click(
	function () {
	$('.menu-trigger').toggleClass('active');
	}
  );
  $('#nav-content ul li a').click(
	  function () {
		  $('#nav-input').prop("checked",false); 
		  $('.menu-trigger').removeClass('active');
	  }
  );


if($('#floating-menu').length){
        var menu = $('div#floating-menu');
        var offset = menu.offset().top;
		menu.css({'position':'absolute','top':'0px','right':'2%'});	
    
        var position = 530; // 固定する画面での座標位置(ピクセルで指定)
        var coodinates = menu.css('top'); // CSSのtopに指定した値を保存
        var origPos = menu.css('position'); // CSSのpositionの値を一時的に保存
          
        //スクロール時のイベント処理
        $(window).scroll(function(){
            var scrollAmount = $(window).scrollTop();
            var newPosition = offset + scrollAmount;
			//console.log(scrollAmount);
				if(scrollAmount > position && scrollAmount<5500){
					menu.css('position', 'fixed')
					menu.css('top', "150px")
				}else{ // 固定化したメニューを最初の状態に戻している
				menu.css({'position':'absolute','top':'0px','right':'2%'});				
				}
    
        });
}

  
    });





