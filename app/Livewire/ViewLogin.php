<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class ViewLogin extends Component
{
	public $email = "";
	public $password = "";
	public $error = "";

	public function login() {
		$this->error = "";

		if (Auth::attempt(["email" => $this->email, "password" => $this->password])) {
			return $this->redirect("/admin");
		}
		else {
			$this->error = "Invalid email or password";
		}
	}

	public function render()
	{
		return view('livewire.view-login')->layout("components.layouts.admin");
	}
}
