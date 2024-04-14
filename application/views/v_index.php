<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeigniter di atas tadi dijelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller.</p>

    <ol type="a">
        <li>Model</li>
        <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. 
            Semua instruksi atau fungsi yang berhubungan dengan pengolahan database diletakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
        <p align='justify'>Semua model harus disimpan di dalam folder application\models</p>
        
        <li>View</li>
        <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user (pada browser). 
            Tampilan dari user interface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
        
        <li>Controller</li>
        <p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view. Data yang tersimpan di database (model) diambil oleh controller dan kemudian ditampilkan ke view. Controller mengolah instruksi.</p>
        <p align='justify'>Dari penjelasan tentang model, view, dan controller dapat disimpulkan bahwa controller sebagai penghubung view dan model.
             Misalnya, pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk ditampilkan. Pembagian tugas menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p>
    </ol>
</section>
