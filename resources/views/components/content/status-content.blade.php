<div>
    @if (session('status'))
        <div class="w-full p-2 bg-blue-300 border-2 border-blue-500 rounded-md">
            <p class="lowercase ">{{ session('status') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="w-full p-2 bg-red-300 border-2 border-red-500 rounded-md">
            <p class="lowercase ">{{ session('error') }}</p>
        </div>
    @endif
    @if (session('success'))
        <div class="w-full p-2 bg-green-300 border-2 border-green-500 rounded-md">
            <p class="lowercase ">{{ session('success') }}</p>
        </div>
    @endif

</div>