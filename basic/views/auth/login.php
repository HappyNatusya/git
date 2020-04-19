<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="leave-comment mr0"><!--leave comment-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-login">
                
                
            </div>
        </div>

        <div class="col-md-2">
            <!-- Put this script tag to the <head> of your page -->
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
<script type="text/javascript">
  VK.init({apiId: 7348296});
</script>

<div id="vk_auth"></div>
<script type="text/javascript">
  VK.Widgets.Auth("vk_auth", {"width":250,"authUrl":"/auth/login-vk"});
</script>
        </div>






    </div>
</div>

