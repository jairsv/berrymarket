<?php
class CinesController extends AppController
{

//var $scaffold;
function index()
    {
        $this->pageTitle = 'lista de cines';
	$this->set('lista', $this->Cine->findAll()); //lista es una variable que sergio inventó										
	
	$info=$this->params['form']['info'];
	$this->set('jai',$this->params['form']);
	$querysql="SELECT descripcion from cines WHERE nombre LIKE '".$info."'";
	$this->set('cines',$this->Cine->query($querysql));

}
function ver($id=null)
	{
		$this->Cine->id=$id;
		$this->set('uncine',$this->Cine->read());
	}
function borrar($id=null)
	{
	$this->Cine->del($id);
	}
function guardar($id=null)
	{
$this->Cine->save($this->data);
	}



}

?>
