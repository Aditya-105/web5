<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <title>LATIHANFIX</title>
</head>
<body>  
  <!-- HEADER ATAS -->
  @yield('header')
	
  <!-- KONTENT -->
  <div class="container-tengah">
    <div class="kolom-tengah">
      <button onclick="myFunction()">Toggle dark mode</button>
      @yield('content')
    </div>
    <!-- BERITA TERBARU -->
    @yield('sidebar')
  </div>

	@yield('footer')

  <!-- ARTIKEL HIDE JAVASCRIPT -->
  <script>
    var btn_read_more = document.getElementById('btn-read-more');
    var btn_read_more2 = document.getElementById('btn-read-more2');
    var btn_read_more3 = document.getElementById('btn-read-more3');

    var artikel_1 = document.getElementById('artikel1');
    var more_1 = document.getElementById('more1');

    var artikel_2 = document.getElementById('artikel2');
    var more_2 = document.getElementById('more2');

    var artikel_3 = document.getElementById('artikel3');
    var more_3 = document.getElementById('more3');

    function moreFunction1(){
        if(more_1.style.display === "none"){
            more_1.style.display = "inline";
            artikel_1.style.display = "none";
            btn_read_more.innerHTML="Baca Selengkapnya";
        }else{
            more_1.style.display = "none";
            artikel_1.style.display = "inline";
            btn_read_more.innerHTML = "Sembunyikan";
        }
    }

    function moreFunction2(){
        if(more_2.style.display === "none"){
            more_2.style.display = "inline";
            artikel_2.style.display = "none";
            btn_read_more2.innerHTML="Baca Selengkapnya";
        }else{
            more_2.style.display = "none";
            artikel_2.style.display = "inline";
            btn_read_more2.innerHTML = "Sembunyikan";
        }
    }

    function moreFunction3(){
        if(more_3.style.display === "none"){
            more_3.style.display = "inline";
            artikel_3.style.display = "none";
            btn_read_more3.innerHTML="Baca Selengkapnya";
        }else{
            more_3.style.display = "none";
            artikel_3.style.display = "inline";
            btn_read_more3.innerHTML = "Sembunyikan";
        }
    }
  </script>
  <!-- DARK MODE JAVASCRIPT -->
  <script>
    function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
    }
  </script>
</body>
</html> 