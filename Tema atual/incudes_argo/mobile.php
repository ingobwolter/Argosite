<?php
session_start();
require_once 'mobile/Mobile_Detect.php';
function layoutTypes()
{
    return array('classic', 'mobile', 'tablet');
}
function initLayoutType()
{
    if (!class_exists('Mobile_Detect')) { return 'classic'; }
    $detect = new Mobile_Detect;
    $isMobile = $detect->isMobile();
    $isTablet = $detect->isTablet();
    $layoutTypes = layoutTypes();
    if ( isset($_GET['layoutType']) ) {
        $layoutType = $_GET['layoutType'];
    } else {
        if (empty($_SESSION['layoutType'])) {
            $layoutType = ($isMobile ? ($isTablet ? 'tablet' : 'mobile') : 'classic');
        } else {
           $layoutType =  $_SESSION['layoutType'];
        }
    }
    if ( !in_array($layoutType, $layoutTypes) ) { $layoutType = 'classic'; }
    $_SESSION['layoutType'] = $layoutType;
    return $layoutType;
}

$layoutType = initLayoutType();
?>
<?php 

    if('mobile' == ($_SESSION['layoutType'])){
        header("Location: http://www.argohost.net");

    }
     if('tablet' == ($_SESSION['layoutType'])){
        header("Location: http://www.argohost.net");

}   

?>