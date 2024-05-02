<?php

interface KontrakView{
	public function tampil();
	public function add_form(); 
	public function edit_form($id); 
	public function delete($id);
}

?>