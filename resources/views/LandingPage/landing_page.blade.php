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
    <title>Landing Page</title> 
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
<main>
    
        <nav class="p-5 bg-[#038175] shadow md:flex md:items-center md:justify-between h-20" style="margin-bottom: 90px; ">
        <div class="flex justify-between items-center">
            <span class="text-2xl font-[Poppins] cursor-pointer">
                <h1 class="h-10 inline" style="color: white">YUK NGOSTUM</h1>
             </span>
             <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu"></ion-icon> 
             </span>
        </div>

        <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute w-full left-0 md:w-auto">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-white duration-500" style="color: white !important; text-decoration: none; font-size:20px;">Cari Costume Apa?</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Notifikasi</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Lainnya</a>
            </li>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white hover:bg-black-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="showDialog()" type="button" style="font-size:20px;">
                Masuk
                </button>
    </nav>

      <!-- Banner Section -->

    <div class="w-full h-[80px] flex flex-col relative bg-white mt-[-40px]" style=" background-image: url('/images/background.png')"> 

        <div class="wrapper text-left" style="margin-right: 60%; margin-left:30px; margin-top:-30px;">
    <div class="m-auto font-[Poppins] font-bold" style="color: #038175; font-size:30px; margin-top: -20px;">
        <p>Lagi Ada Event Cosplay?, Bingung 
           Sewa Baju?, di Yuk Ngostum Aja
           Simpel dan Gercep</p> 
    </div>  
   </div>
  </div>
        <!--  Banner Data -->

    <!-- Slider -->
    <section class="section" style="margin-top: -110px;">
        <div class="slider">
            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1"> 
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="st first" id="first">
                    <img src="/images/nippon.png" alt="a">
                </div>

                <div class="st">
                    <img src="/images/nippon.png" alt="a">
                </div>

                <div class="st">
                    <img src="/images/nippon.png" alt="a">
                </div>

                <div class="st">
                    <img src="/images/nippon.png" alt="a">
                </div>
                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                    <div class="a-b4"></div>
                </div>
            </div>

            <div class="nav-m">
                <label for="radio1" class="m-btn"></label>
                <label for="radio2" class="m-btn"></label>
                <label for="radio3" class="m-btn"></label>
                <label for="radio4" class="m-btn"></label>
            </div>
        </div>
    </section>
    <div class="lowerContent">
        <div class="rounded-[9px] bg-[#ECECEC] p-[13px_24px_28px_24px] w-screen box-sizing-border" style="margin-top: -1%;">
            <div class="relative flex flex-col box-sizing-border">
              <div class="m-[0_0_3px_0] inline-block break-words font-['Poppins'] font-semibold text-[25px] leading-[1.355] text-[#038175]">
                Daftarkan Toko Sewa Kostum Anda di Yuk Ngostum
              </div>
              <div class="m-[0_0_14px_0] inline-block self-start break-words font-['Poppins'] font-normal text-[15px] leading-[1.355] text-[#038175]">
                Berbagai fitur dan layanan untuk meningkatkan bisnis sewa kostum anda
              </div>
              <span class="m-[0_12px_0_12px] self-start break-words font-['Poppins'] font-medium text-[15px] leading-[1.355] text-[#F14336]">
                Pelajari Lebih Lanjut
              </span>
            </div>
            <div class="rounded-[5px] border-[1px_solid_#F14336] absolute left-[24px] bottom-[19px] w-[173px] h-[36px]">
            </div>
          </div>
    </div>

