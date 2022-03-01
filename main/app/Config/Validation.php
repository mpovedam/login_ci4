<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use \Myth\Auth\Authentication\Passwords\ValidationRules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        ValidationRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $signin = [
        'login'    => 'required|valid_email',
        'password' => 'required',
    ];


    public $signin_errors = [
        'login' => [
            'required'    => 'El correo electrónico es requerido.',
            'valid_email' => 'Por favor revise el campo de correo electrónico. No parece ser válido.'
        ],
        'password'  => [
            'required' => 'La contraseña es requerida.',
        ],
    ];


    public $signup = [
        'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|strong_password',
        'pass_confirm' => 'required|matches[password]',
    ];


    public $signup_errors = [
        'username' => [
            'required'            => 'El nombre de usuario es requerido.',
            'alpha_numeric_space' => 'Solo puede ingresar caracteres alfanuéricos o de espacio.',
            'min_length'          => 'Su nombre de usuario debe tener al menos 3 caracteres.',
            'max_length'          => 'Su nombre de usuario debe tener menos de 30 caracteres.',
            'is_unique'           => 'El nombre de usuario digitado ya se encuentra registrado por otro usuario.',
        ],
        'email'  => [
            'required'    => 'El correo electrónico es requerido.',
            'valid_email' => 'Introduzca una dirección de correo electrónico válida.',
            'is_unique'   => 'El correo electrónico digitado ya se encuentra registrado por otro usuario.'
        ],

        'password'  => [
            'required'        => 'La contraseña es requerida.',
        ],
        'pass_confirm'  => [
            'required'    => 'Digite nuevamente la contraseña.',
        ],
    ];

    public $forgot = [
        'email'    => 'required|valid_email',
    ];


    public $forgot_errors = [
        'email'  => [
            'required'    => 'El correo electrónico es requerido.',
            'valid_email' => 'Introduzca una dirección de correo electrónico válida.',
        ],
    ];

    public $reset = [
        'token'		   => 'required',
		'email'		   => 'required|valid_email',
		'password'	   => 'required|strong_password',
		'pass_confirm' => 'required|matches[password]',
    ];


    public $reset_errors = [
        'token'  => [
            'required'        => 'El token es requerido.',
        ],
        'email'  => [
            'required'    => 'El correo electrónico es requerido.',
            'valid_email' => 'Introduzca una dirección de correo electrónico válida.',
        ],
        'password'  => [
            'required'  => 'La nueva contraseña es requerida.',
        ],
        'pass_confirm'  => [
            'required'  => 'Repita su nueva contraseña.',
        ],
    ];

    
}
