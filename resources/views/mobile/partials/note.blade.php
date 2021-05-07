<div class="card card-style shadow-xl">
    <div class="content">
        <h1 class="font-24 font-700 mb-2">{{ $title }}</h1>
        @if(isset($note))
            <p class="mb-1">
                {{ $note }}
            </p>
        @endif
        <p class="mb-1">

            {{ $slot }}
        </p>
    </div>
</div>
