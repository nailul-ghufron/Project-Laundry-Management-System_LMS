**LAPORAN PRAKTIKUM REKAYASA PERANGKAT LUNAK**

**GABUNGAN SEMUA MODUL** 


**Dosen Pengampu:**

Dr. Agung Teguh Wibowo Almais, S.Kom, M.T 
**\



![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.001.png)


**Oleh :**

Muhammad Nailul Ghufron Majid

(240605110160) 

Ghofran (240605110013)





**PRODI TEKNIK INFORMATIKA** 

**FAKULTAS SAINS DAN TEKNOLOGI** 

**UNIVERSITAS ISLAM NEGERI MAULANA MALIK IBRAHIM**  

**MALANG** 

**2026** 

# <a name="_mfsodfbds841"></a>**Modul 1**
**a. Judul Perangkat Lunak: Laundry Management System (LMS)** - Sistem Manajemen Operasional Toko Laundry Berbasis Web.

**b. Permasalahan** Berdasarkan hasil observasi dan wawancara, kendala yang dihadapi oleh usaha laundry (contohnya: Toko LaundryYok) meliputi:

- **Sistem masih berjalan secara manual**, baik dalam pencatatan transaksi maupun pembuatan laporan.
- Tingginya **risiko kehilangan nota** transaksi dan rentan terjadi **kesalahan perhitungan** pembayaran.
- Kurangnya transparansi pada alur operasional, yang berpotensi menyebabkan **keterlambatan penyelesaian dan kesalahan pelabelan cucian**.
- Pemilik (*Owner*) kesulitan memantau laporan pendapatan harian dan mengevaluasi kinerja secara langsung dan cepat.

**c. Solusi** Solusi yang ditawarkan adalah **mengotomatisasi proses bisnis melalui platform digital terintegrasi**. Solusi ini mencakup:

- Menggunakan basis data terpusat untuk menyimpan data pelanggan, mencatat transaksi, dan menghitung pembayaran secara otomatis dengan validasi sistem guna menekan angka kesalahan.
- Menerapkan **fitur *monitoring* status cucian** agar progres pekerjaan dapat dilacak secara *real-time*.
- Menyediakan *dashboard* laporan instan untuk memudahkan manajemen dalam evaluasi kinerja dan akses data keuangan.

**d. Perangkat Lunak yang Akan Dibuat** Perangkat lunak yang akan dikembangkan adalah **Sistem Manajemen Operasional Toko Laundry Berbasis Web**. Sistem ini akan dilengkapi dengan berbagai fitur utama, antara lain:

- Manajemen data pelanggan dan transaksi.
- Pemantauan alur operasional / status cucian (*real-time*).
- Sistem keamanan data dengan pembagian hak akses pengguna (*user roles*).
- *Dashboard* rekapitulasi laporan pendapatan (harian, mingguan, dan bulanan).
- Sistem notifikasi.

**e. Target Market atau Pengguna** Target pasar perangkat lunak ini adalah bisnis **Toko Laundry (seperti contohnya Toko LaundryYok)**. Adapun target pengguna (*user*) di dalam sistem ini meliputi struktur organisasi perusahaan tersebut, yaitu:

- ***Owner* (Pemilik Laundry)**
- **Manajer Operasional**
- ***Admin*/Kasir**
- **Petugas Produksi** (Petugas Pencucian dan Petugas Setrika & *Packing*)
# <a name="_5r4tu37mi6r4"></a>**Modul 2**
## <a name="_n3fazulukkbx"></a>**a. Judul Perangkat Lunak dan Metodologi Pengembangan Sistem**
**Judul:** Laundry Management System (LMS) - Sistem Manajemen Operasional Toko Laundry Berbasis Web.

**Metodologi:** Waterfall (Model Linear Terstruktur).

**Alasan Pemilihan Metodologi:** 1. **Requirement Terdefinisi:** Alur bisnis laundry (penerimaan, pencucian, setrika, pengambilan) bersifat sekuensial dan stabil. 2. **Skala UMKM:** Sangat efektif untuk sistem manajemen skala kecil hingga menengah (1 toko dengan 1-2 cabang kecil) agar biaya pengembangan terkontrol. 3. **Dokumentasi Terstruktur:** Memudahkan sinkronisasi data operasional antara admin dan pemilik secara bertahap sesuai standar akademik.
## <a name="_2wa16l2ud5y6"></a>**b. Kondisi Awal Kasus (Analisis Masalah Umum Laundry)**
Berdasarkan analisis terhadap kendala yang umum dihadapi oleh operasional toko laundry konvensional:

