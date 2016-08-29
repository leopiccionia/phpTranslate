<?php
	class Translator{
		
		private $languages = array();
		
		function __construct($main, $base = 'en', array $extra = array()){
			$json_goal = $this->jsonFileToArray("lang/$main.json");
			if(empty($json_goal))
				throw new Exception("Language not found: '$main'.");
			else
				$this->languages[$main] = $json_goal;
			
			$json_base = $this->jsonFileToArray("lang/$base.json");
			if(!empty($json_base))
				$this->languages[$base] = $json_base;
			
			if(isset($extra)){
				foreach($extra as $x){
					$json_extra = $this->jsonFileToArray("lang/$x.json");
					if(!empty($json_extra))
						$this->languages[$x] = $json_extra;
				}
			}
		}
		
		function get($token){
			foreach($this->languages as $language){
				if(!empty($language[$token])){
					return $language[$token];
				}
			}
			throw new Exception("Token not found: '$token'.");
		}
		
		private function jsonFileToArray($file){
			if(!file_exists($file))
				return null;
			$file = mb_convert_encoding($file, 'UTF-8');
			return json_decode(file_get_contents($file), true);
		}
	}
?>