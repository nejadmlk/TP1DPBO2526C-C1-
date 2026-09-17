class Resepsionis:

    def __init__(self, tiket=0, tanggal="", studio=0, film=""):
        self.__tiket = tiket
        self.__tanggal = tanggal
        self.__studio = studio
        self.__film = film

    def setTiket(self, tiket):
        self.__tiket = tiket

    def getTiket(self):
        return self.__tiket

    def setTanggal(self, tanggal):
        self.__tanggal = tanggal

    def getTanggal(self):
        return self.__tanggal

    def setStudio(self, studio):
        self.__studio = studio

    def getStudio(self):
        return self.__studio

    def setFilm(self, film):
        self.__film = film

    def getFilm(self):
        return self.__film