<div>
    
    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>

    <hr class="mt-2 mb-6">
    @foreach ($course->sections as $item)
        <article class="card mb-6" x-data="{open:true}">
            <div class="card-body bg-gray-100">
                @if ($section->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" type="text" class="form-input rounded-lg w-full"
                            placeholder="Ingrese el nombre de la seccion">
                        @error('section.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                    <header class="flex justify-between items-center">
                        <h1 x-on:click="open=!open" class="cursor-pointer"><strong>Sección</strong> {{ $item->name }}
                        </h1>
                        <div>
                            <i wire:click="edit({{ $item }})"
                                class="fas fa-edit text-blue-500 cursor-pointer"></i>
                            <i wire:click="destroy({{ $item }})"
                                class="fas fa-eraser text-red-500 cursor-pointer"></i>
                        </div>
                    </header>
                    <div x-show="open">
                        @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                    </div>
                @endif
            </div>
        </article>
    @endforeach

    <div x-data="{open:false}">
        <a x-on:click="open = !open" x-show="!open" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva sección
        </a>

        <article x-show="open" class="card">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">
                    Agregar nueva seccón
                </h1>

                <div>
                    <input wire:model="name" wire:keydown.enter="store" type="text" class="form-input rounded-lg w-full"
                        placeholder="Escriba el nombre de la sección">
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-4">
                    <a x-on:click="open = !open" class="btn btn-red cursor-pointer">
                        Cancelar
                    </a>
                    <a wire:click="store" class="ml-2 btn btn-blue cursor-pointer">
                        Agregar
                    </a>
                </div>
            </div>
        </article>
    </div>
</div>
