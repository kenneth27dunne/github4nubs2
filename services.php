<?php include("Includes/header.php"); //nav-container overlay <div class="page-title"><p>Our Services</p></div>?>

	<div class="nav-container2">
		<?php include("Includes/nav.php");?>
	</div>
	
	<div id="service-content-container">
		
		<!--- eCommerce --->
		<div id="eCommerce" class="eCommerce-service">
			<div class="innerCommmerce">
				<img src="assets/background/tour-4.png"/>
				<div class="leftPanel">
					<h2 class="design-title">eCommerce</h2>
					<p>As online shoppings popularity grows, more and more business are jumping on board the e-commerce band waggon. e-Commerce is defined as <i>"trading in products or services using computer networks, such as the Internet"</i>.</p>
					<p>Our job is to create unique online user experiences that keep customers coming back.</p>
					<p>The benifiets of an eCommerce business can be limitless. Your local business can be transformed from a small business will a local reach to a large online business reaching new customers not only locally but national and even internationaly.</p>
					<div class="cta-btn"> Contact Us </div>
				</div>
			</div>	
		</div>
		<div class="clear"></div>
		
		<!--- Web Design --->
		<div id="web-design" class="web-design-service overlay">
			<div class="inner-web-design">
				<h1 class="design-title">Web Design</h1>
				<p>na lobortis ac. Praesent magna velit, volutpat sed varius sit amet, fermentum vitae odio. Mauris porttitor bibendum arcu, dictum pulvinar diam malesuada eu. Duis non tellus arcu, a consequat lacus. Aliquam suscipit nunc ut sem sollicitudin consectetur a id dolor. Suspendisse pretium dictum luctus. Cras dapibus ullamcorper facilisis. Sed turpis ante, interdum eget lacinia quis, tincidunt ut sapien. Fusce ornare molestie sodales. Cras semper ultrices mattis. Aliquam erat volutpat. Morbi mollis ultricies lobortis.
		Donec lobortis mi eu nulla faucibus id vehicula </p>
			</div>
		</div>
		
		<!--- Content Managment --->
		<div id="wordpress" class="wordpress-service">
			<div class="inner-wordpress">
				<div class="wordpress-text">
					<h1 class="design-title">Content Management</h1>
					<p>na lobortis ac. Praesent magna velit, volutpat sed varius sit amet, fermentum vitae odio. Mauris porttitor bibendum arcu, dictum pulvinar diam malesuada eu. Duis non tellus arcu, a consequat lacus. Aliquam suscipit nunc ut sem sollicitudin consectetur a id dolor. Suspendisse pretium dictum luctus. Cras dapibus ullamcorper facilisis. Sed turpis ante, interdum eget lacinia quis, tincidunt ut sapien. Fusce ornare molestie sodales. Cras semper ultrices mattis. Aliquam erat volutpat. Morbi mollis ultricies lobortis.
					Donec lobortis mi eu nulla faucibus id vehicula </p>
				</div>
				<img src="assets/background/cms.png" />		
			</div>
		</div>
		
		<!--- support --->
		
		
	
<?php include("Includes/footer.php"); ?>
<script>
	$(window).scroll(function(){
		var wScroll = $(this).scrollTop();
		console.log(wScroll);
		
		if (wScroll > $("#web-design").offset().top -50 ){
	    	$(".inner-web-design").fadeIn(1000);
		} 
		if (wScroll > $("#wordpress").offset().top -300 ){
	    	$(".wordpress-service img").animate({left: "50%"}, 1000);
	    	$(".wordpress-service .wordpress-text").fadeIn(1000);
		} 
	});	
</script>