<?php
class Coupon extends CI_Controller {

    public function insertCodes() {
        $this->load->model('CouponModel'); // Load the model
        $startIdx = 4501;
        $endIdx = 5999;
        $this->CouponModel->insertCouponCodes($startIdx, $endIdx);
    }
}
?>