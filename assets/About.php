<?php

namespace AGTHARN;

class About extends Me
{
    public function getInformation(): array
    {
        return [
            'location' => 'Singapore',
            'height' => '1.75m',
            'pronouns' => 'he/him',
            'age' => '16',
            'hobbies' => [
                'listening to music',
                'playing video games',
                'reading',
                'watching TV',
                'playing badminton'
            ]
        ];
    }

    public function getLanguages(): array
    {
        return [
            PHP::class,
            Java::class
        ];
    }

    public function getTools(): array
    {
        return [
            'Git',
            'Docker',
            'PHPStan',
            'Composer',
            'MongoDB',
            'MySQL',
            'SQLite',
            'VS Code',
            'PocketMine-MP'
        ];
    }
}
