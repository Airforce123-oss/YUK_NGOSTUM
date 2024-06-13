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

            @foreach ($articles as $article)

            <article class="bg-white shadow-md rounded overflow-hidden mt-6">
                <div class="p-4">
                    <img src="{{$article->article_image}}" alt="">
                    <h2 class="text-2xl font-bold">{{$article->title}}</h2>
                    {{-- <p class="text-sm text-gray-500">by Linda Ferras - today, 2:45 PM</p> --}}
                    {{-- <p class="mt-2">{{$article->content}}</p> --}}
                    <div class="product-description">
                        <p id="short-description{{$article->id}}">
                            {!! Str::limit($article->content, 100, '...') !!}
                        </p>
                        <p id="full-description{{$article->id}}" style="display: none;">
                            {!! nl2br(e($article->content)) !!}
                        </p>
                        <button id="toggle-description{{$article->id}}" class="btn btn-link">Muat Lebih Banyak</button>
                    </div>
                    <div class="mt-4 flex space-x-2">
                        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Game</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Senapan</span>
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">+2</span>
                    </div>
                </div>
            </article>  
            <script>
                document.getElementById('toggle-description'+{{$article->id}}).addEventListener('click', function () {
                    var shortDesc = document.getElementById('short-description'+{{$article->id}});
                    var fullDesc = document.getElementById('full-description'+{{$article->id}});
                    var toggleButton = document.getElementById('toggle-description'+{{$article->id}});
            
                    if (shortDesc.style.display === 'none') {
                        shortDesc.style.display = 'block';
                        fullDesc.style.display = 'none';
                        toggleButton.textContent = 'Muat Lebih Banyak';
                    } else {
                        shortDesc.style.display = 'none';
                        fullDesc.style.display = 'block';
                        toggleButton.textContent = 'Tampilkan Lebih Sedikit';
                    }
                });
            </script> 
            @endforeach
        </section>

        <aside>
            

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
