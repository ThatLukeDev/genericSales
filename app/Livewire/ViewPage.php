<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Mail\Markdown;

use App\Models\Page;

class ViewPage extends Component
{
	public $page;

	public function mount($name = "home") {
		$this->page = Page::get($name);
		$this->page->description = Markdown::parse($this->page->description);
	}

	public function render()
	{
		return view('livewire.page');
	}
}
