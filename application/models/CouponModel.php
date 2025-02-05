<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class CouponModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getCoupon($couponeData){

        $this->db->select("*");
        $this->db->from("coupons");
        $this->db->where("coupons.couponCode", $couponeData);
        $query = $this->db->get();

       return $query->result_array();
    }


    public function insertCouponCodes($startIdx, $endIdx)
    {
        for ($i = $startIdx; $i <= $endIdx; $i++) {
            $couponCode = 'SIMRERA' . str_pad($i, 6, '0', STR_PAD_LEFT);

            $data = array(
                'couponId' => null,
                'courseId' => '1',
                'couponName' => 'Referral Code',
                'couponCode' => $couponCode,
                'startDate' => '2023-08-24 00:00:00',
                'endDate' => '2023-10-24 12:00:00',
                'couponType' => '1',
                'couponvalue' => '250.00',
                'isPublish' => '1',
                'createdBy' => '1',
                'updatedBy' => '1',
                'status' => '1',
                'updatedAt' => date('Y-m-d H:i:s'),
                'createdAt' => date('Y-m-d H:i:s')
            );

            $this->db->insert('coupons', $data);
        }
    }

}