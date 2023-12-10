<div class="w-full py-5 px-5 shadow-xl flex flex-col md:flex-row justify-between">
    <div class="font-bold text-lg">
        {{ env('APP_NAME') }}
    </div>

    <div class="flex flex-col space-x-3 md:flex-row text-sm justify-end items-center font-semibold">
        <a href="/" class="px-2 active">
            Home
        </a>

        <a href="/gallery" class="px-2 active">About Us</a>

        <a href="/register" class="px-2 active">Register</a>
        <a href="/login" class="px-2 active">Login</a>
    </div>

    <div>
        <a href="/contact" class="rounded-lg bg-gray-800 p-4 text-gray-50 font-bold text-sm text-gray-100 bg-gray-700">
            Reach Us
        </a>
    </div>
    <style>
        .active:hover{
            position: relative;
        }
        .active:hover::after{
            height: 2pt;
            width: 80%;
            bottom: 0px;
            left:10%;
            background:red;
            content: '';
            position: absolute;
            animation-name: navanimation;
            border-radius: 5pt;
            animation-duration: 1s;
            animation-direction: forwards;
        }

        @keyframes navanimation{
            from {
                opacity: 0;
                width: 0%;
            }
            to:{
                opacity: 1;
                width: 80%;
            }
        }
    </style>
</div>
