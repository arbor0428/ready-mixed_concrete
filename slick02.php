
<ul class='slickslider clearfix'>
	<li class="mainBx bx-clone">
		<img src="images/certifi01.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi02.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi03.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi04.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi01.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi02.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi03.png" alt="slider01">		
	</li>
	<li class="mainBx bx-clone">
		<img src="images/certifi04.png" alt="slider01">		
	</li>
</ul>


<script>
$('.slickslider').slick({ 
	slidesToShow: 4, 
	slidesToScroll: 1, 
	autoplay : true,			// 자동 스크롤 사용 여부
	autoplaySpeed : 1000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
	speed: 1000,
	responsive: [ 
		{ breakpoint: 1120, // 화면의 넓이가 1024px 이상일 때 
			settings: { 
			slidesToShow: 3, 
			slidesToScroll: 1
		}}, 
		{ breakpoint: 800, // 화면의 넓이가 768px 이상일 때 
			settings: { 
			slidesToShow: 2, 
			slidesToScroll: 1
		}}, 
		{ breakpoint: 600, // 화면의 넓이가 380px 이상일 때 
			settings: { 
			slidesToShow: 1, 
			slidesToScroll: 1 
		} 
		} 
	] 
});

</script>