<?php
class TemplateFile
{
	public $source;
	public $destination;
	public $single;

	public function __construct($row = "")
	{
		$cols = explode("\t",trim($row));
		if (count($cols) != 3) throw new Exception("Parâmetro linha inválida: " . $row);

		$this->source = $cols[0];
		$this->destination = $cols[1];
		$this->generate_mode = $cols[2];
	}
}
