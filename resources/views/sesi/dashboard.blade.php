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
    
    <title>Dashboard</title> 

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href=".public/css/app.css">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0Tg1wZTC8whrTzAmBx8hH1/HUZv+jEjKAwiVITMNRE8V3zVZ/sS8kB6I95tZOy0k" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand&display=swap');
        body, {
        padding-bottom: 20px;
  
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
<body style=" background-image: url('/images/background.png')">
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
                Profil
                </button>
    </nav>

    <!--dropdown profil -->
    <div
                        class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                        id="dropdown"
                    >
                        <div class="py-3 px-4">
                            <span
                                class="block text-sm font-semibold text-gray-900 dark:text-white"
                                >Haikal Hanis (Admin)</span
                            >
                            <span
                                class="block text-sm text-gray-900 truncate dark:text-white"
                                >admin@gmail.com</span
                            >
                        </div>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <a
                                    href="#"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                                    >My profile</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                                    >Account settings</a
                                >
                            </li>
                        </ul>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    ><svg
                                        class="mr-2 w-5 h-5 text-gray-400"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    My likes</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    ><svg
                                        class="mr-2 w-5 h-5 text-gray-400"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                                        ></path>
                                    </svg>
                                    Collections</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    <span class="flex items-center">
                                        <svg
                                            aria-hidden="true"
                                            class="mr-2 w-5 h-5 text-primary-600 dark:text-primary-500"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        Pro version
                                    </span>
                                    <svg
                                        aria-hidden="true"
                                        class="w-5 h-5 text-gray-400"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <ul
                            class="py-1 text-gray-700 dark:text-gray-300"
                            aria-labelledby="dropdown"
                        >
                            <li>
                                <a
                                    href="route('logout')"
                                    method="post"
                                    as="button"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >Log out</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    <!-- end of dropdown profil -->

    
      <!-- Banner Section -->
      
      <div class="w-full h-[800px] flex flex-col relative mt-[-40]" style=""> 
        <div class="mb-8 text-center mt-[20px]" style="font-family:Poppins; color: #038175; font-size:35px;"><h1>INFO EVENT</h1></div>

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
     <!-- Costume -->
    <div class="costume text-center mt-5 font">    
        <h2>COSTUME</h2>
    </div>
    <div class="container p-5 border-2 border-black bg-[#edece8] rounded-lg">
        <div class="row">
            @foreach ($costumes as $costume )
                <div class="col-md-4">
                    <a href="{{ route('detail.costume', ['id' => $costume->id]) }}" class="no-underline text-black">
                        <div class="card-mb-4 mt-4 p-9 rounded-lg border-4 border-gray-500 bg-[#adc7b1]" style="padding: 20px">
                            <img src="{{ asset($costume->image) }}" alt="card-1" class="card-img-top mx-auto rounded-lg" style="width: 200px; height: 200px;">
                            <div class="kostum-nama text-center pt-2 font-bold text-uppercase">{{$costume->nama}}</div>
                            <div class="kostum-harga text-center ">Rp{{$costume->harga}}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>
    </body>
</html>

<script setup>
    import { onMounted } from "vue";
    import { initFlowbite } from "flowbite";
    
    onMounted(() => {
        initFlowbite();
    });
    </script>