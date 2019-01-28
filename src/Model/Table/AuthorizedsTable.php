<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Authorizeds Model
 *
 * @property \App\Model\Table\AuthorizedsTable|\Cake\ORM\Association\BelongsTo $ParentAuthorizeds
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\AuthorizedsTable|\Cake\ORM\Association\HasMany $ChildAuthorizeds
 *
 * @method \App\Model\Entity\Authorized get($primaryKey, $options = [])
 * @method \App\Model\Entity\Authorized newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Authorized[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Authorized|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Authorized|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Authorized patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Authorized[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Authorized findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class AuthorizedsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('authorizeds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentAuthorizeds', [
            'className' => 'Authorizeds',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
        $this->hasMany('ChildAuthorizeds', [
            'className' => 'Authorizeds',
            'foreignKey' => 'parent_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->allowEmptyString('prefix');

        $validator
            ->scalar('controller_name')
            ->maxLength('controller_name', 100)
            ->allowEmptyString('controller_name');

        $validator
            ->scalar('method_name')
            ->maxLength('method_name', 100)
            ->allowEmptyString('method_name');

        $validator
            ->scalar('status')
            ->maxLength('status', 2)
            ->allowEmptyString('status');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 250)
            ->allowEmptyString('icon');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 250)
            ->allowEmptyString('alias');

        $validator
            ->scalar('parameter')
            ->maxLength('parameter', 250)
            ->allowEmptyString('parameter');

        $validator
            ->allowEmptyString('lead');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['parent_id'], 'ParentAuthorizeds'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
