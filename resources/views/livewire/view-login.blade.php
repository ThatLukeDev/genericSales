<div class="my-50">
	<form wire:submit="login">
		<div class="w-full flex justify-center my-2"><input type="text" wire:model="email" placeholder="Email" class="w-100 h-10 p-5 bg-gray-100 rounded-xl outline-none border-b-5 border-gray-300 focus:border-indigo-400"></div>
		<div class="w-full flex justify-center my-2"><input type="password" wire:model="password" placeholder="Password" class="w-100 h-10 p-5 bg-gray-100 rounded-xl outline-none border-b-5 border-gray-300 focus:border-indigo-400"></div>
		<div class="w-full flex justify-center my-2"><input type="submit" value="Login" class="w-100 h-10 bg-purple-700 text-white rounded-full"></div>
	</form>
	<div class="w-full text-center text-red-500 my-5">{{ $error }}</div>
</div>
