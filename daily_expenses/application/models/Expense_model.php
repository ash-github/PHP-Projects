<?php
class Expense_model extends CI_Model
{
public function add($id,$date,$item,$cost){
    $data=array('user_id'=>$id,'expense_date'=>$date,'expense_item'=>$item,'expense_cost'=>$cost);
    $query=$this->db->insert('expense',$data);
    if($query){
        $this->session->set_flashdata('success');
        redirect('Expense/add');
    }
    else{
        $this->session->set_flashdata('error');
        redirect('Expense/add');
    }
}

public function manage_data($id){
    $query=$this->db->select('expense_date,expense_item,expense_cost,note_date,id')->where('user_id',$id)->get('expense');
    return $query->result();
}

public function delete($id){
    $query=$this->db->where('id',$id)->delete('expense');
}
}