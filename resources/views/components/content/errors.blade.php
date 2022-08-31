<div>
  @if ($errors->any())
    <div x-data="{ visible: true }">
      <div class="w-full p-2 bg-red-300 border-2 border-red-500 rounded-md" x-show="visible">
        <div class="flex flex-col items-center">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button class="w-1/2 flex justify-center bg-red-800 hover:bg-red-700 text-gray-100 p-3 rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500" x-on:click="visible = false">Dismiss</button>
        </div>
      </div>
    </div>
   @endif
</div>