<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Slider/slider_6_0_0';

	if($check == 0){
		echo '
			<style>
                .slider_6_0_0__text p, .slider_6_0_0__text h2 {
                    font-family: "Barlow Condensed", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                }
                
                a {
                    text-decoration: none;
                }
                
                .slider_6_0_0 {
                    padding-bottom: 0;
                }
                .slider_6_0_0 .owl-carousel {
                    position: relative;
                }
                .slider_6_0_0 .owl-carousel .owl-nav {
                    margin-top: -30px;
                }
                .slider_6_0_0 .owl-carousel .owl-nav .owl-prev {
                    position: absolute;
                    top: 44%;
                    left: 20px;
                    background: none;
                    font-size: 50px;
                }
                .slider_6_0_0 .owl-carousel .owl-nav .owl-next {
                    position: absolute;
                    top: 44%;
                    right: 20px;
                    background: none;
                    font-size: 50px;
                }
                .slider_6_0_0 .owl-carousel .owl-nav.disabled {
                    display: block;
                }
                .slider_6_0_0__bg {
                    position: relative;
                }
                .slider_6_0_0__bg img {
                    display: block;
                }
                .slider_6_0_0__main {
                    position: absolute;
                    top: 80px;
                    left: 22%;
                    width: 60%;
                    margin: 0 auto;
                    display: flex;
                    align-items: center;
                }
                .slider_6_0_0__text {
                    color: #fff;
                }
                .slider_6_0_0__text p {
                    margin: 0;
                    font-size: 24px;
                    text-transform: uppercase;
                }
                .slider_6_0_0__text h2 {
                    margin: 0;
                    text-transform: uppercase;
                    font-size: 40px;
                    margin-bottom: 10px;
                }
                .slider_6_0_0__text .regist {
                    margin-top: 40px;
                }
                .slider_6_0_0__text .registButton {
                    background: #EF810A;
                    color: #fff;
                    text-transform: uppercase;
                    padding: 15px 30px;
                    width: 70%;
                    text-align: center;
                }
                .slider_6_0_0__model img {
                    width: 100%;
                }
                
                @media (max-width: 1440px) {
                    .slider_6_0_0 .owl-theme .owl-nav {
                    margin-top: -25px;
                    }
                    .slider_6_0_0 .owl-theme .owl-nav .owl-prev {
                    top: 35%;
                    }
                    .slider_6_0_0 .owl-theme .owl-nav .owl-next {
                    top: 35%;
                    }
                    .slider_6_0_0:after {
                    bottom: 0;
                    }
                    .slider_6_0_0__main {
                    top: 50px;
                    }
                }
                @media (max-width: 1280px) {
                    .slider_6_0_0__text p {
                    font-size: 22px;
                    }
                    .slider_6_0_0__text h2 {
                    font-size: 35px;
                    }
                }
                @media (max-width: 1024px) {
                    .slider_6_0_0__text p {
                    font-size: 20px;
                    }
                    .slider_6_0_0__text h2 {
                    font-size: 30px;
                    }
                    .slider_6_0_0__text span {
                    font-size: 14px;
                    }
                    .slider_6_0_0__text .regist {
                    margin-top: 20px;
                    }
                    .slider_6_0_0__text .registButton {
                    font-size: 14px;
                    padding: 10px 20px;
                    width: 100%;
                    }
                }
                @media (max-width: 812px) {
                    .slider_6_0_0__main {
                    width: 70%;
                    top: 20px;
                    left: 16%;
                    }
                    .slider_6_0_0__text p {
                    font-size: 16px;
                    }
                    .slider_6_0_0__text h2 {
                    font-size: 25px;
                    }
                    .slider_6_0_0__text span {
                    font-size: 12px;
                    }
                    .slider_6_0_0__text .regist {
                    margin-top: 20px;
                    }
                    .slider_6_0_0__text .registButton {
                    font-size: 12px;
                    padding: 10px 20px;
                    }
                }
                @media (max-width: 414px) {
                    .slider_6_0_0 .owl-theme .owl-nav .owl-prev {
                    left: 0px;
                    }
                    .slider_6_0_0 .owl-theme .owl-nav .owl-next {
                    right: 0px;
                    }
                    .slider_6_0_0:after {
                    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZ4AAAAwCAYAAAAhHRwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY2QThDQUFGMzk2QjExRTk5QkNBRTdBMzg0RDVGQkE3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY2QThDQUIwMzk2QjExRTk5QkNBRTdBMzg0RDVGQkE3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjZBOENBQUQzOTZCMTFFOTlCQ0FFN0EzODRENUZCQTciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjZBOENBQUUzOTZCMTFFOTlCQ0FFN0EzODRENUZCQTciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6WJj1oAAAO6klEQVR42uyd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") center bottom no-repeat;
                    background-size: 100%;
                    }
                    .slider_6_0_0__text {
                    margin-bottom: 20px;
                    }
                    .slider_6_0_0__text h2 br {
                    display: none;
                    }
                    .slider_6_0_0__text .regist {
                    margin-top: 10px;
                    }
                }
                @media (max-width: 375px) {
                    .slider_6_0_0__text {
                    margin-bottom: 20px;
                    }
                    .slider_6_0_0__text h2 {
                    margin-bottom: 0;
                    }
                    .slider_6_0_0__text .registButton {
                    padding: 10px;
                    font-size: 12px;
                    }
                }
                @media (max-width: 320px) {
                    .slider_6_0_0__text {
                    margin-bottom: 10px;
                    }
                    .slider_6_0_0__text h2 {
                    font-size: 22px;
                    }
                    .slider_6_0_0__text .registButton {
                    padding: 5px;
                    font-size: 12px;
                    }
                    .slider_6_0_0__text span {
                    font-size: 11px;
                    }
                }
			</style>
        ';
		add_action('wp_footer', 'slider_6_0_0');
		function slider_6_0_0(){ 
			echo '
				<script>
                $(".slider_6_0_0 .owl-carousel").owlCarousel({loop:!0,margin:15,items:1,nav:!0,dots:!0,lazyLoad:!0,URLhashListener:!1,autoplayHoverPause:!0,startPosition:"1"});
				</script>
            ';           
        };
	}
	
?>

<div class="slider_6_0_0">
    <div class="owl-carousel owl-theme">

        <?php
            foreach($field['slider_info'] as $key => $value):
                $data = explode("\n",  $value["slider_detail"]);
                echo '
                    <a href="'.$data[4].'" class="slider_6_0_0__item">
                        <div class="slider_6_0_0__bg">
                            <picture>
                                <source media="(min-width:600px)" srcset="'.$data[5].'">
                                <img src="'.$data[6].'" alt="">
                            </picture>
                        </div>
                        <div class="slider_6_0_0__main row">
                            <div class="col-md-6">
                                <div class="slider_6_0_0__text">
                                    <p>'.$data[0].'</p>
                                    <h2>'.$data[1].'</h2>
                                    <span>'.$data[2].'</span>
                                    <div class="regist">
                                        <div class="registButton">'.$data[3].'</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="slider_6_0_0__model">
                                    <picture>
                                        <source media="(min-width:600px)" srcset="'.$data[2].'">
                                        <img src="'.$data[7].'" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </a>
                ';
            endforeach;
        ?> 
        
    </div>
</div>