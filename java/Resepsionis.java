
class Resepsionis {
    
    private int tiket;
    private String tanggal;
    private int studio;
    private String film;

    Resepsionis(){
    }

    Resepsionis(int tiket, String tanggal, int studio, String film) {
        this.tiket = tiket;
        this.tanggal = tanggal;
        this.studio = studio;
        this.film = film;
    }
    

    public void setTiket(int tiket){
        this.tiket = tiket;
    }

    public int getTiket(){
        return this.tiket;
    }

    public void setTanggal(String tanggal){
        this.tanggal = tanggal;
    }

    public String getTanggal(){
        return this.tanggal;
    }

    public void setStudio(int studio){
        this.studio = studio;
    }

    public int getStudio(){
        return this.studio;
    }

    public void setFilm(String film){
        this.film = film;
    }

    public String getFilm(){
        return this.film;
    }

}
