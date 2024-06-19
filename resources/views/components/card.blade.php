@props(['job'])

<x-panel>
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8 font-bold">
        <h3 class=" font-bold text-xl mt-3 group-hover:text-blue-800 duration-150">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag )
                <x-tag :$tag></x-tag>
            @endforeach
        </div>
        <x-employer-logo width='42'></x-employer-logo>
     </div>
</x-panel>
