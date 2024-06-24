<?php

namespace App\Enums;

enum Relationship: string
{
    case Long_Term_Relationship  = '1';
    case Marriage = '2';
    case Tantric_Partner = '3';
    case Polyamorous_Relationship = '4';
    case Open_Relationship = '5';
    case Celibate_Relationship = '6';
    case Celibate_Marriage = '7';
    case Casual_Intimacy = '8';
    case Friends = '9';
    case Travel_Companion = '10';
    case Pen_Pals = '11';
    case Just_Curious = '12';
    case Other = '13';

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ');
    }

    public function get_dbName(): string
    {
        return match($this){
            self::Long_Term_Relationship => 'relationship_ltr',
            self::Marriage => 'relationship_marriage',
            self::Tantric_Partner => 'relationship_tantric',
            self::Polyamorous_Relationship => 'relationship_polyamorous',
            self::Open_Relationship => 'relationship_open',
            self::Celibate_Relationship => 'relationship_celibate',
            self::Celibate_Marriage => 'relationship_celibate_marriage',
            self::Casual_Intimacy => 'relationship_casual',
            self::Friends => 'relationship_friends',
            self::Travel_Companion => 'relationship_travel',
            self::Pen_Pals => 'relationship_pen_pals',
            self::Just_Curious => 'relationship_curious',
            self::Other => 'relationship_other',
            default => 'No Name Found',
        };
    }
    public static function group(): string
    {
        return 'relationship';
    }
}
