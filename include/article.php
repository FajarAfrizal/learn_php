<h2><?php echo $title; ?></h2>
<h4><?php echo $author; ?></h4>
word count: <?php echo $wordCount; ?>
<p>
    <?php
    echo $content;
    ?>
</p>
<?php
function sayHi($user)
{
    return "<h3>> Hello $user</h3>";
}
?>