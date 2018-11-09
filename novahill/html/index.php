<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../js/index.js">
	<link rel="stylesheet" href="../js/Swiper/dist/css/swiper.min.css">
	<script type="text/javascript" src="../js/jquery.min.js" ></script>
	<script type="text/javascript" src="../js/Swiper/dist/js/swiper.min.js"></script>
</head>
<body>
	<div class="h_banner">
		<video class="video" muted plays-inline id="myVideo" preload="auto">
			<source src="../img/NovaHills-Trailer 15s.mp4?&autoplay=1&rel=0" type="video/mp4">
			</video>
			<div class="content">
				<div class="title">
					<p> Kiệt tác nghỉ dưỡng<br> bên bờ biển thiên đường</p>
				</div>
			</div>
		</div>
		<div class="h_introduct" style="background-image: url(../img/introduct.png)";>
			<div class="content">
				<div class="text">
					<div class="title">
						khám phá thiên nhiên hoang sơ 
					</div>
					<div class="desc">
						<p>Tọa lạc trên địa thế “tựa sơn, hướng thủy” ấn tượng tại cung đường resort - Huỳnh Thúc Kháng, NovaHills Mui Ne Resort & Villas sở hữu những ưu thế độc tôn để trở thành một điểm đến hoàn hảo tại Phan Thiết.</p>
					</div>
				</div>
				<div class="slide">
					<div class="swiper-container" id="js-slide-introduct">
						<div class="swiper-wrapper">
							<div class="swiper-slide" >
								<div class="img" style="background-image: url(../img/introduct_1.png);" ></div>
							</div>
							<div class="swiper-slide" >
								<div class="img" style="background-image: url(../img/introduct_2.png);">
								</div>
							</div>
							<div class="swiper-slide" >
								<div class="img" style="background-image: url(../img/introduct_3.png);">
								</div>
							</div>
							<div class="swiper-slide" >
								<div class="img" style="background-image: url(../img/introduct_3.png);">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
			<!-- Add Arrows -->

		</div>
		<script>
			var swiper = new Swiper('#js-slide-introduct', {
				slidesPerView: 3,
				spaceBetween: 15,
				navigation: {
					nextEl: '.h_introduct .swiper-button-next',
					prevEl: '.h_introduct .swiper-button-prev',
				},
				breakpoints: {
					480: {
						slidesPerView: 1,
					}
				}
			});
		</script>
	</body>

	</html>