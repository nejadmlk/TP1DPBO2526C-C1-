#include <iostream>
#include <string>
using namespace std;

class Resepsionis {

private:
    int tiket;
    string tanggal;
    int studio;
    string film;

public:

    Resepsionis() {
    }

    Resepsionis(int tiket, string tanggal, int studio, string film) {
        this->tiket = tiket;
        this->tanggal = tanggal;
        this->studio = studio;
        this->film = film;
    }

    void setTiket(int tiket) {
        this->tiket = tiket;
    }

    int getTiket() {
        return this->tiket;
    }

    void setTanggal(string tanggal) {
        this->tanggal = tanggal;
    }

    string getTanggal() {
        return this->tanggal;
    }

    void setStudio(int studio) {
        this->studio = studio;
    }

    int getStudio() {
        return this->studio;
    }

    void setFilm(string film) {
        this->film = film;
    }

    string getFilm() {
        return this->film;
    }

};