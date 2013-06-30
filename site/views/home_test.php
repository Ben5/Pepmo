    <div class='pageContent'>

        <h3> Projects </h3>
        <div class='headerText'>
            Here is a selection of my personal projects, click the button to expand each section and see details and/or screenshots of each one, or just follow the links to a demo or GitHub page.
        </div>


        <div id="accordion">
        <?php
            foreach($projects as $project)
            {
        ?>
                <h3><?php echo $project['name']; ?></h3>

                <div class='projectWrapper'>

                    <div class='details' id='<?php echo str_replace(" ", "_", $project['name']);?>'>
                        <?php
                            $hasThumb = ($project['thumb'] !== '');
                            if ($hasThumb)
                            {
                        ?>
                                <div class='detailsThumbnail'>
                                    <a href='http://<?php echo $_SERVER['SERVER_NAME'] . $project['url']; ?>'>
                                        <img src='/images/<?php echo $project['thumb'];?>' />
                                    </a>
                                </div>
                        <?php
                            }
                        ?>

                        <div class='<?php echo $hasThumb ? 'detailsText' : 'detailsTextWide'; ?>'>
                            <?php echo $project['details']; ?>
                        </div>

                        <div class='clear'></div>
                    </div>

                    <div class='github'>
                        <a href='<?php echo $project['github']; ?>' target="_blank">View on GitHub</a>
                    </div>

                    <div class='view'>
                        <a href='http://<?php echo $_SERVER['SERVER_NAME'] . $project['url']; ?>'>
                            View
                        </a>
                    </div>

                </div>
        <?php
            }
        ?>
        </div>

    </div>
