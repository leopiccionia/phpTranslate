<?php
	class Translator{
		
		private $_languages = array();
		
		function __construct($languages = 'en'){
			if(empty($languages))
				throw new Exception('Please, pass at least one language as argument.');
			elseif(is_string($languages)){
				$json = $this->jsonFileToArray("lang/$languages.json");
				if (!empty($json)){
					$this->_languages[$languages] = $this->jsonFileToArray("lang/$languages.json");
				}
				else
					throw new Exception("Language not found: '$languages'.");
			}
			elseif(is_array($languages)){
				foreach($languages as $language){
					$json = $this->jsonFileToArray("lang/$language.json");	
					if(!empty($json))
						$this->_languages[$language] = $json;
				}
				if(empty($this->_languages))
					throw new Exception("No languages passed.");
			}
			else
				throw new Exception("Language not found: '$languages'.");
		}
		
		function get($token){
			foreach($this->_languages as $language){
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