<?php
class university
{
    public static $HTML = array(
        "METAS"=>"",
        "LINKS"=>"",
        "NO_INDEX_METAS"=>"",
        "TITLE"=>"",
        "HEADSCRIPTSBLOCK"=>"",
        "NAVIGATIONBLOCK"=>"",
        "MAINBLOCK"=>"",
        "FOOTERBLOCK"=>"",
        "BODYSCRIPTSBLOCK"=>""
    );
    public function __construct()
    {
        self::$HTML["TITLE"] .= "University: Managment System v1.0";
    }
    public function setPage()
    {

    }
}
?>