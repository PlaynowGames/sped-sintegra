<?php

namespace NFePHP\Sintegra\Blocks;

use NFePHP\Sintegra\Elements;
use NFePHP\Sintegra\Common\Block;
use NFePHP\Sintegra\Common\BlockInterface;

/**
 * Classe constutora do bloco Sintegra
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados.
 */
final class BlockSintegra extends Block implements BlockInterface
{
    public $elements = [
        'z10' => ['class' => Elements\Z10::class, 'level' => 0, 'type' => 'single'],
        'z11' => ['class' => Elements\Z11::class, 'level' => 0, 'type' => 'single'],
        'z50' => ['class' => Elements\Z50::class, 'level' => 0, 'type' => 'single'],
    ];
}
