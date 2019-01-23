<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Role Entity
 *
 * @property int $id
 * @property string|null $group
 * @property string|null $keterangan
 * @property string|null $created
 * @property string|null $modified
 * @property string|null $user_modified
 * @property string|null $user_created
 */
class Role extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'group' => true,
        'keterangan' => true,
        'created' => true,
        'modified' => true,
        'user_modified' => true,
        'user_created' => true
    ];
}
