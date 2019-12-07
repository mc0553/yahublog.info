$(function(){

  let updown = 'up';

    $('.hamburger').click(function(){   
    
    $('.icon').toggleClass('rotate');
    $('.icon').toggleClass('hide');
    $('.hamburger').toggleClass('rotate2');

  
    if ($(window).width() <= 480 ) {

      if( updown == 'up' ){
        $('#navi-in').animate({ top: 60 }, 500 );
        updown = 'down';
        
      }else {
        $('#navi-in').animate({ top: -700 }, 500 );
        updown = 'up';
      }

    }else {

      if( updown == 'up' ){
        $('#navi-in').animate({ top: 70 }, 500 );
        updown = 'down';

      }else {
        $('#navi-in').animate({ top: -700 }, 500 );
        updown = 'up';

      }

    }

  })
   

    //メニューの親要素にクリックしたら子要素がスライドダウンしてくる
　  $('.menu-item').click(function(){

      // フォーカスされたliの兄弟が持っているUlのliを見つけて非表示にする
      $(this).siblings().find('ul').find('li').css({
        "max-height":"0"
      });

      // フォーカスされたliの子要素を指定して表示する
      $(this).children().find('li').css({
        "max-height":"100%"
      });

      // メニュー機能からマウスが離れたら閉じるようにする
      $('#navi-in').mouseleave(function(){
         
        $('.sub-menu li').css({"max-height":"0"});

      });

  })

  
  $(window).scroll(function() {

      //ドキュメントがスクロールされた量を取得する変数を作る
      let scrollTop = $(document).scrollTop();
      //htmlのトップの位置を取得する
      let htmlTop = $('html').offset();

      let pro1 = $('.pro1').offset();
      let pro2 = $('.pro2').offset();
      let pro3 = $('.pro3').offset();
      let pro4 = $('.pro4').offset();
      let pro5 = $('.pro5').offset();
      let pro6 = $('.pro6').offset();
      let pro7 = $('.pro7').offset();

    // アイコンのkanをスクロールで出す
    if( scrollTop > htmlTop.top + 400 ){ kan.fadeIn('slow');}else{ kan.fadeOut('slow');}

    if( $(window).width() <= 500 ){

      if( scrollTop > pro1.top-200){ $('.lay1').fadeIn('slow'); }else { $('.lay1').fadeOut('slow'); }
      if( scrollTop > pro2.top-200){ $('.lay2').fadeIn('slow'); }else { $('.lay2').fadeOut('slow'); }
      if( scrollTop > pro3.top-200){ $('.lay3').fadeIn('slow'); }else { $('.lay3').fadeOut('slow'); }
      if( scrollTop > pro4.top-200){ $('.lay4').fadeIn('slow'); }else { $('.lay4').fadeOut('slow'); }
      if( scrollTop > pro5.top-200){ $('.lay5').fadeIn('slow'); }else { $('.lay5').fadeOut('slow'); }
      if( scrollTop > pro6.top-200){ $('.lay6').fadeIn('slow'); }else { $('.lay6').fadeOut('slow'); }
      if( scrollTop > pro7.top-200){ $('.lay7').fadeIn('slow'); }else { $('.lay7').fadeOut('slow'); } 
   
    }

  })


  let kan = $('.kan')
  kan.hide();
  kan.click(function(){

    $('html').animate({ scrollTop: 0 }, 1000 );
    // htmlだとIEでは反応しない
    // $('body').animate({ scrollTop: 0 }, 1000 );

  })



})