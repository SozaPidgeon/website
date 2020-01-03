<?php

    $files = glob('pictures/*');
    natcasesort($files);
    $files = array_reverse($files, false);
    $size = sizeof($files);

    // if size is a valid value
    if(isset($_GET['size'])) {
        // width = size
        $width = $_GET['size'] ;

        if($width < 1150)
        {
            // two columns
            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i%2 == 0)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');

            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i%2 == 1)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');
        }
        else
        {
            // four columns
            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i%4 == 0)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');

            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i% 4== 3)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');

            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i%4 == 2)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');

            $i = $size;
            echo('<div class="column">');
            for($i==$size;$i>1;$i--)
            {
                if($i%4 == 1)
                {
                    echo('<img src="pictures/' . $i . '.jpg" alt="image not found">');
                }
            }
            echo('</div>');
        }
    }
    else{}

    
?>