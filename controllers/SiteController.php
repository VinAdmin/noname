<?php
/**
 * Описание класса: Контроллер страниц.
 *
 * @package    NoName
 * @subpackage SiteController
 * @author     Ольхин Виталий <volkhin@texnoblog.uz>
 * @copyright  (C) 2019
 */

use app\core\Controller;
use app\core\UpdateSystems;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $info_update = new UpdateSystems();
        
        if(isset($_POST['ver']))
        {
            $info_update->InfoUpdateFile($_POST);
        }
        
        $file = $info_update->FileJson();
        
        $this->generate('/views/site/index.php',compact('file'));
        return true;
    }
    
    public function actionEditJsonFile()
    {
        $this->render('/views/site/edit_json.php');
        return true;
    }
}
?>