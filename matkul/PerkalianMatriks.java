import java.util.Scanner;

public class PerkalianMatriks {
  public static void main(String[] args) {
    int i, j, k, m, n, p, q, jumlah = 0;
    int matriks1[][] = new int[10][10];
    int matriks2[][] = new int[10][10];
    int hasil[][] = new int[10][10];
    Scanner scan = new Scanner(System.in);

    System.out.print("Masukkan jumlah baris matriks pertama: ");
    m = scan.nextInt();
    System.out.print("Masukkan jumlah kolom matriks pertama: ");
    n = scan.nextInt();

    System.out.print("Masukkan jumlah baris matriks kedua: ");
    p = scan.nextInt();
    System.out.print("Masukkan jumlah kolom matriks kedua: ");
    q = scan.nextInt();

    if (n != p) {
      System.out.println("Matriks tidak dapat dikalikan satu sama lain.\n");
    } else {
      System.out.println("Masukkan elemen matriks pertama: ");
      for (i = 0; i < m; i++) {
        for (j = 0; j < n; j++) {
          matriks1[i][j] = scan.nextInt();
        }
      }

      System.out.println("Masukkan elemen matriks kedua: ");
      for (i = 0; i < p; i++) {
        for (j = 0; j < q; j++) {
          matriks2[i][j] = scan.nextInt();
        }
      }

      for (i = 0; i < m; i++) {
        for (j = 0; j < q; j++) {
          for (k = 0; k < p; k++) {
            jumlah = jumlah + matriks1[i][k] * matriks2[k][j];
          }
          hasil[i][j] = jumlah;
          jumlah = 0;
        }
      }

      System.out.println("Hasil perkalian matriks: ");
      for (i = 0; i < m; i++) {
        for (j = 0; j < n; j++) {
          System.out.print(hasil[i][j] + "\t");
        }
        System.out.println();
      }
    }
  }
}