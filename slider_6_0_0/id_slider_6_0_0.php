<?php

/*SLIDER 2.0.0*/
'id_slider_6_0_0' => array(
    'key' => 'id_slider_6_0_0',
    'name' => 'slider_6_0_0',
    'label' => 'Slider 2.0.0',
    'display' => 'block',
    'sub_fields' => array(
        /*Bắt đầu field*/
        array(
            /* Tab tiêu đề*/
            'key' => 'id_slider_6_0_0_tab1',
            'label' => 'Slider',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_slider_6_0_0_tab1_sub1',
            'label' => 'Thông tin Slider',
            'name' => 'slider_info',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layouts' => array(
                'layout_homeTitle' => array(
                    'key' => 'id_slider_6_0_0_tab1_sub1_layout1',
                    'name' => 'slider_info_box',
                    'label' => 'Thông tin Slider',
                    'display' => 'block',
                    'sub_fields' => array(
                        // Bat dau Field
                        array(
                            'key' => 'id_slider_6_0_0_tab1_sub1_layout1_box1',
                            'label' => 'Chi tiết',
                            'name' => 'slider_detail',
                            'type' => 'textarea',
                            'instructions' => '
                                Dòng 1 : Tiêu đề 1 ( VD: Chuỗi hệ thống thẩm mỹ ) <br>
                                Dòng 2 : Tiêu đề 2 ( VD: Nơi khởi nguồn <br> sắc đẹp. Lưu ý : thêm " <br> " để xuống dòng ) <br>
                                Dòng 3 : Mô tả <br>
                                Dòng 4 : Tiêu đề nút <br>
                                Dòng 5 : Link xem chi tiết <br>
                                Dòng 6 : Link ảnh nền PC ( Size 1920x686 ) <br>
                                Dòng 7 : Link ảnh nền Mobile ( Size 414x480 ) <br>
                                Dòng 8 : Link ảnh mẫu ( Size 605x605 )
                            ',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 9,
                            'new_lines' => '',
                        ),

                        // End Field Base                       
                    ),
                    'min' => '',
                    'max' => '',
                ),
            ),
            'button_label' => 'Thêm Slider',
            'min' => '',
            'max' => '',
        ),

        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END SLIDER 2.0.0*/

?>