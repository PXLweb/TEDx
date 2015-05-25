<?php

/**
 * Events 
 *
 * @author Ilyasse
 */
class EventManager extends CI_Model {

    
    private $conf;

    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->conf = array(
            'show_next_prev'=>true,
            'next_prev_url'=>base_url().'events/display'
        );
        $this->conf['template']='
            {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

            {heading_row_start}<tr>{/heading_row_start}

            {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
            {heading_title_cell}<th class="month" colspan="{colspan}">{heading}</th>{/heading_title_cell}
            {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

            {heading_row_end}</tr>{/heading_row_end}

            {week_row_start}<tr>{/week_row_start}
            {week_day_cell}<td >{week_day}</td>{/week_day_cell}
            {week_row_end}</tr>{/week_row_end}

            {cal_row_start}<tr class="days">{/cal_row_start}
            {cal_cell_start}<td class="day">{/cal_cell_start}

            {cal_cell_content}
                <div class="day_num">{day}</div>
                <div class="content">{content}</div>
            {/cal_cell_content}
                
            {cal_cell_content_today}
            <div class="day_num highlight">{day}</div>
                <div class="content">{content}</div>
            {/cal_cell_content_today}

            {cal_cell_no_content}
            <div class="day_num">{day}</div>
            {/cal_cell_no_content}
            {cal_cell_no_content_today}
            <div class="day_num highlight">{day}</div>
            {/cal_cell_no_content_today}

            {cal_cell_blank}&nbsp;{/cal_cell_blank}

            {cal_cell_end}</td>{/cal_cell_end}
            {cal_row_end}</tr>{/cal_row_end}

            {table_close}</table>{/table_close}';
       
    }
   
   
    public function get_calendar_data($year,$month)// alle evenmenten laden
    {
        $query=$this->db->select('date_time,event_name,location,speaker')->from('events')
                ->like('date_time',"$year-$month",'after')->get();
        $cal_data =array();
        foreach ($query ->result() as $row)
        {
            $getal=substr($row->date_time,8,2);
            if ($getal>=10)
            {
                $cal_data[substr($row->date_time,8,2)] = $row->event_name;
                
            }else 
            {
                $cal_data[substr($row->date_time,9,1)] = $row->event_name;
            }   
        }
        return $cal_data;
    }
    public function add_calendar_data($data)
    {
        $this->db->insert('events', $data);
                
    }
    public function generate($year,$month)
    {
        $yearNow= date("Y");
        $monthNow=date("m");
        $this->config->set_item('language', 'dutch');//omdat er languages zijn ..
        $this->load->library('calendar',$this->conf);
        if($year==null && $month==null)
        {
            $cal_data=$this->get_calendar_data($yearNow, $monthNow);
        }else
        {
            $cal_data=$this->get_calendar_data($year, $month);
        }
        
           
        return $this->calendar->generate($year,$month,$cal_data);
    }
     public function getEvents($year,$month)
             
    {
         $yearNow= date("Y");
        $monthNow=date("m");
         if($year==null && $month==null){
             $query=$this->db->select('date_time,event_name,location,speaker')->from('events')
                ->like('date_time',"$yearNow-$monthNow",'after')->get();
         }else
         {
             $query=$this->db->select('date_time,event_name,location,speaker')->from('events')
                ->like('date_time',"$year-$month",'after')->get();
         }
       
       
       
       
        return $query->result_array();
        
    }
    
}