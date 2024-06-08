<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUK NGOSTUM</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        .menu-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .menu-items {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-green-100 text-gray-900">
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-bold">YUK NGOSTUM</div>
            <nav class="flex space-x-4">
                <button class="menu-toggle text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
        <section class="lg:col-span-2">
          <img src="/images/nippon.png" alt="Nippon Oi" class="w-full">
            <article class="bg-white shadow-md rounded overflow-hidden mt-2">
                <div class="p-4">
                    <h2 class="text-2xl font-bold">NIPPON OI: The Biggest Anime, Mange, Cosplay Festival In Mikazuki Da Nang</h2>
                    <p class="text-sm text-gray-500">by Sarah - today, 4:30 PM</p>
                    <p class="mt-2">Di Da Nang Mikazuki Japanese Resorts & Spa, sebuah festival yang dipadukan dengan budaya Jepang kontemporer dihadirkan untuk pertama kalinya di Da Nang. Nippon Oi, yang berlangsung dari tanggal 23 hingga 25 September, adalah Festival Anime, Manga, dan Cosplay terbesar yang pernah berlangsung di Vietnam Tengah. Ratusan cosplayer ternama dari Vietnam dan luar negeri diperkirakan akan hadir..</p>
                    <div class="mt-4 flex space-x-2">
                        <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Berita</span>
                        <span class="bg-pink-200 text-pink-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Cosplay</span>
                        <span class="bg-blue-200 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Event</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">+5</span>
                    </div>
                </div>
            </article>

            <article class="bg-white shadow-md rounded overflow-hidden mt-6">
                <div class="p-4">
                    <h2 class="text-2xl font-bold">Rayakan HUT Ke-6, PUBG MOBILE Gelar Event Turnamen hingga Cosplay Competition</h2>
                    <p class="text-sm text-gray-500">by Linda Ferras - today, 2:45 PM</p>
                    <p class="mt-2">Memasuki usia 6 tahun perilisan, PUBG MOBILE menggelar PUBG MOBILE Infinite 6 (PMI6) yang akan digelar pada pada 21-23 Maret 2024 di fX Sudirman, Jakarta.</p>
                    <div class="mt-4 flex space-x-2">
                        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Game</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Senapan</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">+2</span>
                    </div>
                </div>
            </article>

            <article class="bg-white shadow-md rounded overflow-hidden mt-6">
                <div class="p-4">
                    <h2 class="text-2xl font-bold">LACE 2024 Vol.1: Festival Budaya Pop dan Cosplay Terbesar di Sumatera Utara</h2>
                    <p class="text-sm text-gray-500">by Emilia - today, 11:23 AM</p>
                    <p class="mt-2">Little Akiba Cosplay & Entertainment (LACE) telah menjadi acara tahunan yang dinantikan oleh penggemar budaya pop dan cosplay sejak tahun 2015. Dengan semangat untuk mengenalkan Festival Seni dan Budaya Jepang kepada masyarakat Kota Medan, LACE kini menjadi event Jejepangan terbesar di Sumatera Utara.</p>
                    <div class="mt-4 flex space-x-2">
                        <span class="bg-purple-200 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Sumatera</span>
                        <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Event</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Berita</span>
                    </div>
                </div>
            </article>
        </section>

        <aside>
            <div class="bg-white shadow-md rounded p-4">
                <div class="flex justify-between items-center">
                    <span>Thursday</span>
                    <span>Indonesia</span>
                </div>
                <div class="text-4xl font-bold">43°F</div>
                <div class="text-gray-500">Cloudy</div>
                <div class="text-gray-500">65% & km/h</div>
            </div>

            <div class="bg-white shadow-md rounded p-12 mt-6">
                <h3 class="font-bold mb-4">Berita Lain</h3>
                <div class="space-y-4">
                    <div class="flex space-x-4">
                        <img src="/gambar-kostum/jpg.jpeg" alt="Event" class="w-40 h-50 object-cover rounded">
                        <div>
                            <h4 class="font-semibold">Event Jepang Terupdate di Januari 2024, Hanya Disini!</h4>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <img src="/gambar-kostum/cute.jpeg" alt="Cosplay" class="w-40 h-50 object-cover rounded">
                        <div>
                            <h4 class="font-semibold">Ada Kerumunan di MOI karena Acara Cosplay, Satgas Covid-19 Lakukan Tracing</h4>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <img src="/gambar-kostum/bali.jpeg" alt="Cosplay Event" class="w-40 h-50 object-cover rounded">
                        <div>
                            <h4 class="font-semibold">STD Bali Cosplay Event "I Can Creation"</h4>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <img src="/gambar-kostum/jpg.jpeg" alt="Impactnation" class="w-40 h-50 object-cover rounded">
                        <div>
                            <h4 class="font-semibold">Cosplayer Menjamur di IMPACTNATION JAPAN FESTIVAL 2023, Begini Sejarahnya</h4>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </main>

    <script>
        document.querySelector('.menu-toggle').addEventListener('click', () => {
            document.querySelector('.menu-items').classList.toggle('hidden');
        });
    </script>
</body>

</html>
