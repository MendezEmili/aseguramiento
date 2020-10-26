<?php

class Taquillas extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->reconnect();
	}

	/*
	ticket int(11) AUTO_INCREMENT not null primary key,
	id_sala int(11),
	fecha_venta timestamp
	*/
	/**
	 * Get all taquillas
	 * @return mixed
	 */
	//Model to Taquillas
	public function get(){
		$this->select('ticket, id_sala, fecha_venta');
		$this->from('taquilla');

		return $this->get()->result();
	}


	/**
	 * Add a new ticket
	 * @param $taquilla
	 * @return bool
	 */
	public function add($taquilla){
		$query = $this->db->insert('taquilla', $taquilla);
		return $query;
	}

	/**
	 * Delete a bank by id
	 * @param $id
	 * @return bool
	 */
	public function delete($id){
		$this->db->where('id_bank', $id);
		return $this->db->delete("{$this->db_prefix}banks");
	}

	/**
	 * Edit a bank by id
	 * @param $bank
	 */
	public function edit($bank, $id){
		$this->db->set($bank);
		$this->db->where('id_bank', $id);
		if($this->db->update('tblbanks')){
			return true;
		}
		return false;
	}


}
