<?php
/**
 * Just another official theme
 *
 * @package Classic 22
 * @author Typecho Team
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="container">
    <div class="container-thin">
    <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <header class="entry-header text-center">
                <h1 class="entry-title" itemprop="name headline"><a href="<?php $this->permalink() ?>" itemprop="url"><?php $this->title() ?></a></h1>
                <ul class="entry-meta list-inline text-muted">
                    <li><i data-feather="calendar" class="is-sm me-2"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
                    <li><i data-feather="folder" class="is-sm me-2"></i><?php $this->category(', '); ?></li>
                    <li><i data-feather="message-circle" class="is-sm me-2"></i><a href="<?php $this->permalink() ?>#comments"  itemprop="discussionUrl"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a></li>
                </ul>
            </header>
            
            <div class="entry-content fmt" itemprop="articleBody">
                <?php $this->content('阅读剩余部分'); ?>
            </div>
        </article>
        <hr class="post-separator">
    <?php endwhile; ?>
    </div>

    <!-- <div class="text-center">
        <a href="#">&laquo; Older Posts</a>
        <span class="mx-2 text-muted">&middot;</span>
        <a href="#">Newer Posts &raquo;</a>
    </div> -->
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</main>

<?php $this->need('footer.php'); ?>
