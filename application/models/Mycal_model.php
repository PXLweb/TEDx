<?php
class Mycal_model extends Model
{
    function generate($year,$month)
    {
            $conf = array(
            'show_next_prev'=>true,
            'next_prev_url'=>base_url().'events/display'
        );
        $this->config->set_item('language', 'dutch');//omdat er languages zijn ..
        $this->load->library('Calendar',$conf);
        echo $this->calendar->generate($year,$month);
    }
}
