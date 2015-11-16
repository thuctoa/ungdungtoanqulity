<?php
$this->title = Yii::t('app','Ứng dụng toán');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    
    <div class="body-header">
        <div class="loaigiai">
            <label class="radio-inline">
                <input type="radio" name="optradio">
                <?= Yii::t('app', 'Hệ phương trình')?>
            </label>

            <label class="radio-inline">
                <input type="radio" name="optradio">
                <?= Yii::t('app', 'Định thức')?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">
                        <?= Yii::t('app', 'Hạng')?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">
                <?= Yii::t('app', 'Nghịch đảo')?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">
                <?= Yii::t('app', 'Lũy thừa')?>
            </label>
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
