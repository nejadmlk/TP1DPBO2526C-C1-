<?php

class Resepsionis {

    private $tiket;
    private $tanggal;
    private $studio;
    private $film;

    //construct
    function __construct(int $tiket, string $tanggal, int $studio, string $film) {
        $this->tiket = $tiket;
        $this->tanggal = $tanggal;
        $this->studio = $studio;
        $this->film = $film;
    }

    //setter
    function setTiket($tiket) {
        $this->tiket = $tiket;
    }

    //getter
    function getTiket() {
        return $this->tiket;
    }

    //setter
    function setTanggal($tanggal) {
        $this->tanggal = $tanggal;
    }

    //getter
    function getTanggal() {
        return $this->tanggal;
    }

    //setter
    function setStudio($studio) {
        $this->studio = $studio;
    }

    //getter
    function getStudio() {
        return $this->studio;
    }

    //setter
    function setFilm($film) {
        $this->film = $film;
    }

    //getter
    function getFilm() {
        return $this->film;
    }
}

?>