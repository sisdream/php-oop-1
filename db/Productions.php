<?php
$productions = [
    $fight_club = new Production (new Movie(139, '1999'), new Genre('thriller'),'Fight Club', 'inglese', 8),
    $mare_fuori = new Production (new Serie(4, '23/09/2020'), new Genre('drammatico'), 'Mare Fuori', 'italiano'),
    $gossip_girl = new Production(new Serie(6, '19/09/2007'), new Genre('dramma adolescenziale'), 'Gossip Girl', 'inglese', 6),
    $life_is_beautiful = new Production(new Movie(124, '1997'), new Genre('storico'), 'La vita è bella', 'italiano', 9),
    $shadow_hunters = new Production(new Serie(3, '06/05/2019'), new Genre('fantasy'), 'Shadow Hunters','inglese',8),
    $mission_impossible = new Production(new Movie (115, '13/09/1996'),new Genre('azione'), 'Mission Impossible','inglese', 7),
];

