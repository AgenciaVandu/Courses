<form class="relative text-gray-600">
    <input wire:model="search" type="search" name="serch" autocomplete="off" placeholder="Search"
        class="w-full bg-white h-10 px-5 pr-10 rounded-lg border-none text-sm focus:outline-none">
    <button type="submit"
        class="py-2 px-4 bg-blue-500 text-white font-semibold shadow-md rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 absolute right-0 top-0">
        Buscar
    </button>
    @if ($search)
        <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
            @forelse ($this->results as $result)
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    <a href="{{ route('courses.show', $result) }}">{{ $result->title }}</a>
                </li>
            @empty
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No hay coincidencia :(
                </li>
            @endforelse
        </ul>
    @endif
</form>
