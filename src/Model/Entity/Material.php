<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string $Part_Number
 * @property string|null $Description
 * @property string|null $Unit
 * @property string|null $Type
 * @property int|null $Reorder_Quantity
 * @property string|null $Brand
 */
class Material extends Entity
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
        'Part_Number' => true,
        'Description' => true,
        'Unit' => true,
        'Type' => true,
        'Reorder_Quantity' => true,
        'Brand' => true,
    ];
}
