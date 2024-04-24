<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.122.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href=".public/css/app.css">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body, {
  padding-bottom: 20px;
  background-image: url('/images/background.png')
}

.navbar {
  margin-bottom: 20px;
}

.images {
    display: flex;
    width: 100%;
    transition: 2s;
}

.images img {
    width: 100%;
}

.navigation a {
 display: inline-block;
 height: 25px;
 width: 25px;
 background-color: black;
 font-size: 0px; 
border-radius: 50px;
margin: 20px;
transition: 1s;

}

.navigation a:hover {
    background-color: beige;
}

.navigation {
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    text-align: center;
    margin-top: -90px;
}

.wrapper {
    width: 800px;
    margin: auto;
    border-radius: 5px;
    overflow: hidden;
    position: relative;
}

#slide-1:target ~ .images {
    margin-left: 0px;
}

#slide-2:target ~ .images {
    margin-left: -100%;
}

#slide-3:target ~ .images {
    margin-left: -200%;
}

@media screen and (max-width: 800px) {
    .wrapper {
        width: 90%;

    }
}

.gallery {
   display: flex;
   justify-content: space-around;
   margin-top: 60px;
}
.gallery-item {
   text-align: center;
}
.gallery-item h2 {
   margin-bottom: 10px;
}
.gallery-item img {
   width: 200px;
   height: 200px;   
   margin-bottom: 10px;
   border-radius: 10px;
}

</style>
<body>
<main>
      <!-- Header Section -->
    <nav class="p-4 flex justify-between items-center" style="background-color:#038175 ">
        <div class="text-white text-lg font-bold" style="font-size: 30px; "><span style="color: red;">Yuk</span><span style="color: white;">Ngostum </span></div>
        
    
            
        </div>
        <div class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14l7-7m2 7l7-7" />
            </svg>
        </div>
    </nav>

      <!-- Banner Section -->
      
      <div class="w-full h-[800px] flex flex-col relative bg-white" style=" background-image: url('/images/background.png')"> 
        <div class="mb-8 text-center" style="font-family:Poppins; color: #038175; font-size:35px;"> INFO EVENT</div>

        <!--  Banner Data -->
        <div class="wrapper">
            <div class="slides">
                <span id="slide-1"></span>
                <span id="slide-2"></span>
                <span id="slide-3"></span>
                <div class="images">
                    <img src="/images/nippon.png" alt="">
                    <img src="/images/banner2.png" alt="">
                    <img src="/images/1713116806.jpg" alt="">
                </div>
            </div>
           
            <!-- Navigasi -->
            <div class="navigation">
                <a href="#slide-1">1</a>
                <a href="#slide-2">2</a>
                <a href="#slide-3">3</a>
            </div>
        </div>
    </div>
    <div class="costume" style="text-align: center; margin-top:20px;">    
        <h2>Costume</h2>
    </div>
    <div class="container p-5">
        <div class="row">
            @foreach ($costumes as $costume )
                <div class="col-md-3">
                    <div class="card-mb-4" style="padding: 20px">
                        <img src="{{ asset($costume->image) }}" alt="card-1" class="card-img-top" style="width: 200px; height: 200px;">
                        <div class="kostum-nama text-center pt-2 font-bold text-uppercase">{{$costume->nama}}</div>
                        <div class="kostum-harga text-left ">Rp{{$costume->harga}}</div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    {{-- <div class="gallery">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/200" alt="Anime 1">
            <img src="https://via.placeholder.com/200" alt="Anime 2">
            <img src="https://via.placeholder.com/200" alt="Anime 3">
        </div> --}}
        {{-- <div class="gallery-item">
    
            <img src="https://via.placeholder.com/200" alt="Karnaval 1">
            <img src="https://via.placeholder.com/200" alt="Karnaval 2">
            <img src="https://via.placeholder.com/200" alt="Karnaval 3">
        </div> --}}
        {{-- <div class="gallery-item">
        
            <img src="https://via.placeholder.com/200" alt="Adat 1">
            <img src="https://via.placeholder.com/200" alt="Adat 2">
            <img src="https://via.placeholder.com/200" alt="Adat 3">
        </div> --}}
    {{-- </div> --}}
    <!-- 
    
    -->     
          
   
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0Tg1wZTC8whrTzAmBx8hH1/HUZv+jEjKAwiVITMNRE8V3zVZ/sS8kB6I95tZOy0k" crossorigin="anonymous"></script>

    </body>
</html>