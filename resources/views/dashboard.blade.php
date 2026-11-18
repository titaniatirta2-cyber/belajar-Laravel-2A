<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="utf-8">
        <title>{{ $judul }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head> 
    <body>     
        <div class="container">   
            <div class="header">        
                <h1 class="judul">Welcome To My Web</h1>     
            </div>   
            <div class="banner"></div>  
            
            <div class="isi">          
                <div class="sidebar">          
                    <ul class="nav">          
                        <li><a href="/dashboard">Home</a></li> 
                        <li><a href="/gallery">Gallery</a></li>   
                        <li><a href="/about">About</a></li>         
                    </ul>        
                </div>        
              
                <div class="content">             
                    <h2>{{ $judul }}</h2>         
                    <p>{{ $isi }}</p>       
                </div>        
            </div>  
        </div> 
    </body>
</html>