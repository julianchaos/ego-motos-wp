<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_slider-com-dois-links',
		'title' => 'Slider com dois links',
		'fields' => array (
			array (
				'key' => 'field_56cb62136e123',
				'label' => 'Imagem com dois links',
				'name' => 'imagem_com_dois_links',
				'type' => 'true_false',
				'message' => 'O banner possui dois links?',
				'default_value' => 0,
			),
			array (
				'key' => 'field_56cb62366e124',
				'label' => 'Link',
				'name' => 'link_2',
				'type' => 'text',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56cb62136e123',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56cb628c6e125',
				'label' => 'Imagem Mobile',
				'name' => 'imagem_mobile_2',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56cb62136e123',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_56cb62956e126',
				'label' => 'Imagem Desktop',
				'name' => 'imagem_desktop_2',
				'type' => 'image',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56cb62136e123',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'home-slider',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
