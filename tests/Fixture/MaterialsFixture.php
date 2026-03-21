<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialsFixture
 */
class MaterialsFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Materials';
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
                'Part_Number' => 'Lorem ipsum d',
                'Description' => 'Lorem ipsum dolor sit amet',
                'Unit' => 'Lorem ip',
                'Type' => 'Lorem ip',
                'Reorder_Quantity' => 1,
                'Brand' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
