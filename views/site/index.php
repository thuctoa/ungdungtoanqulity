<?php
$this->title = Yii::t('app','Ứng dụng toán');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-header">
        <div class="loaigiai">
            <div class="btn-toolbar" role="toolbar" aria-label="...">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">
                        <?= Yii::t('app', 'Hệ phương trình')?>
                    </button>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootstrap-modal-carousel/dist/js/bootstrap-modal-carousel.min.js"></script>
<script src="bootstrap-modal-carousel/dist/js/demo.min.js"></script>
