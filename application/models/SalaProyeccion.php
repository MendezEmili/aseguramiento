<?php

class SalaProyeccion extends CI_Model
{

	public function __construct()
	{
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
	 * Get all salas
	 * @return mixed
	 */
	//Model to salas
	public function get()
	{	
		
		$this->db->select('id_sala, nombre, id_cine, id_pelicula, fecha_inicio_proyeccion, fecha_fin_proyeccion');
		$this->db->from('salaproyeccion');
	
	
		return $this->db->get()->result();
	}

	/**
	 * Add a new ticket
	 * @param $salas
	 * @return bool
	 */
	public function add($salaproyeccion)
	{
		$query = $this->db->insert('salaproyeccion', $salaproyeccion);
		return $query;
	}

	/**
	 * Delete a bank by id
	 * @param $id
	 * @return bool
	 */
	public function delete($id)
	{
		$this->db->where('id_bank', $id);
		return $this->db->delete("{$this->db_prefix}banks");
	}

	/**
	 * Edit a bank by id
	 * @param $bank
	 */
	public function edit($bank, $id)
	{
		$this->db->set($bank);
		$this->db->where('id_bank', $id);
		if ($this->db->update('tblbanks')) {
			return true;
		}
		return false;
	}
}
