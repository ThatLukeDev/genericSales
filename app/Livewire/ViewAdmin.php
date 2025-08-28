<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Page;

class ViewAdmin extends Component
{
	public $pages;
	public $view;
	public $expanded;

	public function changePage($page)
	{
		$this->view = $page;
	}

	public function mount()
	{
		$this->view = "Home";
	}

	public function render()
	{
		$this->pages = Page::where("name", "not like", "error")->get();
		$this->expanded = Page::get($this->view);
		return view('livewire.view-admin');
	}
}
