import java.util.Scanner; 
import java.util.ArrayList;

class Main {
    public static void main(String[] args) {

        Resepsionis resep = null;
        
        Scanner scan = new Scanner(System.in); 

        ArrayList<Resepsionis> data = new ArrayList<>();

        int pilihan;

        do {
            System.out.println();
            System.out.println("================================");
            System.out.println("MENU BIOSKOP");
            System.out.println("================================");
            System.out.println("1. Booking Tiket");
            System.out.println("2. Display Tiket");
            System.out.println("3. Update Tiket");
            System.out.println("4. Hapus Tiket");
            System.out.println("5. Cari Tiket");
            System.out.println("6. Keluar");
            System.out.println("================================");
            System.out.println("Pilih menu :");
            pilihan = scan.nextInt(); 
            scan.nextLine();

        
            if (pilihan == 1) {

                System.out.println(); 
                System.out.println("===== BOOKING TIKET =====");

                System.out.print("Nomor Tiket : ");
                int tiket = scan.nextInt();
                scan.nextLine();

                System.out.print("Nama Film  :");
                String film = scan.nextLine();
            
                System.out.print("Tanggal :");
                String tanggal = scan.nextLine();

                System.out.print("Nomor Studio :");
                int studio = scan.nextInt();

                resep = new Resepsionis(tiket, tanggal, studio, film);

                data.add(resep);

                System.out.println("Booking berhasil!");

            } else if (pilihan == 2) {

                System.out.println(); 
                System.out.println("===== DATA TIKET ====="); 

                if (data.size() == 0) {
                    System.out.println("Belum ada data tiket."); 
                } else{
                    for (int i = 0; i < data.size(); i++){
                        System.out.println(); 
                        System.out.println("Data ke-" + (i + 1));

                        System.out.println("Nomor Tiket : " + data.get(i).getTiket()); 
                        System.out.println("Nama Film : " + data.get(i).getFilm()); 
                        System.out.println("Tanggal : " + data.get(i).getTanggal()); 
                        System.out.println("Nomor Studio : " + data.get(i).getStudio()); 
                    }
                }

            } else if (pilihan == 3) {
            
                System.out.println(); 
                System.out.println("===== UPDATE TIKET =====");

                if (data.size() == 0) {
                    System.out.println("Belum ada data tiket.");
                } else {

                    System.out.print("Masukkan nomor tiket yang ingin diubah : "); 
                    int tiketCari = scan.nextInt(); 
                    scan.nextLine();
                    
                    int i = 0;
                    int cari = 0;

                    while (i < data.size()) {

                        if (data.get(i).getTiket() == tiketCari) {

                            cari = 1;
                            System.out.println("Data ditemukan.");

                            System.out.print("Nama Film baru : ");
                            String filmBaru = scan.nextLine();

                            System.out.print("Tanggal baru : ");
                            String tanggalBaru = scan.nextLine();

                            System.out.print("Nomor Studio baru : ");
                            int studioBaru = scan.nextInt();
                            scan.nextLine();

                            data.get(i).setFilm(filmBaru);
                            data.get(i).setTanggal(tanggalBaru);
                            data.get(i).setStudio(studioBaru);

                            System.out.println("Data berhasil diupdate.");

                            break;
                        }

                        i++;
                    }

                    if (cari == 0) {
                        System.out.println("Nomor tiket tidak ditemukan.");
                    }

                }

            } else if (pilihan == 4) {

                System.out.print("Masukkan nomor tiket yang ingin dihapus : "); 
                int tiketCari = scan.nextInt(); 
                scan.nextLine();
                
                int i = 0;
                int cari = 0;

                while (i < data.size()) {

                    if (data.get(i).getTiket() == tiketCari) {

                        cari = 1;

                        data.remove(i);

                        System.out.println("Data berhasil dihapus.");

                        break;
                    }

                    i++;
                }

                if (cari == 0) {
                    System.out.println("Nomor tiket tidak ditemukan.");
                }
            } else if (pilihan == 5) {

                System.out.print("Masukkan nomor tiket yang ingin dicari : "); 
                int tiketCari = scan.nextInt(); 
                scan.nextLine();

                int i = 0;

                while (i < data.size()) {

                    if (data.get(i).getTiket() == tiketCari) {

                        System.out.println("Nomor Tiket : " + data.get(i).getTiket()); 
                        System.out.println("Nama Film : " + data.get(i).getFilm()); 
                        System.out.println("Tanggal : " + data.get(i).getTanggal()); 
                        System.out.println("Nomor Studio : " + data.get(i).getStudio()); 

                        break;
                    }

                    i++;
                    }
                } else {
                    System.out.println("Pilihan tidak tersedia.");
                }

        } while (pilihan != 6);


        scan.close();
    }
}

