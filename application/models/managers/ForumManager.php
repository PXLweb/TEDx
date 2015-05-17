<?php

class ForumManager extends CI_Model {

    // Table = posts, foreing key for topic = topic_id
    private $postsTable = 'posts';
    private $topicIdColumnName = 'topic_id';
    // Table = topics, foreing key for category = category_id
    private $topicsTable = 'topics';
    private $topicsSubjectColumnName = 'subject';
    private $categoryIdColumnName = 'category_id';
    // Table categories
    private $categoriesTable = 'categories';
    private $usersTable = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function getCategories() {
        $query = $this->db->get($this->categoriesTable);
        return $query->result_array();
    }

    public function getTopics($categoryId) {
        // Sanitizing happens automatically when CI's active records are being used,
        // but that is not the case below. We pass the variables as binds instead.
        // CI escapes variables when passed as binds.
        $sql = 'SELECT topic_id, subject, date_time, category_id, created_by, username FROM topics AS t ' .
                'JOIN users AS u ON t.created_by = u.user_id ' .
                'WHERE t.category_id = ?;';
        $query = $this->db->query($sql, $categoryId);
        return $query->result_array();
    }

    public function getTopicSubject($topicId) {
        $this->db->where($this->topicIdColumnName, $topicId);
        $query = $this->db->get($this->topicsTable);
        $result = $query->row();
        return $result->subject;
//        $result = $query->result_array();
//        return $result[0]['subject'];
    }

    public function getPosts($topicId) {
        $sql = 'SELECT post_id, title, content, date_time, topic_id, posted_by, username FROM posts ' .
                'JOIN users AS u ON posted_by = user_id ' .
                'where topic_id = ' . $topicId . ';';
        $query = $this->db->query($sql);
        return $query->result_array();
//        $this->db->where($this->topicIdColumnName, $topicId);
//        $query = $this->db->get($this->postsTable);
//        return $query->result_array();
    }

    public function getUserName($userId) {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function postComment($postData) {
        $this->db->insert('posts', $postData);
        return $this->db->affected_rows();
    }

}
