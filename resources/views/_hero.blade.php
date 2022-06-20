<div>
    <div class="h-40 bg-green-500"></div>
    <div class="bg-white flex justify-center px-6 py-3 space-x-3">
        @foreach(getMenuItems('primary') as $item)
            <a class="font-bold text-gray-700 text-sm uppercase hover:text-blue-500" href="{{ $item['slug'] }}">
                {{ $item['title'] }}
            </a>
        @endforeach
    </div>
</div>
