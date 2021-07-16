<div>
    <article x-data="{open:false}" class="card">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer">Descripcion de la lección</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end mt-2">
                            <button wire:click="destroy" class="btn btn-red" type="button">Eliminar</button>
                            <button class="btn btn-blue ml-2" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" class="form-input w-full"
                            placeholder="Agregue una descripcion de la lección"></textarea>
                        @error('name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end mt-2">
                            <button class="btn btn-blue ml-2" wire:click="store">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
