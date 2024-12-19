@if ($paginator->hasPages())
    <div class="mt-4 flex justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="px-4 py-2 border rounded bg-gray-300 text-gray-600 mx-1 cursor-not-allowed">
                &laquo;
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 border rounded bg-black text-white mx-1 hover:bg-gray-800">
                &laquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-4 py-2 border rounded bg-gray-300 text-gray-600 mx-1 cursor-not-allowed">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="px-4 py-2 border rounded bg-black text-white mx-1">
                            {{ $page }}
                        </button>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 border rounded mx-1 hover:bg-black hover:text-white">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 border rounded bg-black text-white mx-1 hover:bg-gray-800">
                &raquo;
            </a>
        @else
            <button class="px-4 py-2 border rounded bg-gray-300 text-gray-600 mx-1 cursor-not-allowed">
                &raquo;
            </button>
        @endif
    </div>
@endif
