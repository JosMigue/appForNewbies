<div>
    @if (session('status'))
        <x-utils.alert>
            <slot>
                <p class="lowercase ">{{ session('status') }}</p>
            </slot>
        </x-utils.alert>
    @endif
    @if (session('error'))
        <div class="w-full p-2 bg-red-300 border-2 border-red-500 rounded-md">
            <p class="lowercase ">{{ session('error') }}</p>
        </div>
    @endif
    @if (session('success'))
        <x-utils.alert>
            <slot>
                <p class="lowercase ">{{ session('success') }}</p>
            </slot>
        </x-utils.alert>
    @endif
</div>