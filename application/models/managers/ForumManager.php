<?php

class ForumManager extends CI_Model {

    // Table = posts, foreing key for topic = topic_id
    private $topicIdColumnName = 'topic_id';
    // Table = topics, foreing key for category = category_id
    private $topicsTable = 'topics';
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
    }

    public function getPosts($topicId) {
        $sql = 'SELECT post_id, content, date_time, topic_id, posted_by,guest_name, username FROM posts ' .
                'JOIN users AS u ON posted_by = user_id ' .
                'where topic_id = ' . $topicId . ';';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getUserName($userId) {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function postTopic($post) {
        $topicRowData = $this->generateTopicRow($post);
        $this->db->insert('topics', $topicRowData);
        return $this->db->insert_id();
    }

    public function postComment($post) {
        $commentRowData = $this->generateCommentRow($post);
        $this->db->insert('posts', $commentRowData);
        return $this->db->insert_id();
    }

    function generateTopicRow($post) {
        $postData = array(
            'subject' => $post['subject'],
            'category_id' => $_SESSION['category_id'],
            'created_by' => $_SESSION['user_id']
        );
        return $postData;
    }

    function generateCommentRow($post) {
        $postData = array(
            'content' => $post['content'],
            'topic_id' => $_SESSION['topic_id'],
        );
        if (array_key_exists('guest', $_SESSION) && $_SESSION['guest'] === TRUE) {
            $postData['posted_by'] = 6; // Id of anonymous user.
        } else {
            $postData['posted_by'] = $_SESSION['user_id'];
        }
        var_dump($postData);
        return $postData;
    }

    function editCategoryTitle($topicId) {
        $this->db->where('topic_id', $topicId);
        $this->db->update('topics', $data);
    }

    function deleteTopic($topicId) {
        $this->db->delete('posts', array('topic_id' => $topicId));
        $this->db->delete('topics', array('topic_id' => $topicId));
    }

}
