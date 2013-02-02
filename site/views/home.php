<?php
    foreach($projects as $project)
    {
?>
        <div class='projectWrapper'>
            <div class='title'>
                <?php echo $project['name']; ?>
            </div>

            <div class='details'>
                <?php echo $project['details']; ?>
            </div>

            <div class='github'>
                <a href='<?php echo $project['github']; ?>' target="_blank">View on GitHub</a>
            </div>

            <div class='view'>
                <a href='http://<?php echo $_SERVER['SERVER_NAME'] . $project['url']; ?>'>
                    View
                </a>
            </div>

            <div style='clear:both;'></div>
        </div>
<?php
    }
?>
