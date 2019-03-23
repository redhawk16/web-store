<?php
	class Functions {
		var $items_per_page = 10;
		var $number_of_pages;
		var $this_page_first_result;
		var $items;
		var $sql;

		public function get_items($connect) {
			$this->sql = 'SELECT * FROM store';
			// if(!empty($arr_sort)) {
			// 	foreach($arr_sort as $key => $val) { $arr_sort[$key] = mysqli_real_escape_string($connect, $val); }
			// 	$sort = "'".implode("', '", $arr_sort)."'"; // Concatinating array to string

			// 	$gens = $connect->query('SELECT * FROM store GROUP BY generation');
			// 	if($gens) { foreach ($gens as $gen) { $arr_gen[] = $gen['generation']; } }

			// 	if(!empty(array_intersect($arr_sort, $arr_gen))) { 
			// 		$this->sql .= ' WHERE model IN (' . $sort . ') AND generation IN (' . $sort . ')'; 
			// 	} else {
			// 		$arr_gen = "'".implode("', '", $arr_gen)."'"; 
			// 		$this->sql .= ' WHERE model IN (' . $sort . ') AND generation IN (' . $arr_gen . ')'; 
			// 	}
			// }
			if(isset($_GET['cpu']) AND isset($_GET['gen'])) {
				$sort = array_merge($_GET['cpu'], $_GET['gen']);
				$sort = "'".implode("', '", $sort)."'";
				$this->sql .= ' WHERE model IN (' . $sort . ') AND generation IN (' . $sort . ')'; 
			} elseif(isset($_GET['cpu'])) {
				$sort = "'".implode("', '", $_GET['cpu'])."'";
				$this->sql .= ' WHERE model IN (' . $sort . ')'; 
			} elseif(isset($_GET['gen'])) {
				$sort = "'".implode("', '", $_GET['gen'])."'";
				$this->sql .= ' WHERE generation IN (' . $sort . ')'; 
			}
			//echo $this->sql;

			Functions::get_pages($connect);
			
			$this->sql .= ' LIMIT ' . $this->this_page_first_result . ',' . $this->items_per_page; 
			$this->items = $connect->query($this->sql);

			return $this->items;
		}

		public function get_pages($connect) {
			$this->items = $connect->query($this->sql);
			$number_of_results = ($this->items)->rowCount();
			$this->number_of_pages = ceil($number_of_results/$this->items_per_page);
			
			if(!isset($_GET['page'])) { $page = 1; }
			else { $page = $_GET['page']; }
	
			$this->this_page_first_result = ($page - 1) * $this->items_per_page;
		}
	}

	$functions = new Functions;
?>