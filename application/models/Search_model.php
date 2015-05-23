<?php
class Search_model extends CI_Model {

    public function get_resultsForumPost($search_term)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->like('content',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }
        
    public function get_resultForumTopics($search_term)
    {
        $this->db->select('*');
        $this->db->from('topics');
        $this->db->like('subject',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }  
    
    public function get_resultsEvents($search_term)
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->like('event_name',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }

}
