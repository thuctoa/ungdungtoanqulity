<div class="fullscreen text-right">
    <a  href="#" title="<?=Yii::t('app','Phóng to')?>" >
        <span class="glyphicon glyphicon-resize-full" data-toggle="modal" data-target="#fulllythuyet" data-local="#lythuyet">  
        </span>
    </a>
</div>
<div class="khung-lythuyet"> 
    <div id="lythuyet">
        <p> lythuyet</p>

    </div>

    <div class="modal fade" id="fulllythuyet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" title="<?=Yii::t('app','Thu nhỏ')?>" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4></h4>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
<!--          <div class="modal-footer">
          </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>