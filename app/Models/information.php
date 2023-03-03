<?php namespace App\Models;

use CodeIgniter\Model;

class information extends Model {

	/* ---------------------------------------------------------------------- */

	public function visual($table) {

		return $this -> db -> table($table) -> get() -> getResult();

	}

	public function visual_join2($table1, $table2, $on) {

		return $this->db->table($table1)->join($table2, $on, 'left')->get()->getResult();
	
	}
	
	public function visual_join3($table1, $table2, $table3, $on1, $on2, $where) {
	
		return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> join($table3, $on2, 'left') -> getWhere($where) -> getResult();
	
	}

	/* ---------------------------------------------------------------------- */

	public function add_data($table, $data) {

		return $this -> db -> table($table) -> insert($data);
	
	}
	
	public function edit_data($table, $data, $where) {
	
		return $this -> db -> table($table) -> update($data, $where);

	}
	
	public function delete_data($table, $where) {
	
		return $this -> db -> table($table) -> delete($where);
	
	}

	/* ---------------------------------------------------------------------- */

	public function getWhere($table, $where) {

		return $this -> db -> table($table) -> getWhere($where) -> getRow();
	
	}
	
	public function getWhere2($table, $where) {
	
		return $this -> db -> table($table) -> getWhere($where) -> getRowArray();
	
	}

	/* ---------------------------------------------------------------------- */
    
}