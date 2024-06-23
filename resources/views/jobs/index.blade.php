<x-layout>
    <div class=" space-y-6">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            {{-- <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form> --}}
            <x-forms.form action="/search" >
              <x-forms.input name="q" :label=false placeholder="web developer">

              </x-forms.input>
            </x-forms.form>
        </section>
        <section>
            <x-section-heading class=" mb-5">Feature Jobs</x-section-heading>
            <div class=" grid lg:grid-cols-3 gap-8">
                @foreach ( $featuredJobs as $job )
                    <x-card :$job></x-card>
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading class=" mb-5">Tags</x-section-heading>
            <div class=" mt-6">
                @foreach ($tags as $tag )
                    <x-tag :$tag></x-tag>
                @endforeach

            </div>
        </section>
        <section class=" mt-10 space-y-3">
            <x-section-heading class=" mb-5">Recent Jobs</x-section-heading>

            @foreach ($jobs as $job )
                <x-card-wide :$job></x-card-wide>
            @endforeach
        </section>
    </div>


</x-layout>
