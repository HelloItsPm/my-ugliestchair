<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_668696aab92b3',
	'title' => 'Accueil',
	'fields' => array(
		array(
			'key' => 'field_668696ab91185',
			'label' => 'Titre du header',
			'name' => 'home__header_title',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668698241bc64',
			'label' => 'Sous-titre du header',
			'name' => 'home__header_subtitle',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668698641bc65',
			'label' => 'Image de fond header',
			'name' => 'home__header_wallpaper',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'uploadedTo',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
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
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_66911afea7d05',
	'title' => 'Article - Base',
	'fields' => array(
		array(
			'key' => 'field_66911b7049808',
			'label' => 'Image vignette (Thumbnail)',
			'name' => 'article__image_thumbnail',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_66911b9649809',
			'label' => 'Image principale article',
			'name' => 'article__image_main',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_66911aff7187d',
			'label' => 'Résumé de l\'article',
			'name' => 'article__summary',
			'aria-label' => '',
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
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_669101a0a86bb',
	'title' => 'Article - Répéteur',
	'fields' => array(
		array(
			'key' => 'field_669101a1a4341',
			'label' => 'Répéteur de Contenu Complexe',
			'name' => 'article__repeater',
			'aria-label' => '',
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
				'layout_6691049a2bf48' => array(
					'key' => 'layout_6691049a2bf48',
					'name' => 'article__repeater_solo_text',
					'label' => 'Texte seul',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_669104a12bf4a',
							'label' => 'Texte repeteur seul',
							'name' => 'article__repeater_solo_text_custom',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_66910277a4344' => array(
					'key' => 'layout_66910277a4344',
					'name' => 'article__repeater_solo_img',
					'label' => 'Image seule',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_66910387a434c',
							'label' => 'Image repeteur seule',
							'name' => 'article__repeater_solo_img_custom',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_669102239f534' => array(
					'key' => 'layout_669102239f534',
					'name' => 'article__repeater_left_img_right_text',
					'label' => 'Image à gauche et Texte à droite',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_669102b0a4348',
							'label' => 'Image repeteur gauche',
							'name' => 'article__repeater_left_img_custom',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
						array(
							'key' => 'field_669102f8a4349',
							'label' => 'Texte repeteur droite',
							'name' => 'article__repeater_right_text_custom',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6691027aa4346' => array(
					'key' => 'layout_6691027aa4346',
					'name' => 'article__repeater_right_img_left_text',
					'label' => 'Image à droite et Texte à gauche',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_66910322a434a',
							'label' => 'Texte repeteur gauche',
							'name' => 'article__repeater_left_text_custom',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_66910341a434b',
							'label' => 'Image repeteur droite',
							'name' => 'article__repeater_right_img_custom',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_66990b3094c94' => array(
					'key' => 'layout_66990b3094c94',
					'name' => 'article__repeater_up_img_down_text',
					'label' => 'Image en haut et texte en bas',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_66990b7294c96',
							'label' => 'Image repeteur haut',
							'name' => 'article__repeater_up_img_custom',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
						array(
							'key' => 'field_66990b9294c97',
							'label' => 'Texte repeteur bas',
							'name' => 'article__repeater_down_text_custom',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_66990c1894c98' => array(
					'key' => 'layout_66990c1894c98',
					'name' => 'article__repeater_up_text_down_img',
					'label' => 'Texte en haut et image en bas ',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_66990c1894c9a',
							'label' => 'Texte repeteur haut',
							'name' => 'article__repeater_up_text_custom',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_66990c1894c99',
							'label' => 'Image repeteur bas',
							'name' => 'article__repeater_down_img_custom',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_66990d5f94c9b' => array(
					'key' => 'layout_66990d5f94c9b',
					'name' => 'article__repeater_text_img_team',
					'label' => 'Ensemble Texte et Image (Max 3)',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_66990de194ca0',
							'label' => 'Image repeteur ensemble 1',
							'name' => 'article__repeater_img_team_custom1',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
						array(
							'key' => 'field_66990dd894c9d',
							'label' => 'Texte repeteur ensemble 1',
							'name' => 'article__repeater_text_team_custom1',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_66990de994ca1',
							'label' => 'Image repeteur ensemble 2',
							'name' => 'article__repeater_img_team_custom2',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
						array(
							'key' => 'field_66990ddc94c9e',
							'label' => 'Texte repeteur ensemble 2',
							'name' => 'article__repeater_text_team_custom2',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_66990deb94ca2',
							'label' => 'Image repeteur ensemble 3',
							'name' => 'article__repeater_img_team_custom3',
							'aria-label' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'preview_size' => 'medium',
						),
						array(
							'key' => 'field_66990dde94c9f',
							'label' => 'Texte repeteur ensemble 3',
							'name' => 'article__repeater_text_team_custom3',
							'aria-label' => '',
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
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_66910274a4342' => array(
					'key' => 'layout_66910274a4342',
					'name' => 'article__repeater_gallery_img',
					'label' => 'Galerie d\'images',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_669103fba434d',
							'label' => 'Galerie d\'images',
							'name' => 'article__repeater_gallery_img_custom',
							'aria-label' => '',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min' => '',
							'max' => 12,
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
							'insert' => 'append',
							'preview_size' => 'medium',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Ajouter un élément',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_668fa93ec48b0',
	'title' => 'Infos contact',
	'fields' => array(
		array(
			'key' => 'field_668fa93f7baea',
			'label' => 'Numéro de téléphone',
			'name' => 'home__footer_phone',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668faed4dd81a',
			'label' => 'Adresse',
			'name' => 'home__footer_address',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fc92be0f1c',
			'label' => 'Complément d\'adresse',
			'name' => 'home__footer_addressplus',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fc994e0f1d',
			'label' => 'Code postale',
			'name' => 'home__footer_postcode',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fc9d6e0f1e',
			'label' => 'Ville',
			'name' => 'home__footer_town',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_668fa97e7baec',
			'label' => 'Adresse mail',
			'name' => 'home__footer_mail',
			'aria-label' => '',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'contact-info',
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
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_6687e19c9e382',
	'title' => 'Logo',
	'fields' => array(
		array(
			'key' => 'field_6687e19caf432',
			'label' => 'Logo',
			'name' => 'home_logo',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
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
	'show_in_rest' => 0,
) );
} );

add_action( 'acf/init', function() {
	acf_add_options_page( array(
	'page_title' => 'Informations de contact',
	'menu_slug' => 'contact-info',
	'menu_title' => 'Informations de contact',
	'position' => '',
	'redirect' => false,
	'menu_icon' => array(
		'type' => 'dashicons',
		'value' => 'dashicons-welcome-write-blog',
	),
	'icon_url' => 'dashicons-welcome-write-blog',
) );
} );
