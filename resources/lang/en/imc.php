<?php
	return [
		'full' => [
			'title' => 'Body Mass Index (BMI)',
			'subtitle' => 'Bariatric Surgery',
			'paragraph' => 'CKnow your Body Mass Index, enter your height in inches and weight in pounds.'
		],
		'clasificacion' => [
			'paragraph' => 'Before making any changes to your current diet or physical activity, we always recommend to see a specialist for a better assessment and appropriate treatment.',
			'title' => 'BMI <span>Classification</span>',
			'class' => [
				'desorden' => [
					'range' => '18.5 to 20',
					'desc' => 'Eating disorder'
				],
				'normal' => [
					'range' => '21 to 24.9',
					'desc' => 'Normal weight'
				],
				'sobrepeso' => [
					'range' => '25 to 29.9',
					'desc' => 'Overweight'
				],
				'obesidad_i' => [
					'range' => '30 to 34.9',
					'desc' => 'Obesity I'
				],
				'obesidad_ii' => [
					'range' => '35 to 39.9',
					'desc' => 'Obesity II'
				],
				'obesidad_iii' => [
					'range' => '+ than 40',
					'desc' => 'Obesity III *'
				],
				'super' => [
					'range' => '50 to 60',
					'desc' => 'Superobesity'
				],
				'supersuper' => [
					'range' => '+ than 60',
					'desc' => 'Super superobesity'
				],
			],
			'pd' => '* The Obesity III is also known as morbid obesity'
		],

		'no_requiere_range'      => '20 - 25: Normal weight',
		'no_requiere_message'    => 'does not require surgery',

		'posible_range'          => '25.1 - 29.9: Overweight',
		'posible_message'        => 'potentially needs surgery',

		'necesita_one_range'     => '30 - 35: Obesity grade I',
		'necesita_one_message'   => 'needs surgery.',
		
		'necesita_two_range'     => '35 - 40: Obesity grade II',
		'necesita_two_message'   => 'needs surgery.',

		'necesita_three_range'   => '40 - 50: Obesity grade III (morbid obesity)',
		'necesita_three_message' => 'needs surgery.',

		'super_range'            => '50 - 60: Super obesity',
		'super_message'          => 'needs surgery.',

		'supersuper_range'       => '60+: Super super obesity',
		'supersuper_message'     => 'needs surgery.',
	];
?>