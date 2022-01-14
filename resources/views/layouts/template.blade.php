<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- js Tabel -->
<script src="extensions/resizable/bootstrap-table-resizable.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>@yield('title')</title>

  <style>
    table{
      background-color:#ba0020ff;
    }
    

    .alert-danger ul{
  color:#fff;
  padding: 1rem 2rem;
  animation-name:example;
  animation-duration: 16s;
  animation-iteration-count: infinite;
} 
      .bg{
  width: 100%;
  height: 100%;
  background-color: #011936FF;
  animation-name: example;
  animation-duration: 16s;
  animation-iteration-count: infinite;
  
}
/*ANIMASI BACKGROUND DATA*/
@keyframes example {
  0% {background-color: #011936ff;}
  25% {background-color: #56A8CBFF;}
  50% {background-color: #ED254EFF;}
  75% {background-color: #F9DC5CFF;}
  100% {background-color: #011936FF;}
}
.alert-success h5{
  color:black;
  text-align:center;
  background-color: black;
  animation-name: example;
  animation-duration: 16s;
  animation-iteration-count: infinite;

}
.my-custom-scrollbar {
position: relative;
height: 590px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
h1{
  text-align:center;
  animation-name:Data;
  animation-duration:16s;
  animation-iteration-count:infinite;
}
/*ANIMASI TEKS DATA*/
@keyframes Data{
  0%{color:#f4fffdff;}
  25%{color:#011936ff;}
  50%{color:#011936ff;}
  75%{color:#011936ff;}
  100%{color:#f4fffdff;}
}
/* Buat Create*/
.card{
   background-color:#0d1137;
   animation-name:bodycard;
   animation-duration: 8s;
   animation-iteration-count: infinite
 }
 .card-body{
   background-color:#0d1137;
   animation-name:bodycard;
   animation-duration: 8s;
   animation-iteration-count: infinite
 }
/*#0d1137 <-Raisin
#e52165 <-Pink */
  @keyframes bodycard {
    0%{background-color:#0d1137;}
    50%{background-color:#e52165;}
    100%{background-color:#0d1137;}
    
  }
  h4{
   color:#0d1137;
   animation-name:h4card;
   animation-duration: 8s;
   animation-iteration-count: infinite
  }

  @keyframes h4card{
    0%{color:#0d1137}
    50%{color:#e52165}
    100%{color:#0d1137}
  }

  label{
    color:#e52165;
    animation-name:whiteblack;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }

  @keyframes whiteblack{
    0%{color:#e52165}
    50%{color:#0d1137}
    100%{color:#e52165}
  }

  .card-footer{
    background-color:#e52165;
    animation-name:whiteblackfoot;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }

  @keyframes whiteblackfoot{
    0%{background-color:#e52165}
    50%{background-color:#0d1137}
    100%{background-color:#e52165}
  }
  .card-header{
    background-color:#e52165;
    animation-name:whiteblackfoot;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }
  
  </style>

  </head>
  <body>
  <ul class="navbar-nav ms-auto">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://127.0.0.1:8000/home">
    <img src="https://www.innersloth.com/wp-content/uploads/2021/08/100.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SekolahKU
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guru
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/guru">Data</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/guru/create">Create</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Siswa
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/siswa">Data</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/siswa/create">Create</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kelas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/kelas">Data</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/kelas/create">Create</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ruangan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/ruangan">Data</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/ruangan/create">Create</a></li>
</ul>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jadwal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/jadwal">Data</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/jadwal/create">Create</a></li>
</ul>
</li>
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                  

                            <li class="nav-item active">
                                <a id="navbarDropdown" class="nav-link" href="" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="collapse navbar-collapse"> 
                                <li class="nav-item active">
                                    <a class="nav-link text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                 
                    </ul>
      
    </div>
  </div>
</nav>
<div class="bg">
    @yield('content')
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>