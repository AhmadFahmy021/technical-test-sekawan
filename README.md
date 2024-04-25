Nama Aplikasi : Vehicle App

Deskripsi : Aplikasi Ini  di buat dengan tempalte admin milik xacton design by Myra aplikasi ini memiliki beberapa fitur untuk upload kendaraan, pemesanan kendaraan, pengembalian kendaraan, persetujuan oleh para pemegang jabatan, dan kekurangan disini masih belum bisa export EXCEL sesuai dengan soal yang di berikan dikarenakan belum pernah menggunakan laravel Excel dan juga masih memahami setruktur Laravel versi 11.

Framework : Laravel 11

PHP Version : 8.2.10

Database Versi: 8.0.30

Daftar Email-Password : - agree1@gmail.com-12345678
                        - admin1@gmail.com-12345678

Cara Penggunaan Aplikasi : 

Menu Untuk Admin : 

        1. Login : 
            - Silahkan ketikkan /login atau 127.0.0.1:8000/login untuk menampilkan form login
            - Ketikkan Email dan Password yang sudah di sediakan di atas ke dalam form yang tersedia 
            - Klik tombol login agar dapat masuk ke dalam dashboard yang telah di sediakan

        2. Register :
            - Silahkan ketikkan /register atau 127.0.0.1:8000/register untuk menampilkan form register dan jika anda telah membuka url 127.0.0.1:8000/login klik kata register untuk memasuki halaman form register
            - Ketikkan nama, email, password, dan confirm password pada kolom yang telah disediakan
            - klik tombol register agar akun kamu bisa di simpan dan login otomatis setelah akun mu di simpan

        3. Dashboard : 
            - setalah Login anda telah sampai pada halaman dashboard admin
            - terdapat 5 ketrangan yang akan kamu dapat
            - yang pertama kamu dapat menemui keteranga Vehicle Booking  (jumlah kendaraan yang tengah dalam peninjauan atau review oleh para agreement atau sudah di pesan)
            - yang kedua keterangan Vehicle Booking Approved (Jumlah pemesanan kendaraan yang telah di setujui oleh para agreement minimal 2 orang, orang yang kedua memiliki kuasa tertinggi untuk memberikan persetujuan jika orang pertama tidak mensetujui dan orang kedua setuju maka pemesanan kendaraan dapat di setujui)
            - yang ketiga keterangan Vehicle Booking Rejected (Jumlah pemesanan kendaraan yang ditolak para agreement)
            - yang ke empat Total Vehicles (jumlah kendaraan yang dimiliki)
            - yang ke lima terakhir teradapat grafik pemakaian dari masing masing kendaraan yang dimiliki

        4. Vehicle :
            - Silahkan klik menu vehicle pada side bar untuk masuk ke halaman vehicle
            - Di dalam menu Vehicle memiliki tampilan tabel denghan rincian No, Vehicle Name, Merk, Type, Kilometers, Fuel Oil, Seat, Repair Date, Status penggunaan, action
            - Di halaman utama menu Vehicle tersebut terdapat tombol untuk menambahkan kendaraan (Vehicle) dengan nama tombol add vehicle
            - Di halaman tambah atau create vehicle terdapat form yang dapat di isi dengan vehicle name, merk, type, kilometers, fueloil (dapat diisikan jenis fuel oil atau jumlah fuel oil ketika terisi penuh), seat(jumlah tempat duduk), repair date(tanggal terakhir di perbaiki) dan klik tombol submit untuk di simpan oleh sistem
            -  Dan di halaman utama menu Vehicle juga terdapat tombol edit dan delete yang diletakkan dalam satu tabel dengan data yang ditampilkan oleh sistem
            - Untuk melakukan perubahan data pada kendaraan dapat di lakukan dengan klik tombol edit yang telah tersedia di dalam tabel dengan posisi paling ujung sendiri atau masuk dalam column action
            - Di halaman edit data vehicle terdapat form yang menampilkan data dari kendaraan yang akan di ubah terdapat pada form vehicle name, merk, type, kilometers, fueloil (dapat diisikan jenis fuel oil atau jumlah fuel oil ketika terisi penuh), seat(jumlah tempat duduk), repair date(tanggal terakhir di perbaiki) klik tombol submit agar perubahan dapat di simpan
            - Untuk melakukan penghapusan data dapat dilakukan dengn klik tombol delete atau simbol trash (tempat sampah) dan otomatis data telah terhapus
            
        5. Booking :
            - Silahkan klik menu Booking pada side bar untuk masuk ke halaman Booking
            - Di dalam menu Booking memiliki tampilan tabel denghan rincian No, Vihacle Name, Driver, Date Start, Date End, Kilometers, Fuel Oil, Destination, Tenant Name, First Approver, Second Approver, status approval, dan Action
            - Di halaman utama menu Booking tersebut terdapat tombol untuk menambahkan booking kendaraan (pemesanan kendaraan) dengan nama tombol add Booking
            - Di halaman tambah atau create Booking terdapat form Select Vihecle, Driver name, Date start, Date End, destination, tenant name, select first appprover, dan select second approver setelah di isi semua nya untuk diperhatikan select first approver dan second approver tidak boleh di isi dengan user yang sama kemudian klik tombol submit untuk di simpan oleh sistem
            -  Dan di halaman utama menu Booking juga terdapat tombol edit dan delete yang diletakkan dalam satu tabel dengan data yang ditampilkan oleh sistem
            - Untuk melakukan perubahan data pada kendaraan dapat di lakukan dengan klik tombol edit yang telah tersedia di dalam tabel dengan posisi paling ujung sendiri atau masuk dalam column action
            - Di halaman edit data Booking terdapat form yang menampilkan data dari pemesanan kendaraan yang akan di ubah tertera pada form Select Vihecle, Driver name, Date start, Date End, destination, tenant name, select first approver, dan select second approver klik tombol submit agar perubahan dapat di simpan
            - Untuk melakukan penghapusan data dapat dilakukan dengn klik tombol delete atau simbol trash (tempat sampah) dan otomatis data telah terhapus
            
        6. Returned :
            - Silahkan klik menu Returned pada side bar untuk masuk ke halaman Returned
            - Di dalam halaman menu Returned memiliki tampilan tabel denghan rincian No, Vihacle Name, Destination, Borrower Name/Tenant name, Date Returned, Kilometers, Fuel Oil, dan Action
            - Di halaman utama menu returned tersebut terdapat tombol untuk menambahkan returned vehicle (pemesanan kendaraan) dengan nama tombol add Returned
            - Di halaman tambah atau create returned terdapat form Select Booking, Date Returned, Kilometers(Kilometers Ketika di kembalikan), dan Fuel Oil (jenis fuel oil atau jumlah fuel oil ketika dikembalikan) kemudian klik tombol submit untuk di simpan oleh sistem
            -  Dan di halaman utama menu returned juga terdapat tombol edit dan delete yang diletakkan dalam satu tabel dengan data yang ditampilkan oleh sistem
            - Untuk melakukan perubahan data pada data returned dapat di lakukan dengan klik tombol edit yang telah tersedia di dalam tabel dengan posisi paling ujung sendiri sebaleh kanan atau masuk dalam column action
            - Di halaman edit data returned terdapat form yang menampilkan data dari pengembalian kendaraan yang akan di ubah tertera pada form Select Booking, Date Returned, Kilometers(Kilometers Ketika di kembalikan), dan Fuel Oil (jenis fuel oil atau jumlah fuel oil ketika dikembalikan) klik tombol submit agar perubahan dapat di simpan
            - Untuk melakukan penghapusan data dapat dilakukan dengn klik tombol delete atau simbol trash (tempat sampah) dan otomatis data telah terhapus

