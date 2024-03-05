<?php
class Serie{
    public $seasons;
    public $first_air_date;
    function __construct(
        $seasons,
        string $first_air_date = 'non registrata'
    ) {
        $this->seasons = $seasons;
        $this->first_air_date = $first_air_date;
    }
}