<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Users') }}
            </h2>
            <a href="{{route('users.create')}}"class="py-1 px-2 bg-blue-500 font-bold text-white rounded-md">{{__('Add')}}</a>
        </div>
    </x-slot>
    <x-main-content>
      @include('components.content.status-content')
      <x-table.responsive-table>
        <x-slot name="headers">
          <th class="p-3">User</th>
          <th class="p-3 text-left">Framework</th>
          <th class="p-3 text-left">Price</th>
          <th class="p-3 text-left">Status</th>
          <th class="p-3 text-left">Action</th>
        </x-slot>
        <x-slot name="body">
          @foreach ($users as $user)
            <tr class="bg-gray-700 hover:bg-gray-800 transform animation-all ease-in-out duration-200">
              <td class="p-3">
                <div class="flex align-items-center">
                  <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                  <div class="ml-3">
                    <div><a class="text-white underline" href="{{route('users.show', $user->id)}}">{{$user->name}}</a></div>
                    <div class="text-gray-500">{{$user->email}}</div>
                  </div>
                </div>
              </td>
              <td class="p-3">
                Laravel
              </td>
              <td class="p-3 font-bold">
                200.00$
              </td>
              <td class="p-3">
                <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
              </td>
              <td class="p-3 ">
                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                  <i class="material-icons-outlined text-base">visibility</i>
                </a>
                <a href="{{route('users.edit',$user->id)}}" class="text-gray-400 hover:text-gray-100  mx-2">
                  <i class="material-icons-outlined text-base">edit</i>
                </a>
                <button  class="text-gray-400 hover:text-gray-100  ml-2" onclick="deleteUser('{{route('users.destroy', $user->id)}}', this)">
                  <i class="material-icons-round text-base">delete_outline</i>
                </button>
              </td>
            </tr>
          @endforeach
        </x-slot>
      </x-table.responsive-table>
    </x-main-content>
</x-app-layout>