@extends('layouts.main')

@section('root')
    <div class="dark-background container-fluid py-5 rounded rounded-3">
        <div class="container-md text-white">
            <div class="row">
                <h3>{{ $userName }}</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid feeds my-4">
        <div class="container-md">
            <div class="row my-2">
                <h3>{{ $userName }} Post</h3>
            </div>
            <div class="row">
                <div class="border border-dark rounded-3 p-3 post my-3">
                    <a href="/verli" class="text-decoration-none fw-bold text-dark d-flex justify-content-between">
                        <h5 class="pt-2">{{ $userName }}</h5>
                    </a>
                    <hr>
                        <a href="/data" class="text-decoration-none py-4 text-black">
                            <h3>Cara Belajar Laravel Dengan Menggunakan Composer</h3>
                            <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus eius at corporis unde nesciunt, aut vel nobis cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, a. At dolor, consequatur nulla pariatur officia perferendis vel, ex ducimus sequi, quod fugiat. Ex ratione tenetur id libero doloribus facere corporis temporibus? Quaerat rem dolores natus ea est dolor earum?</p>
                            <p class="text-info">read more</p>
                        </a>
                    </div>
                    
                    <div class="border border-dark rounded-3 post p-3">
                        <a href="/verli" class="text-decoration-none fw-bold text-dark d-flex justify-content-between">
                            <h5 class="pt-2">{{ $userName }}</h5>
                        </a>
                        <hr>
                        <a href="/data" class="text-decoration-none py-4 text-black">
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