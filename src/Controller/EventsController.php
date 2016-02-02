<?php
// src/Controller/EventsController.php


namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class EventsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }

    public function index()
    {
        $events = $this->Events->find('all');
        $this->set(compact('events'));
    }

    public function pastEvents()
    {
        $this->set('pastEvents', $this->Events->find('all', [
            'conditions' => ['Events.enddate <' => new DateTime()],
            'contain' => ['id','eventname']
            ]));
    }

    public function upcomingEvents()
    {
        $this->set('upcomingEvents', $this->Events->find('all', [
            'conditions' => ['Events.startdate >' => new DateTime()],
            'contain' => ['id','eventname']
            ]));
    }

    public function ongoingEvents()
    {
        $this->set('ongoingEvents', $this->Events->find('all', [
            'conditions' => ['Events.startdate =<' => new DateTime(), 
                'Events.enddate >=' => new DateTime()],
            'contain' => ['id','eventname']
            ]));
    }


    public function view($id)
    {
        $event = $this->Events->get($id);
        $this->set(compact('event'));
    }
}