Menu Untuk Agree (pihak yang menyetujui) : 

        1. Login : 
            - Silahkan ketikkan /agree/login atau 127.0.0.1:8000/agree/login untuk menampilkan form login
            - Ketikkan Email dan Password yang sudah di sediakan di atas ke dalam form yang tersedia 
            - Klik tombol login agar dapat masuk ke dalam dashboard yang telah di sediakan

        2. Register :
            - Silahkan ketikkan /agree/register atau 127.0.0.1:8000/agree/register untuk menampilkan form register dan jika anda telah membuka url 127.0.0.1:8000/login klik kata register untuk memasuki halaman form register
            - Ketikkan nama, email, jabatan atau position,password, dan confirm password pada kolom yang telah disediakan
            - klik tombol register agar akun kamu bisa di simpan dan login otomatis setelah akun mu di simpan

        3. Dashboard : 
            - setalah Login anda telah sampai pada halaman dashboard Agree
            - terdapat 3 keterangan yang akan kamu dapat
            - yang pertama kamu dapat menemui keterangan Order Submission 
            - yang kedua keterangan Waiting For Order Approval 
            - yang ketiga keterangan Vehicle In Application (Jumlah pemesanan kendaraan yang dalam tahap pengajuan)
        
        4. Approval :
            - Silahkan klik menu Approval pada top nav untuk masuk ke halaman Approval
            - Pada halaman approval terdapat tabel yang memuat informasi Nomer, Vehicle Name, Tenant name / Borrower name, detination, Kilometers, fuel oil, date Start, date end, driver name, dan action
            - Terdapat 2 tombol yaitu approval dan rejected dan keterangan "Your account does not have access here"
            - Tombol 1 yaitu approval digunakan ketika kamu sebagai agreement menyetujui pemesanan tersebut 
            - Tombol 2 yaitu rejected digunakan ketika kamu sebagai agreement menolak pemesanan tersebut 
            - Approval maupun Rejected yang memiliki akses tertinggi atau penentu adalah approver kedua
            
        

