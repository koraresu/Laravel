<?php
	return [
		'full' => [
			'title' => 'Índice de Masa Corporal (IMC)',
			'subtitle' => 'Cirugía Bariátrica',
			'paragraph' => 'Conozca su Índice de Masa Corporal, ingrese su estatura en cms y peso en Kg.'
		],
		'clasificacion' => [
			'paragraph' => 'Antes de realizar cualquier cambio en su dieta o actividad física actual, le recomendamos siempre acudir con un especialista para una mejor valoración y tratamiento adecuado.',
			'title' => 'Clasificación de su <span>Índice de Masa Corporal (IMC)</span>',
			'class' => [
				'desorden' => [
					'range' => '18.5 A 20',
					'desc' => 'Desorden alimenticio'
				],
				'normal' => [
					'range' => '21 A 24.9',
					'desc' => 'Peso Normal'
				],
				'sobrepeso' => [
					'range' => '25 A 29.9',
					'desc' => 'Sobrepeso'
				],
				'obesidad_i' => [
					'range' => '30 A 34.9',
					'desc' => 'Obesidad Tipo I'
				],
				'obesidad_ii' => [
					'range' => '35 A 39.9',
					'desc' => 'Obesidad Tipo II'
				],
				'obesidad_iii' => [
					'range' => '+ DE 40',
					'desc' => 'Obesidad Tipo III *'
				],
				'super' => [
					'range' => '50 A 60',
					'desc' => 'Super obesidad'
				],
				'supersuper' => [
					'range' => '+ DE 60',
					'desc' => 'Super superobesidad'
				],
			],
			'pd' => '* La Obesidad Tipo III es tambien conocida como obesidad mórbida.'
		],

		'no_requiere_range'      => '20 - 25',
		'no_requiere_message'    => 'no requiere cirugía',

		'posible_range'          => '25.1 - 29.9',
		'posible_message'        => 'posible necesite cirugía',

		'necesita_one_range'     => '30 - 35',
		'necesita_one_message'   => 'necesita cirugía',
		
		'necesita_two_range'     => '35 - 40',
		'necesita_two_message'   => 'necesita cirugía',

		'necesita_three_range'   => '40 - 50',
		'necesita_three_message' => 'necesita cirugía',

		'super_range'            => '50 - 60',
		'super_message'          => 'necesita cirugía',

		'supersuper_range'       => '60+',
		'supersuper_message'     => 'necesita cirugía',
	];
?>