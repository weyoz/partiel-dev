<?php

class CoreView extends Core
{
    function view($file_name, $data = null, $nbrPage = null)
    {
        include_once 'views/'.$file_name;
    }

    public function helpHtmlLink($options) {
        echo "<a href='" . $options["module"]
            . "/" . format_url($options["seotext"])
            . "-" . $options["id"] . "'>" . $options["text"] . "</a>";
    }
}
