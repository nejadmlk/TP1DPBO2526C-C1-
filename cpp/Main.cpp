#include <iostream>
#include <string>
#include <vector>
using namespace std;

#include "Resepsionis.cpp"

int main() {

    Resepsionis resep;

    vector<Resepsionis> data;

    int pilihan;

    do {

        cout << endl;
        cout << "================================" << endl;
        cout << "MENU BIOSKOP" << endl;
        cout << "================================" << endl;
        cout << "1. Booking Tiket" << endl;
        cout << "2. Display Tiket" << endl;
        cout << "3. Update Tiket" << endl;
        cout << "4. Hapus Tiket" << endl;
        cout << "5. Cari Tiket" << endl;
        cout << "6. Keluar" << endl;
        cout << "================================" << endl;
        cout << "Pilih menu : ";
        cin >> pilihan;

        cin.ignore();

        if (pilihan == 1) {

            cout << endl;
            cout << "===== BOOKING TIKET =====" << endl;

            cout << "Nomor Tiket : ";
            int tiket;
            cin >> tiket;
            cin.ignore();

            cout << "Nama Film : ";
            string film;
            getline(cin, film);

            cout << "Tanggal : ";
            string tanggal;
            getline(cin, tanggal);

            cout << "Nomor Studio : ";
            int studio;
            cin >> studio;
            cin.ignore();

            resep = Resepsionis(tiket, tanggal, studio, film);

            data.push_back(resep);

            cout << "Booking berhasil!" << endl;

        } else if (pilihan == 2) {

            cout << endl;
            cout << "===== DATA TIKET =====" << endl;

            if (data.size() == 0) {

                cout << "Belum ada data tiket." << endl;

            } else {

                for (int i = 0; i < data.size(); i++) {

                    cout << endl;
                    cout << "Data ke-" << (i + 1) << endl;

                    cout << "Nomor Tiket : " << data[i].getTiket() << endl;

                    cout << "Nama Film : " << data[i].getFilm() << endl;

                    cout << "Tanggal : " << data[i].getTanggal() << endl;

                    cout << "Nomor Studio : " << data[i].getStudio() << endl;
                }
            }

        } else if (pilihan == 3) {

            cout << endl;
            cout << "===== UPDATE TIKET =====" << endl;

            if (data.size() == 0) {

                cout << "Belum ada data tiket." << endl;

            } else {

                cout << "Masukkan nomor tiket yang ingin diubah : ";
                int tiketCari;
                cin >> tiketCari;
                cin.ignore();

                int i = 0;
                int cari = 0;

                while (i < data.size()) {

                    if (data[i].getTiket() == tiketCari) {

                        cari = 1;

                        cout << "Data ditemukan." << endl;

                        cout << "Nama Film baru : ";
                        string filmBaru;
                        getline(cin, filmBaru);

                        cout << "Tanggal baru : ";
                        string tanggalBaru;
                        getline(cin, tanggalBaru);

                        cout << "Nomor Studio baru : ";
                        int studioBaru;
                        cin >> studioBaru;
                        cin.ignore();

                        data[i].setFilm(filmBaru);
                        data[i].setTanggal(tanggalBaru);
                        data[i].setStudio(studioBaru);

                        cout << "Data berhasil diupdate." << endl;

                        break;
                    }

                    i++;
                }

                if (cari == 0) {
                    cout << "Nomor tiket tidak ditemukan." << endl;
                }
            }

        } else if (pilihan == 4) {

            cout << endl;
            cout << "===== HAPUS TIKET =====" << endl;

            if (data.size() == 0) {

                cout << "Belum ada data tiket." << endl;

            } else {

                cout << "Masukkan nomor tiket yang ingin dihapus : ";
                int tiketCari;
                cin >> tiketCari;
                cin.ignore();

                int i = 0;
                int cari = 0;

                while (i < data.size()) {

                    if (data[i].getTiket() == tiketCari) {

                        cari = 1;

                        data.erase(data.begin() + i);

                        cout << "Data berhasil dihapus." << endl;

                        break;
                    }

                    i++;
                }

                if (cari == 0) {
                    cout << "Nomor tiket tidak ditemukan." << endl;
                }
            }

        } else if (pilihan == 5) {

            cout << endl;
            cout << "===== CARI TIKET =====" << endl;

            cout << "Masukkan nomor tiket yang ingin dicari : ";
            int tiketCari;
            cin >> tiketCari;
            cin.ignore();

            int i = 0;
            int cari = 0;

            while (i < data.size()) {

                if (data[i].getTiket() == tiketCari) {

                    cari = 1;

                    cout << "Nomor Tiket : " << data[i].getTiket() << endl;

                    cout << "Nama Film : " << data[i].getFilm() << endl;

                    cout << "Tanggal : " << data[i].getTanggal() << endl;

                    cout << "Nomor Studio : " << data[i].getStudio() << endl;

                    break;
                }

                i++;
            }

            if (cari == 0) {
                cout << "Nomor tiket tidak ditemukan." << endl;
            }

        } else if (pilihan != 6) {

            cout << "Pilihan tidak tersedia." << endl;
        }

    } while (pilihan != 6);

    return 0;
}