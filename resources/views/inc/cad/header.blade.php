{{-- <div class="flex items-center justify-around p-1 space-x-3 text-white rounded cursor-default">
    <p class="text-sm font-semibold">
        Officer {{ auth()->user()->officer_name_check }}
    </p>
    <p class="text-lg"><span class="mr-3" id="running_clock"></span></p>
    <p class="flex">
        <svg class="w-6 h-6 text-green-600" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="mx-3 !lowercase">Connected to live_database_prod</span>
    </p>
</div> --}}

<div class="">
    <div class="text-lg text-red-700 float-right">
        <p class="mr-3 text-4xl" id="running_clock_time"></p>
        <p class="mr-3 text-lg" id="running_clock_date"></p>
    </div>
</div>