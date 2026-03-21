<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialTypesFixture
 */
class MaterialTypesFixture extends TestFixture
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
                'id' => 1,
                'Code' => 'Lorem ip',
                'Description' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
