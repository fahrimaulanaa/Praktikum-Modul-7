import java.util.Scanner;
/**
Nama = Program Determinan Matriks
Author = Pemrograman Indonesia
 */
public class Lat2 {
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner input = new Scanner(System.in);
        System.out.println("==============================");
        System.out.println(" Program Menghitung Determinan");
        System.out.println("==============================");
        System.out.println("1. Determinan 2X2");
        System.out.println("2. Determinan 3X3");
        System.out.println("");
        System.out.print("Masukkan Pilihan Anda : ");
        int pilih = input.nextInt();
        System.out.println("==========================");
       
        switch (pilih){
            case 1:
                System.out.print("Masukan Baris 1 Kolom 1 : ");
                int V = input.nextInt();
                System.out.print("Masukan Baris 1 Kolom 2 : ");
                int W = input.nextInt();
                System.out.print("Masukan Baris 2 Kolom 1 : ");
                int X = input.nextInt();
                System.out.print("Masukan Baris 2 Kolom 2 : ");
                int Y = input.nextInt();
                int Z = (V * Y)-(X * W);
                        System.out.println("Hasilnya adalah : "+Z);
                break;
               
            case 2:
                System.out.print("Masukan Baris 1 Kolom 1 : ");
                int A = input.nextInt();
                System.out.print("Masukan Baris 1 Kolom 2 : ");
                int B = input.nextInt();
                System.out.print("Masukan Baris 1 Kolom 3 : ");
                int C = input.nextInt();
                System.out.print("Masukan Baris 2 Kolom 1 : ");
                int D = input.nextInt();
                System.out.print("Masukan Baris 2 Kolom 2 : ");
                int E = input.nextInt();
                System.out.print("Masukan Baris 2 Kolom 3 : ");
                int F = input.nextInt();
                System.out.print("Masukan Baris 3 Kolom 1 : ");
                int G = input.nextInt();
                System.out.print("Masukan Baris 3 Kolom 2 : ");
                int H = input.nextInt();
                System.out.print("Masukan Baris 3 Kolom 3 : ");
                int I = input.nextInt();
                int J = (A*E*I)+(B*F*G)+(C*D*H)-(C*E*G)-(A*F*H)-(B*D*I);
                        System.out.println("Hasilnya adalah : "+J);
                break;
             default:
                 System.out.println("Salah, silahkan coba lagi");
                break;
        }
        System.out.println("");
     System.out.println("Salam Programmer Indonesia ^^");
    }
}