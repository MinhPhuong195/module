<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/info_10_0_0';
	$data_title = explode("\n",  $field["about_title"]);
	$data_video = explode("\n",  $field["ytb"]);
	$id_video = getIDvideo($data_video[0]);

	if($check == 0){
		echo "
			<style>
				.info_10_0_0.loaded {
					background-position: center 0;
					background-repeat: no-repeat;
					padding: 30px 0;
					}
					.info_10_0_0__content__title {
					font-size: 24px;
					text-align: center;
					padding: 0;
					margin: 0 0 20px;
					color: #222222;
					}
					.info_10_0_0__content__line {
					width: 258px;
					border-top: 1px solid #d8d8d8;
					margin: 0 auto;
					height: 35px;
					position: relative;
					}
					.info_10_0_0__content__line::before {
					width: 160px;
					margin: 0 auto;
					border-top: 3px solid #00597e;
					position: absolute;
					left: 50px;
					top: -2px;
					content: "";
					}
					.info_10_0_0__content__des {
					width: 70%;
					margin: 0 auto;
					text-align: justify;
					}

					@media (max-width: 1024px) {
					.info_10_0_0__content__des {
						width: 80%;
					}
					}
					@media (max-width: 812px) {
					.info_10_0_0__content__title {
						font-size: 17px;
					}
					}
					@media (max-width: 414px) {
					.info_10_0_0__content__des {
						width: 100%;
					}
					}
					@media (max-width: 375px) {
					.about_4_0_0__content__title {
						font-size: 18px;
					}
					}

					/*# sourceMappingURL=info_10_0_0.css.map */

			</style>
		";
	}
?>

<section class="info_10_0_0">
	<div class="container">
		<h1 class="info_10_0_0__content__title">
			<?php echo $data_title[0]; ?>
		</h1>
		<div class="info_10_0_0__content__line"></div>
		<div class="info_10_0_0__content__des">
		<?php echo $field['about_des']; ?>
		</div>
    </div>
</section>



