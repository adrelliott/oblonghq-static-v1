<div class=" w-full sticky top-0 z-50 bg-white opacity-90 border-b-[1px] border-gray-200 ">
    <div class="max-w-7xl mx-auto container">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <a href="/">
                    <div class="flex flex-col tracking-tighter text-oblong-blue-dark">
                        <span class="text-5xl  font-bold  lg:pr-8 font-logo">
                            oblong
                        </span>
                        <span class="text-md font-extralight mt-[-6px] leading-tight">Love your people</span>
                    </div>
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col items-left flex-grow hidden  text-md pt-4 md:pt-0 pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                @yield('nav')
            </nav>
        </div>
    </div>
</div>
