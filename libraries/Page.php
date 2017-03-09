<?php

class Page
{
	private $title, $stylesheets = array(), $javascripts = array(), $body;

	public function page()
	{
		$this->addCSS('css/main.css');
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function addCSS($path)
	{
		$this->stylesheets[] = $path;
	}

	public function addJavascript($path)
	{
		$this->javascripts[] = $path;
	}

	public function startBody()
	{
		ob_start();
	}

	public function endBody()
	{
		$this->body = ob_get_clean();
	}

	public function render($path)
	{
		ob_start();
		include $path;
		return ob_get_clean();
	}
}