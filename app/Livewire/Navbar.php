<?php

namespace App\Livewire;

use Livewire\Component;

use app\Models\Page;

class Navbar extends Component
{
	public $pages;

	public function render()
	{
		$this->pages = Page::list();

		return view('livewire.navbar');
	}
}
