<?php

class MusicReader
{
    public function __construct(private MusicFormat $music)
    {
    }

    public function listen()
    {
        try {
            return $this->music->listen();
        } catch (\Exception $e) {
            throw new \Exception('Aucun lecteur trouvé pour cette musique');
        }
   }
}