<?php
class Production {
    public $type;
    public $genre;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;
    function __construct(
        $type,
        Genre $genre,
        string $title,
        string $language,
        $vote = false
    ){
        $this->type = $type;
        $this->genre = $genre;
        $this->title = $title;
        $this->og_language = $language;
        $this->vote = $vote;
        $this->set_best_seller();
    }
    public function set_best_seller(){
        $this->is_best_seller = $this->vote >= 8 ? true : false;
    }
    public function get_vote(){
        if ($this->vote == false) {
            return 'non ci sono voti per questo titolo';
        } else {
            return $this->vote;
        }
    }
}