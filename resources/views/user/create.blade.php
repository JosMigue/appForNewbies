<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white leading-tight">
          {{ __('Create :entity', ['entity' => __('user') ]) }}
      </h2>
  </x-slot>
  <x-main-content>
    <div class="sm:flex sm:flex-row justify-center px-0 sm:p-16 rounded-3xl">
      <div class="flex justify-center self-center z-10">
        <div class="p-12 bg-gray-900 mx-auto rounded-none md:rounded-3xl w-[40rem]">
          <div class="mb-7 text-center">
            <h3 class="font-semibold text-2xl text-gray-100">Add user</h3>
            <p class="text-gray-500">Add data from user that you need to register</p>
          </div>
          @if (session('status'))
              <div class="w-full p-2 bg-blue-300 border-2 border-blue-500 rounded-md">
                  {{ session('status') }}
              </div>
          @endif
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
          <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="space-y-6 py-6">
              <div>
                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="w-full text-gray-200 text-sm px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg focus:outline-none focus:border-blue-400" required>
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class=" w-full text-gray-200 text-sm  px-4 py-3 bg-gray-900 border  border-gray-700 rounded-lg focus:outline-none focus:border-blue-400" required>
              </div>
              <div class="relative" x-data="{ show: true }">
                <input placeholder="Password" :type="show ? 'password' : 'text'" name="password"  class="text-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-400" required>
                <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">
                  <svg  @click="show = !show"
                    :class="{'hidden': !show, 'block':show }" class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 576 512">
                    <path fill="currentColor"
                      d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                    </path>
                  </svg>
                  <svg  @click="show = !show"
                    :class="{'block': !show, 'hidden':show }" class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 640 512">
                    <path fill="currentColor"
                      d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="relative" x-data="{ show: true }">
                <input placeholder="Password confirmation" :type="show ? 'password' : 'text'" name="password_confirmation" class="text-sm text-gray-200 px-4 py-3 rounded-lg w-full bg-gray-900 border border-gray-700 focus:outline-none focus:border-blue-400" required>
                <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">
                  <svg  @click="show = !show"
                    :class="{'hidden': !show, 'block':show }" class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 576 512">
                    <path fill="currentColor"
                      d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                    </path>
                  </svg>
                  <svg  @click="show = !show"
                    :class="{'block': !show, 'hidden':show }" class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 640 512">
                    <path fill="currentColor"
                      d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                    </path>
                  </svg>
                </div>
              </div>
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center bg-blue-800  hover:bg-blue-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                {{__('Sumbit')}}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-main-content>
</x-app-layout>