<?php
// ========== Abstacts ==============


abstract class MusicalInstruments
{
    protected $owner;
    abstract public function play_sound();
    abstract public function add_owner($owner_name);
    abstract public function get_owner_name(): String;
}

class Piano extends MusicalInstruments
{
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
