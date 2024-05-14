<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Dashboard</title> 
    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
       <!--  <script src="../assets/js/color-modes.js"></script> -->
    <!-- pop up sign in and sign up -->
    <script>
        function showDialog(){
            let dialog = document.getElementById('dialog');
            dialog.classList.remove("hidden");
            dialog.classList.add("flex");
            setTimeout(() => {
                dialog.classList.add("opacity-100");
            }, 20);
        }
        function hideDialog() {
            let dialog = document.getElementById('dialog');
            dialog.classList.add("opacity-0");
            setTimeout(() => {
                dialog.classList.add("hidden");
                dialog.classList.remove("flex");
            }, 200); 
        }
        function hideDialog1(event) {
        if (!event.target.closest('form')) {
        let dialog = document.getElementById('dialog1');
        dialog.classList.add("opacity-0");
        setTimeout(() => {
            dialog.classList.add("hidden");
            dialog.classList.remove("flex");
        }, 500); 
        }
        }

        function hideDialog2(event) {
        if (!event.target.closest('form')) {
        let dialog = document.getElementById('dialog2');
        dialog.classList.add("opacity-0");
        setTimeout(() => {
            dialog.classList.add("hidden");
            dialog.classList.remove("flex");
        }, 500); 
        }
        }

        function hideDialog3(event) {
        if (!event.target.closest('form')) {
        let dialog = document.getElementById('dialog3');
        dialog.classList.add("opacity-0");
        setTimeout(() => {
            dialog.classList.add("hidden");
            dialog.classList.remove("flex");
        }, 500); 
        }
        }

        function hideDialog4(event) {
        if (!event.target.closest('form')) {
        let dialog = document.getElementById('dialog4');
        dialog.classList.add("opacity-0");
        setTimeout(() => {
            dialog.classList.add("hidden");
            dialog.classList.remove("flex");
        }, 500); 
        }
        }
    </script>
    
    <script>
        function klikPencariCostum() {
            let dialog1 = document.getElementById('dialog1');
            dialog1.classList.remove("hidden");
            dialog1.classList.add("flex");
            setTimeout(() => {
                dialog1.classList.add("opacity-100");
            }, 20);
        }
    </script>
    <script>
        function showDaftar() {
            let dialog2 = document.getElementById('dialog2');
            dialog2.classList.remove("hidden");
            dialog2.classList.add("flex");
           setTimeout(() => {
                dialog2.classList.add("opacity-100");
           }, 20);
       }
   </script>

<script>
    function klikPemilikCostum() {
        let dialog3 = document.getElementById('dialog3');
        dialog3.classList.remove("hidden");
        dialog3.classList.add("flex");
        setTimeout(() => {
            dialog3.classList.add("opacity-100");
        }, 20);
    }
</script>
<script>
    function showDaftarPemilik() {
        let dialog4 = document.getElementById('dialog4');
        dialog4.classList.remove("hidden");
        dialog4.classList.add("flex");
       setTimeout(() => {
            dialog4.classList.add("opacity-100");
       }, 20);
   }
</script>

       <!-- slider image -->
       <script type="text/javascript"> 
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 2000);
    </script>
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand&display=swap');
     @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand&display=swap');
    body{
    padding-bottom: 20px;
    background-image: url('/images/background.png');
    padding: 0;
    margin: 0;
    height: 100vh;
    justify-self: center;
    align-items: center;
}


#check:checked ~ ul {
    left: 0;
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



.section {
    margin: 0;
    padding: 0;
    height:60vh;
    display:flex;
    justify-content:center;
    align-items: center;
    //margin-bottom: 20px;
}
.slider {
    width: 800px;  
    height: 700px;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 20%;
}
.slide {
    width: 500%;
    height: 500px;
    display: flex;
    margin-top: 20vh;
}
.slide input {
    display: none;
}

.st {
    height: 280vh;
    width: 100%;
    transition: 4s;
}
.st img {
    width: 800px;
    height: 600px;
}

.lowerContent {
    margin-top: 343px;
}

.nav-m {
    position: absolute;
    width: 800px;
    margin-top: -40px;
    justify-content: center;
    display: flex;
}
.m-btn {
    border: 2px solid #23e3c2;
    padding: 5px;
    border-radius: 20px;
    cursor: pointer;
    transition: 1s;
}
.m-btn:not(:last-child){
    margin-right: 30px;
}
.m-btn:hover {
    background-color: #23e3c2;
}

#radio1:checked ~ .first {
    margin-left: 0;
}

#radio2:checked ~ .first {
    margin-left: -20%;
}

#radio3:checked ~ .first {
    margin-left: -40%;
}

#radio4:checked ~ .first {
    margin-left: -60%;
}

@media screen and (max-width: 800px) {
.wrapper {
width: 90%;
}
.section {
    width: 90%;
}
}

@media screen and (max-width: 1024px) {
body {
padding: 0 20px;
}

.wrapper {
width: 90%;
}

.section {
    width: 90%;
}
}

@media screen and (max-width: 768px) {
body {
padding: 0 10px;
}
.wrapper {
width: 100%;
}
.section {
    width: 100%;
}
}

.nav-auto {
    position: absolute;
    width: 800px;
    margin-top: 460px;
    display: flex;
    justify-content: center;
}

.nav-auto div {
    border: 2px solid #23e3c2;
    border-radius: 10px;
    padding: 5px;
    transition: 1s;
}

.nav-auto div:not(:last-child) {
   margin-right: 30px;
   justify-content: center;
}

#radio1:checked ~ .nav-auto .a-b1 {
    background-color: #038175;
}

#radio2:checked ~ .nav-auto .a-b2 {
    background-color: #038175;
}

#radio3:checked ~ .nav-auto .a-b3 {
    background-color: #038175;
}

#radio4:checked ~ .nav-auto .a-b4 {
    background-color: #038175;
}


</style>
<body class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen" style="background-image: url(/images/background.png)">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div style="height: 60px;">
                <h1 class="w-16 cursor-pointer font-bold" style="margin-top: 10px;">YUK NGOSTUM</h1>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500" href="#">Cari Kostum Apa Aja?</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Notifikasi</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Lainnya</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#0dd8c5] text-white px-5 py-2 rounded-full hover:bg-[#038175]" onclick="showDialog()" type="button">Masuk</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>

    <div class="mt-[120px] w-50 ml-[12px]"> 
    <div>
    <div class="m-auto font-[Poppins] font-bold" style="color: #038175; font-size:30px; margin-top: -90%;">
        <p>Lagi Ada Event Cosplay?, Bingung 
           Sewa Baju?, di Yuk Ngostum Aja
           Simpel dan Gercep</p> 
    </div>  
   </div>
  </div>


<script>
    const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e){
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>
    </body>
</html>



