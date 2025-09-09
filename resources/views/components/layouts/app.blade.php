<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include("partials.head")
	</head>
	<body class="h-full flex flex-col">
		<livewire:navbar />
		<div class="flex-auto">
			{{ $slot }}
		</div>
	</body>
</html>
