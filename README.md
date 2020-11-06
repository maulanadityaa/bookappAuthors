Muhamad Maulana Zuhad Aditya
185150701111001

Pada mini project bookapp ini membuat sebuah web yang digunakan untuk melihat keterangan tentang buku yang ada pada database kita
bookapp ini menggunakan HTTP request dan response untuk melihat status code dari halamannya, jika status 201 maka berhasil sedangkan 404 berarti not found atau gagal
projek ini menggunakan lumen versi 8 yang berarti method str_random() sudah tidak bisa digunakan dan diganti dengan Str::random()
untuk soal mencari buku berdasarkan id menggunakan query yang digunakan pada laravel yaitu
Book::where('id', $id) berarti id yang ada pada link digunakan untuk mencari id buku dengan query tadi,
jika id ditemukan maka akan menjalankan fungsi if yang menghasilkan respon menampilkan buku yang dicari dengan status respon HTTP 201, sedangkan
jika id buku tidak ditemukan maka akan menampilkan Book Not Found dengan HTTP status code 404.

Pada challenge ini menambahkan fungsi yang sama seperti pada book yaitu,
menambahkan buku, mengupdate buku, mencari buku, dan menghapus buku. tetapi pada challenge ini
yang ditambah, cari, update, dan hapus adalah bagian author nya.
terdapat beberapa perbedaan pada skema data author yaitu, nama tipe string, gender tipe enum, dan biography tipe text. 
