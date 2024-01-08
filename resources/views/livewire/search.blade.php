<div>
    <div class="mb-4 mx-5 search hidden sm:block" style="padding-top: 8px; max-width: 400px;">
    <input  type="text" class="search__input px-3 input dark:bg-dark-1 placeholder-theme-13 border" placeholder="Search..." style="max-width: 300px;" wire:model="searchTerm" />
    <i data-feather="search" class="search__icon dark:text-gray-300"></i>
    <button wire:click="saveSearch()">Search</button>
</div>
<div class="mx-5 search-result show">
    <div class="search-result__content">
        <div class="mb-5">
          
            @if($searchTerm != "")
                @if($events->isEmpty())
                    <p class="uppercase">No results for "{{ $searchTerm }} "</p>
                @else
                    <p class="uppercase my-10">{{ $events->count() }} | results for " {{ $searchTerm }} "</p>
                    @foreach($events as $event)
                        <a href="" class="flex items-center">
                            <div class="ml-3">{{ $event->title }}</div>
                        </a>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</div>
</div>