@props(['job']);
<x-panel class="text-center">
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8">
        <h3 class=" font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - Form $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>

</x-panel>
