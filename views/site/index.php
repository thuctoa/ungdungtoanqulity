<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = Yii::t('app','Giải toán trực tuyến');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-header">
        <div class="loaigiai">
            <div class="btn-toolbar" role="toolbar" aria-label="...">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Hệ phương trình')?>
                    </button>
                </div>
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Định thức')?>
                    </button>
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Hạng')?>
                    </button>
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Nghịch đảo')?>
                    </button>
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Lũy thừa')?>
                    </button>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-6 khung">
                <?= $this->render('/dinhkhung/dauvao')?>
            </div>
            <div class="col-lg-6 khung">
                <?= $this->render('/dinhkhung/daura')?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 khung">
                <?= $this->render('/dinhkhung/lythuyet')?>
            </div>
            <div class="col-lg-6 khung">
                <?= $this->render('/dinhkhung/thuattoan')?>
            </div>
        </div>
      
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
