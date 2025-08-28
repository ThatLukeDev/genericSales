<div class="flex h-full">
	<div class="w-50 bg-gray-200 h-full">
	@foreach ($pages as $page)
		<a wire:click="changePage('{{ $page->name }}')" class="cursor-pointer p-2 w-full text-center block {{ $page->name == $view ? 'bg-gray-300' : '' }}">{{ $page->name }}</a>
	@endforeach
	</div>
	<div class="h-full p-5">
	</div>
</div>
