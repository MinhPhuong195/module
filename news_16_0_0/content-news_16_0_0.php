<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_1_0_0';
	if($check == 0){
		$css_inline .= "
		<style>
			.news_1_0_0__newsAction__title::after,
			.news_1_0_0__newsQues__title::after,
			.news_1_0_0__newsClip__title::after {
				background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPcAAAACCAYAAACE00r5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozODhCMTI4MzA2OEUxMUVBOUMxMUNFNEY5QUNGQzMwRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozODhCMTI4NDA2OEUxMUVBOUMxMUNFNEY5QUNGQzMwRCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjM4OEIxMjgxMDY4RTExRUE5QzExQ0U0RjlBQ0ZDMzBEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjM4OEIxMjgyMDY4RTExRUE5QzExQ0U0RjlBQ0ZDMzBEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+U9WDtQAAAXNJREFUeNqMVctVAzEM1FBBiuBGC+GSemmBU9IFd66UMHjXv5EsE5y3z2tbGkuj0QY/t9e7mV3tGKQZYHWwLVFmtm2c+3V+NqZ/heZ4j3YTj/+541Ge98vn19h4+/g+XO7F5brAtLDR0uvr1M7yNcqvZFPnDiJhoi24S0v3rFJM+qPOs/pglKTev9CTYZxxNnwk9NoGI76bzXwhxwGv64JLQn/cgU3pxWbkbMqzQFJ4DHiwqbml3pbH0ms888LqbzFFxKo/1VSs5aJL5vHW3uHIV+uhPIhGHy8uKtd8GM1Y5+60b+zjnBKpNnPe2JE52I7Njl0eZN8HOMFhwiBw3RfMBZ015cyJBhGDkikmXqQdTHAZqXZ3TBw2nLSxNT/A2dHixymnFTv6Gz8jJgb+XNztXoSzEK/XUqgT1/IvfIgZtedPZXvOhw7hdRE14bgO9/WcoHoRboyWN7ZoY2lYTB+oLmGrfYjXaSzjBf7P4wjiV4ABADqD6X9eAS9MAAAAAElFTkSuQmCC);
			}
			
			.news_1_0_0__newsClip__item a::before {
				background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RkZGMzUwNDYyMkY3MTFFQUFENTJEN0QyNDdBNDAzREYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RkZGMzUwNDcyMkY3MTFFQUFENTJEN0QyNDdBNDAzREYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGRkYzNTA0NDIyRjcxMUVBQUQ1MkQ3RDI0N0E0MDNERiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGRkYzNTA0NTIyRjcxMUVBQUQ1MkQ3RDI0N0E0MDNERiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pne5S4cAABE3SURBVHjazFt7lF1l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);
			}
			
			.news_1_0_0 {
				padding: 40px 0;
				background: #E1EAF5;
			}
			
			.news_1_0_0__newsAction__title {
				position: relative;
				text-align: center;
			}
			
			.news_1_0_0__newsAction__title::after {
				content: '';
				position: absolute;
				width: 240px;
				height: 2px;
				left: 60px;
				bottom: -10px;
			}
			
			.news_1_0_0__newsAction__title h2 {
				margin: 0;
				text-transform: uppercase;
				color: #1D1E4F;
				font-size: 22px;
				font-weight: 600;
			}
			
			.news_1_0_0__newsAction__box {
				margin-top: 50px;
			}
			
			.news_1_0_0__newsAction__item {
				display: flex;
				flex-wrap: wrap;
				align-items: center;
			}
			
			.news_1_0_0__newsAction__pic {
				margin-right: 15px;
				width: 25%;
			}
			
			.news_1_0_0__newsAction__des {
				width: 70%;
			}
			
			.news_1_0_0__newsQues__title {
				position: relative;
				text-align: center;
			}
			
			.news_1_0_0__newsQues__title::after {
				content: '';
				position: absolute;
				width: 240px;
				height: 2px;
				left: 60px;
				bottom: -10px;
			}
			
			.news_1_0_0__newsQues__title h2 {
				margin: 0;
				text-transform: uppercase;
				color: #1D1E4F;
				font-size: 22px;
				font-weight: 600;
			}
			
			.news_1_0_0__newsQues__box {
				margin-top: 73px;
			}
			
			.news_1_0_0__newsQues__item {
				position: relative;
				padding-left: 25px;
				border-bottom: 1px solid #ccc;
				padding-bottom: 20px;
				margin-bottom: 30px;
			}
			
			.news_1_0_0__newsQues__item::before {
				content: '>>';
				display: block;
				position: absolute;
				left: 0;
				top: 3px;
				font-size: 12px;
				color: #2991CA;
			}
			
			.news_1_0_0__newsQues__item:last-child {
				border: none;
			}
			
			.news_1_0_0__newsQues__item a {
				color: #2991CA;
			}
			
			.news_1_0_0__newsClip__title {
				position: relative;
				text-align: center;
			}
			
			.news_1_0_0__newsClip__title::after {
				content: '';
				position: absolute;
				width: 240px;
				height: 2px;
				left: 60px;
				bottom: -10px;
			}
			
			.news_1_0_0__newsClip__title h2 {
				margin: 0;
				text-transform: uppercase;
				color: #1D1E4F;
				font-size: 22px;
				font-weight: 600;
			}
			
			.news_1_0_0__newsClip__box {
				margin-top: 50px;
				text-align: center;
				padding: 0 30px;
			}
			
			.news_1_0_0__newsClip__item {
				margin-bottom: 40px;
			}
			
			.news_1_0_0__newsClip__item a {
				position: relative;
			}
			
			.news_1_0_0__newsClip__item a::before {
				content: '';
				background-repeat: no-repeat;
				background-position: center;
				position: absolute;
				left: 0px;
				width: 100%;
				height: 100%;
				z-index: 1;
				background-size: 50px 50px;
			}
			
			.news_1_0_0__newsClip__item .modal-clip {
				background: #000;
				width: 100%;
				height: 100%;
				display: block;
			}
			
			.news_1_0_0__newsClip__item .modal-clip img {
				opacity: 0.6;
				width: 100%;
				height: 100%;
				display: block;
				transition: 0.3s;
			}
			
			.news_1_0_0__newsClip__item .modal-clip:hover img {
				opacity: 1;
				transition: 0.3s;
			}
			
			@media (max-width: 1024px) {
				.news_1_0_0__newsAction__title::after {
					left: 28px;
				}
				.news_1_0_0__newsAction__pic img {
					width: 100%;
				}
				.news_1_0_0__newsAction__des {
					width: 68%;
					font-size: 12px;
				}
				.news_1_0_0__newsQues__title::after {
					left: 28px;
				}
				.news_1_0_0__newsQues__item {
					font-size: 12px;
					padding-bottom: 15px;
					margin-bottom: 20px;
				}
				.news_1_0_0__newsClip__title::after {
					left: 28px;
				}
				.news_1_0_0__newsClip__item {
					margin-bottom: 20px;
				}
				.news_1_0_0__newsClip__item img {
					width: 100%;
				}
				.news_1_0_0__newsClip__item p {
					font-size: 12px;
				}
			}
			
			@media (max-width: 812px) {
				.news_1_0_0__newsAction {
					width: 50%;
				}
				.news_1_0_0__newsAction__title {
					text-align: left;
				}
				.news_1_0_0__newsAction__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsAction__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsQues {
					width: 50%;
				}
				.news_1_0_0__newsQues__title {
					text-align: left;
				}
				.news_1_0_0__newsQues__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsQues__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsQues__box {
					margin-top: 50px;
				}
				.news_1_0_0__newsClip__title {
					text-align: left;
				}
				.news_1_0_0__newsClip__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsClip__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsClip__box {
					display: block;
					justify-content: space-between;
					padding: 0;
				}
				.news_1_0_0__newsClip__item {
					margin-bottom: 20px;
				}
				.news_1_0_0__newsClip__item img {
					width: 100%;
				}
			}
			
			@media (max-width: 414px) {
				.news_1_0_0__newsAction {
					width: 100%;
				}
				.news_1_0_0__newsAction__title {
					text-align: center;
				}
				.news_1_0_0__newsAction__title::after {
					left: 100px;
				}
				.news_1_0_0__newsQues {
					width: 100%;
					margin-top: 30px;
				}
				.news_1_0_0__newsQues__title {
					text-align: center;
				}
				.news_1_0_0__newsQues__title::after {
					left: 90px;
					width: 210px;
				}
				.news_1_0_0__newsQues__box {
					margin-top: 50px;
				}
				.news_1_0_0__newsClip__title {
					text-align: center;
				}
				.news_1_0_0__newsClip__title::after {
					left: 100px;
				}
				.news_1_0_0__newsClip__box {
					display: block;
				}
				.news_1_0_0__newsClip__item {
					margin-bottom: 20px;
				}
				.news_1_0_0__newsClip__item p {
					padding-top: 10px;
				}
				.news_1_0_0__newsClip__item img {
					width: auto;
				}
			}
			
			@media (max-width: 375px) {
				.news_1_0_0__newsAction__title::after {
					left: 80px;
				}
				.news_1_0_0__newsQues__title::after {
					left: 70px;
				}
				.news_1_0_0__newsClip__title::after {
					left: 80px;
				}
			}
			
			@media (max-width: 360px) {
				.news_1_0_0__newsQues__title::after {
					left: 60px;
				}
				.news_1_0_0__newsClip__title::after {
					left: 70px;
				}
			}
			
			@media (max-width: 320px) {
				.news_1_0_0__newsAction__title::after {
					left: 45px;
				}
				.news_1_0_0__newsQues__title::after {
					left: 40px;
				}
				.news_1_0_0__newsClip__title::after {
					left: 45px;
				}
			}
		</style>
		";
	}
	
