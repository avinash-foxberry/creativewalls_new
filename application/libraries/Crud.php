<?php 

Class Crud {

    public function addEvents($array,$table){
        $CI =& get_instance();
        $CI->load->database();

        $save = $CI->db->insert($table,$array);
        return $CI->db->insert_id();
    }

    public function getEventData($selects,$table){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select($selects)
                      ->from($table)
                      ->get();
        return $get->result_array();
                      
    }
    public function getsingleevent($id){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('events')
                      ->where('id',$id)
                      ->get();
        return $get->result_array();
                      
    }

    function get_all_cities(){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('cities')
                      ->get();
        return $get->result_array();
    }
    function get_coupon($coupon_name){

        $CI =& get_instance();
        $CI->load->database();

        $coupon = $CI->db->select('*')
                      ->from('coupons')
                      ->where('couponCode',$coupon_name)
                      ->get();
        return $coupon->result_array();
    }

    // All Data Of event By Selected City
    function getAllDataOfEventConnectBySelectedCity($city){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('events')
                      ->where('citys',$city)
                      ->get();
        return $get->result_array();
    }
//Get batch details
    function get_batches(){

        $CI =& get_instance();
        $CI->load->database();

        $coupon = $CI->db->select('*')
                      ->from('batches')
                      ->where('status',1)
                      ->get();
        return $coupon->result_array();
    }

    public function getAvailCouponData($coupon){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('coupons')
                      ->where('couponCode',$coupon)
                      ->where('startDate<=',date('Y-m-d H:i:s'))
                      ->where('endDate>',date('Y-m-d H:i:s'))
                      ->where('status',1)
                      ->get();
        return $get->result_array();       
    }

    public function checkForAppliedOrNot($a,$b){
        $CI =& get_instance();
        $CI->load->database();

        $sql = 'SELECT * FROM `appliedcoupons` WHERE `mobile`='.$a.' AND `couponID`='.$b;
        $get = $CI->db->query($sql);
        return $get->result_array();
    }


    public function applyCouponNew($array){
        $CI =& get_instance();
        $CI->load->database();

        $CI->db->insert('appliedcoupons',$array);
        return $CI->db->insert_id();
    }

    public function save($table,$array){
        $CI =& get_instance();
        $CI->load->database();

        $CI->db->insert($table,$array);
        return $CI->db->insert_id();
    }

    public function checkForRefIsAviable($a){
        $CI =& get_instance();
        $CI->load->database();

        // $sql = 'SELECT * FROM `referral_code` WHERE `user_mobile_number`='.$b.' AND `ref_code`='.$a.'' ORDER BY ;
        // $get = $CI->db->query($sql);
        $sql = $CI->db->select('*')
                        ->from('referral_code')
                        //->where('user_mobile_number',$b)
                        ->where('referal_code',$a)
                        ->order_by('refcode_id','DESC')
                        ->get();
        return $sql->result_array();
    }

    public function checkForAppliedOrNotReferal($a,$b,$c){
        $CI =& get_instance();
        $CI->load->database();

        // $sql = 'SELECT * FROM `appliedcoupons` WHERE `phone`='.$a.' AND `appliedCouponsID`='.$b.'';
        // $get = $CI->db->query($sql);

        $sql = $CI->db->select('*')
                      ->from('existing_ref_code')
                      ->where('use_referal_phone_number',$a)
                      ->where('refcode_id',$b)
                      ->where('course_id',$c)
                      ->get();
        return $sql->result_array();
    }
}