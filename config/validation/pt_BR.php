<?php
/**
 * :attribute => input name
 * :params => rule parameters ( eg: :params(0) = 10 of max_length(10) )
 */
return array(
    'required' => ':attribute não pode ser vazio',
    'integer' => ':attribute não é um número inteiro',
    'float' => ':attribute é um numero com casas decimais',
    'numeric' => ':attribute é um número',
    'email' => ':attribute não é um email válido',
    'alpha' => ':attribute é um campo só de letras',
    'alpha_numeric' => ':attribute é um campo de letras e números',
    'ip' => ':attribute precisa ser do padrão de um IP',
    'url' => ':attribute não é uma url válida',
    'max_length' => ':attribute precisa ter no máximo :params(0) caracteres',
    'min_length' => ':attribute precisa ter no mínimo :params(0) caracteres',
    'exact_length' => ':attribute precisa ter exatamente :params(0) caracteres',
    'equals' => ':attribute precisa ser igual a :params(0)'
);
