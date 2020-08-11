<?php
/**
 * @author sangprabo
 */
class Weapon_model extends Model {
    
	function Weapon_model () {
		parent::Model();
	}

	function get_image($weapon_id) {
		$query = $this->db->query("SELECT image FROM weapons WHERE weapon_id = $weapon_id");
		if ($query->num_rows == 0)
			return "";
		$row = $query->row();
		return imagejpeg(imagecreatefromstring($query->row()->image));
	}

	function get_all_weapons($limit = 100) {
		$query = $this->db->get('weapons', $limit);
		if ($query->num_rows > 0 ) {
			return $query->result();
		}
	}

}
?>
