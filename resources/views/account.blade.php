@extends('layouts.main')

@section('root')
    <div class="dark-background container-fluid py-5 rounded rounded-3">
        <div class="container-md text-white">
            <div class="row">
                <h5>Account Details</h5>
            </div>
            <div class="row rounded border mt-3">
                <p class="py-1">Username : {{ $userName }}</p>
                <p>User email : {{ $userEmail }}</p>
                <p>Created at : {{ $createdAt }}</p>
            </div>
        </div>
    </div>
    <div class="container-fluid feeds my-4">
        <div class="container-md">
            <div class="row my-2">
                <h3>Your Post</h3>
            </div>
            <div class="row">
                <div class="border border-dark rounded-3 post p-3 my-3">
                    <a href="/verli" class="text-decoration-none fw-bold text-dark d-flex justify-content-between">
                        <h5 class="pt-2">You</h5>
                        <?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">
                            <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"/>
                        </svg>
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
                            <h5 class="pt-2">You</h5>
                            <?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">
                                <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"/>
                            </svg>
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