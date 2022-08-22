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
{{--         <input type="text" id="filter">
        <button onclick="search()">Search</button> --}}
        <ul class="list-disc list-inside" id="list">
            @foreach ($users as $user)
                <li class="text-white">{{$user->name}} {{$user->email}}</li>
            @endforeach
        </ul>
    </x-main-content>
{{--     <script type="text/javascript"> THIS IS LIVE SEARCH DEMO
    function search(){
        let element = document.getElementById('filter');
        axios.get('/api/users/'+element.value)
        .then((response) => {
            console.log(response.data);
            document.getElementById('list').innerHTML = response.data;
        })
        .catch((error) => {
            alert(error);
        })
    }
    </script> --}}
</x-app-layout>