</main>
     <!-- "Overlays modal" masuk -->

       <div id="dialog" class="fixed left-0 top-2 bg-black bg-opacity-50 w-screen h-screen flex justify-center items-center opacity-0 hidden transition-opacity duration-500" onclick="hideDialog()" style="margin-top: -10px;">
        
                   <div class="bg-white rounded-shadow-md bg-opacity-100 p-8 w-[30%] m-auto rounded-[30px]">
            <div class="p-4 md:p-5">
                <form class="space-y-4 " action="#">
                    <div class="p-1">
                        <h1 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="text-align: center; font-size: 30px; color:#038175; font-weight: bold;">MASUK YUK NGOSTUM</h1>
                        <h1 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="text-align: center; font-size: 15px;">Saya Ingin Menjadi</h1>
                        <a class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mt-10 font-[Poppins] text-center no-underline" style="color: white; font-size: 20px; background-color:#038175;" href="sesi" role="button">Pencari Kostum</a>
                    </div>
                    <div>
                        <a class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-300 dark:text-white font-[Poppins] text-center no-underline" style="color:white; font-size: 20px; background-color:#038175;" href="sesi" role="button">Pemilik Kostum</a>
                    </div>
                </form>
            </div>
         </div>
        
     
        <!-- "Overlays modal" Pencari Kostum -->
        <!-- Login form -->
        <!-- 
        <div id="dialog1" class="fixed left-0 top-2 bg-black bg-opacity-50 w-screen h-screen flex justify-center items-center opacity-0 hidden transition-opacity duration-500" style="margin-top: -10px;" onmousedown="hideDialog1(event)">
            <div class="bg-white rounded-shadow-md bg-opacity-100 p-8 w-[30%] h-[58%] m-auto rounded-[30px]">
               <div class="p-4 md:p-5">
            
                  <form class="space-y-4 " action="#">
                    <div class="text-center font-[Poppins] font-bold" style="font-size: 40px; color: #038175;">LOGIN PENCARI KOSTUM</div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between" style="margin-bottom: 10%;">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa Password?</a>
                    </div>
                    <div class="w-90 justify-center" style="">
                        <button type="submit" class="w-full  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #038175; font-size:20px;margin-bottom:10px;">Login</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300"">
                            Belum Punya akun? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500" onclick="showDaftar()">Daftar Sekarang</a>
                        </div>
                    </div>
                   </form>
            
               </div>
            </div>
           </div>
        -->

           <!-- Daftar form -->
           <div id="dialog2" class="fixed left-0 top-2 bg-black bg-opacity-50 w-screen h-screen flex justify-center items-center opacity-0 hidden transition-opacity duration-500" style="margin-top: -10px;" onmousedown="hideDialog2(event)">
            <div class="bg-white rounded-shadow-md bg-opacity-100 p-8 w-[30%] h-[85%] m-auto rounded-[30px]">
               <div class="p-4 md:p-5">
                <!-- 
                                  <form class="space-y-4 " action="#">
                    <div class="text-center font-[Poppins] font-bold" style="font-size: 40px; color: #038175;">DAFTAR PENCARI KOSTUM</div>
                    <div>
                        <label for="form-label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Nama Lengkap</label>
                        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Lengkap" required />
                    </div>
                    <div>
                        <label for="noHp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Nomor Handphone</label>
                        <input type="noHp" name="noHp" id="noHp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nomor Handphone" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Konfirmasi Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan password kembali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between" style="margin-bottom: 10%;">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #038175; font-size:20px; ">Daftar</button>
                   </form>
                -->
               </div>
            </div>
           </div>

           <!-- "overlays modal" Pencari Kostum end -->

           <!--  "overlays modal" Pemilik Kostum start-->
           <!-- Login form -->
           <div id="dialog3" class="fixed left-0 top-2 bg-black bg-opacity-50 w-screen h-screen flex justify-center items-center opacity-0 hidden transition-opacity duration-500" style="margin-top: -10px;" onmousedown="hideDialog3(event)">
            <div class="bg-white rounded-shadow-md bg-opacity-100 p-8 w-[30%] h-[58%] m-auto rounded-[30px]">
               <div class="p-4 md:p-5">
                   <form class="space-y-4 " action="#" onsubmit="handleSubmit(event)">
                    <div class="text-center font-[Poppins] font-bold" style="font-size: 40px; color: #038175;">LOGIN PEMILIK KOSTUM</div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between" style="margin-bottom: 10%;">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa Password?</a>
                    </div>
                    <div class="w-90 justify-center" style="">
                        <button type="submit" class="w-full  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #038175; font-size:20px;margin-bottom:10px;">Login</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300"">
                            Belum Punya akun? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500" onclick="showDaftarPemilik()">Daftar Sekarang</a>
                        </div>
                    </div>
                   </form>
               </div>
            </div>
           </div>

          <!-- Daftar form -->
           <div id="dialog4" class="fixed left-0 top-2 bg-black bg-opacity-50 w-screen h-screen flex justify-center items-center opacity-0 hidden transition-opacity duration-500" style="margin-top: -10px;" onmousedown="hideDialog4(event)">
            <div class="bg-white rounded-shadow-md bg-opacity-100 p-8 w-[30%] h-[85%] m-auto rounded-[30px]">
               <div class="p-4 md:p-5">
                   <form class="space-y-4 " action="#">
                    <div class="text-center font-[Poppins] font-bold" style="font-size: 40px; color: #038175;">DAFTAR PEMILIK KOSTUM</div>
                    <div>
                        <label for="form-label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Nama Lengkap</label>
                        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Lengkap" required />
                    </div>
                    <div>
                        <label for="noHp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Nomor Handphone</label>
                        <input type="noHp" name="noHp" id="noHp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nomor Handphone" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Email" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="font-size: 20px;">Konfirmasi Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan password kembali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="flex justify-between" style="margin-bottom: 10%;">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #038175; font-size:20px; ">Daftar</button>
                   </form>
               </div>
            </div>
           </div>

            <!--  "overlays modal" Pemilik Kostum end-->
           <!-- Overlays end-->
    </body>
</html>



