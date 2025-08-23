<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Page;

class ViewPage extends Component
{
	public $page;

	public function mount($name = "home") {
		$this->page = Page::get($name);
	}

	public function render()
	{
		return view('livewire.page');
	}
}
