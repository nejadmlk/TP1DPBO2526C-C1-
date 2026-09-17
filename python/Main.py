from Resepsionis import Resepsionis


def main():

    resep = None

    data = []

    pilihan = 0

    while pilihan != 6:

        print("================================")
        print("MENU BIOSKOP")
        print("================================")
        print("1. Booking Tiket")
        print("2. Display Tiket")
        print("3. Update Tiket")
        print("4. Hapus Tiket")
        print("5. Cari Tiket")
        print("6. Keluar")
        print("================================")

        pilihan = int(input("Pilih menu : "))

        if pilihan == 1:

            print("===== BOOKING TIKET =====")

            tiket = int(input("Nomor Tiket : "))

            film = input("Nama Film  : ")

            tanggal = input("Tanggal : ")

            studio = int(input("Nomor Studio : "))

            resep = Resepsionis(tiket, tanggal, studio, film)

            data.append(resep)

            print("Booking berhasil!")

        elif pilihan == 2:

            print("===== DATA TIKET =====")

            if len(data) == 0:
                print("Belum ada data tiket.")

            else:

                for i in range(len(data)):

                    print()
                    print("Data ke-", i + 1)

                    print("Nomor Tiket :", data[i].getTiket())
                    print("Nama Film :", data[i].getFilm())
                    print("Tanggal :", data[i].getTanggal())
                    print("Nomor Studio :", data[i].getStudio())

        elif pilihan == 3:

            print("===== UPDATE TIKET =====")

            if len(data) == 0:
                print("Belum ada data tiket.")

            else:

                tiketCari = int(input("Masukkan nomor tiket yang ingin diubah : "))

                i = 0
                cari = 0

                while i < len(data):

                    if data[i].getTiket() == tiketCari:

                        cari = 1

                        print("Data ditemukan.")

                        filmBaru = input("Nama Film baru : ")

                        tanggalBaru = input("Tanggal baru : ")

                        studioBaru = int(input("Nomor Studio baru : "))

                        data[i].setFilm(filmBaru)
                        data[i].setTanggal(tanggalBaru)
                        data[i].setStudio(studioBaru)

                        print("Data berhasil diupdate.")

                        break

                    i = i + 1

                if cari == 0:
                    print("Nomor tiket tidak ditemukan.")

        elif pilihan == 4:

            print("===== HAPUS TIKET =====")

            if len(data) == 0:
                print("Belum ada data tiket.")

            else:

                tiketCari = int(input("Masukkan nomor tiket yang ingin dihapus : "))

                i = 0
                cari = 0

                while i < len(data):

                    if data[i].getTiket() == tiketCari:

                        cari = 1

                        data.pop(i)

                        print("Data berhasil dihapus.")

                        break

                    i = i + 1

                if cari == 0:
                    print("Nomor tiket tidak ditemukan.")

        elif pilihan == 5:

            print("===== CARI TIKET =====")

            tiketCari = int(input("Masukkan nomor tiket yang ingin dicari : "))

            i = 0
            cari = 0

            while i < len(data):

                if data[i].getTiket() == tiketCari:

                    cari = 1

                    print("Nomor Tiket :", data[i].getTiket())
                    print("Nama Film :", data[i].getFilm())
                    print("Tanggal :", data[i].getTanggal())
                    print("Nomor Studio :", data[i].getStudio())

                    break

                i = i + 1

            if cari == 0:
                print("Nomor tiket tidak ditemukan.")

        else:

            if pilihan != 6:
                print("Pilihan tidak tersedia.")


main()
