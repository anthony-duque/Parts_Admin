<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendor Entity
 *
 * @property int $id
 * @property string $name
 * @property bool|null $oem
 * @property string|null $phone_number
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zipcode
 * @property string|null $email
 * @property int $location_ID
 * @property string|null $shop_location
 * @property bool|null $opt_oem
 * @property bool|null $aftermarket
 * @property bool|null $preferred
 * @property bool|null $electronic
 * @property int|null $vendor_ID
 */
class Vendor extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'oem' => true,
        'phone_number' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zipcode' => true,
        'email' => true,
        'location_ID' => true,
        'shop_location' => true,
        'opt_oem' => true,
        'aftermarket' => true,
        'preferred' => true,
        'electronic' => true,
        'vendor_ID' => true,
    ];
}
