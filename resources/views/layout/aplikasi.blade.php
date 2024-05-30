<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.122.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>YUK NGOSTUM</title> 

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href=".public/css/app.css">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0Tg1wZTC8whrTzAmBx8hH1/HUZv+jEjKAwiVITMNRE8V3zVZ/sS8kB6I95tZOy0k" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand&display=swap');
    </style>
</head>
<body style=" background-image: url('/images/background.png')">
    <div class="container-py-5">
        @if (Auth::check())
        
        @endif 
        @yield('konten')
    </div>

    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Reset pemilihan tanggal saat halaman dimuat
            document.getElementById('tanggal').value = '';
        });

        flatpickr("#tanggal", {
            dateFormat: "Y-m-d", // Format tanggal yang diinginkan
            minDate: "today", // Batasi tanggal minimum untuk memilih
            mode: "range", // Menggunakan mode range
            defaultDate: [new Date(), new Date(new Date().getTime() + 2 * 24 * 60 * 60 * 1000)] // Default 3 hari dari sekarang
        });
    </script>
</body>
</html>


