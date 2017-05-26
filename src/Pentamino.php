<?php


namespace Jlttt\Pentaminoes;

class Pentamino
{
    private $offsetList;
    private $type;

    public function __construct($rawData)
    {
        $this->type = $rawData[0];
        $rawData[0] = 0;
        $this->offsetList = $rawData;
    }
    public function getType()
    {
        return $this->type;
    }

    public function getOffset($index)
    {
        return $this->offsetList[$index-1];
    }
}