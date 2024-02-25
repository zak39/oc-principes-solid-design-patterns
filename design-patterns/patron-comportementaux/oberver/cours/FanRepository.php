<?php

require_once 'Fan.php';

/**
 * Classe pour créer une liste de la classe Fan
 */
class FanRepository
{
    /**
     * @return Fan[]
     */
    public function retrieveFans(): array
    {
        $fan01 = new Fan(
            'zak',
            'Bordeaux'
        );

        $fan01->setFollowedGroups(
            [
                'Tartanpion',
            ]
        );

        $fan02 = new Fan(
            'lupin',
            'Marseille'
        );

        $fan02->setFollowedGroups(
            [
                'Blink182',
                'Sum41',
            ]
        );
    
        $fan03 = new Fan(
            'bertrand69',
            'Marseille'
        );

        $fan03->setFollowedGroups(
            [
                'Sum41',
            ]
        );

        $fan04 = new Fan(
            'fabrice',
            'Bordeaux'
        );

        $fan04->setFollowedGroups(
            [
                'Blink182',
                'Tartanpion',
            ]
        );
        
        return [
            $fan01,
            $fan02,
            $fan03,
            $fan04,
        ];
    }
}
