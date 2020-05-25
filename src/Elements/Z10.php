<?php

namespace NFePHP\Sintegra\Elements;

use NFePHP\Sintegra\Common\Element;
use NFePHP\Sintegra\Common\ElementInterface;
use \stdClass;

class Z10 extends Element implements ElementInterface
{
    const REG = '10';
    const LEVEL = 0;
    const PARENT = '';

    protected $parameters = [
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'Número de inscrição do estabelecimento matriz da pessoa jurídica no CNPJ.',
            'format' => ''
        ],
        'IE' => [
            'type' => 'string',
            'regex' => '^[0-9]{2,14}$',
            'required' => false,
            'info' => 'Número de inscrição do estudal.',
            'format' => ''
        ],
        'NOME_CONTRIBUINTE' => [
            'type' => 'string',
            'regex' => '^.{2,35}$',
            'required' => true,
            'info' => 'Nome comercial (razao social)',
            'format' => ''
        ],
        'MUNICIPIO' => [
            'type' => 'string',
            'regex' => '^.{2,30}$',
            'required' => true,
            'info' => 'Municipio do estabelicimento',
            'format' => ''
        ],
        'UF' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => true,
            'info' => 'Sigla da Unidade da Federação da pessoa',
            'format' => ''
        ],
        'FAX' => [
            'type' => 'string',
            'regex' => '^.{10}$',
            'required' => false,
            'info' => 'Telefone do estabelicimento',
            'format' => ''
        ],
        'DT_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data inicial das informações contidas no arquivo.',
            'format' => ''
        ],
        'DT_FIN' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data final das informações contidas no arquivo.',
            'format' => ''
        ],
        'COGIGO_MAGNETICO' => [
            'type' => 'integer',
            'regex' => '^[0-1]{1}$',
            'required' => false,
            'info' => 'Tipo da geração do sintegra',
            'format' => 'Código da identificação da estrutura do arquivo magnético entregue'
        ],
        'COGIGO_NATUREZAS' => [
            'type' => 'integer',
            'regex' => '^[0-1]{1}$',
            'required' => false,
            'info' => 'Tipo da geração do sintegra',
            'format' => 'Código da identificação da natureza das operações informadas'
        ],
        'COGIGO_FINALIDADE' => [
            'type' => 'integer',
            'regex' => '^[0-1]{1}$',
            'required' => false,
            'info' => 'Tipo da geração do sintegra',
            'format' => 'Código da finalidade do arquivo magnético'
        ],
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}