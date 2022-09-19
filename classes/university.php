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
        self::$HTML["LINKS"] .= "\t<link href=\"scripts/css/university.css\" rel=\"stylesheet\">\n";
        self::$HTML["LINKS"] .= "\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">";
        self::$HTML["BODYSCRIPTSBLOCK"] .= "<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\" integrity=\"sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3\" crossorigin=\"anonymous\"></script>\n\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js\" integrity=\"sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz\" crossorigin=\"anonymous\"></script>";
        
    }
    public function setPage()
    {
        self::$HTML["MAINBLOCK"] .= "";
    }
    private function getModule()
    {

    }
}
?>