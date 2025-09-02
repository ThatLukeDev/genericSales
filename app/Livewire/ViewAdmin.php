<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Page;

class ViewAdmin extends Component
{
	public $pages;
	public $view;

	public $title;
	public $text;
	public $description;

	public function changePage($page)
	{
		$this->view = $page;
	}

	public function save() {
		$expanded = Page::where("name", $this->view)->first()->update([
			"title" => $this->title,
			"text" => $this->text,
			"description" => $this->description
		]);
	}

	public function updateOrder() {
	}

	public function mount()
	{
		$this->view = "Home";
	}

	public function render()
	{
		$this->pages = Page::where("name", "not like", "error")->get();
		$expanded = Page::get($this->view);

		$this->title = $expanded->title;
		$this->text = $expanded->text;
		$this->description = $expanded->description;

		return view('livewire.view-admin');
	}
}
