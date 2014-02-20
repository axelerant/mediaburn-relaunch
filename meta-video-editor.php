<?php
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes. 
 * Use the commented out code to update the database with your activation code. 
 * You may place this code inside an IF statement that only runs on theme activation.
 */

// update_option('acf_repeater_ac', "xxxx-xxxx-xxxx-xxxx");
// update_option('acf_options_ac', "xxxx-xxxx-xxxx-xxxx");


/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '4fba711c2713e',
		'title' => 'Video Meta – Admin',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_4efcd636d1c8b',
				'label' => 'Control Number',
				'name' => 'control_number',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '0',
				'required' => '1',
			),
			1 => 
			array (
				'key' => 'field_4efcdb2f379ea',
				'label' => 'General Note',
				'name' => 'general_note',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '1',
			),
			2 => 
			array (
				'key' => 'field_4efcdee53d3a7',
				'label' => 'Staff and Producer Comments',
				'name' => 'staff_comments',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '2',
			),
			3 => 
			array (
				'key' => 'field_4efcdb2f36d83',
				'label' => 'Additional Copies',
				'name' => 'additional_copies',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '3',
			),
			4 => 
			array (
				'key' => 'field_4efcd636d2170',
				'label' => 'Old Number',
				'name' => 'old_number',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '4',
			),
			5 => 
			array (
				'key' => 'field_4efcd636d2511',
				'label' => 'Alternative Titles',
				'name' => 'alternative_titles',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '5',
			),
			6 => 
			array (
				'key' => 'field_4efcd636d2df3',
				'label' => 'Titles on Reel',
				'name' => 'titles_on_reel',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '6',
			),
			7 => 
			array (
				'key' => 'field_4efcd636d3189',
				'label' => 'Main Credits',
				'name' => 'main_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '7',
			),
			8 => 
			array (
				'key' => 'field_4efcd636d3507',
				'label' => 'Additional Credits',
				'name' => 'additional_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '8',
			),
			9 => 
			array (
				'key' => 'field_4efe1e751b22c',
				'label' => 'Performers',
				'name' => 'performers',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '9',
			),
			10 => 
			array (
				'key' => 'field_4efcd636d45e2',
				'label' => 'Location of Production',
				'name' => 'location_of_production',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '10',
			),
			12 => 
			array (
				'key' => 'field_4efcd636d524f',
				'label' => 'Date Notation',
				'name' => 'date_notation',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '12',
			),
			13 => 
			array (
				'key' => 'field_4efcd6efbc58d',
				'label' => 'Generation',
				'name' => 'generation',
				'type' => 'select',
				'choices' => 
				array (
					1 => 'Camera Original',
					5 => 'Listening Copy',
					2 => 'Master',
					3 => 'Submaster',
					4 => 'Viewing Copy',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '13',
			),
			14 => 
			array (
				'key' => 'field_4efcd860d5aff',
				'label' => 'Running Time',
				'name' => 'running_time',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => 'in minutes',
				'order_no' => '14',
			),
			15 => 
			array (
				'key' => 'field_4f05fc0822cbb',
				'label' => 'Video Start Point',
				'name' => 'video_start_point',
				'type' => 'text',
				'default_value' => '0',
				'formatting' => 'none',
				'instructions' => 'What time point in seconds to start the video? If the color bars end at 0:30, then put 0:30 here.',
				'order_no' => '15',
			),
			16 => 
			array (
				'key' => 'field_4efcd860d6ad6',
				'label' => 'Number of Reels',
				'name' => 'number_of_reels',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '16',
			),
			17 => 
			array (
				'key' => 'field_4efcd860d70ed',
				'label' => 'Color',
				'name' => 'color',
				'type' => 'checkbox',
				'choices' => 
				array (
					2 => 'Black & White',
					1 => 'Color',
				),
				'instructions' => '',
				'order_no' => '17',
			),
			18 => 
			array (
				'key' => 'field_4efcd860d7e9f',
				'label' => 'Sound',
				'name' => 'sound',
				'type' => 'select',
				'choices' => 
				array (
					1 => 'Mono',
					3 => 'Silent',
					2 => 'Stereo',
					4 => 'Unknown',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '18',
			),
			19 => 
			array (
				'key' => 'field_4efcdb2f3757d',
				'label' => 'Condition',
				'name' => 'condition',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '19',
			),
			20 => 
			array (
				'key' => 'field_4efcdb2f37d7b',
				'label' => 'Acquisition Source',
				'name' => 'acquisition_source',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '20',
			),
			21 => 
			array (
				'key' => 'field_4efcdb2f382e4',
				'label' => 'Actions',
				'name' => 'actions',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '21',
			),
			22 => 
			array (
				'key' => 'field_4efcdb2f38b1e',
				'label' => 'Main Contributors',
				'name' => 'main_contributors',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '22',
			),
			23 => 
			array (
				'key' => 'field_4efcdb2f3918e',
				'label' => 'Corporate Names',
				'name' => 'corporate_names',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '23',
			),
			24 => 
			array (
				'key' => 'field_4efcdb2f3c563',
				'label' => 'Video Tape Format',
				'name' => 'video_tape_format',
				'type' => 'select',
				'choices' => 
				array (
					18 => '1 in.',
					21 => '1/2 in. reel-to-reel',
					17 => '2 in.',
					1 => 'Betacam',
					22 => 'Betacam SP',
					23 => 'Betacam SX',
					4 => 'Betamax',
					5 => 'D1',
					6 => 'D2',
					7 => 'D3',
					8 => 'D5',
					26 => 'D8',
					9 => 'DV',
					10 => 'DVCAM',
					11 => 'DVCPRO',
					27 => 'DVD',
					37 => 'DVD-R',
					33 => 'Digital Betacam',
					36 => 'Digital S',
					38 => 'Digital file',
					12 => 'Hi 8 mm',
					29 => 'Laserdisc',
					32 => 'Mini-DV',
					16 => 'S-VHS',
					28 => 'SVHSC',
					20 => 'U-matic',
					35 => 'U-matic SP',
					14 => 'VHS',
					15 => 'VHS-C',
					13 => 'Video 8',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '24',
			),
			25 => 
			array (
				'key' => 'field_4efcdb2f3ca7d',
				'label' => 'Film Format',
				'name' => 'film_format',
				'type' => 'select',
				'choices' => 
				array (
					2 => '16mm',
					1 => '35mm',
					4 => '8mm',
					3 => 'Super-8mm',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '25',
			),
			26 => 
			array (
				'key' => 'field_4efcdb2f3d2fa',
				'label' => 'Audio Format',
				'name' => 'audio_format',
				'type' => 'select',
				'choices' => 
				array (
					1 => '1/4 in. reel-to-reel',
					12 => '33 1/3 RPM Vinyl Record',
					13 => '78 RPM Vinyl Record',
					2 => 'Audio cassette',
					3 => 'CD',
					4 => 'CD-R',
					14 => 'DAT',
					5 => 'DVD-A',
					6 => 'Floppy Disk',
					7 => 'Hard Drive',
					8 => 'LP',
					9 => 'SACD',
					10 => 'Sound Disk',
					11 => 'Zip Disk',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '26',
			),
			27 => 
			array (
				'key' => 'field_4efcdb2f3e375',
				'label' => 'Not For Sale',
				'name' => 'not_for_sale',
				'type' => 'radio',
				'choices' => 
				array (
					0 => 'For sale',
					1 => 'Not for sale',
				),
				'default_value' => '0',
				'layout' => 'vertical',
				'instructions' => '',
				'order_no' => '27',
			),
			28 => 
			array (
				'key' => 'field_4efcdb2f3b87a',
				'label' => 'Document Assets',
				'name' => 'document_assets',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '28',
			),
			29 => 
			array (
				'key' => 'field_4efcdb2f3db4c',
				'label' => 'Related Items',
				'name' => 'related_items',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '29',
			),
			30 => 
			array (
				'key' => 'field_4efcdee53dce3',
				'label' => 'Staff Recommendations',
				'name' => 'staff_recommendations',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '30',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'video',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>