<div class="fullscreen text-right">
    <span 
        title="<?=Yii::t('app','Phóng to')?>"
        class="glyphicon glyphicon-resize-full phongto" data-toggle="modal" data-target="#fulllythuyet" data-local="#lythuyet">  
    </span>
</div>
<div class="khung-lythuyet"> 
    <div id="lythuyet">
    </div>
    <div class="modal fade" id="fulllythuyet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" >
        <div class="modal-content" >
          <div class="modal-header">
                <span title="<?=Yii::t('app','Thu nhỏ')?>" data-dismiss="modal" aria-hidden="true" class="glyphicon glyphicon-resize-small thunho"></span>
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
