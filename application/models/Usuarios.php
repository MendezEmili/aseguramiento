<?php

class Usuarios extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->reconnect();
	}

	/**
	 * Get all usuarios
	 * @return mixed
	 */
	//Model to Usuarios
	public function get(){
		$this->select('id_user, usuario, contrasenia');
		$this->from('usuario');

		return $this->get()->result();
	}

	/**
	 * Get bank by id
	 * @param $id
	 * @return mixed
	 */
	public function getById($id){
		$this->db->select('tblbanks.id_bank, tblbanks.bank_name, tblcountries.short_name');
		$this->db->from($this->db_prefix . 'banks');
		$this->db->join($this->db_prefix .'countries', $this->db_prefix . 'countries.country_id = ' . $this->db_prefix . 'banks.country_id', 'inner');
		$this->db->where('id_bank', $id);

		return $this->db->get()->row();
	}

	/**
	 * Get a bank by name
	 * @param $name
	 * @return mixed
	 */
	public function getByName($name){
		$this->db->select('tblbanks.id_bank, tblbanks.bank_name, tblcountries.short_name');
		$this->db->from($this->db_prefix . 'banks');
		$this->db->join($this->db_prefix .'countries', $this->db_prefix . 'countries.country_id = ' . $this->db_prefix . 'banks.country_id', 'inner');
		$this->db->where('bank_name', $name);

		return $this->db->get()->result();
	}

	/**
	 * Add a new usuario
	 * @param $usuario
	 * @return bool
	 */
	public function add($usuario){
		$query = $this->db->insert('usuario', $usuario);
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
	 * @return bool
	 */
	public function edit($bank, $id){
		$this->db->set($bank);
		$this->db->where('id_bank', $id);
		if($this->db->update('tblbanks')){
			return true;
		}
		return false;
	}

	public function login($usuario, $password){
		$array = array('usuario'=>$usuario, 'contrasenia'=>$password);
		$this->db->select('usuario');
		$this->db->from('usuario');
		$this->db->where($array);

		return $this->db->get()->result();
	}

}
