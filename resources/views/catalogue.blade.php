<x-base>
    <x-slot name="base">
        <div class="w-full h-[5vh] flex items-center justify-center relative bg-gray-500 m-0 p-0 box-border font-sans">
            <img class="absolute left-0 ml-[10px] h-full" src="{{ asset('assets/sidebar-img.png') }}" alt="">
            <h1 class="text-[50px] text-white">AML</h1>
            <input type="text" class="absolute right-0 ml-[10px] h-full radius-[20px]" placeholder="Search">
        </div>
        <div class="fixed left-0 top-[5vh] bg-gray-500 w-[20vw] h-[95vh] flex flex-col">
            <ul class="text-center text-white w-full flex items-center">
                <li class="mx-auto bg-gray-400 w-[90%] h-[5vh] rounded-[15px] mb-[10px] flex items-center justify-center">
                    <a class="font-sans text-[30px]" href="/">Catalogue</a>
                </li>
            </ul>
            <ul class="absolute bottom-0 flex flex-col text-center text-white w-full flex items-center">
                <li class="mx-auto bg-gray-400 w-[90%] h-[5vh] rounded-[15px] mb-[10px] flex items-center justify-center">
                    <a class="font-sans text-[30px]" href="/">Log in</a>
                </li>
                <li class="mx-auto bg-gray-400 w-[90%] h-[5vh] rounded-[15px] mb-[10px] flex items-center justify-center">
                    <a class="font-sans text-[30px]" href="/">Register</a>
                </li>
            </ul>
        </div>
    </x-slot>
</x-base>
