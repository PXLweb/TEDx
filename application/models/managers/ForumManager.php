<?php

class ForumManager extends CI_Model {
    // Table = posts, foreing key for topic = topic_id
    private $postTable = 'posts';
    private $topicIdColumnName = 'topic_id';
    // Table = topics, foreing key for category = category_id
    private $topicsTable = 'topics';
    private $categoryIdColumnName = 'category_id';
    // Table categories
    private $categoriesTable = 'categories';

    public function __construct() {
        parent::__construct();
    }

    public function getCategories() {
        $query = $this->db->get($this->categoriesTable);
        return $query->result_array();
    }

    public function getTopics($categoryId) {
        $this->db->where($this->categoryIdColumnName, $categoryId);
        $query = $this->db->get($this->topicsTable);
        return $query->result_array();
    }

    public function getPosts($topicId) {
        $this->db->where($this->topicIdColumnName, $topicId);
        $query = $this->db->get($this->postTable);
        return $query->result_array();
    }

}
