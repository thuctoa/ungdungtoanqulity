<div class="dauvao">   
    <?php
        if($loai==0){//he phuong trinh
    ?>
    <h4 class="text-center"><?=Yii::t('app','Hệ phương trình')?></h4>
        <hr>
        <div class="form-group">
            <label class="control-label" for="contactform-name"><?=Yii::t('app','Số phương trình')?></label>
            <input id='m' type="text" class="form-control" placeholder="<?=Yii::t('app','Số phương trình')?> = ..." aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label class="control-label" for="contactform-name"><?=Yii::t('app','Số ẩn')?></label>
            <input id='n' type="text" class="form-control" placeholder="<?=Yii::t('app','Số ẩn')?> = ..." aria-describedby="basic-addon1">
        </div>
    <?php
        }
         if($loai==1){//dinh thuc 
    ?>
        <h4 class="text-center"><?=Yii::t('app','Kích thước ma trận')?></h4>
        <hr>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số hàng')?>
            </label>
            <input id='m' type="text" class="form-control" placeholder="<?=Yii::t('app','Số hàng')?> = ..." aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số cột')?>
            </label>
            <input id='n' type="text" class="form-control" placeholder="<?=Yii::t('app','Số cột')?> = ..." aria-describedby="basic-addon1">
        </div>
    <?php
        }
         if($loai==2){//hang  
    ?>
        <h4 class="text-center"><?=Yii::t('app','Kích thước ma trận')?></h4>
        <hr>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số hàng')?>
            </label>
            <input id='m' type="text" class="form-control" placeholder="<?=Yii::t('app','Số hàng')?> = ..." aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số cột')?>
            </label>
            <input id='n' type="text" class="form-control" placeholder="<?=Yii::t('app','Số cột')?> = ..." aria-describedby="basic-addon1">
        </div>
    <?php
        }
         if($loai==3){//nghich dao 
    ?>
        <h4 class="text-center"><?=Yii::t('app','Kích thước ma trận')?></h4>
        <hr>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số hàng')?>
            </label>
            <input id='m' type="text" class="form-control" placeholder="<?=Yii::t('app','Số hàng')?> = ..." aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số cột')?>
            </label>
            <input id='n' type="text" class="form-control" placeholder="<?=Yii::t('app','Số cột')?> = ..." aria-describedby="basic-addon1">
        </div>
    <?php
        }
         if($loai==4){//luy thua 
    ?>
        <h4 class="text-center"><?=Yii::t('app','Kích thước ma trận')?></h4>
        <hr>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số hàng')?>
            </label>
            <input id='m' type="text" class="form-control" placeholder="<?=Yii::t('app','Số hàng')?> = ..." aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label class="control-label" for="contactform-name">
                <?=Yii::t('app','Số cột')?>
            </label>
            <input id='n' type="text" class="form-control" placeholder="<?=Yii::t('app','Số cột')?> = ..." aria-describedby="basic-addon1">
        </div>
    <?php
        }
    ?>
    <input type="hidden" id='loai' value="<?=$loai?>">
</div>
