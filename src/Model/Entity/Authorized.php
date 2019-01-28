<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Authorized Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property int|null $lft
 * @property int|null $rght
 * @property int|null $role_id
 * @property string|resource|null $prefix
 * @property string|null $controller_name
 * @property string|null $method_name
 * @property string|null $status
 * @property string|null $icon
 * @property string|null $alias
 * @property string|null $parameter
 * @property int|null $lead
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ParentAuthorized $parent_authorized
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\ChildAuthorized[] $child_authorizeds
 */
class Authorized extends Entity
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
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'role_id' => true,
        'prefix' => true,
        'controller_name' => true,
        'method_name' => true,
        'status' => true,
        'icon' => true,
        'alias' => true,
        'parameter' => true,
        'lead' => true,
        'created' => true,
        'modified' => true,
        'parent_authorized' => true,
        'role' => true,
        'child_authorizeds' => true
    ];
}
