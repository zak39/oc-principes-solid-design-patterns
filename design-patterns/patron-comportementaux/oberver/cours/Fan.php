<?php

/**
 * La classe qui est à la fois
 * le fan qui veut suivre un groupe de musique
 * et qui check si son groupe est dispo via la fonction
 * "update".
 */
final class Fan implements \SplObserver
{
    private array $followedGroups = [];
    
    public function __construct(
        private string $name,
        private string $location
    )
    {
    }
    
    public function getLocation(): string
    {
        return $this->location;
    }

    public function getFollowedGroups(): array
    {
        return $this->followedGroups;
    }

    public function setFollowedGroups(array $groupnames): void
    {
        $this->followedGroups = $groupnames;
    }

    public function update(\SplSubject $subject): void
    {
        $state = $subject->getState();

        if (
            in_array(
                $state['group'],
                $this->getFollowedGroups()
            )
            && $state['location'] === $this->getLocation()
        )
        {
            // Notifier l'utilisateur !
            print(
                $this->name . ' : Il y a un concert à ' . $state['location'] . ' du groupe ' . $state['group'] . ' qui peut vous intéresser' . PHP_EOL
            );
        }
    }
}
