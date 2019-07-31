<?php
$this->title = "1234";

$file['files'][] = array('dir'=>'', 'file'=>'');
?>

<h2>Форма контроля версий файлов</h2>

<?php if($message) : ?>
<div class="alert alert-info"><?=$message?></div>
<?php endif ?>

<div class="row">
    <div class="col-lg-12">
        <form name="files_json" method="post" action="">
            <div class="form-group">
                <div class="row" >
                    <div class="col-lg-2">
                        <label>Имя проекта</label>
                        <input type="text" name="project" class="form-control" value="<?=$file['project']?>">
                    </div>
                    
                    <div class="col-lg-2">
                        <label>Номер версии</label>
                        <input type="text" name="version" class="form-control" value="<?=$file['version']?>" placeholder="Версия">
                    </div>
                </div>
            </div>
            
            <?php $a = 0; foreach($file['files'] as $files) : ?>
            <div class="form-group">
                <div class="row" class="form-group">
                    <div class="col-lg-6">
                        <input type="text" name="files[<?=$a?>][dir]" class="form-control" value="<?=$files['dir']?>" placeholder="Путь">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="files[<?=$a?>][file]" class="form-control" value="<?=$files['file']?>" placeholder="Файл">
                    </div>
                </div>
            </div>
            <?php $a ++; endforeach ?>
            <button class="btn btn-primary">Сохранить</button>
        </form>
    </div>
</div>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div>
    <div class="animsition">

     <!-- Main Navigation/Menu
    ====================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="menu-wrapper">
                <div class="navbar-header">
                    <a class="navbar-brand logo" href="#">Kabir</a>
                </div>  
                <a href="#" class="menu-toggle" data-toggle="modal" data-target=".menupopup">
                    <div class="menu-pop">
                        <i class="icon ion-drag"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    
    
    <!-- Modal Menu
    ====================================-->
    <div id="menuOne">
        <div class="modal fade menupopup" tabindex="-1" role="dialog">
            <div class="modal-ovelay"><!-- modal-ovelay -->
                <div class="close-text" data-dismiss="modal" aria-label="Close"><i class="icon ion-close-round"></i></div>
                <ul class="list-unstyled menu-lists">
                    <li class="active"><a href="home1.html">Home</a></li>
                    <li><a href="home1.html#about">About</a></li>
                    <li><a href="home1.html#resume">Resume</a></li>
                    <li><a href="home1.html#portfolio">Portfolio</a></li>
                    <li><a href="home1.html#services">Services</a></li>
                    <li><a href="home1.html#pricing ">Pricing </a></li>
                    <li><a href="blog1.html">Blog</a></li>
                    <li><a href="home1.html#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    
    
   
     <!-- Section Title
    ====================================-->
    <div id="#about">
                <div class="title col-md-12">
                    <h2> <span>My latest journal</span><br />- Blog -</h2>  
                </div>  
                
     <div id="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> <!-- Post #1 -->
                    <a href="single-post1.html" target="_blank">
                        <div class="post-block">
                            <div class="post-detail">
                                <span class="metas">02 JUNE , TAG : BRAND , IDENTITY</span><!-- Meta -->
                                <h4 class="blog-title">Qui autem, reiciendis necessi tatibus torquent iste</h4><!-- PPost Title-->
                                <p>Labore quidem sed perspiciatis cubilia nibh numquam assumenda maxime tempora purus eros in non, molestiae morbi voluptate integer, faucibus.</p>
                            </div>
                            <img src="/web/assets/img/post/1.png" class="img-responsive" alt="..."><!-- Background Post Image -->
                        </div>
                    </a>
                </div><!-- end Post #1 -->

                <div class="col-md-6"> <!-- Post #2 -->
                    <a href="single-post1.html" target="_blank">
                        <div class="post-block">
                            <div class="post-detail">
                                <span class="metas">15 JUNE , TAG : IDENTITY, Photography</span><!-- Meta -->
                                <h4 class="blog-title">Labore quidem sed perspiciatis cubilia nibh</h4><!-- PPost Title-->
                                <p>Qui autem, torquent iste reiciendis necessitatibus. Numquam assumenda maxime tempora purus eros in non, molestiae morbi voluptate integer, faucibus.</p>
                            </div>
                            <img src="/web/assets/img/post/2.png" class="img-responsive" alt="..."><!-- Background Post Image -->
                        </div>
                    </a>
                </div> <!-- end Post #2 -->
                
                
                 <div class="col-md-6"> <!-- Post #3 -->
                    <a href="single-post1.html" target="_blank">
                        <div class="post-block">
                            <div class="post-detail">
                                <span class="metas">02 JUNE , TAG : BRAND , IDENTITY</span><!-- Meta -->
                                <h4 class="blog-title">Qui autem, reiciendis necessi tatibus torquent iste</h4><!-- PPost Title-->
                                <p>Labore quidem sed perspiciatis cubilia nibh numquam assumenda maxime tempora purus eros in non, molestiae morbi voluptate integer, faucibus.</p>
                            </div>
                            <img src="/web/assets/img/post/3.png" class="img-responsive" alt="..."><!-- Background Post Image -->
                        </div>
                    </a>
                </div><!-- end Post #3 -->
                
                 <div class="col-md-6"> <!-- Post #4 -->
                    <a href="single-post1.html" target="_blank">
                        <div class="post-block">
                            <div class="post-detail">
                                <span class="metas">02 JUNE , TAG : BRAND , IDENTITY</span><!-- Meta -->
                                <h4 class="blog-title">Qui autem, reiciendis necessi tatibus torquent iste</h4><!-- Post Title-->
                                <p>Labore quidem sed perspiciatis cubilia nibh numquam assumenda maxime tempora purus eros in non, molestiae morbi voluptate integer, faucibus.</p>
                            </div>
                            <img src="/web/assets/img/post/4.png" class="img-responsive" alt="..."><!-- Background Post Image -->
                        </div>
                    </a>
                </div><!-- end Post #4 -->
            </div>
            </div>
            <div class="text-center midspacer">
                <a href="blog1.html" class="btn btn-default tf-btn">Read More <i class="icon ion-arrow-right-c"></i></a>
            </div>
        </div>
    </div>
</div>