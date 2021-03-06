<x-dashboard-tile :position="$position">
    @if($isPlaying)
        <div
            class="grid gap-2 justify-items-center h-full text-center"
            style="grid-template-rows: auto 1fr auto;"
            wire:poll.{{ $refreshIntervalInSeconds }}s
        >
            <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide">Currently Playing</h1>
            <div class=" flex items-center justify-center">
                <img class="w-32 h-32 rounded" src="{{ $albumImage }}" alt="Album Pic">
            </div>
            <div class="self-center font-bold text-xl tracking-wide leading-none">
                {{ $trackName }}
            </div>
            <div>
                <div class="flex w-full justify-center space-x-4 items-center">
                    <span class="text-xs text-dimmed">
                      @foreach($artists as $artist)
                            @if(count($artists) > 1)
                                {{ $artist['name'] }},
                            @else
                                {{ $artist['name'] }}
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
    @else
        <div class="grid grid-rows-auto-1 gap-2 h-full">
            <div class="flex">
                <div class="w-full pt-8 bt-0">
                    <div class="flex justify-center text-2xl text-grey-darkest font-medium">
                        <h2>Spotify is not currently playing :(</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-dashboard-tile>
