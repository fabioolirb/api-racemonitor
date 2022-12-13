<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Este campo deve ser aceito.',
    'active_url' => 'Este não é um URL válido.',
    'after' => 'Deve ser uma data após: data.',
    'after_or_equal' => 'Deve ser uma data posterior ou igual a: data.',
    'alpha' => 'Este campo só pode conter letras.',
    'alpha_dash' => 'Este campo só pode conter letras, números, travessões e sublinhados.',
    'alpha_num' => 'Este campo só pode conter letras e números.',
    'array' => 'Este campo deve ser um array.',
    'attached' => 'Este campo já está anexado.',
    'before' => 'Deve ser uma data anterior a: data.',
    'before_or_equal' => 'Deve ser uma data anterior ou igual a: data.',
    'between' => [
        'numeric' => 'Este valor deve estar entre: min e: max.',
        'arquivo' => 'Este arquivo deve estar entre: min e: max kilobytes.',
        'string' => 'Esta string deve ter entre: min e: max caracteres.',
        'array' => 'Este conteúdo deve ter entre: min e: max itens.',
    ],
    'boolean' => 'Este campo deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação não corresponde.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'Esta não é uma data válida.',
    'date_equals' => 'Deve ser uma data igual a: data.',
    'date_format' => 'Não corresponde ao formato: format.',
    'different' => 'Este valor deve ser diferente de: other.',
    'digits' => 'Deve ser: dígitos dígitos.',
    'digits_between' => 'Deve estar entre: min e: max dígitos.',
    'dimensions' => 'Esta imagem tem dimensões inválidas.',
    'distinct' => 'Este campo possui um valor duplicado.',
    'email' => 'Este deve ser um endereço de email válido.',
    'ends_with' => 'Deve terminar com um dos seguintes:: valores.',
    'exists' => 'O valor selecionado é inválido.',
    'file' => 'O conteúdo deve ser um arquivo.',
    'filled' => 'Este campo deve ter um valor.',
    'gt' => [
        'numeric' => 'O valor deve ser maior que: valor.',
        'arquivo' => 'O tamanho do arquivo deve ser maior que: valor kilobytes.',
        'string' => 'A string deve ser maior que: caracteres de valor.',
        'array' => 'O conteúdo deve ter mais de: itens de valor.',
    ],
    'gte' => [
        'numeric' => 'O valor deve ser maior ou igual a: valor.',
        'file' => 'O tamanho do arquivo deve ser maior ou igual: valor kilobytes.',
        'string' => 'A string deve ser maior ou igual: caracteres de valor.',
        'array' => 'O conteúdo deve ter: itens de valor ou mais.',
    ],
    'image' => 'Deve ser uma imagem.',
    'in' => 'O valor selecionado é inválido.',
    'in_array' => 'Este valor não existe em: outro.',
    'integer' => 'Deve ser um número inteiro.',
    'ip' => 'Este deve ser um endereço IP válido.',
    'ipv4' => 'Este deve ser um endereço IPv4 válido.',
    'ipv6' => 'Este deve ser um endereço IPv6 válido.',
    'json' => 'Deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O valor deve ser menor que: valor.',
        'file' => 'O tamanho do arquivo deve ser menor que: valor kilobytes.',
        'string' => 'A string deve ser menor que: caracteres de valor.',
        'array' => 'O conteúdo deve ter menos que: itens de valor.',
    ],
    'lte' => [
        'numeric' => 'O valor deve ser menor ou igual a: valor.',
        'file' => 'O tamanho do arquivo deve ser menor ou igual: valor kilobytes.',
        'string' => 'A string deve ser menor ou igual: caracteres de valor.',
        'array' => 'O conteúdo não deve ter mais do que: itens de valor.',
    ],
    'max' => [
        'numeric' => 'O valor não pode ser maior que: max.',
        'file' => 'O tamanho do arquivo não pode ser maior que: max kilobytes.',
        'string' => 'A string não pode ser maior que: caracteres máximos.',
        'array' => 'O conteúdo não pode ter mais do que: itens máximos.',
    ],
    'mimes' => 'Deve ser um arquivo do tipo:: valores.',
    'mimetypes' => 'Deve ser um arquivo do tipo:: valores.',
    'min' => [
        'numeric' => 'O valor deve ser pelo menos: min.',
        'file' => 'O tamanho do arquivo deve ser de pelo menos: min kilobytes.',
        'string' => 'A string deve ter pelo menos: caracteres mínimos.',
        'array' => 'O valor deve ter pelo menos: itens mínimos.',
    ],
    'multiple_of' => 'O valor deve ser um múltiplo de: valor',
    'not_in' => 'O valor selecionado é inválido.',
    'not_regex' => 'Este formato é inválido.',
    'numeric' => 'Deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'Este campo deve estar presente.',
    'regex' => 'Este formato é inválido.',
    'relatable' => 'Este campo não pode estar associado a este recurso.',
    'required' => 'Este campo é obrigatório.',
    'required_if' => 'Este campo é obrigatório quando: other for: value.',
    'required_unless' => 'Este campo é obrigatório, a menos que: other esteja em: values.',
    'required_with' => 'Este campo é obrigatório quando: valores estão presentes.',
    'required_with_all' => 'Este campo é obrigatório quando: valores estão presentes.',
    'required_without' => 'Este campo é obrigatório quando: os valores não estão presentes.',
    'required_without_all' => 'Este campo é obrigatório quando nenhum dos: valores estão presentes.',
    'prohibited' => 'Este campo é proibido.',
    'prohibited_if' => 'Este campo é proibido quando: outro é: valor.',
    'prohibited_unless' => 'Este campo é proibido a menos que: outro esteja em: valores.',
    'same' => 'O valor deste campo deve corresponder ao de: other.',
    'size' => [
        'numeric' => 'O valor deve ser: size.',
        'file' => 'O tamanho do arquivo deve ser: tamanho kilobytes.',
        'string' => 'A string deve ter: caracteres de tamanho.',
        'array' => 'O conteúdo deve conter: itens de tamanho.',
    ],
    'starts_with' => 'Deve começar com um dos seguintes:: values.',
    'string' => 'Deve ser uma string.',
    'timezone' => 'Este deve ser um fuso horário válido.',
    'unique' => 'Isso já foi feito.',
    'uploaded' => 'Falha ao enviar.',
    'url' => 'Este deve ser um URL válido.',
    'uuid' => 'Este deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensagem personalizada',
        ],
    ],

];
