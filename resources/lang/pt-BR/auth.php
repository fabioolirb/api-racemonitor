<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'falhou' => 'Estas credenciais não correspondem aos nossos registros.',
    'senha' => 'A senha fornecida está incorreta.',
    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em: segundos segundos. ',
    'login' => [
        'title' => 'Efetue seu Loguin',
        'field' => [
            'email' => 'E-mail',
            'password' => 'Senha',
            'remember' => 'Lembrar mais tarde'
        ],
        'button' => [
            'submit' => 'Entrar',
            'reset-password' => 'Recuperar senha',
            'register' => 'Efetuar Cadastro'
        ]
    ],
    'register' => [
        'title' => 'Novo Cadastro',
        'field' => [
            'fullname' => 'Nome Completo',
            'email' => 'E-mail',
            'password' => 'Senha',
            'password2' => 'Repetir senha',
            'agreeTerms' => 'Apenas Funcionários !!'
        ],
        'button' => [
            'submit' => 'Cadastrar',
            'login' => 'já tenho Cadastro',
            'reset-password' => 'Esqueci minha senha'
        ]
    ],
    'verify' => [
        'title' => 'Verifique seu endereço de e-mail',
        'message' => [
            'resent' => 'Um novo link de verificação foi enviado para
            Seu endereço de email',
            'info' => 'Antes de prosseguir, verifique se há um link de verificação em seu e-mail. Se você não recebeu
            o e-mail,'
        ],
        'button' => [
            'request-new' => 'clique aqui para solicitar outro'
        ]
    ],
    'confirm' => [
        'title' => 'Por favor, confirme sua senha antes de continuar.',
        'field' => [
            'password' => 'Senha',
        ],
        'button' => [
            'submit' => 'Confirme sua senha',
            'reset-password' => 'Esqueceu sua senha?'
        ]
    ],
    'email' => [
        'title' => 'Você esqueceu sua senha? Aqui você pode facilmente recuperar uma nova senha. ',
        'campo' => [
            'email' => 'Email',
        ],
        'button' => [
            'submit' => 'Enviar link de redefinição de senha',
            'login' => 'Login',
            'register' => 'Registrar uma nova associação'
        ]
    ],
    'app'=> [
        'create' =>'Novo',
        'export' => 'Exportar',
        'print'  => 'Imprimir',
        'reset'  => 'Resetar',
        'reload' => 'Atulizar'
    ]
];
