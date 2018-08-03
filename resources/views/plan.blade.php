{{-- A Single Plan --}}
<div class="flex flex-col justify-around shadow p-6 mx-4 w-1/4 text-center">
    <div class="flex justify-between mb-6">
        <h5 class="text-grey-darker uppercase tracking-tight">{{ $name }}</h5>


        <a href="#" class="no-underline text-blue flex items-baseline font-bold leading-none">
                    <span class="text-lg">$</span>
                    <span class="text-4xl">{{ $price }}</span>
                </a>
    </div>

    <img class="w-1/2 h-auto self-center" src="{{ $url }}" alt="{{ $name }} Plan">

    <p class="mb-8 py-4 text-grey-darkest leading-normal">
        {{ $description }}
    </p>

    <a href="#" class="btn btn-blue font-semibold">Start Learning</a>
</div>