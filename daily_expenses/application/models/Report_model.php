<?php
class Report_model extends CI_Model
{
public function today_data($from,$to,$id){
    $data=array('expense_date>='=>$from,'expense_date<='=>$to,'user_id'=>$id);
    $query=$this->db->select('expense_date,sum(expense_cost) as expense_cost')
    ->where($data)
    ->group_by('expense_date')
    ->get('expense');
    return $query->result();    
}
public function month_data($from,$to,$id){
    $data=array('expense_date>='=>$from,'expense_date<='=>$to,'user_id'=>$id);
    $query=$this->db->select('expense_date,sum(expense_cost) as expense_cost')
    ->where($data)
    ->group_by(array('month(expense_date),date(expense_date)'))
    ->get('expense');
    return $query->result();    
}

public function year_data($from,$to,$id){
    $data=array('expense_date>='=>$from,'expense_date<='=>$to,'user_id'=>$id);
    $query=$this->db->select('sum(expense_cost) as expense_cost, year(expense_date) as expense_date')
    ->where($data)
    ->group_by(array('year(expense_date),date(expense_date)'))
    ->get('expense');
    return $query->result();    
}
}