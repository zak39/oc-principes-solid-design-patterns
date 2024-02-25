<?php

/**
 * Classe qui est le Subjet ou Publisher et aussi
 * qui créer des événements de concert.
 */
final class ConcertsPlanner implements \SplSubject
{
    private \SplObjectStorage $observers;
    
    private array $state;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function getState(): array
    {
        return $this->state;
    }

    public function plan(
        string $groupname,
        string $date,
        string $location
    )
    {

        $timestamp = strtotime($date);

        $this->state = [
            'group' => $groupname,
            'date' => date('d/m/Y', $timestamp),
            'location' => $location
        ];

        //...

        $this->notify();
    }

    public function notify(): void
    {      
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}