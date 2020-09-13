<?php
    
    $t = '';
    if (isset($_GET['type']))
    {
        if ($_GET['type'] == 'portrait')
        {
            $t = "pictures/";
            drawPictures($t);
        }
        elseif ($_GET['type'] == 'other') 
        {
            $t = "other/";
            drawPictures($t);
        }
        elseif ($_GET['type'] == 'underDev')
        {
            drawMessage();
        }
    }

    function drawMessage() {
        echo('<div class="underDev">');
        echo('<h1>UNDER DEVELOPMENT, </h1>');
        echo('<h1>PLEASE RETURN LATER</h1>');
        echo('</div>');
    }

    function drawPictures($t) {
        $blocked = array(117,118,119,120);

        $files = glob($t . '*');
        natcasesort($files);
        $files = array_reverse($files, false);
        $size = sizeof($files);

        // if size is a valid value
        if (isset($_GET['size'])) {
            // width = size
            $width = $_GET['size'] ;
            
            if ($width < 1150)
            {
                // two columns
                echo('<div class="column">');
            
                $i = $size;
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i%2 == 0)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }
                }
                echo('</div>');
                echo('<div class="column">');
                $i = $size;
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i%2 == 1)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }
                }
                echo('</div>');
            }
            else
            {
                // four columns
                $i = $size;
                echo('<div class="column">');
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i%4 == 0)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }
                }
                echo('</div>');

                $i = $size;
                echo('<div class="column">');
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i% 4== 3)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }
                }
                echo('</div>');

                $i = $size;
                echo('<div class="column">');
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i%4 == 2)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }
                }
                echo('</div>');

                $i = $size;
                echo('<div class="column">');
                for ($i==$size;$i>0;$i--)
                {
                    if (!in_array($i, $blocked))
                    {
                        if ($i%4 == 1)
                        {
                            echo('<img src="' . $t . $i . '.jpg" alt="image not found">');
                        }
                    }    
                }
                echo('</div>');
            }
        }
        else {}
    }

    
?>
