<?php include('header.php'); ?>
<style>
    /* Removes the default 20px margin and creates some padding space for the indicators and controls */
.carousel {
    margin-bottom: 0;
	padding: 0 40px 30px 40px;
}
/* Reposition the controls slightly */
.carousel-control {
	left: -12px;
}
.carousel-control.right {
	right: -12px;
}
/* Changes the position of the indicators */
.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: 0px;
	margin-right: -19px;
}
/* Changes the colour of the indicators */
.carousel-indicators li {
	background: #c0c0c0;
}
.carousel-indicators .active {
background: #333333;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4"> 
                <div id="myCarousel" class="carousel slide" data-ride="" data-interval="5000">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                        <div class="col-xs-12">
                            <a href="#x"><img src="assets/images/tungnath.jpg" alt="Image" style="max-width: 100%;"></a>
                        </div>
                        <div class="col-xs-12" style="height: 178px; max-height: 178px;">
                            <h3>Title</h3>
                            <p>Info goes here...</p>
                        </div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row">
                    	<div class="col-xs-12">
                		    <a href="#x"><img src="assets/images/tungnath.jpg" alt="Image" style="max-width: 100%;"></a>
                    	</div>
                        <div class="col-xs-12" style="height: 178px; max-height: 178px;">
                            <h3>Title II</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam justo massa, laoreet eu ultricies eget, tincidunt dictum dui. Sed ut ipsum turpis. Aliquam ullamcorper diam a purus auctor, id efficitur leo convallis. Nam commodo sit amet odio at volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam nec dictum est, quis maximus elit. Aliquam lobortis sapien sed mattis ultricies. Vivamus non neque in orci porta varius sed vel metus.</p>
                        </div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row">
                    	<div class="col-xs-12">
                		    <a href="#x"><img src="assets/images/tungnath.jpg" alt="Image" style="max-width: 100%;"></a>
                    	</div>
                        <div class="col-xs-12" style="height: 178px; max-height: 178px;">
                                <h3>Title III</h3>
                                <p>Info goes here...</p>
                        </div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class='glyphicon glyphicon-chevron-right'></span>
                </a>
                </div><!--/myCarousel-->  
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="text/javascript"></script>
</body>
</html>