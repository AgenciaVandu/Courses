@props(['course'])

<article class="card flex flex-col">
    @if ($course->image)
        <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}">
    @else
        <img class="h-36 w-full object-cover"
            src="https://images.pexels.com/photos/4498362/pexels-photo-4498362.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
    @endif
    <div class="card-body flex-1 flex flex-col">
        <h1 class="card-title">{{ Str::limit($course->title, 30) }}</h1>
        <p class="text-gray-500 text-sm mb-2 mt-1">Prof: {{ $course->teacher->name }}</p>
        <div class="flex">
            <ul class="flex text-sm">
                <li>
                    <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li>
                    <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li>
                    <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li>
                    <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li>
                    <i class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400"></i>
                </li>
            </ul>
            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{ $course->students_count }})
            </p>
        </div>
        @if ($course->price->value == 0)
        <p class="my-2 font-bold text-green-800">Free</p>
        @else
        <p class="my-2 font-bold text-gray-500">US$ {{ $course->price->value }}</p>
        @endif
        <div class="flex justify-center">
            <a href="{{ route('courses.show', $course) }}" class="btn btn-blue btn-block">
                Más información
            </a>
        </div>
    </div>
</article>
