<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title></title>
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width">

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link href="<?php echo base_url(); ?>assets/css/page.css" rel="stylesheet"  />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.twitter.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cake2.css" type="text/css" media="screen" />
		<script  src="<?php echo base_url() ?>assets/js/jquery-1.9.0.js"></script>

		<!-- /website tour test -->
		
		<title>Cake2</title>
		<!--[if IE 6]>
		<style>
		body {behavior: url("csshover3.htc");}
		#menu li .drop {background:url("img/drop.gif") no-repeat right 8px;
		</style>
		<![endif]-->

	</head>
	<body>
	
		<div id="content">
           
            <div class="title"></div>
           


            <ul class="accordion" id="accordion">
                <li class="bg1">
                    <div class="heading">商品A</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>商品標題</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur.</p>
                        <a href="#">more &rarr;</a>
                    </div>
                </li>
                <li class="bg2">
                    <div class="heading">商品B</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>商品標題</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. </p>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
                <li class="bg3">
                    <div class="heading">商品C</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>商品標題</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur.</p>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
                <li class="bg4 bleft">
                    <div class="heading">商品D</div>
                    <div class="bgDescription"></div>
                    <div class="description">
                        <h2>商品標題</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                            dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <a href="#">more &rarr;</a>
                    </div>

                </li>
            </ul>
        </div>
		
		<script type="text/javascript">
		
			function showit($elm)
			{
				var $this=$elm;
				$this.stop().animate({'width':'480px'},500);
				$('.heading',$this).stop(true,true).fadeOut();
				$('.bgDescription',$this).stop(true,true).slideDown(500);
				$('.description',$this).stop(true,true).fadeIn();
			}
				
           $(document).ready(function() {
			    
				
                $('#accordion > li').hover(
				
                    function () {
						var $this = $(this);
                        $this.stop().animate({'width':'480px'},500);
                        $('.heading',$this).stop(true,true).fadeOut();
                        $('.bgDescription',$this).stop(true,true).slideDown(500);
                        $('.description',$this).stop(true,true).fadeIn();
                    },
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'115px'},1000);
                        $('.heading',$this).stop(true,true).fadeIn();
                        $('.description',$this).stop(true,true).fadeOut(500);
                        $('.bgDescription',$this).stop(true,true).slideUp(700);
                    }
                );
				
				var $first=$('#accordion > li:last');
				$first.animate({'width':'480px'},500);
				$('.heading',$first).stop(true,true).fadeOut();
				$('.bgDescription',$first).stop(true,true).slideDown(500);
				$('.description',$first).stop(true,true).fadeIn();
            });
        </script>
  		
  	</body>
</html>
