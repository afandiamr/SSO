<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $nick_name
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $nip
 * @property string|null $jabatan
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property int|null $polres
 * @property string|null $note
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_created
 * @property string|null $user_modified
 *
 * @property \App\Model\Entity\User[] $users
 */
class Profile extends Entity
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
        'full_name' => true,
        'nick_name' => true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'nip' => true,
        'jabatan' => true,
        'tempat_lahir' => true,
        'tanggal_lahir' => true,
        'polres' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'user_created' => true,
        'user_modified' => true,
        'users' => true
    ];
}
