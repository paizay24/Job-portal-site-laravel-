<x-layout>
    <section class=" mt-10 space-y-3">
        <x-section-heading class=" mb-5">Searched Jobs</x-section-heading>

        @foreach ($jobs as $job )
            <x-card-wide :$job></x-card-wide>
        @endforeach
    </section>
</x-layout>
