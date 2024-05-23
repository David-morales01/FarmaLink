<div class="min-h-screen flex justify-between bg-gray-100 dark:bg-gray-900 flex-wrap">

    <div class="flex  custom-gradient  w-[100%] md:w-[50%]  justify-center items-center">
        {{ $imageLeft }}
    </div>
    <div class="w-[100%] md:w-[50%] flex flex-col justify-center items-center mb-4 md:mb-0">

        <div class=" mt-6 w-[90%] md:w-[70%] py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

            <div class="flex justify-center">
              <x-nav-link  wire:navigate aria-label="home" href="/">
                {{ $logo }}
              </x-nav-link>
            </div>

            <div
                class="w-full   mt-6 px-6 py-4 bg-white dark:bg-gray-800   overflow-hidden sm:rounded-lg   ">
                {{ $slot }}
            </div>
        </div>
    </div>
</div> 