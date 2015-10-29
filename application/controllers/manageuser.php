<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','score');

	}

	function index(){
    $data['rs'] = $this->score->_getChar();
		$this->load->view('show_all',$data);
}

  function add()
  {
    if($this->input->post("btsave")!=null)
    {
      $adddata=array(
        "time"=>$this->input->post("time"),
        "date"=>$this->input->post("date"),
        "team1"=>$this->input->post("team1"),
        "score"=>$this->input->post("score"),
        "team2"=>$this->input->post("team2"),
        "comment"=>$this->input->post("comment"),
        "status"=>$this->input->post("status"),
        "tv"=>$this->input->post("tv"),
        );
      $this->db->insert("tb_score",$adddata);
      redirect("manageuser","refresh");
      exit;
    }
    $this->load->view('from/add');
  }       

  function edit($id)
  {
    if($this->input->post("btsave")!=null)
    {
      $editdata=array(
        "time"=>$this->input->post("time"),
        "date"=>$this->input->post("date"),
        "team1"=>$this->input->post("team1"),
        "score"=>$this->input->post("score"),
        "team2"=>$this->input->post("team2"),
        "comment"=>$this->input->post("comment"),
        "status"=>$this->input->post("status"),
        "tv"=>$this->input->post("tv"),
        );

      $this->db->where("id",$id);
      $this->db->update("tb_score",$editdata);
      redirect("manageuser","refresh");
      exit;
    }

    $sql="Select * from tb_score where id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0)
    {
      $data['rs']=array();
    }
    else
    {
      $data['rs']=$rs->row_array();
    }

    $this->load->view('from/edit',$data);
  }       

  function delete($id)
  {
    $this->db->delete('tb_score', array('id' => $id));
    redirect("manageuser","refresh");
    exit;
  }       

 function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $type = $this->input->post('type');  
        $data['rs']    =   $this->score->search($keyword , $type );
        $this->load->view('show_all',$data);
    }

}
