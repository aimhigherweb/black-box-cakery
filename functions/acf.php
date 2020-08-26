<?php

if( function_exists('acf_add_local_field_group') ):
	
	// FAQs
	acf_add_local_field_group(array(
		'key' => 'group_5cb69311298f5',
		'title' => 'FAQ',
		'fields' => array(
			array(
				'key' => 'field_5cb69319231cf',
				'label' => 'FAQs',
				'name' => 'faqs',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Add FAQ',
				'sub_fields' => array(
					array(
						'key' => 'field_5cb69326231d0',
						'label' => 'Question',
						'name' => 'question',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5cb69335231d1',
						'label' => 'Answer',
						'name' => 'answer',
						'type' => 'textarea',
						'instructions' => '',
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
						'rows' => '',
						'new_lines' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '17',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	// Social Menu Icons
	acf_add_local_field_group(array(
		'key' => 'group_5c9ad2a1d1415',
		'title' => 'Menu Icons',
		'fields' => array(
			array(
				'key' => 'field_5c9ad2cb3f1f4',
				'label' => 'Social Icon',
				'name' => 'icon',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'nav_menu_item',
					'operator' => '==',
					'value' => '3',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
endif;

?>