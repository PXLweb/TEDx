<div class="container">
    <?php
    $forumActionLink = site_url('forum') . '/posts/';
    if (empty($topics)) {
        echo '<h3>Geen onderwerpen. <a href="">Schrijf</a> het eerste onderwerp!</h3>';
    }
    ?>

    <?php
    foreach ($topics as $topic) {
        echo '<a href="' . $forumActionLink . $topic['topic_id'] . '"><h3>' . $topic['subject'] . '</h3></a>';
        echo '<p>' . $lang->GetPostedBy() . $topic['username'] . $lang->GetPostedOn() . $topic['date_time'] . '.</p>';
    }
//    var_dump($topics);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>

    <?php foreach ($topics as $topic): ?>
    <?php endforeach ?>

</div>
