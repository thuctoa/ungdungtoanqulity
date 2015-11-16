<?php 
    use yii\helpers\Html;
?>

<?php echo Html::beginForm(); ?>
    <div id="language-select">
        <?php 
		if(sizeof($languages) < 2) {
                    $lastElement = end($languages);
                    foreach($languages as $key=>$lang) {
                        if($key != $currentLang) {
                            echo Html::ajaxLink($lang,'',
                                array(
                                    'type'=>'post',
                                    'data'=>'_lang='.$key.'&YII_CSRF_TOKEN='.Yii::$app->request->csrfToken,
                                    'success' => 'function(data) {window.location.reload();}'
                                ),
                                array()
                            );
                        } 
                        else
                        {
                            echo '<b>'.$lang.'</b>';
                        }
                        if($lang != $lastElement)
                        {
                            echo ' | ';
                        }
                    }
                }
		else
		{
        ?>
        <button type="button"  class="btn btn-default btn-sm" onclick="language_change('vi')">
            <span class="lang-xs lang-lbl" lang="vi"></span> 
        </button>
        <button type="button"  class="btn btn-default btn-sm" onclick="language_change('en')">
            <span class="lang-xs lang-lbl" lang="en"></span> 
        </button>
    
        <?php
//                    echo Html::dropDownList('_lang', $currentLang, $languages,
//                        array(
//                            'onchange' => 'language_change(this)',
//                            'csrf'=>true,
//                        )
//                    ); 
		}
        ?>
        <script type="text/javascript">
        function language_change(selected)
        {
            <?php echo '$.ajax(\''.Yii::$app->getUrlManager()->createUrl("site/language")."',".PHP_EOL; 
                    echo "{'type':'post',".PHP_EOL;
                    echo "success : function(data) {window.location.reload();},".PHP_EOL;
                    echo "'data':'_lang='+selected+'&YII_CSRF_TOKEN=".Yii::$app->request->csrfToken."',";
            ?>
            }
            );
        }
        </script>
    </div>
<?php echo Html::endForm(); ?>
