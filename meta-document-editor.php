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
		'id' => '4fba711c2717b',
		'title' => 'Document Meta – Admin',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_4f0b1aaadf0bc',
				'label' => 'Collection Name',
				'name' => 'collection_name',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '0',
			),
			1 => 
			array (
				'key' => 'field_4f0b1aaadf83d',
				'label' => 'Control Number',
				'name' => 'control_number',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '1',
				'required' => '1',
			),
			2 => 
			array (
				'key' => 'field_4f0b1aaae001a',
				'label' => 'Location',
				'name' => 'location',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '2',
			),
			3 => 
			array (
				'key' => 'field_4f0b1b2caca0c',
				'label' => 'General Note',
				'name' => 'general_note',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '3',
			),
			4 => 
			array (
				'key' => 'field_4f10ba3f6f8b7',
				'label' => 'Staff Comments',
				'name' => 'staff_comments',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '4',
			),
			5 => 
			array (
				'key' => 'field_4f10ba3fab970',
				'label' => 'Additional Copies',
				'name' => 'additional_copies',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '5',
			),
			6 => 
			array (
				'key' => 'field_4f10ba3fc3098',
				'label' => 'Alternative Titles',
				'name' => 'alternative_titles',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '6',
			),
			7 => 
			array (
				'key' => 'field_4f10ba3fc3c26',
				'label' => 'Title List',
				'name' => 'title_list',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '7',
			),
			8 => 
			array (
				'key' => 'field_4f10ba3fc6ac3',
				'label' => 'Main Credits',
				'name' => 'main_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '8',
			),
			9 => 
			array (
				'key' => 'field_4f10ba3fd2a8c',
				'label' => 'Additional Credits',
				'name' => 'additional_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '9',
			),
			10 => 
			array (
				'key' => 'field_4f10ba3fd3642',
				'label' => 'Location of Production',
				'name' => 'location_of_production',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '10',
			),
			12 => 
			array (
				'key' => 'field_4f10ba3fd49c9',
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
				'key' => 'field_4f10ba3fd558d',
				'label' => 'Generation',
				'name' => 'generation',
				'type' => 'select',
				'choices' => 
				array (
					1 => 'original',
					2 => 'photocopy',
					3 => 'enlargement',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '13',
			),
			14 => 
			array (
				'key' => 'field_4f10ba3fd60cd',
				'label' => 'Size',
				'name' => 'size',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '14',
			),
			15 => 
			array (
				'key' => 'field_4f0b1aaae07ea',
				'label' => 'Number Of Pages',
				'name' => 'number_of_pages',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'none',
				'instructions' => '',
				'order_no' => '15',
			),
			16 => 
			array (
				'key' => 'field_4f10ba3fd7864',
				'label' => 'Color',
				'name' => 'color',
				'type' => 'checkbox',
				'choices' => 
				array (
					1 => 'Color',
					2 => 'Black & White',
					3 => 'Grey scale',
				),
				'instructions' => '',
				'order_no' => '16',
			),
			17 => 
			array (
				'key' => 'field_4f10ba3fd8422',
				'label' => 'Condition',
				'name' => 'condition',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '17',
			),
			18 => 
			array (
				'key' => 'field_4f10ba3fd8fd3',
				'label' => 'Acquisition Source',
				'name' => 'acquisition_source',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '18',
			),
			19 => 
			array (
				'key' => 'field_4f0b1b2cad5c9',
				'label' => 'Actions',
				'name' => 'actions',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '19',
			),
			20 => 
			array (
				'key' => 'field_4f10ba3fda742',
				'label' => 'Main Contributors',
				'name' => 'main_contributors',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '20',
			),
			21 => 
			array (
				'key' => 'field_4f10ba3fdb30e',
				'label' => 'Corporate Names',
				'name' => 'corporate_names',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '21',
			),
			22 => 
			array (
				'key' => 'field_4f0b1aaae0fc7',
				'label' => 'Document Type',
				'name' => 'document_type',
				'type' => 'select',
				'choices' => 
				array (
					2 => 'Artwork',
					11 => 'Cartoon',
					4 => 'Correspondence',
					5 => 'Financial',
					12 => 'Magazine Article',
					14 => 'Memo',
					8 => 'Newsletter',
					13 => 'Newspaper Article',
					6 => 'Notes',
					7 => 'Other',
					1 => 'Photograph',
					3 => 'Press',
					9 => 'Program',
					10 => 'Proposal',
				),
				'default_value' => '',
				'allow_null' => '1',
				'multiple' => '0',
				'instructions' => '',
				'order_no' => '22',
			),
			23 => 
			array (
				'key' => 'field_4f10ba3fdca78',
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
				'order_no' => '23',
			),
			24 => 
			array (
				'key' => 'field_4f10ba3fdbec5',
				'label' => 'Related Items',
				'name' => 'related_items',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '24',
			),
			25 => 
			array (
				'key' => 'field_4f10ba3fdd24e',
				'label' => 'Staff Recommendations',
				'name' => 'staff_recommendations',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'html',
				'instructions' => '',
				'order_no' => '25',
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
					'value' => 'document',
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