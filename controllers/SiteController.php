<?php
use app\core\Controller;
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->render('/views/site/index.php');
        return true;
    }
}
?>