1. **Pencatatan Manual:** Mayoritas transaksi masih dicatat pada nota kertas manual, yang berisiko tinggi hilang, sobek, atau terkena air.
1. **Kesalahan Kalkulasi:** Terjadi risiko kesalahan perhitungan biaya (human error) rata-rata 5% per bulan akibat kalkulasi manual berat (kg) dikalikan tarif paket.
1. **Ketidakteraturan Status:** Antrian cucian sering tidak terorganisir dengan baik karena tidak adanya sistem monitoring status (Proses/Selesai) yang dapat dilihat secara cepat.
1. **Kehilangan Informasi Pelanggan:** Data pelanggan tidak terdata secara digital, sehingga sulit untuk melakukan pencarian riwayat transaksi atau memberikan promo loyalitas.
1. **Kesulitan Monitoring Jarak Jauh:** Pemilik toko yang memiliki lebih dari satu cabang kesulitan memantau laporan pendapatan harian tanpa harus datang langsung ke lokasi fisik.
## <a name="_b1j46xxdgts5"></a>**c. Kebutuhan Fungsional (Functional Requirement)**
- **FR-01:** Sistem harus menyediakan fitur login dengan autentikasi untuk membatasi akses data.
- **FR-02:** Sistem harus memiliki pembagian hak akses (Owner dan Kasir/Admin).
- **FR-03:** Sistem harus mampu mencatat data transaksi masuk (pilihan paket layanan dan berat cucian).
- **FR-04:** Sistem mampu melakukan perhitungan total biaya secara otomatis berdasarkan tarif paket.
- **FR-05:** Sistem harus memiliki fitur validasi input (misal: berat cucian tidak boleh nol atau negatif).
- **FR-06:** Sistem harus mampu mengubah dan menampilkan status operasional cucian (Antre, Proses, Selesai, Diambil).
- **FR-07:** Sistem mampu menyimpan dan menampilkan database pelanggan (Nama dan Nomor Telepon).
- **FR-08:** Sistem mampu mencetak struk transaksi digital dalam format PDF.
- **FR-09:** Sistem mampu menampilkan dashboard laporan pendapatan harian, mingguan, dan bulanan untuk Owner.
- **FR-10:** Sistem harus menyediakan fitur Logout untuk keamanan akun.
## <a name="_99eqd3b1awqp"></a>**d. Kebutuhan Non-Fungsional (Non-Functional Requirement)**
- **Security:** Implementasi enkripsi password dan proteksi login berbasis peran.
- **Performance:** Sistem harus responsif dalam memproses input transaksi dalam waktu kurang dari 5 detik.
- **Availability:** Sistem harus tersedia minimum 95% selama jam operasional toko berlangsung.
- **Accuracy:** Seluruh perhitungan aritmatika biaya transaksi harus memiliki tingkat akurasi 100%.
- **Backup:** Database harus dicadangkan secara periodik untuk mencegah kehilangan data akibat kerusakan server.
## <a name="_py0ir1v1i1b9"></a>**e. Tahapan Metodologi Pengembangan (Waterfall)**
1. **Perencanaan dan Studi Kelayakan Proyek:** "Studi kelayakan pada intinya mencoba meninjau apakah kebutuhan akan pengembangan sistem informasi baru (baik sistem baru sama sekali maupun pengganti sistem yang lama) layak secara ekonomis maupun dari sisi kelayakan lainnya."

   **Implementasi:** Melakukan analisis biaya operasional sistem dibanding manfaat efisiensi yang didapat toko.

1. **Analisis Sistem:** "Data yang diperoleh dari kegiatan investigasi sistem dianalisis untuk menentukan; 1) Domain informasi, 2) Fungsi-fungsi yang akan dilakukan oleh sistem baru, 3) Tingkah laku sistem, 4) Model-model yang menggambarkan informasi, fungsi, dan tingkah laku."

   **Implementasi:** Mengidentifikasi alur data mulai dari pakaian kotor masuk hingga laporan keuangan keluar.

1. **Perancangan (Desain) Sistem:** "tim proyek mengubah kebutuhan bisnis sistem menjadi kebutuhan sistem yang menggambarkan detail teknis untuk membangun sistem."

   **Implementasi:** Merancang skema database (ERD) dan tampilan antarmuka (UI) web.

1. **Implementasi Sistem:** "rancangan yang dihasilkan pada tahap perancangan sistem diwujudkan. Program komputer ditulis, dikompilasi, dan diujicoba."

   **Implementasi:** Menulis kode program menggunakan PHP/JavaScript dan database MySQL.

1. **Peninjauan Ulang dan Perawatan Sistem:** "Tahapan peninjauan ulang dan perawatan dilakukan setelah sistem yang dibangun telah diimplementasikan dan telah berjalan."

   **Implementasi:** Melakukan pengecekan rutin pada database dan memperbarui fitur jika ditemukan bug saat operasional.



## <a name="_hm4cyasvgui5"></a>**f. Flowchart Logika Operasional Laundry**
![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.002.png)


# <a name="_hv8mjphk3pgo"></a>**Modul 3**
## <a name="_ve1s0tfasdvk"></a>**1. Dasar Teori**
Flowchart atau diagram alir merupakan salah satu alat bantu dalam analisis dan perancangan sistem informasi yang digunakan untuk memodelkan alur proses secara terstruktur. Fungsi utama dari flowchart adalah memberi gambaran jalannya sebuah program dari satu proses ke proses lainnya. Fungsi lain dari flowchart adalah untuk menyederhanakan rangkaian prosedur agar memudahkan pemahaman terhadap informasi tersebut. Dalam perancangannya, flowchart menggunakan simbol-simbol standar yang telah ditetapkan untuk merepresentasikan proses, keputusan, input/output, dan terminator.
## <a name="_em3mh01byaph"></a>**2. Flowchart Sistem Informasi Manajemen Laundry**
Flowchart ini dirancang untuk memodelkan proses operasional dan manajerial pada Sistem Informasi Manajemen Laundry berbasis web. Perancangan ini mengintegrasikan kontrol akses berbasis peran (*Role Based Access Control*) serta manajemen data terpusat menggunakan simbol standar internasional.

flowchart TD

`    `A([Start]) --> B[/Manual Input: Login/]

`    `B --> C{Autentikasi Valid?}

`    `C -- Tidak --> B

`    `C -- Ya --> D{Role Based Access Control}



`    `%% Jalur Admin/Kasir

`    `D -- Admin --> E[/Manual Input: Data Transaksi & Pelanggan/]

`    `E --> F[Processing: Kalkulasi Tarif & Validasi Diskon]

`    `F --> G[(Disk Storage: Simpan Data Transaksi)]

`    `G --> H[/Document: Cetak Nota Digital PDF/]

`    `H --> I[Processing: Update Progres Status Cucian]

`    `I --> J{Status Selesai?}

`    `J -- Belum --> I

`    `J -- Ya --> K[/Display: Notifikasi Pengambilan/]



`    `%% Jalur Owner

`    `D -- Owner --> L[/Display: Visualisasi Dashboard Harian/]

`    `L --> M[Processing: Rekapitulasi Pendapatan Cabang]

`    `M --> N[/Document: Cetak Laporan Keuangan Bulanan/]



`    `K --> O{Logout?}

`    `N --> O

`    `O -- Tidak --> D

`    `O -- Ya --> P([End])

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.003.png)
## <a name="_n77vbesbagy"></a>**3. Tahapan Sistem Secara Berurutan**
Berikut adalah rincian tahapan sistem yang disusun secara sistematis berdasarkan alur logika di atas:

