<?php
namespace App\Model\Table;

use App\Model\Entity\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 */
class EventsTable extends Table
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

        $this->table('events');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('eventname', 'create')
            ->notEmpty('eventname');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');
            
        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->date('startdate')
            ->requirePresence('startdate', 'create')
            ->notEmpty('startdate');

        $validator
            ->date('enddate')
            ->requirePresence('enddate', 'create')
            ->notEmpty('enddate');

        return $validator;
    }
}
