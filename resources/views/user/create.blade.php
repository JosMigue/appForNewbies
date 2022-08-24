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
          @include('components.content.status-content')
          @include('components.content.errors')
          <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="space-y-6 py-6">
              <div>
                <x-form.input type="text" placeholder="Name" name="name" value="{{ old('name') }}"  required />
              </div>
              <div>
                <x-form.input type="email" placeholder="Email" name="email" value="{{ old('email') }}"  required />
              </div>
              <div class="relative">
                <x-form.input placeholder="Password" type="password" name="password"  required/>
              </div>
              <div class="relative">
                <x-form.input placeholder="Password confirmation" type="password" name="password_confirmation" required/>
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