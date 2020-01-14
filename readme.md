# SKPI

Surat Keterangan Pendamping Ijazah atau disingkat SKPI adalah dokumen resmi yang dikeluarkan oleh institusi perguruan tinggi. Surat yang juga disebut Diploma Supplement ini berisi pencapaian akademik dan capaian pembelajaran serta kualifikasi lulusan pendidikan tinggi. Pada SKPI kali ini, kita diuji dalam bidang web programming, materi SKPI web programming di dalamnya membahas Laravel dan MongoDB. 

Berikut adalah teknologi yang digunakan pada SKPI :
1. Laravel
2. Docker
    1. Nginx
    2. PHP-FPM
    3. MongoDB

## Menjalankan Aplikasi

1. Clone repository ini dengan cara `git clone https://github.com/bayubimantarar/skpi`
2. Masukkan perintah `cd skpi`
3. Pada folder tersebut, jalankan perintah `docker-compose up`
4. Setelah docker sudah berhasil running, masuk pada container mongoDB dan jalankan buat database dengan cara jalankan perintah `use toko_buku`
