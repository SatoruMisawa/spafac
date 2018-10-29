$(function() {


if($('.page_to_top').length){
	var topBtn = $('.page_to_top');   
    $(window).scroll(function () {
		scrh=$(window).scrollTop();
        if (scrh >100) {
			topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
		}
    });
	$('.page_to_top').click(function(){
	$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
	});
}

if($('.slick-box').length){

$('.slick-box').slick(
{
		centerMode: true, //センターモード
		centerPadding: '0px', //前後のパディング
		autoplay: true, //オートプレイ
		autoplaySpeed: 2000, //オートプレイの切り替わり時間
		slidesToShow:1,
		arrows:true,
		appendArrows: $('#arrows'),
		dots:true,
		responsive: [{//レスポンシブブレイクポイント
			breakpoint: 768,
			settings: {
				arrows:true, // 前後の矢印非表示
				centerMode: true,
				centerPadding: '0px',
				slidesToShow:1
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows:false,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 1
			}
		}]
	}

); 

    $('.slick-next').on('click', function () {
        slick.slickNext();
    });
    $('.slick-prev').on('click', function () {
        slick.slickPrev();
    });

}


});