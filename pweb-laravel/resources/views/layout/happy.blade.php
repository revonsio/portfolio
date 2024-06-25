<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <!---Boxicon CDN--->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://use.fontawesome.com/bb43ea6236.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    font-family: "poppins", sans-serif;
    }
    .header {
      background-color: #13151D;
      color: #fff;
    }

    #row-1 {
      padding: 10px 0;
    }

    .col-11 h3 {
      padding-left: 30px;
      margin-top: 35px;
    }

    .sidebar {
      height: 100%;
      width: 100%;
      background-color: #575757;
      padding: 15px 14px;
      color: #fff;
    }
    #row-2 {
      padding-top: 0;
      height: 75vh;
    }
    .sidebar-title {
      font-size: x-large;
      font-weight: bold;
    }
    .sidebar ul {
        margin-top: 10px;
        padding-left: 0%;
    }
    .sidebar ul li {
        height: 40px;
        width: 100%;
        list-style: none;
        line-height: 30px;
    }
    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
        transition: all 0.4s ease;
    }
    .sidebar ul li a:hover {
        color: rgba(255, 255, 255, 0.486);
        border: none;
        padding: 0 10px;
    }
    footer {
        background-color: #13151D;
        bottom: 0;
        width: 100%;
        text-align: right;
        padding: 1%;
        color: #fff;
        position: relative;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="container-fluid">
      <div class="row" id="row-1">
        <div class="col-1">
          <img src="/img/ICON_PUBLICATION_Foto_Theodorus Revonsio Prananta.jpg" width="120px" height="120px">
        </div>
        <div class="col-11">
          <h3>Theodorus Revonsio Prananta - 5026201045</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
      <div class="row" id="row-2">
        <div class="col-2">
          <div class="sidebar">
            <div class="sidebar-title">Navigation</div>
            <ul>
                <li>
                    <a href="/pegawai">Pegawai</a>
                </li>
                <li>
                    <a href="/absen">Absen</a>
                </li>
                <li>
                    <a href="/pendapatan">Pendapatan</a>
                </li>
                <li>
                    <a href="/modem">Praktikum</a>
                </li>
                <li>
                    <a href="/nilaikuliah">Nilai Kuliah</a>
                </li>
            </ul>
          </div>
        </div>
        <div class="col-10">
            <h3>@yield('judulhalaman')</h3><br>
            @section('konten')
            @show
        </div>
      </div>
  </div>

  <footer>
    <div class="container-fluid">
      <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
            <h5>Hak Cipta - Theodorus Revonsio Prananta</h5>
          </div>
      </div>
    </div>
  </footer>
</body>

</html>
