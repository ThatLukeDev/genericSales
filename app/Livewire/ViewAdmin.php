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

	public function updateOrder($pages) {
		$deleting = false;

		foreach ($pages as $page) {
			if ($deleting) {
				Page::find($page["value"])->delete();
			}
			elseif ($page["value"] == "delete") {
				$deleting = true;
			}
			else {
				Page::find($page["value"])->update([
					"order" => $page["order"]
				]);
			}
		}
	}

	public function addNew() {
		Page::create([
			"name" => "New Page",
			"title" => "New Page",
			"text" => "Text for page",
			"description" => "Description for page"
		]);
	}

	public function renamePage($old, $new) {
		Page::where("name", $old)->update(["name" => $new]);
	}

	public function mount()
	{
		$this->view = "Home";
	}

	public function render()
	{
		$this->pages = Page::list();
		$expanded = Page::get($this->view);

		$this->title = $expanded->title;
		$this->text = $expanded->text;
		$this->description = $expanded->description;

		return view('livewire.view-admin')->layout("components.layouts.admin");
	}
}
