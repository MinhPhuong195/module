<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_17_0_0'; 
    if($check == 0){
        $css_inline .= "
        <style>
          .header_17_0_0 {
            font-family: Arial;
          }

          a {
            text-decoration: none;
          }

          .header_17_0_0 {
            position: fixed;
            z-index: 9;
            width: 100%;
            top: 0;
            background: #fff;
            border-bottom: none;
          }
          .header_17_0_0_box ul li {
            list-style: none;
          }
          .header_17_0_0_box_1 {
            height: 48px;
            color: #878787;
            border-bottom: 1px solid #f0f1f0;
          }
          .header_17_0_0_box_1 .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
          }
          .header_17_0_0_box_1__logo {
            display: none;
          }
          .header_17_0_0_box_1__slogan {
            line-height: 44px;
            display: flex;
          }
          .header_17_0_0_box_1__Infor {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            height: 44px;
            font-size: 13px;
            line-height: 44px;
          }
          .header_17_0_0_box_1__Infor b {
            color: #1c8569;
          }
          .header_17_0_0_box_1__Infor i {
            font-size: 16px;
            color: #1c8569;
            width: 19px;
            height: 19px;
            vertical-align: middle;
            margin-right: 5px;
          }
          .header_17_0_0_box_1__date {
            padding-right: 20px;
          }
          .header_17_0_0_box_1__place {
            padding-right: 20px;
            position: relative;
          }
          .header_17_0_0_box_1__place:hover ul {
            display: block;
          }
          .header_17_0_0_box_1__place ul {
            margin: 0;
            list-style: none;
            position: absolute;
            left: -10px;
            width: 120px;
            top: 33px;
            line-height: 25px;
            border-radius: 0 0 4px 4px;
            padding: 5px 10px;
            background: #fff;
            z-index: 11;
            display: none;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
          }
          .header_17_0_0_box_1__place ul a {
            font-size: 12px;
            padding: 0;
            transition: 0.6s;
          }
          .header_17_0_0_box_1__place ul a b {
            color: #333;
            font-weight: normal;
          }
          .header_17_0_0_box_1__place ul a:hover b {
            color: #1c8569;
          }
          .header_17_0_0_box_1__place ul li {
            padding: 0;
          }
          .header_17_0_0_box_1__place i {
            background-position: 0 -23px;
            width: 14px;
          }
          .header_17_0_0_box_1__call i {
            background-position: 0 -48px;
          }
          .header_17_0_0_box_1 .iconMid {
            display: none;
          }
          .header_17_0_0_box_2 {
            padding: 20px 0;
          }
          .header_17_0_0_box_2 .container {
            display: flex;
            align-items: center;
          }
          .header_17_0_0_box_2__logo {
            position: absolute;
            top: -50px;
            left: 10px;
            width: 180px;
            height: 50px;
            display: block;
            margin: 25px 20px;
          }
          .header_17_0_0_box_2__logo img {
            margin: 20px 0 0;
          }
          .header_17_0_0_box_2__menu {
            margin: 0;
            display: inherit;
            padding: 0 50px 0px 250px;
            z-index: 9;
            float: right;
          }
          .header_17_0_0_box_2__menu a {
            font-size: 14px;
            padding: 35px 15px 30px;
            margin: 0;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
          }
          .header_17_0_0_box_2__menu .menu-icon {
            display: none;
          }
          .header_17_0_0_box_2__menu-hover .arr::before {
            display: none;
            position: absolute;
            bottom: 5px;
            left: 40px;
            text-align: center;
            color: #f16749;
          }
          .header_17_0_0_box_2__menu-hover:hover .arr::before {
            display: block;
          }
          .header_17_0_0_box_2__menu-hover:hover .header_17_0_0_box_2__menu-content {
            display: block;
          }
          .header_17_0_0_box_2__menu-hover:hover > a {
            color: #e3a261;
          }
          .header_17_0_0_box_2__menu-hover:hover.relative {
            position: relative;
          }
          .header_17_0_0_box_2__menu-hover:hover.relative .header_17_0_0_box_2__menu-content {
            top: 40px;
            right: 0;
            left: 0;
            width: 220px;
          }
          .header_17_0_0_box_2__menu-content {
            display: none;
            position: absolute;
            width: 80%;
            right: 0px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
            top: 50px;
            background: #fff;
            padding: 10px 20px;
            color: #000;
            border-radius: 8px;
          }
          .header_17_0_0_box_2__menu-content ul {
            list-style: none;
            padding: 0;
          }
          .header_17_0_0_box_2__menu-content ul li {
            border-bottom: 1px dotted #ccc;
            margin: 0;
            padding: 8px 0;
            font-size: 13px;
            position: relative;
          }
          .header_17_0_0_box_2__menu-content ul li:last-child {
            border-bottom: none;
          }
          .header_17_0_0_box_2__menu-content a {
            color: #000;
            transition: 0.1s;
            padding: 0;
            text-transform: none;
            font-weight: 400;
          }
          .header_17_0_0_box_2__menu-content a:hover {
            color: #DCAF47;
          }
          .header_17_0_0_box_2_3 {
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            content: '';
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
            animation: opac 0.4s;
          }
          .header_17_0_0_box_2_3.active {
            display: block;
          }
          .header_17_0_0 .regist {
            width: 158px;
            right: 0;
            top: -10px;
            text-transform: uppercase;
            background: #dcaf47;
            border-radius: 30px;
            text-align: center;
            font-size: 13px;
            padding: 10px 0;
            color: #fff;
            font-weight: 600;
          }
          .header_17_0_0 .regist:hover {
            background-color: #1c8569;
          }
          .header_17_0_0.menufix {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9;
            background: #fff;
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.2);
          }
          .header_17_0_0.menufix .header_17_0_0_box_1 {
            display: none;
          }
          .header_17_0_0.menufix .header_17_0_0_box_2 {
            background-color: #fff;
          }
          .header_17_0_0.menufix .header_17_0_0_box_2__menu__title {
            color: #000;
          }

          @media (max-width: 1024px) {
            .header_17_0_0 {
              background-color: #fff;
              height: 90px;
            }
            .header_17_0_0_box_1 {
              border-bottom: none;
            }
            .header_17_0_0_box_1 .container {
              justify-content: center;
              position: relative;
            }
            .header_17_0_0_box_1__logo {
              text-align: center;
              width: 100px;
              margin: 0 auto;
              position: relative;
              display: block;
            }
            .header_17_0_0_box_1__logo img {
              position: absolute;
              top: 10px;
              left: -40px;
              height: 70px;
            }
            .header_17_0_0_box_1__slogan {
              display: none;
            }
            .header_17_0_0_box_1__Infor {
              display: none;
            }
            .header_17_0_0_box_1 .iconMid {
              display: block;
            }
            .header_17_0_0_box_1 .siteHeaderNav {
              position: absolute;
              left: 0;
              color: #1D8371;
              font-size: 35px;
              top: 25px;
            }
            .header_17_0_0_box_1 .siteHeaderCall {
              background: #e43c3b url($path/images/call.png) no-repeat center;
              width: 40px;
              height: 40px;
              border-radius: 4px;
              position: absolute;
              right: 5px;
              top: 25px;
              z-index: 3;
            }
            .header_17_0_0_box_1 .siteHeaderCall img {
              width: 100%;
            }
            .header_17_0_0_box_2 {
              width: 270px;
              background: #fff;
              position: fixed;
              height: 100%;
              left: 0;
              top: 0;
              z-index: 3;
              overflow: auto;
              padding-bottom: 20px;
              display: none;
              padding-top: 50px;
            }
            .header_17_0_0_box_2.active {
              display: block;
              width: 270px;
              animation: animateleft 0.4s;
            }
            .header_17_0_0_box_2 .container {
              display: block;
              width: 270px;
              padding: 0px;
            }
            .header_17_0_0_box_2__logo {
              max-width: 90%;
              margin: 10px 20px;
              left: 0px;
            }
            .header_17_0_0_box_2__logo img {
              margin: 0;
            }
            .header_17_0_0_box_2__logo::after {
              display: none;
            }
            .header_17_0_0_box_2__menu {
              float: none;
              display: block;
              padding: 20px 0px;
            }
            .header_17_0_0_box_2__menu a {
              padding: 0 15px;
            }
            .header_17_0_0_box_2__menu-hover {
              padding: 10px 0 10px;
              position: relative;
            }
            .header_17_0_0_box_2__menu-hover:hover {
              position: relative;
            }
            .header_17_0_0_box_2__menu-hover:hover .header_17_0_0_box_2__menu-content {
              display: none;
            }
            .header_17_0_0_box_2__menu-hover:hover.relative {
              position: relative;
            }
            .header_17_0_0_box_2__menu-hover:hover.relative .header_17_0_0_box_2__menu-content {
              top: 10px;
              right: 0;
              left: 0;
              width: 100%;
            }
            .header_17_0_0_box_2__menu-hover:hover.relative .header_17_0_0_box_2__menu-content ul li {
              border-bottom: none;
              margin: 5px 0 5px 0;
            }
            .header_17_0_0_box_2__menu-hover:hover > a {
              color: #000;
            }
            .header_17_0_0_box_2__menu-hover .header_17_0_0_box_2__menu-content {
              top: 10px;
              box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
              padding: 7px 25px;
            }
            .header_17_0_0_box_2__menu-content {
              position: inherit;
              top: 0;
              right: 0;
              border-radius: 0;
              width: 100%;
              padding: 5px 0px;
            }
            .header_17_0_0_box_2__menu-content a {
              color: #000;
              background-color: #eee;
            }
            .header_17_0_0_box_2__menu-content .mntt {
              padding: 3px 10px;
              border-bottom: none;
              color: #fff;
            }
            .header_17_0_0_box_2__menu-content ul {
              padding: 0px;
              margin: -2px;
            }
            .header_17_0_0_box_2__menu-content ul li {
              border-bottom: none;
              background-color: #eeee;
              padding: 8px 0px;
              margin: 4px 0;
            }
            .header_17_0_0_box_2 .regist {
              margin-left: 40px;
              padding: 10px 20px;
            }
            .header_17_0_0_box_2 .menu-icon {
              display: block;
              position: absolute;
              right: 0;
              top: 0;
              padding: 10px;
              width: 100%;
              height: 100%;
              text-align: right;
            }
            .header_17_0_0_box_3 {
              background: rgba(0, 0, 0, 0.6);
              width: 100%;
              height: 100%;
              content: '';
              display: none;
              position: fixed;
              top: 0;
              left: 0;
              z-index: 2;
              animation: opac 0.4s;
            }
            .header_17_0_0_box_3.active {
              display: block;
            }
            .header_17_0_0.menufix .header_17_0_0_box_1 {
              display: block;
            }
            .header_17_0_0.menufix .header_17_0_0_box_2 {
              background-color: #fff;
            }
            .header_17_0_0.menufix .header_17_0_0_box_2__menu__title {
              color: #000;
            }
            .header_17_0_0 .hide-img {
              display: none;
            }
            .header_17_0_0 .hide-img img {
              width: 100%;
            }
            .header_17_0_0 .header_17_0_0_box_2__menu-hover {
              position: relative;
              border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .header_17_0_0 .menu-icon {
              display: block;
              position: absolute;
              right: 0px;
              top: 0px;
              color: #666;
              padding: 10px;
              text-align: right;
              width: 100%;
              height: 100%;
            }
            .header_17_0_0 .row > div {
              padding-left: 0;
              padding-right: 0;
            }
            .header_17_0_0 .row p {
              margin: 0;
            }
          }
          @media (max-width: 414px) {
            .header_17_0_0_box_1__logo img {
              top: 20px;
              left: -40px;
              height: 50px;
            }
            .header_17_0_0_box_1 .siteHeaderCall {
              right: 10px;
            }
            .header_17_0_0_box_1 .siteHeaderNav {
              left: 10px;
            }
          }
          @media (max-width: 320px) {
            .header_17_0_0 {
              height: 80px;
            }
          }

          /*# sourceMappingURL=style.css.map */

        </style>
        ";
        add_action('wp_footer', 'header_17_0_0');
        function header_17_0_0(){ 
            echo '
                <script>
                function layoutHandler(){window.innerWidth<1025&&$(".mn1,.mn2,.mn3,.mn4,.mn5,.mn6,.mn7,.mn8,.mn9").click((function(){$(this).parent().find(".header_17_0_0_box_2__menu-content").toggle()})),window.innerWidth<1025&&$(".LP .siteHeaderMain a").click((function(){$(".LP .siteHeaderMain").removeClass("active"),$(".siteHeader-bg").removeClass("active")}))}layoutHandler(),$(".header_17_0_0_box_2__menu-hover .menu-icon").click((function(){$(this).parent().find(".header_17_0_0_box_2__menu-content").toggle(),1==$(this).hasClass("icon-plus")?($(this).addClass("icon-minus"),$(this).removeClass("icon-plus")):($(this).removeClass("icon-minus"),$(this).addClass("icon-plus"))})),$(".siteHeaderNav").click((function(){$(".header_17_0_0_box_2").addClass("active"),$(".header_17_0_0_box_3").addClass("active")})),$(".header_17_0_0_box_3").click((function(){$(".header_17_0_0_box_2").removeClass("active"),$(".header_17_0_0_box_3").removeClass("active")}));
                </script>
            ';           
        };
    }
