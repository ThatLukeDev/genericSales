<div class="flex h-full">
	<div class="w-50 bg-gray-200 h-full">
	@foreach ($pages as $page)
		<a wire:click="changePage('{{ $page->name }}')" class="cursor-pointer p-2 w-full text-center block {{ $page->name == $view ? 'bg-gray-300' : '' }}">{{ $page->name }}</a>
	@endforeach
	</div>
	<div class="h-full p-10 w-full">
		<input wire:model="title" class="text-4xl block border-2 my-1 w-full">
		<input wire:model="text" class="text-xl block border-2 my-1 w-full">
		<textarea wire:model="description" class="block border-2 my-1 w-full h-50"></textarea>
		<div class="w-full flex justify-center"><button wire:click="save" class="bg-purple-700 rounded-full text-white p-2 w-50 cursor-pointer">Save</button></div>
	</div>
</div>
