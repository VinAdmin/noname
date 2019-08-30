<?php
$this->title = "1234";

$file['files'][] = array('dir'=>'', 'file'=>'');
?>
<!-- Section Title====================================-->
<div id="#index">
    <div id="blog-post">
        <div class="container">
            <div class="row block-update">
                <div class="col-xs-12 col-sm-12 col-lg-12 ">
                    <strong>Код выполняется на OC:</strong> <span style="color: #02009E;"><?=php_uname()?></span>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row block-update">
                <div class="col-xs-12 col-sm-12 col-lg-12 ">
                    <h2 class="title-update">Форма контроля версий файлов</h2>
                    <hr>
                    <?php if($message) : ?>
                    <div class="alert alert-info"><?=$message?></div>
                    <?php endif ?>
                    
                    <form name="files_json" method="post" action="">
                        <div class="form-group">
                            <div class="row" >
                                <div class="col-xs-6 col-sm-6 col-lg-2">
                                    <label>Имя проекта</label>
                                    <input type="text" name="project" class="form-control" value="<?=$file['project']?>">
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-lg-2">
                                    <label>Номер версии</label>
                                    <input type="text" name="version" class="form-control" value="<?=$file['version']?>" placeholder="Версия">
                                </div>
                            </div>
                        </div>
                        
                        <?php $a = 0; foreach($file['files'] as $files) : ?>
                        <div class="form-group">
                            <div class="row" class="form-group">
                                <div class="col-xs-6 col-sm-6 col-lg-6">
                                    <input type="text" name="files[<?=$a?>][dir]" class="form-control" value="<?=$files['dir']?>" placeholder="Путь">
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-lg-3">
                                    <input type="text" name="files[<?=$a?>][file]" class="form-control" value="<?=$files['file']?>" placeholder="Файл">
                                    <a href="#<?=$a?>openModal">Дополнительно</a>
                                </div>
                                
                                <div class="col-xs-6 col-sm-1 col-lg-1" style="background-color: #3A66F4; border-radius: 3px;">
                                    <strong style="color: #ffffff;">Размер: <?=$files['size']?> байт</strong>
                                </div>
                            </div>
                        </div>
                        <div id="<?=$a?>openModal" class="modalDialog">
                            <div class="modal-dialog modal-content modalDialog2">
                                <a href="#close" title="Закрыть" class="close"><span aria-hidden="true">&times;</span></a>
                                <h3>Дополнительно</h3>
                                <label>Комментарии к файлу</label>
                                <textarea name="files[<?=$a?>][description]" class="form-control"><?=$files['description']?></textarea>
                            </div>
                        </div>
                        <?php $a ++; endforeach ?>
                        <button class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modalDialog:target {
	display: block;
	pointer-events: auto;
}

.modalDialog2{
    margin-top: 100px;
	padding: 5px 20px 13px 20px;
	border-radius: 3px;
	background: #fff;
}

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	display: none;
	pointer-events: none;
}
</style>