1. **Inisialisasi Sistem (Start)** Sistem dijalankan oleh pengguna melalui peramban web (browser).
1. **Autentikasi Pengguna (Login & Validasi)** Pengguna memasukkan kredensial secara manual. Sistem melakukan pengecekan pada basis data untuk memvalidasi identitas. Jika gagal, pengguna tetap berada pada halaman login.
1. **Role Based Access Control (RBAC)** Sistem melakukan pemilihan proses berdasarkan peran pengguna (Admin/Kasir atau Owner) untuk membatasi hak akses data.
1. **Proses Operasional Admin/Kasir:**
   1. **Input Data:** Mencatat detail cucian pelanggan secara manual on-line.
   1. **Kalkulasi & Validasi:** Sistem menghitung tarif secara otomatis termasuk promo tanpa perlu kalkulasi luar sistem.
   1. **Data Persistence:** Penyimpanan data ke dalam *Disk Storage* secara permanen untuk keamanan informasi.
   1. **Output Dokumentasi:** Menghasilkan nota digital sebagai bukti transaksi fisik yang sah.
   1. **Update Status:** Memantau alur operasional hingga pakaian siap dikembalikan.
1. **Proses Monitoring Owner:**
   1. **Visualisasi Data:** Menampilkan performa bisnis cabang pada layar monitor (*Display*).
   1. **Konsolidasi Data:** Sistem melakukan rekapitulasi otomatis data pendapatan dari berbagai cabang.
   1. **Laporan Manajemen:** Menghasilkan dokumen laporan keuangan periodik untuk arsip manajemen.
1. **Terminasi Sesi (Logout & End)** Sistem mengakhiri sesi pengguna dan membersihkan memori akses sebelum aplikasi benar-benar berhenti.

Dengan perancangan flowchart ini, alur logika sistem menjadi lebih terstruktur sehingga meminimalkan kesalahan implementasi pada tahap pengkodean.
# <a name="_tn3e9nfjzwbv"></a>**Modul 4**
## <a name="_zbgij4o09c73"></a>**1. Dasar Teori**
Basis data merupakan kumpulan data yang saling berhubungan yang disimpan secara bersama tanpa redundansi yang tidak perlu agar dapat dimanfaatkan kembali dengan cepat dan mudah. Perancangannya dilakukan melalui siklus *Database Life Cycle* (DBLC) yang dimulai dari desain konseptual (ERD) untuk menjelaskan hubungan antar data, dilanjutkan dengan desain logik (CDM) untuk memvalidasi struktur, dan diakhiri dengan desain fisik (PDM) yang siap diimplementasikan ke dalam *Database Management System* (DBMS).
## <a name="_itycs1b23g77"></a>**2. Hasil Analisis Desain Basis Data (ERD & CDM)**
Desain konseptual ini memodelkan seluruh objek informasi penting dalam ekosistem bisnis laundry. Struktur data yang dihasilkan meliputi:

