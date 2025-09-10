<nav class="bg-gray-700 py-5">
	@foreach ($pages as $page)
		<a wire:navigate href="/pages/{{ $page->name }}" class="text-white text-xl mx-10">{{ $page->name }}</a>
	@endforeach
</nav>
