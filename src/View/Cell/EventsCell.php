<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\I18n\Time;

/**
 * Events cell
 */
class EventsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Events');

        $total_events = $this->Events->find()->count();

        $recent_events = $this->Events->find()
                                      ->select('eventname')
                                      ->order(['startdate' => 'DESC'])
                                      ->limit(3)
                                      ->toArray();

        $this->set(['total_events' => $total_events, 
                    'recent_events' => $recent_events]);
    }

    public function navbar()
    {
        $this->loadModel('Events');
        $ongoing_events = $this->Events->find()
                                    ->select(['id','eventname'])
                                    ->where(['enddate <=' => Time::parse('now'),
                                             'startdate >=' => Time::parse('now')])
                                    ->order(['startdate' => 'DESC'])
                                    ->toArray();

        $coming_events = $this->Events->find()
                                    ->select(['id','eventname'])
                                    ->where(['enddate >' => Time::parse('now')])
                                    ->order(['startdate' => 'DESC'])
                                    ->toArray();

        $past_events = $this->Events->find()
                                    ->select(['id', 'eventname'])
                                    ->where(['enddate <' => Time::parse('now')])
                                    ->order(['startdate' => 'DESC'])
                                    ->toArray();

        $this->set(['ongoing_events' => $ongoing_events,
                    'coming_events' => $coming_events,
                    'past_events' => $past_events]);
    }

    public function edit_event($user, $event)
    {
        $this -> set ('user', $user);
        $this -> set ('event', $event);
    }
}
