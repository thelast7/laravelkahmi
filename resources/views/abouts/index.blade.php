@extends('layouts.master-two')   
@section('content')
	<section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Mengapa KAHMIPRENEUR Dilahirkan?</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li class="active">
                KAHMIPRENEUR
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->
      
    <!-- About us / Progress Bars -->
    <section class="section-wrap-mp">
      <div class="container">
        <div class="entry-item">
          <div class="entry-video video-wrap">
             <iframe width="7" height="3" src="https://www.youtube.com/embed/_-AWV6uTUnM?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           </div>
           <br>
          <div class="col-sm-6">
            <style>
            h4 {
              color: orange;
            }
            p { text-align: justify; }
            </style>
            <h4>Latar Belakang</h4>
            <span class="dropcap style-2">T</span>
                  <p>idak bisa dipungkiri, meskipun perkembangan ratio wirausaha yang ada di 
                  Indonesia mengalami peningkatan, yaitu mencapai 3,1 persen. Namun tetap 
                  saja, jika dibandingkan dengan negara tetangga ataupun negara maju, tetap 
                  saja angka tersebut terbilang cukup rendah.
            KAHMIPreneur ada untuk merangkul para pengangguran terbuka untuk menciptakan lapangan 
                  kerja sendiri. Terlebih untuk para generasi muda yang memiliki kualitas diri yang baik, sangat 
                  disayangkan jika kualitas tersebut tidak dikembangkan.
                  <br>
                  Program KAHMIPreneur diharapkan 
                  dapat melahirkan dan mencetak generasi wirausaha yang kompeten dan mampu bersaing di 
                  era perdagangan bebas saat ini.
                  <br>
            KAHMIPreneur adalah sebuah konsep, gagasan, dan ide untuk menjawab berbagai 
                  isu yang berkembang di Indonesia terkait dengan KAHMI, diantaranya: </p>
              <ul class="bullets">

              <li><p>Kritik terhadap <b>KAHMI</b> yang lebih banyak berpolitik, sehingga gagasan KAHMI 
                  Entrepreneur adalah gerakan merubah mindset dari political oriented menjadi entrepreneur oriented;</p></li>

              <li><p>KAHMI Entrepreneur adalah sarana membangun <b>SINERGI</b> antara perbankan, pemasaran, teknologi, manajemen, dan mentoring, sebagai jawaban atas tuntutan publik dalam menciptakan wirausaha yang tangguh membentuk kemandirian ekonomi umat. Indonesia akan menjadi negara maju karena kekuatan entrepreneur.
                  </p></li>

              <li><p>Perubahan <b>ENTREPRENEUR</b> oriented membentuk karakter dari pencari lapangan kerja menjadi pencipta lapangan kerja. </p></li>

              <li><p>Karena <b>KAHMIPRENEUR</b> merupakan solusi dalam menyambut puncak bonus demografi (angkatan kerja produktif) Indonesia 2030.</p></li>
              </ul>    
             <p> Dalam perkembangan dinamika bisnis saat ini, insan wirausaha di Indonesia dituntut untuk selalu 
                  membekali diri mereka dengan wawasan serta ilmu pengetahuan tentang kewirausahaan serta 
                  Usaha Mikro, Kecil, dan Menengah (UMKM). Pelaku wirausaha diharapkan harus selalu bisa 
                  mengejar ketinggalan dalam pesatnya laju pertumbuhan tren business start-up sekarang ini.</p>
                  <br>
              </div> 

          <div class="col-sm-6">
                  <br>
             <p>Dengan turut serta sebagai peserta Program KAHMIPreneur, dapat menjadi suatu keuntungan 
                bagi masyarakat wirausaha maupun yang baru akan memulai wirausaha. Peserta akan 
                mendapat kemudahan untuk memajukan usaha yang dirintisnya serta memperoleh ilmu serta 
                wawasan yang secara eksklusif akan diberikan oleh Program KAHMIPreneur.
                <br>  
          Dengan Menyasar beberapa desa dan kabupaten di Indonesia, Program KAHMIPreneur ini 
          diharapkan mampu untuk meningkatkan jumlah para wirausaha yang berkualitas, mewujudkan 
          kemampuan dan kemantapan para wirausaha untuk menghasilkan kemajuan dan kesejahteraan 
          masyarakat. Program ini juga diharapkan dapat membudayakan semangat, sikap, perilaku, dan 
          kemampuan kewirausahaan di kalangan masyarakat yang mampu, andal, dan unggul.</p>
          <br>
        
          <h4>Tujuan</h4>
          <ul class="bullets">
          <li><p>Menciptakan lapangan pekerjaan baru;<p></li>
          <li><p>Merangkul generasi muda untuk memulai bisnisnya sendiri;<p></li>
          <li><p>Membentuk mindset masyarakat bahwa kita perlu mulai sesuatu yang baru dari diri sendiri. 
          Terutama untuk para mahasiswa bahwa sekarang bukan zamannya mengejar IPK, cumlaude 
          atau lulus cepat, namun mengejar apa yang ingin mereka lakukan setelah mereka lulus dari 
          kuliah nanti, serta mengupayakan diri sendiri untuk selalu berkontribusi bagi negara.<p></li>
          </ul>
          <br>
          <h4>Sasaran dan Target</h4><p>
          Sasaran dan target dari KAHMIPreneur l\adalah mengusahakan anggota KAHMI menjadi seorang 
          wirausahawan. Maupun yang belum menjadi anggota, kami berusaha untuk menarik perhatian 
          mereka untuk mau memulai usahanya sendiri.<p>
          <br>
          <br>
          <a href="{{ route('register') }}" class="btn btn-sm btn-dark">Tertarik ? Mari Bergabung !</a>
          
          </div>
          </div>
          </div>
      </section>
@endsection