?>

<section class="news_1_0_0">
	<div class="container">
		<div class="row">
			<div class="col-md-4 news_1_0_0__newsAction">
				<div class="news_1_0_0__newsAction__title">
					<h2><?php echo $field['news_title1']; ?></h2>
				</div>
				<div class="news_1_0_0__newsAction__box">
					<?php
						foreach($field['content1'] as $key => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
								echo'
									<div class="news_1_0_0__newsAction__item">
										<div class="news_1_0_0__newsAction__pic">
											<a href="'.$link.'">
												<img src="/rs/?w=90&h=90&src='.$img.'" alt="'.$title.'">
											</a>
										</div>
										<div class="news_1_0_0__newsAction__des">
											<a href="'.$link.'">'.$title.'</a>
										</div>
									</div>
								';
						endforeach;
						wp_reset_postdata(); 
					?>
				</div>
			</div>
			<div class="col-md-4 news_1_0_0__newsQues">
				<div class="news_1_0_0__newsQues__title">
					<h2><?php echo $field['news_title2']; ?></h2>
				</div>
				<div class="news_1_0_0__newsQues__box">
					<?php
						foreach($field['content1'] as $key => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
								echo'
									<div class="news_1_0_0__newsQues__item">
										<a href="'.$link.'">
											'.$title.'
										</a>
									</div>
								';
						endforeach;
						wp_reset_postdata(); 
					?>
					
					
				</div>
			</div>
			<div class="col-md-4 news_1_0_0__newsClip">
				<div class="news_1_0_0__newsClip__title">
					<h2><?php echo $field['news_title3']; ?></h2>
				</div>
				<div class="news_1_0_0__newsClip__box">
					<?php
						$content = $field['news_clips'];
						foreach( $content as $image ):
							$linkID = getIDvideo($image['description']);
							echo '
								<div class="news_1_0_0__newsClip__item">
									<a href="#" class="modal-clip" data-video-id="'.$linkID.'">
										<img src="/rs/?w=263&amp;h=175&amp;src='.$image['url'].'" alt="'.$image['title'].'">
									</a>
									<p>'.$image['title'].'</p>
								</div>
							';
						endforeach;
					?>

					
					
				</div>
			</div>
		</div>
	</div>
</section>

