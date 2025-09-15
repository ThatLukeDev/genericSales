<div class="m-10">
	<h1 class="text-4xl">{{ $page->title }}</h1>
	<h2 class="text-xl">{{ $page->text }}</h2>
	<div id="md-container">{{ $page->description }}</div>
	<style>
		#md-container {
			h1 {
				font-size: 2.5em;
			}
			h2 {
				font-size: 2em;
			}
			h3 {
				font-size: 1.5em;
			}
			a {
				color: blue;
			}
			white-space: pre-wrap;
		}
	</style>
</div>
