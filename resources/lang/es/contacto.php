<?php
	return [
		'title' => 'Contáctenos',
		'subtitle' => '',
		'direccion' => '<p>Av. Los Tules 160 int. 9, Col. Díaz Ordaz, Puerto Vallarta, Jalisco</p>',
		'paragraph' => 'Envíenos un mensaje a través del siguiente formulario. Los campos marcados con * son obligatorios',
		'name' => 'Nombre(s)',
		'lastname' => 'Apellido(s)',
		'email' => 'E-mail',
		'information' => 'Requiero información sobre',
		'message' => 'Mensaje',
		'send' => 'ENVIAR',
		'privacy' => 'Aviso de Privacidad',
		'error' => [
			'firstname'    => [
				'required' => 'El nombre es requerido',
			],
            'lastname'     => [
				'required' => 'El apellido es requerido',
			],
            'email'        => [
				'required' => 'El correo electronico es requerido',
			],
            'information'  => [
				'required' => 'Es requerido que selecciones información',
			],
            'message'      => [
				'required' => 'Es requerido el mensaje.'
			],
			'recaptcha'    => [
				'required' => 'Es necesario.'
			],
		]
	];
?>