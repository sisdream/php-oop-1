<?php
class Movie{
    public $duration;
    public $release_date;
    function __construct(
        $duration,
        string $release_date = ''
    ) {
        $this->duration = $duration;
        $this->release_date = $release_date;
    }
}