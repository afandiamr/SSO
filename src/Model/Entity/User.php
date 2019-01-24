<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $role_id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $pass_mobile
 * @property string|null $photo
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $photo_dir
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $profile_id
 *
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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
        'id' => true,
        'role_id' => true,
        'username' => true,
        'password' => true,
        'pass_mobile' => true,
        'photo' => true,
        'status' => true,
        'last_login' => true,
        'created' => true,
        'photo_dir' => true,
        'modified' => true,
        'profile_id' => true,
        'role' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
