@extends('layouts.main')

@section('root')
    <div class="container my-5">
        <h2>Category : {{ $category }}</h2>
        <div class="container-fluid feeds">
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
    </div>
@endsection