?>   
    <header class="header_17_0_0 ">
    <div class="header_17_0_0_box">
        <div class="header_17_0_0_box_1">
            <div class="container">
                <div class="header_17_0_0_box_1__logo">
                  <a href="/">
                    <img src="<?php echo $path ?>/images/logo.svg" alt="">
                  </a>
                </div>
                <div class="header_17_0_0_box_1__slogan">
                    CHU???I TH???M M??? VI???N L???N NH???T VI???T NAM
                </div>
                <div class="header_17_0_0_box_1__Infor">
                    <div class="header_17_0_0_box_1__date">
                        <i class=" icon-calendar"></i> <b> Th??? Hai - Ch??? Nh???t</b> 08h - 20h
                    </div>
                    <div class="header_17_0_0_box_1__place">
                        <a href="#"><i class=" icon-location-2"></i><b>H?? N???i</b></a>
                        <ul>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>H???i Ph??ng</b></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>Ngh??? An</b></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>???? N???ng</b></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>B??nh D????ng</b></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>TP.HCM</b></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-location-2"></i><b>C???n Th??</b></a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="header_17_0_0_box_1__call"><i></i><b>T???ng ????i</b> 1900.6499</a>
                </div>
                <div class="iconMid siteHeaderNav"><i class="icon-menu"></i></div>
                <a href="#" class="iconMid siteHeaderCall btnnkhotline"></a>
            </div>
        </div>
        <div class="header_17_0_0_box_2 menu ">
            <div class="container">
                <a href="/" class="header_17_0_0_box_2__logo">
                  <img src="<?php echo $path ?>/images/logo.png">
                </a>
                <ul class="header_17_0_0_box_2__menu">
                    <?php
                        foreach( $field as $key2 => $value):  
                            foreach( $value as $key3 => $list):
                                $main_tt = explode("\n",  $list["title"]);
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    echo '
                                        <li class="header_17_0_0_box_2__menu-hover">
                                            <a href="'.$main_tt[1].'" class="header_17_0_0_box_2__menu__title">
                                                '.$main_tt[0].'
                                            </a>  
                                        </li>
                                    ';
                                elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                    echo '
                                        <li class="header_17_0_0_box_2__menu-hover relative">
                                            <a href="'.$main_tt[1].'" class="arr">
                                                '.$main_tt[0].'
                                            </a>
                                            <i class="menu-icon icon-plus"></i>
                                            <div class="header_17_0_0_box_2__menu-content">
                                            <article class="row">
                                                <div class="col-xl-12">
                                                    
                                                        '.$list["col1"].'
                                                    
                                                </div>
                                            </article>
                                        </div>  
                                        </li>
                                    ';
                                elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                    $main_tt = explode("\n",  $list["title"]);
                                    echo '
                                        <li class="header_17_0_0_box_2__menu-hover">
                                            <a href="'.$main_tt[1].'" class="header_17_0_0_box_2__menu__title arr">'.$main_tt[0].'</a> 
                                                <i class="menu-icon icon-plus"></i>
                                                <div class="header_17_0_0_box_2__menu-content">
                                                    <div class="row">
                                    ';
                                    $so_cot = $main_tt[2];
                                    if ($so_cot == ''):
                                        $so_cot = '1';
                                    endif;
                                    
                                    $main_ct = explode("&nbsp;",  $list["col1"]);
                                    if($so_cot == '1'):
                                        $i = 12;
                                        for($j = 0; $j < 1; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.' ">
                                                  '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }                                   
                                    elseif($so_cot == '2'):
                                        $i = 6;
                                        for($j = 0; $j < 2; $j++){
                                            echo'
                                                <div class="  col-xl-'.$i.'">
                                                 '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }

                                    elseif($so_cot == '3'):
                                        $i = 4;
                                        for($j = 0; $j < 3; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                  '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == '4'):
                                        $i = 3;
                                        for($j = 0; $j < 4; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                  '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == 'auto'):
                                      echo'
                                          '.$list["col1"].'                                                
                                      ';
                                    endif;
                                    echo'
                                                </div>
                                            </div>
                                        </li>
                                    ';

                                endif;
                            endforeach;
                        endforeach;
                    ?>
                    
                </ul>
                <a href="" class="regist"> <i class=" icon-edit-alt"></i> ????ng k?? t?? v???n</a>
            </div>
        </div>
        <div class="header_17_0_0_box_3"></div>
    </div>
    </header>
</html>