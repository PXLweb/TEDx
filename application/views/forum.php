<!--The forum page lists all the categories-->
<div class="container">
    <!--    <div class="col-lg-7">-->
    <div>
        <h1><?php echo $lang->getPageTitle() ?></h1>
        <h2><?php echo $lang->getCategories() ?></h2>

        <?php $forumActionLink = site_url('forum/category') . '/'; ?>
        <?php foreach ($categories as $category): ?>
            <a href="<?php echo $forumActionLink . $category['category_id']; ?>"><h3><?= $category['name'] ?></h3></a>
            <p><?= $category['description'] ?>
            <?php endforeach ?>
    </div>
</div>