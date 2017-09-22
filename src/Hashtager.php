<?php
namespace Carkii\Hashtager;


/**
* Handle hashtags 
*/
class Hashtager
{
	public $hashtags=[];
	public $result;
	
	public function find(String $string){	
			preg_match_all('/#([\p{L}\p{Mn}\w]+)/u', $string, $matches);								
			// array_unique to remove dublicate elements
			$this->hashtags = $this->result = array_unique($matches[0]);
			
			return $this;
	}

	public function excludeHash(){
		// search for hastages in string
		$this->result = array_map(function($hashtag){
			return str_replace('#','',$hashtag);
		},$this->hashtags);

		return $this;
	}

	public function joint(String $jointer = ' '){
		$this->result = implode($jointer,$this->result);

		return $this;
	}

	public function get(){
		return $this->result;
	}
}