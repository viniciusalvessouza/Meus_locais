<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocaisFixture
 */
class LocaisFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'cep' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'logradouro' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'complemento' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'numero' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'bairro' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'uf' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'cidade' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'data' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum dolor sit amet',
                'logradouro' => 'Lorem ipsum dolor sit amet',
                'complemento' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lore',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'uf' => 'Lo',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'data' => '2020-07-27',
            ],
        ];
        parent::init();
    }
}
