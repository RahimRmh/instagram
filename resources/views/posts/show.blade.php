<x-app-layout>
<div class="h-screen md:flex  mb-8">
        {{-- Left Side --}}
        <div class="flex  items-center overflow-hidden bg-black md:w-7/12">
            <img src="{{ asset('storage/'.$post->image) }}" alt="{{$post->description}}" class="max-h-screen object-cover mx-auto">        </div>
    </div>
</x-app-layout>