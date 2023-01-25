<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 */
class ContratosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idContrato' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'monto' => 1,
                'fecha' => '2023-01-25',
                'idCliente' => 1,
            ],
        ];
        parent::init();
    }
}
