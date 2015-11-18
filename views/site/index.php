<?php
$this->title = Yii::t('app','Ứng dụng toán');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <p class="giaitoantructuyen"><?=Yii::t('app','Giải toán trực tuyến')?></p>
    <hr>
    <div class="body-header">
        <div class="loaigiai">
            <label class="radio-inline"  >
                <input type="radio" name="optradio" onclick="chonloaigiai('0');" >
                <?= Yii::t('app', 'Hệ phương trình')?>
            </label>

            <label class="radio-inline" >
                <input type="radio" name="optradio" onclick="chonloaigiai('1');"  >
                <?= Yii::t('app', 'Định thức')?>
            </label>
            <label class="radio-inline" >
                <input type="radio" name="optradio"  onclick="chonloaigiai('2');" >
                        <?= Yii::t('app', 'Hạng')?>
            </label>
            <label class="radio-inline" >
                <input type="radio" name="optradio" onclick="chonloaigiai('3');"  >
                <?= Yii::t('app', 'Nghịch đảo')?>
            </label>
            <label class="radio-inline" >
                <input type="radio" name="optradio" onclick="chonloaigiai('4');"  >
                <?= Yii::t('app', 'Lũy thừa')?>
            </label>
        </div>
    </div>
    <hr>
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
