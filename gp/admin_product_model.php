<?php
class product_model extends CI_Model{

    public function deletewodedingzhi($dingzhiID){
        $this->db->delete("youkuanghua",array(
            "youkuanghua_id"=>$dingzhiID
        ));
        return $this->db->affected_rows();
    }

    public function deleteyoukuang($commodityID){
        $this->db->delete("c_youkuanghua",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }

    public function deletebuyi($commodityID){
        $this->db->delete("c_buyihua",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }

    public function deletejuanzhou($commodityID){
        $this->db->delete("c_juanzhouhua",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }
    public function deletebeizi($commodityID){
        $this->db->delete("c_lvxingbei",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }

    public function deletebaozhen($commodityID){
        $this->db->delete("c_baozhen",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }

    public function deletenankuan($commodityID){
        $this->db->delete("c_nankuan",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }
    public function deletenvkuan($commodityID){
        $this->db->delete("c_nvkuan",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }
    public function deleteertong($commodityID){
        $this->db->delete("c_ertong",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }
    public function deletefanbu($commodityID){
        $this->db->delete("c_fanbubao",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }
    public function deleteshouji($commodityID){
        $this->db->delete("c_shoujike",array(
            "commodity_id"=>$commodityID
        ));
        return $this->db->affected_rows();
    }


}