<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/courses/portada2.jpg') }});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full lg:w-1/2 md:w-3/4">
                <h1 class="text-white font-bold text-5xl">Lorem ipsum dolor sit amet.</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed
                    laudantium eos officia!</p>
                    @livewire('search')
            </div>
        </div>
    </section>

    @livewire('courses-index')
</x-app-layout>
