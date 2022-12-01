<?php

interface StringInstrument
{
    public function change_strings();
}

interface Rythem
{
    public function play_soft();
}


// ========== Abstacts ==============


abstract class MusicalInstruments
{
    protected $owner;
    abstract public function play_sound();
    abstract public function add_owner($owner_name);
    abstract public function get_owner_name(): String;
}

class Piano extends MusicalInstruments implements StringInstrument, Rythem
{

    public function change_strings()
    {
        echo "done";
    }

    public function play_soft()
    {
        echo 'done';
    }

    public function play_sound()
    {
        echo "do re me!";
    }

    public function add_owner($owner_name)
    {
        $this->owner = $owner_name;
    }

    public function get_owner_name(): string
    {
        return $this->owner;
    }
}

class Drums extends MusicalInstruments
{
    public function play_sound()
    {
        echo "dom tac es ta7 tom es ta7!";
    }

    public function add_owner($owner_name)
    {
        $this->owner = $owner_name;
    }

    public function get_owner_name(): string
    {
        return $this->owner;
    }
}


$yamaha = new Piano();
$yamaha->add_owner('Roy');
var_dump($yamaha);

echo "Piano owner name is: " . $yamaha->get_owner_name();
