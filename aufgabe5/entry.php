<?php

class Entry{
	
	private $id;
	private $title;
	private $text;
	private $textparse;
	private $creator;
	private $createDate;
	private $lastModifier;
	private $lastModifyDate;
	private $image;
	

	public function __construct($id, $t, $d, $rt="", $c="", $cd="", $lm="", $lmd="", $image=""){
		$this->id = $id;
		$this->title = $t;
		$this->text = $d;
		if($rt == ""){
			$this->textparse = $this->parseText($this->text);
		}
		else{
			$this->textparse = $rt;
		}
		$this->creator = $c;
		$this->createDate = $cd;
		$this->lastModifier = $lm;
		$this->lastModifyDate = $lmd;
		$this->image = $image;
		
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getTitle(){
		return $this->title;
	}
		
	public function getText(){
		return $this->text;
	}
	
	public function getTextParse(){
		return $this->textparse;
	}
	
	public function getCreatorId(){
		return $this->creator;
	}
	
	public function getCreateDate(){
		return $this->createDate;
	}
	
	public function getLastModifier(){
		return $this->lastModifier;
	}
	
	public function getLastModifyDate(){
		return $this->lastModifyDate;
	}	
	
	public function getImage(){
		return $this->image;
	}
	
	public function __toString(){
		return "<html>".
					"<h3>Titel: ".$this->title."</h3>".
					"<p>Beschreibung: ".$this->parseText($this->text)."</p>".
					"<a href='wiki.php?title=".$this->title."' class='btn btn-small btn-danger'>Anzeigen</a>".
				"</html>";
	}
	
	public function edit(){
		echo "Edit";
	}
	
	private function parseText($text){
		//search headlines
		$text2 = preg_replace("/---(.*?)---/","<h4>\\1</h4>",$text);
		
		//search links
		$db = new DatabaseConnect();
		$text3 = preg_replace("/\[\[(.*?)\]\]/e", '"<a href=show.php?id=".$db->getIdByTitle("$1").">$1</a>"', $text2);
		return $text3;
	}
	
	public function getLinkEntries(){
		$text = $this->text;
		preg_match_all("/\[\[(.*?)\]\]/e", $text, $result);
		return $result[1];
	}

}

?>