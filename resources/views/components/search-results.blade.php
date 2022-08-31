<ul class="list-disc list-inside">
    @foreach ($users as $item)
        <li class="text-white">{{$item->name}}</li>
    @endforeach
</ul>