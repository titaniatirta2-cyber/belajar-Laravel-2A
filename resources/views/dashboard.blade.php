<!DOCTYPE html> 
<html>
<head> 
    <meta charset="utf-8"> 
    <title>{{$judul}}</title> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> 
</head> 
<body>
    
    <!-- membuat container --> 
    <div class="container">
        <!-- header -->
        @include('template/header') 
         
        <div class="isi">   
            <!-- sidebar --> 
            @include('template/sidebar') 
            <!-- sidebar -->
              
            <!-- content -->        
            <div class="content">             
                <!-- TAMBAHKAN BARIS INI AGAR KONTEN / FOTO GALLERY MUNCUL -->
                @yield('content')
            </div>        
            <!-- content -->   
        </div> 
    </div>

</body> 
</html>