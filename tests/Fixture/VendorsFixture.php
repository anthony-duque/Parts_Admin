<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendorsFixture
 */
class VendorsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'oem' => 1,
                'phone_number' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor ',
                'state' => 'Lo',
                'zipcode' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
                'location_ID' => 1,
                'shop_location' => 'Lorem ipsum dolor sit amet',
                'opt_oem' => 1,
                'aftermarket' => 1,
                'preferred' => 1,
                'electronic' => 1,
                'vendor_ID' => 1,
            ],
        ];
        parent::init();
    }
}
