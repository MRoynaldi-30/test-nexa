<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Nexa Muhammad Roynaldi</title>
    @vite('resources/css/app.css')
</head>

<body id="home" class="font-semibold">
    @include('components.header')
    
    <div class="bg-gray-100 flex mt-14 mx-20 rounded-xl shadow-2xl">
        <div class="w-1/2 rounded-s-xl">
            <img src="{{ asset('img/coffee.jpg') }}" alt="" class="rounded-s-xl">
        </div>
        <div class="w-1/2 flex items-center justify-center flex-col rounded-e-xl px-20">
            <h1 class="font-bold text-4xl mb-4">Special<span class="text-[#E4D1BD]"> Coffee</span></h1>
            <p class="text-justify mb-2 font-normal"><span class="font-bold">Simple Coffee</span> adalah tempat yang menyajikan kopi berkualitas tinggi dalam suasana yang nyaman dan santai. Kami menawarkan berbagai pilihan kopi, mulai dari espresso hingga manual brew, serta makanan ringan dan kue yang lezat. Simple Coffee memberikan pengalaman kopi yang sederhana namun memuaskan, cocok untuk menikmati waktu santai Anda.</p>
            <a href="#"
                class="border-2 border-gray-300 py-2 px-4 rounded-3xl hover:bg-[#E4D1BD] duration-300">Order Now</a>
        </div>
    </div>

    <div class="mx-20 px-80 py-20">
        <p class="text-center text-xl">"Apakah Anda penggemar kopi yang serius atau sekadar ingin bersantai dengan secangkir kopi yang nikmat, Simple Coffee adalah pilihan yang tepat untuk memenuhi kebutuhan Anda. Bergabunglah dengan kami, nikmati kopi favorit Anda, dan rasakan kenyamanan di setiap tegukan."</p>
    </div>

    @include('components.shop')

    <div class="mb-14 mx-20 flex justify-between gap-4">
        <div class="w-1/2">
            <div class="mb-4">
                <h2 class="text-xl"><span class="text-[#E4D1BD]">NEW</span> ARRIVALS</h2>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card1.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Coffe Latte</h3>
                            <h3>Rp. 20.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card2.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Cappucino</h3>
                            <h3>Rp. 25.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card3.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Moccacino</h3>
                            <h3>Rp. 23.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card4.png') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Milk Coffe</h3>
                            <h3>Rp. 27.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/coffee.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Americano</h3>
                            <h3>Rp. 28.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="mb-4">
                <h2 class="text-xl"><span class="text-[#E4D1BD]">BEST</span> SELLING</h2>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card1.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Coffe Latte</h3>
                            <h3>Rp. 20.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card2.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Cappucino</h3>
                            <h3>Rp. 25.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card3.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Moccacino</h3>
                            <h3>Rp. 23.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/card4.png') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Milk Coffe</h3>
                            <h3>Rp. 27.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/coffee.jpg') }}" alt="newarrival" class="rounded-full w-14 h-14">
                    <div class="w-full pr-8">
                        <div class="flex justify-between border-b-2">
                            <h3 class="text-lg font-semibold">Americano</h3>
                            <h3>Rp. 28.000</h3>
                        </div>
                        <p class="text-sm font-light">kopi kekinian terbalut kelapa muda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.blog')

    @include('components.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
