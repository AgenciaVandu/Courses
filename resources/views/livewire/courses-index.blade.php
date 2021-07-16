<div>
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button wire:click="resetFilters" class="bg-white shadow rounded-lg h-12 px-4 text-gray-700 mr-4 focus:outline-none">
                <i class="text-xs mr-2 fab fa-accusoft"></i> Todos los cursos
            </button>

            <!-- Dropdown -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button x-on:click="open = !open"
                    class="block h-12 px-4 text-gray-700 bg-white shadow rounded-lg overflow-hidden focus:outline-none">
                    <i class="fas fa-tags"></i>
                    Categoria
                    <i class="fas fa-angle-down text-sm"></i>
                </button>
                <!-- Dropdown Body -->
                <div x-show="open" x-on:click.away="open = false"
                    class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">
                    @foreach ($categories as $category)
                        <a wire:click="$set('category_id',{{ $category->id }})"
                            class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white"
                            x-on:click="open=false">{{ $category->name }}</a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button x-on:click="open = !open"
                    class="block h-12 px-4 text-gray-700 bg-white shadow rounded-lg overflow-hidden focus:outline-none">
                    <i class="fas fa-layer-group"></i>
                    Niveles
                    <i class="fas fa-angle-down text-sm"></i>
                </button>
                <!-- Dropdown Body -->
                <div x-show="open" x-on:click.away="open = false"
                    class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">
                    @foreach ($levels as $level)
                        <a wire:click="$set('level_id',{{ $level->id }})" x-on:click="open=false"
                            class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white">{{ $level->name }}</a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course"/>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4">
        {{ $courses->links() }}
    </div>
</div>
