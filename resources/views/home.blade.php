@extends('master')

@section('medsos')

    <!-- banner -->
    <section class="banner">
        <h2 data-aos="zoom-in">SELAMAT DATANG DI<br>SMPN 3 KOTA BOGOR</h2>
    </section>

    
       

    <!-- about -->
    <section class="about">
        <h3 data-aos="fade-down">ABOUT</h3>
        <p data-aos="fade-up">SMP Negeri 3 Bogor didirikan pada tahun 1951 tepatnya pada tanggal 27 Juli 1951 dengan kegiatan 
            belajar-mengajar di jalan Kartini No. 16 Bogor (yang sekarang menjadi SMP Negeri 4 Bogor). 
            Pada tahun 1955, SMP Negeri 3 Bogor pindah ke Jalan Malabar No. 6 Bogor sampai sekarang. 
            Pada tahun 1972 didirikan 9 ruang belajar di jalan Ceremai Ujung No. 1 Bogor sebagai hibah dari 
            pemerintah DKI Jakarta semasa Gubernur Ali Sadikin. Pada tahun 2008 lokasi SMPN 3 di Jalan
            Ceremai ujung, atas perintah Dinas Pendidikan Kota Bogor, dipergunakan untuk SMPN 20 Bogor. Sehingga SMP Negeri 3 terpusat di Jalan Malabar Nomor 6, Bogor.
        </p>
    </section>

    <!-- fasilitas -->
    <section class="fasilitas">
        <div class="container">
            <h3 data-aos="fade-down">FASILITAS</h3>
            <div class="container1">
                <div class="image">
                    <img data-aos="zoom-in" src="../assets/img/kelas.jpg">
                    <h5 data-aos="fade-up">KELAS</h5>  
                </div>

                <div class="image">
                    <img data-aos="zoom-in" src="../assets/img/kantin.jpg">
                    <h5 data-aos="fade-up">KANTIN</h5>  
                </div>
                
                <div class="image">
                    <img data-aos="zoom-in" src="../assets/img/lapangan.jpg">
                    <h5 data-aos="fade-up">LAPANGAN</h5>  
                </div>
            </div>  
        </div>    
    </section>

    

    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection



