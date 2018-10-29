@if ($paginator->hasPages())
	<ol class="pager">
		
		@if ($paginator->currentPage() == 1)
			<li><a href="{{ $paginator->url(1) }}" class="prev disabled btn">≪最初へ</a></li>
		@else
			<li><a href="{{ $paginator->url(1) }}" class="prev btn">≪最初へ</a></li>
		@endif
		
		{{-- Previous Page Link --}}
		@if ($paginator->onFirstPage())
			<li><a href="{{ $paginator->previousPageUrl() }}" class="prev disabled btn">＜前へ</a></li>
		@else
			<li><a href="{{ $paginator->previousPageUrl() }}" class="prev btn">＜前へ</a></li>
		@endif

		{{-- Pagination Elements --}}
		@foreach ($elements as $element)
			{{-- "Three Dots" Separator --}}
			@if (is_string($element))
				<li class="disabled sp-hide"><span>{{ $element }}</span></li>
			@endif

			{{-- Array Of Links --}}
			@if (is_array($element))
				@foreach ($element as $page => $url)
					@if ($page == $paginator->currentPage())
						<li class="sp-hide"><a class="active btn">{{ $page }}</a></li>
					@else
						<li class="sp-hide"><a href="{{ $url }}" class="btn">{{ $page }}</a></li>
					@endif
				@endforeach
			@endif
		@endforeach

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<li><a href="{{ $paginator->nextPageUrl() }}" class="next btn">次へ＞</a></li>
		@else
			<li><a href="{{ $paginator->nextPageUrl() }}" class="next disabled btn">次へ＞</a></li>
		@endif

		@if ($paginator->currentPage() != $paginator->lastPage())
			<li><a href="{{ $paginator->url($paginator->lastPage()) }}" class="prev btn">最後へ≫</a></li>
		@else
			<li><a href="{{ $paginator->url($paginator->lastPage()) }}" class="prev disabled btn">最後へ≫</a></li>
		@endif

	</ol>
@endif
