<?php
class Dashboard_model extends CI_Model
{
   public function today_expenses($id){
      $tdate=date('Y-m-d');
      $data=array('expense_date'=>$tdate,'user_id'=>$id);
      $this->db->select_sum('expense_cost');
      $this->db->where($data);
      $result=$this->db->get('expense')
      ->row();
      return $result->expense_cost;
   }

   public function day_expenses($id){
      $daydate=date('Y-m-d',strtotime("-1 week"));
      $cdate=date('Y-m-d');
      $data=array('expense_date>='=>$daydate, 'expense_date<='=>$cdate, 'user_id'=>$id);
      $this->db->select_sum('expense_cost');
      $this->db->where($data);
      $result=$this->db->get('expense')
      ->row();
      return $result->expense_cost;
   }

   public function month_expenses($id){
      $mdate=date('Y-m-d',strtotime("-1month"));
      $cdate=date('Y-m-d');
      $data=array('expense_date>='=>$mdate, 'expense_date<='=>$cdate, 'user_id'=>$id);
      $this->db->select_sum('expense_cost');
      $this->db->where($data);
      $result=$this->db->get('expense')
      ->row();
      return $result->expense_cost;
   }

   public function year_expenses($id){
      $ydate=date('Y');
      $data=array('year(expense_date)'=>$ydate, 'user_id'=>$id);
      $this->db->select_sum('expense_cost');
      $this->db->where($data);
      $result=$this->db->get('expense')
      ->row();
      return $result->expense_cost;
   }

   public function total_expenses($id){
      $data=array('user_id'=>$id);
      $this->db->select_sum('expense_cost');
      $this->db->where($data);
      $result=$this->db->get('expense')
      ->row();
      return $result->expense_cost;
   }
}
?>