- **Manajemen Akses (users):** Mengelola kredensial dan pembagian peran (*Owner*/*Admin*) untuk menjamin keamanan operasional.
- **Profil Pelanggan (pelanggan):** Menyimpan identitas dan kontak pelanggan sebagai basis data pemasaran dan operasional.
- **Katalog Layanan (layanan):** Master data tarif yang memudahkan manajemen dalam memperbarui harga layanan secara dinamis.
- **Pola Header-Detail (transaksi & detail\_transaksi):** Memisahkan data umum nota (tanggal, total, status) dengan rincian item cucian (berat, subtotal per jenis layanan). Hal ini memungkinkan satu nota memuat berbagai kategori layanan sekaligus.

**Kamus Data (Tabel Database):**

|**Nama Tabel**|**Atribut Utama**|**Tipe Data**|**Keterangan**|
| :- | :- | :- | :- |
|**users**|id\_user (PK)|int|Identifikasi unik pengguna sistem.|
||username|varchar||
||password|varchar||
||role|enum|Akses: 'Owner', 'Admin'.|
|**pelanggan**|id\_pelanggan (PK)|int|Identifikasi unik pelanggan.|
||nama\_pelanggan|varchar||
||nomor\_telepon|varchar||
||alamat|text||
|**layanan**|id\_layanan (PK)|int|Referensi layanan (master data).|
||nama\_layanan|varchar||
||harga\_per\_kg|decimal|Referensi harga per kilogram/pcs.|
|**transaksi**|id\_transaksi (PK)|int|**Header nota** penghubung petugas & pelanggan.|
||id\_user (FK)|int|Kasir yang menginput.|
||id\_pelanggan (FK)|int|Pelanggan pemilik cucian.|
||tanggal\_transaksi|datetime|Waktu nota dibuat.|
||total\_harga|decimal|Grand total pembayaran.|
||status\_cucian|enum|'Antre', 'Proses', 'Selesai', 'Diambil'.|
|**detail\_transaksi**|id\_detail (PK)|int|**Rincian item** dalam satu nota.|
||id\_transaksi (FK)|int|Menginduk ke nota mana.|
||id\_layanan (FK)|int|Jenis layanan yang dipilih.|
||berat|float|Berat dalam Kg / jumlah Pcs.|
||subtotal|decimal|Hasil kali berat \* harga\_per\_kg.|

**Gambar 4.1. ERD LMS (Laundry Management System)![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.004.png)**

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.005.png)

**Gambar 4.2. CDM LMS**
## <a name="_1hni8hpb5899"></a>**3. Implementasi Fisik (Physical Data Model)**
PDM yang dirancang telah menentukan spesifikasi teknis yang presisi untuk setiap tabel, memastikan efisiensi penyimpanan dan integritas relasi:

|**Tabel**|**Kolom Utama (PK/FK)**|**Tipe Data**|**Peran Data**|
| :-: | :-: | :-: | :-: |
|**users**|id\_user (PK)|int|Autentikasi dan identifikasi petugas.|
|**pelanggan**|id\_pelanggan (PK)|int|Identifikasi unik pelanggan.|
|**layanan**|id\_layanan (PK)|int|Referensi harga per kilogram.|
|**transaksi**|id\_transaksi (PK), id\_user (FK), id\_pelanggan (FK)|int, datetime, decimal|Header nota yang menghubungkan petugas dan pelanggan.|
|**detail\_transaksi**|id\_detail (PK), id\_transaksi (FK), id\_layanan (FK)|int, float, decimal|Rincian item yang menghubungkan nota dengan jenis layanan.|

|<p>erDiagram</p><p>`    `users {</p><p>`        `int id\_user PK</p><p>`        `varchar username</p><p>`        `varchar password</p><p>`        `enum role "Owner, Admin"</p><p>`    `}</p><p>`    `pelanggan {</p><p>`        `int id\_pelanggan PK</p><p>`        `varchar nama\_pelanggan</p><p>`        `varchar nomor\_telepon</p><p>`        `text alamat</p><p>`    `}</p><p>`    `layanan {</p><p>`        `int id\_layanan PK</p><p>`        `varchar nama\_layanan</p><p>`        `decimal harga\_per\_kg</p><p>`    `}</p><p>`    `transaksi {</p><p>`        `int id\_transaksi PK</p><p>`        `int id\_user FK</p><p>`        `int id\_pelanggan FK</p><p>`        `datetime tanggal\_transaksi</p><p>`        `decimal total\_harga</p><p>`        `enum status\_cucian "Antre, Proses, Selesai, Diambil"</p><p>`    `}</p><p>`    `detail\_transaksi {</p><p>`        `int id\_detail PK</p><p>`        `int id\_transaksi FK</p><p>`        `int id\_layanan FK</p><p>`        `float berat</p><p>`        `decimal subtotal</p><p>`    `}</p><p></p><p>`    `users ||--o{ transaksi : "id\_user"</p><p>`    `pelanggan ||--o{ transaksi : "id\_pelanggan"</p><p>`    `transaksi ||--|{ detail\_transaksi : "id\_transaksi"</p><p>`    `layanan ||--o{ detail\_transaksi : "id\_layanan"</p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.006.png)

**Gambar 4.3. PDM LMS**

## <a name="_29apmlwg5ouw"></a>**4. Kesimpulan**
Rancangan ERD, CDM, dan PDM ini telah memenuhi standar normalisasi data yang baik. Pemisahan antara header dan detail transaksi menjamin sistem dapat menghasilkan laporan pendapatan yang sangat detail (per layanan, per petugas, atau per pelanggan) dengan risiko redundansi yang minimal. Struktur ini memberikan fondasi yang sangat kuat bagi pengembang untuk melanjutkan ke tahap *coding* database menggunakan SQL.
# <a name="_v9o6c280hj5v"></a>**Modul 5**
## <a name="_nr9f534xeh49"></a>**1. Dasar Teori**
Data Flow Diagram (DFD) merupakan alat bantu dalam perancangan sistem terstruktur yang menggambarkan arus data dalam sistem secara logis tanpa mempertimbangkan lingkungan fisik. Melalui pendekatan terstruktur, DFD memungkinkan pengembang untuk memecah sistem yang kompleks menjadi bagian-bagian yang lebih kecil melalui teknik dekomposisi. Komponen utama DFD meliputi entitas eksternal (terminator), proses yang mentransformasikan input menjadi output, aliran data (data flow), dan penyimpanan data (data store). Penggunaan DFD memastikan bahwa seluruh kebutuhan informasi sistem terdefinisikan dengan jelas, mulai dari level teratas (Diagram Konteks) hingga level yang lebih rinci.
## <a name="_ww1kkhtch6y9"></a>**2. Diagram Konteks (Level 0)**
Diagram konteks menggambarkan ruang lingkup sistem secara global serta interaksi antara sistem dengan entitas luar (Pelanggan, Kasir/Admin, dan Owner).

|<p>graph LR</p><p>`    `P((0. Sistem Informasi <br/> Manajemen Laundry))</p><p>    </p><p>`    `E1[Pelanggan]</p><p>`    `E2[Kasir / Admin]</p><p>`    `E3[Owner]</p><p></p><p>`    `%% Aliran Pelanggan</p><p>`    `E1 -- Data Pelanggan --> P</p><p>`    `P -- Struk Nota Digital --> E1</p><p></p><p>`    `%% Aliran Kasir</p><p>`    `E2 -- Data Login --> P</p><p>`    `E2 -- Data Transaksi & Item --> P</p><p>`    `E2 -- Update Status Cucian --> P</p><p>`    `P -- Info Validasi & Status --> E2</p><p></p><p>`    `%% Aliran Owner</p><p>`    `E3 -- Data Login --> P</p><p>`    `E3 -- Update Harga/Layanan --> P</p><p>`    `P -- Laporan Pendapatan --> E3</p><p>`    `P -- Rekap Data Transaksi --> E3</p><p></p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.007.png)

**Gambar 5.1** Diagram Konteks Sistem Informasi Manajemen Laundry
## <a name="_nut85kizg76"></a>**3. Diagram Dekomposisi**
Diagram ini menunjukkan hierarki proses fungsional yang ada di dalam sistem laundry.

|<p>graph TD</p><p>`    `P0[Sistem Informasi Manajemen Laundry]</p><p>    </p><p>`    `P1[1.0 Manajemen Akun]</p><p>`    `P2[2.0 Olah Data Master]</p><p>`    `P3[3.0 Operasional Transaksi]</p><p>`    `P4[4.0 Pembuatan Laporan]</p><p></p><p>`    `P0 --> P1</p><p>`    `P0 --> P2</p><p>`    `P0 --> P3</p><p>`    `P0 --> P4</p><p></p><p>`    `P3 --> P3.1[3.1 Input Header Transaksi]</p><p>`    `P3 --> P3.2[3.2 Input Detail Item & Berat]</p><p>`    `P3 --> P3.3[3.3 Update Status Cucian]</p><p>    </p><p>`    `P4 --> P4.1[4.1 Rekap Harian]</p><p>`    `P4 --> P4.2[4.2 Laporan per Cabang]</p><p></p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.008.png)

**Gambar 5.2** Diagram Dekomposisi Fungsional Sistem Manajemen Laundry
## <a name="_3mrxb76ohzfv"></a>**4. DFD Level 0 (Overview Diagram)**
DFD Level 0 menguraikan aliran data ke dalam proses-proses utama serta interaksinya dengan *Data Store* yang telah dirancang di modul sebelumnya.

|<p>flowchart TD</p><p>`    `%% Entitas</p><p>`    `Admin[Kasir / Admin]</p><p>`    `Owner[Owner]</p><p>`    `Cust[Pelanggan]</p><p></p><p>`    `%% Proses</p><p>`    `P1((1.0 <br/> Login & <br/> Autentikasi))</p><p>`    `P2((2.0 <br/> Olah Data <br/> Master))</p><p>`    `P3((3.0 <br/> Transaksi <br/> Operasional))</p><p>`    `P4((4.0 <br/> Pembuatan <br/> Laporan))</p><p></p><p>`    `%% Data Store</p><p>`    `D1[(D1. users)]</p><p>`    `D2[(D2. pelanggan)]</p><p>`    `D3[(D3. layanan)]</p><p>`    `D4[(D4. transaksi)]</p><p>`    `D5[(D5. detail\_transaksi)]</p><p></p><p>`    `%% Aliran Data Proses 1</p><p>`    `Admin -- Data Login --> P1</p><p>`    `Owner -- Data Login --> P1</p><p>`    `P1 -- Validasi Akun --> D1</p><p>`    `D1 -- Info Role --> P1</p><p>`    `P1 -- Akses Menu --> Admin</p><p>`    `P1 -- Akses Menu --> Owner</p><p></p><p>`    `%% Aliran Data Proses 2</p><p>`    `Admin -- Input Pelanggan --> P2</p><p>`    `Owner -- Update Harga --> P2</p><p>`    `P2 -- Simpan Data --> D2</p><p>`    `P2 -- Simpan Layanan --> D3</p><p></p><p>`    `%% Aliran Data Proses 3</p><p>`    `Admin -- Data Cucian & Berat --> P3</p><p>`    `P3 -- Cek Harga --> D3</p><p>`    `P3 -- Simpan Header --> D4</p><p>`    `P3 -- Simpan Detail --> D5</p><p>`    `P3 -- Struk --> Cust</p><p>`    `Admin -- Update Progres --> P3</p><p>`    `P3 -- Update Status --> D4</p><p></p><p>`    `%% Aliran Data Proses 4</p><p>`    `D4 -- Data Pendapatan --> P4</p><p>`    `D5 -- Data Item Layanan --> P4</p><p>`    `P4 -- Laporan Evaluasi --> Owner</p><p></p><p></p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.009.png)

**Gambar 5.3** Data Flow Diagram (DFD) Level 0 Sistem Manajemen Laundry
## <a name="_uf29mn6qz458"></a>**5. DFD Level 1 (Proses 3.0: Operasional Transaksi)**
![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.010.png)

**Gambar 5.4** Data Flow Diagram (DFD) Level 1 Proses 3.0 Operasional Transaksi

Menjelaskan secara detail proses pencatatan nota laundry menggunakan pola *Header-Detail*.

1. **3.1 Input Header Transaksi:** Mengidentifikasi pelanggan dan mencatat waktu masuk cucian ke tabel transaksi.
1. **3.2 Input Detail Item:** Menghitung tarif per item berdasarkan berat dan jenis layanan, lalu disimpan ke tabel detail\_transaksi.
1. **3.3 Update Status Cucian:** Mengubah status dari Antre, Proses, Selesai, hingga Diambil.
## <a name="_gd4byde99fty"></a>**6. Kesimpulan**
Melalui perancangan Data Flow Diagram ini, alur data pada Sistem Informasi Manajemen Laundry telah terpetakan secara terstruktur. Penggunaan pola *Header-Detail* yang sebelumnya dirancang pada ERD/PDM kini terimplementasi secara fungsional melalui pemisahan aliran data pada Proses 3.0. DFD ini menjamin bahwa seluruh transformasi data, mulai dari input manual kasir hingga menjadi informasi laporan bagi Owner, berjalan secara logis dan meminimalkan risiko kehilangan data.

# <a name="_qhcdsc5ivlcg"></a>**
# <a name="_mcf1ts8wh20j"></a>**Modul 6**
## <a name="_6e0h8uivez5w"></a>**1. Dasar Teori**
Unified Modelling Language (UML) adalah bahasa standar untuk visualisasi, spesifikasi, perancangan, dan pendokumentasian struktur perangkat lunak, khususnya pada sistem berorientasi objek. Salah satu diagram utama dalam UML adalah *Use Case Diagram*. Diagram ini menggambarkan interaksi antara aktor (pengguna atau sistem lain) dengan sistem informasi yang dibangun. *Use Case* berfungsi untuk memodelkan persyaratan fungsional sistem dari sudut pandang pengguna, mendefinisikan siapa saja aktor yang terlibat, serta aktivitas apa saja yang dapat mereka lakukan di dalam sistem.
## <a name="_fcemgp9vkr1y"></a>**2. Identifikasi Aktor dan Use Case**
Berdasarkan analisis pada modul sebelumnya, sistem ini melibatkan dua aktor utama dan satu aktor pasif dengan peran sebagai berikut:
### <a name="_8c9qzmcatmn"></a>**2.1. Daftar Aktor**
1. **Admin / Kasir:** Bertanggung jawab atas operasional harian, mulai dari pendaftaran pelanggan, pencatatan transaksi, hingga memperbarui status cucian.
1. **Owner:** Memiliki otoritas manajerial untuk mengatur data master (layanan dan harga) serta memantau performa bisnis melalui laporan.
1. **Pelanggan (Aktor Pasif):** Pihak yang datanya diregistrasi dan menerima output berupa nota/struk digital.
### <a name="_yjpjwcgmuux7"></a>**2.2. Daftar Use Case**
- **Login:** Proses autentikasi masuk ke sistem.
- **Registrasi Pelanggan:** Mengelola data identitas pelanggan baru.
- **Kelola Data Layanan & Harga:** Mengatur katalog paket laundry (khusus Owner).
- **Transaksi Laundry:** Proses penginputan item cucian dan berat.
- **Cetak Nota:** Menghasilkan struk fisik/digital sebagai bukti transaksi.
- **Update Status Cucian:** Memperbarui progres (Antre/Proses/Selesai).
- **Lihat Laporan Pendapatan:** Memantau rekapitulasi keuangan (khusus Owner).
- **Logout:** Mengakhiri sesi akses sistem.
## <a name="_cj0y17lq8ce9"></a>**3. Use Case Diagram**
Diagram di bawah ini memvisualisasikan hubungan antara aktor dan fungsionalitas sistem informasi laundry.

|<p>graph LR</p><p>`    `subgraph Sistem\_Laundry [Sistem Informasi Manajemen Laundry]</p><p>`        `UC1(Login)</p><p>`        `UC2(Registrasi Pelanggan)</p><p>`        `UC3(Transaksi Laundry)</p><p>`        `UC4(Cetak Nota)</p><p>`        `UC5(Update Status Cucian)</p><p>`        `UC6(Kelola Master Layanan)</p><p>`        `UC7(Lihat Laporan Pendapatan)</p><p>`        `UC8(Logout)</p><p>`        `UC9(Validasi Akun)</p><p>`    `end</p><p></p><p>`    `%% Hubungan Aktor dengan Use Case</p><p>`    `Admin((Admin / Kasir)) --- UC1</p><p>`    `Admin --- UC2</p><p>`    `Admin --- UC3</p><p>`    `Admin --- UC5</p><p>`    `Admin --- UC8</p><p></p><p>`    `Owner((Owner)) --- UC1</p><p>`    `Owner --- UC6</p><p>`    `Owner --- UC7</p><p>`    `Owner --- UC8</p><p></p><p>`    `%% Relasi Include</p><p>`    `UC1 -.->|<< include >>| UC9</p><p>`    `UC3 -.->|<< include >>| UC4</p><p></p><p>`    `%% Styling</p><p>`    `style UC1 fill:#f9f,stroke:#333</p><p>`    `style UC3 fill:#bbf,stroke:#333</p><p>`    `style UC7 fill:#bfb,stroke:#333</p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.011.png)

**Gambar 6.1** Use Case Diagram Sistem Informasi Manajemen Laundry
## <a name="_16aa6tnhqy3v"></a>**4. Penjelasan Rinci Tahapan Use Case**
Berikut adalah penjelasan fungsional dari setiap interaksi pada diagram di atas:

1. **Login & Validasi Akun (include):** Baik Admin maupun Owner harus melakukan login. Sistem secara otomatis melakukan *include* validasi akun ke basis data untuk memastikan kredensial dan hak akses (*Role*) sudah sesuai.
1. **Registrasi Pelanggan:** Admin memasukkan data pelanggan ke dalam sistem. Hal ini berkaitan dengan *Data Store* pelanggan pada perancangan sebelumnya.
1. **Kelola Data Layanan & Harga:** Use case ini eksklusif bagi Owner untuk memastikan standarisasi harga di toko utama maupun cabang kecil tetap terjaga.
1. **Transaksi Laundry & Cetak Nota (include):** Saat Admin memproses transaksi laundry (mengisi berat dan layanan), sistem secara otomatis mencetak nota sebagai bukti yang sah bagi pelanggan.
1. **Update Status Cucian:** Admin memantau alur operasional. Perubahan status di sini akan mempengaruhi data yang ditampilkan pada dashboard monitoring Owner.
1. **Lihat Laporan Pendapatan:** Owner mengakses menu laporan untuk melihat rekapitulasi transaksi harian atau bulanan guna pengambilan keputusan bisnis.
1. **Logout:** Aktor keluar dari sistem untuk menjaga keamanan data operasional.
## <a name="_1w651qpaaty2"></a>**5. Kesimpulan**
Perancangan *Use Case Diagram* ini telah menyinkronkan interaksi aktor dengan alur data yang telah didefinisikan pada DFD. Dengan adanya pemisahan peran yang jelas antara Admin dan Owner, serta penggunaan relasi *include* pada proses login dan transaksi, sistem ini memiliki batasan akses yang kuat serta alur kerja operasional yang sistematis. Hal ini akan mempermudah tahap selanjutnya dalam perancangan struktur kelas (*Class Diagram*).

# <a name="_nw7gpvttu7qh"></a>**
# <a name="_wchc9tte9dxy"></a>**Modul 7**
## <a name="_emgf0dapfau3"></a>**1. Dasar Teori**
Class Diagram atau diagram kelas adalah satu jenis dari Structure Diagrams yang ada pada UML (Unified Modelling Language). Class Diagram digunakan untuk menggambarkan struktur sistem dari segi pendefinisian kelas-kelas yang akan dibuat untuk membangun sistem. Class Diagram bersifat statis, dalam artian diagram kelas bukan menjelaskan apa yang terjadi jika kelas-kelasnya berhubungan, melainkan menjelaskan hubungan apa yang terjadi.

Susunan struktur class yang baik pada Class Diagram memiliki jenis-jenis kelas sebagai berikut:

1. **Kelas Main:** Kelas yang memiliki fungsi awal dieksekusi ketika sistem dijalankan.
1. **Kelas View:** Kelas yang mendefinisikan dan mengatur tampilan ke pengguna.
1. **Kelas Controller:** Kelas yang menangani fungsi-fungsi (proses bisnis) pada perangkat lunak.
1. **Kelas Model:** Kelas yang digunakan untuk memegang atau membungkus data (Entity) yang diambil maupun disimpan pada basis data.
## <a name="_lbcdoec8t2ys"></a>**2. Analisis Struktur Kelas (MVC Pattern)**
Berdasarkan analisis kebutuhan fungsional dan teknis pada modul-modul sebelumnya, berikut adalah pembagian kelas untuk Sistem Informasi Manajemen Laundry:
### <a name="_e33inz1l0661"></a>**2.1. Model Class (Entity)**
Mewakili struktur data yang ada pada basis data (PDM):

- **User:** Menyimpan kredensial dan peran (Admin/Owner).
- **Pelanggan:** Menyimpan profil pelanggan.
- **Layanan:** Menyimpan katalog paket laundry.
- **Transaksi:** Sebagai header nota laundry.
- **DetailTransaksi:** Sebagai rincian item cucian (Pola Header-Detail).
### <a name="_c7a50d56afev"></a>**2.2. Controller Class (Logic)**
Menangani proses bisnis utama:

- **AuthController:** Menangani validasi login dan manajemen sesi.
- **TransactionController:** Menangani logika perhitungan biaya, promo ulang tahun, dan update status.
- **ReportController:** Menangani penarikan data untuk laporan Owner.
### <a name="_sem04zirsaoe"></a>**2.3. View Class (UI)**
Mengatur antarmuka pengguna:

- **LoginView:** Tampilan autentikasi.
- **DashboardView:** Tampilan utama (Admin/Owner).
- **TransactionView:** Form input cucian dan update status.
## <a name="_xxtk7fnkkeu3"></a>**3. Class Diagram Sistem Informasi Manajemen Laundry**

|<p>classDiagram</p><p>`    `class App {</p><p>`        `+main()</p><p>`    `}</p><p></p><p>`    `class LoginView {</p><p>`        `+showLogin()</p><p>`        `+displayError()</p><p>`    `}</p><p></p><p>`    `class TransactionView {</p><p>`        `+showFormTransaksi()</p><p>`        `+displayInvoice()</p><p>`        `+updateStatusUI()</p><p>`    `}</p><p></p><p>`    `class AuthController {</p><p>`        `-currentUser: User</p><p>`        `+login(username, password)</p><p>`        `+logout()</p><p>`        `+checkRole()</p><p>`    `}</p><p></p><p>`    `class TransactionController {</p><p>`        `+createTransaksi()</p><p>`        `+addDetailItem()</p><p>`        `+calculateTotal()</p><p>`        `+applyPromoBirthday()</p><p>`        `+updateStatus(id\_transaksi)</p><p>`    `}</p><p></p><p>`    `class User {</p><p>`        `-id\_user: int</p><p>`        `-username: string</p><p>`        `-password\_hash: string</p><p>`        `-role: string</p><p>`        `+getIdUser()</p><p>`        `+getRole()</p><p>`    `}</p><p></p><p>`    `class Pelanggan {</p><p>`        `-id\_pelanggan: int</p><p>`        `-nama: string</p><p>`        `-telepon: string</p><p>`        `-tgl\_lahir: date</p><p>`        `+getTglLahir()</p><p>`    `}</p><p></p><p>`    `class Layanan {</p><p>`        `-id\_layanan: int</p><p>`        `-nama\_layanan: string</p><p>`        `-harga\_per\_kg: decimal</p><p>`    `}</p><p></p><p>`    `class Transaksi {</p><p>`        `-id\_transaksi: int</p><p>`        `-tgl\_masuk: datetime</p><p>`        `-total\_harga: decimal</p><p>`        `-status: string</p><p>`        `+setTotal()</p><p>`        `+setStatus()</p><p>`    `}</p><p></p><p>`    `class DetailTransaksi {</p><p>`        `-id\_detail: int</p><p>`        `-berat: float</p><p>`        `-subtotal: decimal</p><p>`    `}</p><p></p><p>`    `%% Relationships</p><p>`    `App ..> AuthController : "initializes"</p><p>`    `LoginView ..> AuthController : "uses"</p><p>`    `TransactionView ..> TransactionController : "uses"</p><p>    </p><p>`    `AuthController --> User : "manages"</p><p>`    `TransactionController --> Transaksi : "processes"</p><p>`    `TransactionController --> Pelanggan : "validates"</p><p>    </p><p>`    `User "1" -- "0..\*" Transaksi : "records"</p><p>`    `Pelanggan "1" -- "0..\*" Transaksi : "makes"</p><p>`    `Transaksi "1" \*-- "1..\*" DetailTransaksi : "contains (composition)"</p><p>`    `Layanan "1" -- "0..\*" DetailTransaksi : "referred by"</p>|
| :- |
##
![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.012.png)
## <a name="_ve3ychrty7sj"></a><a name="_b2koq342kv52"></a>**4. Deskripsi Relasi dan Multiplisitas**
1. **Asosiasi (User ke Transaksi):** Satu User (Kasir) dapat memproses banyak objek Transaksi (1..\*), namun satu Transaksi hanya dicatat oleh satu User.
1. **Komposisi (Transaksi ke DetailTransaksi):** Hubungan ini menggunakan agregasi kuat/komposisi. Jika objek Transaksi dihapus, maka objek DetailTransaksi yang terkait dengannya juga akan hilang. Satu Transaksi harus memiliki minimal satu atau lebih DetailTransaksi (1..\*).
1. **Asosiasi (Pelanggan ke Transaksi):** Satu Pelanggan dapat melakukan banyak Transaksi (0..\*), yang memungkinkan pelacakan riwayat cucian secara akurat.
1. **Dependency (View ke Controller):** Kelas View bergantung pada Controller untuk memproses data. Misalnya, TransactionView memanggil metode di TransactionController untuk menghitung total biaya secara otomatis.
## <a name="_1l4haqk0zrwa"></a>**5. Kesimpulan**
Perancangan Class Diagram ini telah menyinkronkan seluruh artefak perancangan sebelumnya (ERD dan Use Case) ke dalam struktur kelas yang statis. Penggunaan pola Header-Detail yang direpresentasikan melalui relasi antara Transaksi dan DetailTransaksi menjamin fleksibilitas sistem dalam menangani operasional laundry. Struktur ini memberikan panduan teknis yang jelas bagi programmer untuk mengimplementasikan kode program secara konsisten sesuai dengan kebutuhan bisnis yang telah dianalisis.
# <a name="_hgho9nvocomc"></a>**
# <a name="_wrve5qq2bf25"></a>**Modul 8**
## <a name="_vpf383y0w5yb"></a>**1. Dasar Teori**
Sequence diagram menggambarkan interaksi antar objek di dalam dan disekitar sistem (termasuk pengguna, display, dan sebagainya) berupa message yang digambarkan terhadap waktu. Sequence diagram terdiri antara dimensi vertikal (waktu) dan dimensi horizontal (objek-objek yang terkait). Sequence diagram biasa digunakan untuk menggambarkan skenario atau rangkaian langkah-langkah yang dilakukan sebagai respons dari sebuah event untuk menghasilkan output tertentu.

Dalam pengembangannya, kelas-kelas diidentifikasi berdasarkan jenisnya:

1. **Boundary Class:** Kelas yang menghubungkan user dengan sistem aplikasi (User Interface).
1. **Control Class:** Kelas yang mengkoordinasi atau mengendalikan aktivitas dalam sistem (Logic).
1. **Entity Class:** Kelas yang berhubungan dengan data atau informasi yang digunakan oleh sistem (Database).
## <a name="_swgwlv4jcqy2"></a>**2. Skenario Sequence Diagram**
Berikut adalah perancangan Sequence Diagram untuk skenario utama pada Sistem Informasi Manajemen Laundry:
### <a name="_thd2k8ndt4ma"></a>**2.1. Skenario 1: Login Pengguna (Admin/Owner)**
Skenario ini menggambarkan proses autentikasi aktor saat masuk ke dalam sistem.

|<p>sequenceDiagram</p><p>`    `actor User as Aktor (Admin/Owner)</p><p>`    `participant LV as LoginView (Boundary)</p><p>`    `participant AC as AuthController (Control)</p><p>`    `participant U as User (Entity)</p><p></p><p>`    `User->>LV: Input Username & Password</p><p>`    `LV->>AC: login(username, password)</p><p>`    `AC->>U: findUser(username)</p><p>`    `U-->>AC: userData</p><p>    </p><p>`    `alt Kredensial Valid</p><p>`        `AC->>AC: checkPassword()</p><p>`        `AC-->>LV: loginSuccess()</p><p>`        `LV-->>User: Tampilkan Dashboard</p><p>`    `else Kredensial Tidak Valid</p><p>`        `AC-->>LV: loginFailed()</p><p>`        `LV-->>User: Tampilkan Pesan Error</p><p>`    `end</p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.013.png)
### <a name="_p2v9mawm7qhb"></a>**2.2. Skenario 2: Transaksi Laundry (Header-Detail)**
Skenario ini merinci proses input transaksi yang melibatkan perhitungan tarif otomatis dan penyimpanan data ke tabel *header* dan *detail*.

|<p>sequenceDiagram</p><p>`    `actor Admin as Admin/Kasir</p><p>`    `participant TV as TransactionView (Boundary)</p><p>`    `participant TC as TransactionController (Control)</p><p>`    `participant T as Transaksi (Entity)</p><p>`    `participant DT as DetailTransaksi (Entity)</p><p>`    `participant L as Layanan (Entity)</p><p></p><p>`    `Admin->>TV: Input Data Pelanggan & Tgl</p><p>`    `TV->>TC: createTransaksi(id\_pelanggan)</p><p>`    `TC->>T: saveHeader()</p><p>    </p><p>`    `loop Tambah Item Cucian</p><p>`        `Admin->>TV: Input Layanan & Berat</p><p>`        `TV->>TC: addDetail(id\_layanan, berat)</p><p>`        `TC->>L: getHarga()</p><p>`        `L-->>TC: tarif</p><p>`        `TC->>TC: calculateSubtotal()</p><p>`        `TC->>DT: saveDetail()</p><p>`    `end</p><p>    </p><p>`    `TC->>TC: calculateTotal()</p><p>`    `TC->>TC: checkPromoBirthday()</p><p>`    `TC->>T: updateTotalPrice()</p><p>`    `TC-->>TV: transactionSaved()</p><p>`    `TV-->>Admin: Cetak Nota (Invoice)</p><p></p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.014.png)
### <a name="_8k3inomk1sb7"></a>**2.3. Skenario 3: Update Status Cucian**
Admin melakukan pembaruan status progres cucian agar bisa dipantau oleh sistem.

|<p>sequenceDiagram</p><p>`    `actor Admin as Admin/Kasir</p><p>`    `participant TV as TransactionView (Boundary)</p><p>`    `participant TC as TransactionController (Control)</p><p>`    `participant T as Transaksi (Entity)</p><p></p><p>`    `Admin->>TV: Pilih Transaksi & Update Status</p><p>`    `TV->>TC: updateStatus(id\_transaksi, status baru)</p><p>`    `TC->>T: setStatus()</p><p>`    `T-->>TC: success</p><p>`    `TC-->>TV: statusUpdated()</p><p>`    `TV-->>Admin: Tampilkan Status Baru</p><p></p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.015.png)

### <a name="_wn0g96nk7n0i"></a>**2.4. Skenario 4: Lihat Laporan Pendapatan (Owner)**
Owner mengakses dashboard untuk melihat rekapitulasi keuangan dari data transaksi.

|<p>sequenceDiagram</p><p>`    `actor Owner as Owner</p><p>`    `participant DV as DashboardView (Boundary)</p><p>`    `participant RC as ReportController (Control)</p><p>`    `participant T as Transaksi (Entity)</p><p></p><p>`    `Owner->>DV: Klik Menu Laporan</p><p>`    `DV->>RC: getReportData(periode)</p><p>`    `RC->>T: fetchAllTransactions()</p><p>`    `T-->>RC: listData</p><p>`    `RC->>RC: summarizeRevenue()</p><p>`    `RC-->>DV: displayReport(data)</p><p>`    `DV-->>Owner: Tampilkan Grafik Pendapatan</p>|
| :- |

![](Aspose.Words.e602c3fc-39b8-42eb-8837-9ed771e3d1f5.016.png)
## <a name="_c6z3mev3dfma"></a>**3. Penjelasan Rinci Interaksi Objek**
1. **Dimensi Waktu:** Setiap pesan (*message*) dikirim secara berurutan dari atas ke bawah, menunjukkan urutan eksekusi pada *runtime*.
1. **Fragmen alt:** Digunakan pada skenario Login untuk menangani dua kondisi berbeda (sukses atau gagal) berdasarkan validasi data.
1. **Fragmen loop:** Digunakan pada skenario Transaksi untuk memungkinkan Admin memasukkan banyak item (Kiloan, Bedcover, dll) dalam satu nomor nota transaksi tunggal, sesuai dengan pola *Header-Detail*.
1. **Relasi Objek:** TransactionController bertindak sebagai otak yang mengoordinasikan data antara tampilan (View) dengan penyimpanan (Entity).
## <a name="_jtejoxjoxtuj"></a>**4. Kesimpulan**
Perancangan *Sequence Diagram* ini telah berhasil memodelkan perilaku dinamis sistem laundry secara mendalam. Dengan menggambarkan interaksi antar objek terhadap waktu, skenario-skenario kritis seperti transaksi dan laporan keuangan kini memiliki alur logika yang jelas. Hal ini memastikan bahwa fungsionalitas yang telah dirancang pada modul-modul sebelumnya (Use Case dan Class Diagram) dapat diimplementasikan dengan tepat oleh pengembang pada tahap pengkodean nantinya.


# <a name="_lob39zmncs6n"></a>**Modul 9**
# <a name="_qk0y8ylgvji5"></a>**
# <a name="_224ne8jtvph3"></a>**Modul 10**
