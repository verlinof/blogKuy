@extends('layouts.main')

@section('root')
    <div class="dark-background container-fluid py-5">
        <div class="container text-white">
            <div class="row py-3">
                <h1 class="text-white">Selamat Datang Di Blog<span class="kuy">Kuy</span></h1>
            </div>
            <div class="row pb-3">
                <p class="text-justify">BlogKuy adalah sebuah platform blog interaktif yang dirancang untuk memberi Anda kesempatan untuk mengungkapkan diri. Di sini, kami percaya bahwa setiap cerita layak dibagikan, dan setiap informasi bernilai untuk disebarluaskan. Apapun minat dan hobi Anda, BlogKuy memberikan panggung yang luas untuk mengekspresikan gagasan, menginspirasi orang lain, dan belajar bersama. Tunggu apalagi?? Ayo Join BlogKuy sekarang juga!!!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid feeds my-4">
        <div class="container-md">
            <div class="row my-2">
                <div class="border border-dark rounded-3 post p-3 my-3">
                    <a href="/user" class="text-decoration-none fw-bold text-dark d-flex justify-content-between">
                        <h5 class="pt-2">verlino fajri</h5>
                    </a>
                    <hr>
                    <a href="/post" class="text-decoration-none py-4 text-black">
                        <h3>Cara Belajar Laravel Dengan Menggunakan Composer</h3>
                        <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus eius at corporis unde nesciunt, aut vel nobis cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, a. At dolor, consequatur nulla pariatur officia perferendis vel, ex ducimus sequi, quod fugiat. Ex ratione tenetur id libero doloribus facere corporis temporibus? Quaerat rem dolores natus ea est dolor earum?</p>
                        <p class="text-info">read more</p>
                    </a>
                </div>
                <div class="border border-dark rounded-3 post p-3 my-3">
                    <a href="/user" class="text-decoration-none fw-bold text-dark d-flex justify-content-between">
                        <h5 class="pt-2">verlino fajri</h5>
                    </a>
                    <hr>
                    <a href="/post" class="text-decoration-none py-4 text-black">
                        <h3>Cara Belajar Laravel Dengan Menggunakan Composer</h3>
                        <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus eius at corporis unde nesciunt, aut vel nobis cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, a. At dolor, consequatur nulla pariatur officia perferendis vel, ex ducimus sequi, quod fugiat. Ex ratione tenetur id libero doloribus facere corporis temporibus? Quaerat rem dolores natus ea est dolor earum?</p>
                        <p class="text-info">read more</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection