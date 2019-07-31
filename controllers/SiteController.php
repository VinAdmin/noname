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
        $info_update = new UpdateSystems('test.loc');
        
        if(isset($_POST['version']))
        {
            switch($info_update->InfoUpdateFile($_POST))
            {
                case 1:
                    $message = 'Файлы контроля версии подготовленны, zip архив готов.';
                    break;
                case 2:
                    $message = 'Не удалось создать zip архив.';
                    break;
                default:
                    $message = null;
                    break;
            }
        }
        
        $file = $info_update->FileJson();
        
        $this->generate('/views/site/index.php',compact('file', 'message'));
        return true;
    }
    
    public function actionEditJsonFile()
    {
        $this->render('/views/site/edit_json.php');
        return true;
    }
}
?>