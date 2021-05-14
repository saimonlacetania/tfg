<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validación del idioma
	|--------------------------------------------------------------------------
	|
        | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
        | La clase validadora. Algunas de estas reglas tienen múltiples versiones tales
        | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes aquí.
	|
	*/


	'accepted'              => 'El camp :attribute ha de ser acceptat.',
	'active_url'            => 'El camp :attribute no és una URL vàlida.',
	'after'                 => 'El camp :attribute ha de ser una data després de :date.',
	'after_or_equal'        => 'El camp :attribute ha de ser una data després de o igual a :date.',
	'alpha'                 => 'El camp :attribute només pot tenir lletres.',
	'alpha_dash'            => 'El camp :attribute només pot tenir lletres, números i guions.',
	'alpha_num'             => 'El camp :attribute només pot tenir lletres i números.',
	'array'                 => 'El camp :attribute ha de ser un array.',
	'before'                => 'El camp :attribute ha de ser una data abans de :date.',
	'before_or_equal'       => 'El camp :attribute ha de ser una data abans o igual a :date.',
	'between'               => [
		'numeric' => 'El camp :attribute ha d\'estar entre :min - :max.',
		'file'    => 'El camp :attribute ha d\'estar entre :min - :max kilobytes.',
		'string'  => 'El camp :attribute ha d\'estar entre :min - :max caràcters.',
		'array'   => 'El camp :attribute ha d\'estar entre :min i :max elements.',
	],
	'boolean'               => 'El camp :attribute ha de ser cert o fals.',
	'confirmed'             => 'El camp de confirmació de :attribute no coincideix.',
	'date'                  => 'El camp :attribute no és una data vàlida.',
	'date_format' 	        => 'El camp :attribute no correspon amb el format :format.',
	'different'             => 'Els camps :attribute i :other han de ser diferents.',
	'digits'                => 'El camp :attribute ha de ser de :digits dígits.',
	'digits_between'        => 'El camp :attribute ha de tenir entre :min i :max dígits.',
	'dimensions'            => 'El camp :attribute no té una dimensió vàlida.',
	'distinct'              => 'El camp :attribute té un valor duplicat.',
	'email'                 => 'El format de l\' :attribute és invàlid.',
	'exists'                => 'El camp :attribute seleccionat és invàlid.',
	'file'                  => 'El camp :attribute ha de ser un arxiu.',
	'filled'                => 'El camp :attribute és obligatori.',
	'gt'                    => [
		'numeric' => 'El camp :attribute ha de ser més gran que :value.',
		'file'    => 'El camp :attribute ha de ser més gran :value kilobytes.',
		'string'  => 'El camp :attribute ha de ser més gran :value caràcters.',
		'array'   => 'El camp :attribute pot tenir fins a :value elements.',
	],
	'gte'                   => [
		'numeric' => 'El camp :attribute ha de ser més gran o igual que :value.',
		'file'    => 'El camp :attribute ha de ser més gran o igual que :value kilobytes.',
		'string'  => 'El camp :attribute ha de ser més gran o igual que :value caràcters.',
		'array'   => 'El camp :attribute pot tener fins a :value elements o més.',
	],
	'image'                 => 'El camp :attribute ha de ser una imatge.',
	'in'                    => 'El camp :attribute seleccionat és invàlid.',
	'in_array'              => 'El camp :attribute no existeix a :other.',
	'integer'               => 'El camp :attribute ha de ser un integer.',
	'ip'                    => 'El camp :attribute ha de ser una direcció IP vàlida.',
	'ipv4'                  => 'El camp :attribute ha de ser una direcció IPv4 vàlida.',
	'ipv6'                  => 'El camp :attribute ha de ser una direcció IPv6 vàlida.',
	'json'                  => 'El camp :attribute ha de ser una cadena JSON vàlida.',
	'lt'                   => [
		'numeric' => 'El camp :attribute ha de ser menor que :max.',
		'file'    => 'El camp :attribute ha de ser menor que :max kilobytes.',
		'string'  => 'El camp :attribute ha de ser menor que :max caràcters.',
		'array'   => 'El camp :attribute pot tenir fins a :max elements.',
	],
	'lte'                   => [
		'numeric' => 'El camp :attribute ha de ser menor o igual que :max.',
		'file'    => 'El camp :attribute ha de ser menor o igual que :max kilobytes.',
		'string'  => 'El camp :attribute ha de ser menor o igual que :max caràcters.',
		'array'   => 'El camp :attribute pot tenir fins a :max elements.',
	],
	'max'                   => [
		'numeric' => 'El camp :attribute ha de ser menor que :max.',
		'file'    => 'El camp :attribute ha de ser menor que :max kilobytes.',
		'string'  => 'El camp :attribute ha de ser menor que :max caràcters.',
		'array'   => 'El camp :attribute pot tenir fins a :max elements.',
	],
	'mimes'                 => 'El camp :attribute ha de ser un arxiu de tipus: :values.',
	'mimetypes'             => 'El camp :attribute ha de ser un arxiu de tipus: :values.',
	'min'                   => [
		'numeric' => 'El camp :attribute ha de tenir al menys :min.',
		'file'    => 'El camp :attribute ha de tenir al menys :min kilobytes.',
		'string'  => 'El camp :attribute ha de tenir al menys :min caràcters.',
		'array'   => 'El camp :attribute ha de tenir al menys :min elements.',
	],
	'not_in'                => 'El camp :attribute seleccionat és invàlid.',
	'not_regex'             => 'El format del camp :attribute és invàlid.',
	'numeric'               => 'El camp :attribute ha de ser un número.',
	'present'               => 'El camp :attribute ha d\'estar present.',
	'regex'                 => 'El format del camp :attribute és invàlid.',
	'required'              => 'El camp :attribute és obligatori.',
	'required_if'           => 'El camp :attribute és obligatori quan el camp :other és :value.',
	'required_unless'       => 'El camp :attribute és obligatori a menys que :other estigui present en :values.',
	'required_with'         => 'El camp :attribute és obligatori quan :values està present.',
	'required_with_all'     => 'El camp :attribute és obligatori quan :values està present.',
	'required_without'      => 'El camp :attribute és obligatori quan :values no està present.',
	'required_without_all'  => 'El camp :attribute és obligatori quan ningún :values està present.',
	'same'                  => 'El camp :attribute i :other han de coincidir.',
	'size'                  => [
		'numeric' => 'El camp :attribute ha de ser :size.',
		'file'    => 'El camp :attribute ha de tenir :size kilobytes.',
		'string'  => 'El camp :attribute ha de tenir :size caràcters.',
		'array'   => 'El camp :attribute ha de contener :size elements.',
	],
	'starts_with'           => 'El :attribute ha de començar amb un dels següents valors :values',
	'string'                => 'El camp :attribute ha de ser una cadena.',
	'timezone'              => 'El camp :attribute ha de ser una zona horaria vàlida.',
	'unique'                => 'El camp :attribute ja està sent utilitzat.',
	'uploaded'              => 'El camp :attribute no pot ser carregat.',	
	'url'                   => 'El format de :attribute és invàlid.',
	'uuid'                  => 'El :attribute ha de ser un UUID vàlid.',
	
	/*
	|--------------------------------------------------------------------------
	| Validación del idioma personalizado
	|--------------------------------------------------------------------------
	|
	|	Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
	| convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
	| especifique una línea de idioma personalizada específica para una regla de atributo dada.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name'  => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Atributos de validación personalizados
	|--------------------------------------------------------------------------
	|
        | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributo.
        | con algo más fácil de leer, como la dirección de correo electrónico.
        | de "email". Esto simplemente nos ayuda a hacer los mensajes un poco más limpios.
	|
	*/

	'attributes' => [],
	
];