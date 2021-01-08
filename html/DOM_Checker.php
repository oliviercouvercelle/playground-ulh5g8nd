<?php 
	include("simple_html_dom.php");

	function check_DOM($file,$exp) {
		$html = str_get_html(file_get_contents($file));
		
		$dom_string = go_DOM($html->root);
		$elements = parse_DOM_exp($exp);
		
		preg_match("#o{(.*)}#",$exp,$expression);
		if (empty($expression)) {
			$order = false;
		}
		else {
			$order = true;
			$exp = $expression[1];
		}
		
		if (find_all_elements($html,$elements) && (!$order || DOM_in_Order($dom_string,$exp)))
			echo "TECHIO> success true\n";
		else
			echo "TECHIO> success false\n";
	}	
	
	
	function find_all_elements($html,$elements) {
		$retval=true;
		
		// var_dump($element);
		
		foreach ($elements as $tag) {
			if (find_element($html,$tag)) {
				$retval=$retval && true;
			}
			else {
				echo "TECHIO> message --channel 'Error' '".$tag['tag'].((isset($tag['attr'])) ? display($tag['attr']) : "")." not found'\n";
				$retval=$retval && false;				
			}
		}
		return $retval;
	}
	
	function display($attr) {
		$chaine="";
		for ($i=0;$i<count($attr);$i++) {
			$chaine .= $attr[$i] . ", ";
		}
		return (empty($chaine) ? "" : " with " . substr($chaine,0,-2));
	}
	
	function find_element($html,$element) {
		$finds = $html->find($element['tag']);
		foreach ($finds as $find) {
			if (isset($element['attr'])) {
				$retval = true;
				foreach ($element['attr'] as $attr) {
					list($prop,$val) = explode2val("=",$attr);
					if (array_key_exists($prop,$find->attr) && (empty($val) || (!empty($val) && $find->attr[$prop]==$val)) )
						$retval = $retval && true;
					else
						$retval = $retval && false;
				}
				if ($retval) return $retval;
			}
			else {
				return true;
			}
		}
		return false;
	}
	
	function explode2val($delimiter,$string) {
		$ret = explode($delimiter,$string);
		$ret[1] = (isset($ret[1])) ? $ret[1] : "";
		return $ret;
	}
		
	function parse_DOM_exp($exp) {
		preg_match_all("#([a-z1-6]+)-(.*)-#U",$exp,$grep);
		for ($i=0;$i<sizeof($grep[1]);$i++) {
			$element[]['tag'] = $grep[1][$i];
			if (!empty($grep[2][$i])) {
				$data = explode(";",$grep[2][$i]);
				foreach($data as $info) {
					if (preg_match("#content#",$info)) {
						$dummy=explode("=",$info);
						$element[sizeof($element)-1]['content']=(sizeof($dummy)==2) ? $dummy[1] : true;
					}
					else {
						$element[sizeof($element)-1]['attr'][] = $info;
					}
				}
			}
		}
		return $element;
	}

	function DOM_in_Order($dom_string,$exp) {
		$exp = preg_replace("#-.*-#U","",$exp);

		$exp = str_replace(array("[","]"),array("\[","\]"),$exp);
		if (preg_match("#$exp#",$dom_string)) {
			return true;
		}
		else {
			echo "TECHIO> message --channel 'Error' 'DOM order failed'\n";
			return false;
		}		
	}
	
	
	function go_DOM($html) {		
		$retval ="";
		foreach($html->children as $children) {
			$retval .= $children->tag; // . element_attr($children) ;
			if (!empty($children->children)) $retval .= "[" . go_DOM($children) . "]";
		}
		return $retval;
	}
	
	function element_attr($tag) {
		$retval="-";
		$attrs = $tag->attr;
		ksort($attrs);
		foreach($attrs as $attr => $value)
			$retval.=$attr . ";";
		$retval.="-";
		return $retval;
	}
	
	function require_tag($html,$tag) {
		$element = $html->find($tag);
		if (empty($element)) {
			echo "TECHIO> message --channel 'Error' '$tag tag not found.'\n";
		}
		return $element;
	}
?>