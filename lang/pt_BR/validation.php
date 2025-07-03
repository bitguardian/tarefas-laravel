<?php

return [
    'required' => 'O campo :attribute é obrigatório.',
    'min' => [
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    ],
    'max' => [
        'string' => 'O campo :attribute não pode ter mais que :max caracteres.',
    ],
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'unique' => 'O campo :attribute já está em uso.',
    'confirmed' => 'A confirmação de :attribute não confere.',

    'attributes' => [
        'titulo' => 'título',
        'descricao' => 'descrição',
        'email' => 'e-mail',
        'password' => 'senha',
    ],
];
