<nav x-data="{dropdown: false | (screen.width > 768)}" class="bg-gray-700 py-5 max-md:flex flex-col">
	<x-gmdi-menu @click="dropdown = !dropdown" class="fill-white ml-auto size-10 mr-5 cursor-pointer md:hidden"></x-gmdi-menu>
	@foreach ($pages as $page)
		<a wire:navigate href="/pages/{{ $page->name }}" x-show="dropdown" class="text-white text-xl text-center mx-10 max-md:mt-10">{{ $page->name }}</a>
	@endforeach
</nav>
