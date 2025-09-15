<div class="flex h-full">
	<div wire:sortable="updateOrder" class="w-50 bg-gray-200 h-full flex flex-col">
		@foreach ($pages as $page)
			<div wire:click="changePage('{{ $page->name }}')" wire:sortable.item="{{ $page->id }}" wire:key="page-{{ $page->id }}" class="cursor-pointer p-2 flex items-center flex-none hover:bg-gray-100 {{ $page->name == $view ? 'bg-gray-300' : '' }}">
				<input x-ref="{{$page->name}}editname" id="{{$page->name}}editname" value="{{ $page->name }}" class="w-3/5 not-focus:cursor-pointer" readonly @click="
					if ($event.target.hasAttribute('readonly')) { $event.target.blur(); } else { $event.stopPropagation(); }
				" @keydown.enter="$wire.renamePage('{{ $page->name }}', $event.target.value)" @click.outside="(!$refs.{{$page->name}}editname.hasAttribute('readonly')) && $wire.renamePage('{{ $page->name }}', $refs.{{$page->name}}editname.value)">
				<x-gmdi-edit class="size-5 fill-gray-400 ml-auto mr-2" @click.stop="let ele = document.getElementById('{{ $page->name }}editname'); ele.removeAttribute('readonly'); ele.focus()"></x-gmdi-edit>
				<x-gmdi-drag-indicator-o wire:sortable.handle class="size-5 fill-gray-400"></x-gmdi-drag-indicator-o>
			</div>
		@endforeach
		<div wire:click="addNew()" class="mt-2 w-full flex justify-center cursor-pointer">
			<x-gmdi-add class="fill-gray-400 size-10"></x-gmdi-add>
		</div>
		<div wire:sortable.item="delete" wire:key="delete" class="mt-auto">
			<x-gmdi-delete wire:sortable.handle class="fill-gray-400"></x-gmdi-delete>
		</div>
	</div>
	<div class="h-full p-10 w-full">
		<input wire:model="title" class="text-4xl block border-2 my-1 w-full">
		<input wire:model="text" class="text-xl block border-2 my-1 w-full">
		<textarea wire:model="description" class="block border-2 my-1 w-full h-50"></textarea>
		<div class="w-full flex justify-center"><button wire:click="save" class="bg-purple-700 rounded-full text-white p-2 w-50 cursor-pointer">Save</button></div>
		* Markdown supported
	</div>
</div>
