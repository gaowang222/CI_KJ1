<?php

class SliderModerl extends CI_Model
{

    function SliderModerl()
    {
        $this->load->database();
    }

    function getSlider()
    {
        $sql = 'SELECT * from slider';
        // 查询数据库
        $data = $this->db->query($sql);
        // $query=$this->db->get('singer');
        // 以数组形式返回查询结果
        return $data->result_array();
    }

}
?>