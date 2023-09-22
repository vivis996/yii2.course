<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="help-index">
  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam volutpat pretium massa, ac ornare urna gravida ac.
    Morbi facilisis a est sit amet tincidunt. Vivamus cursus tortor non ex porttitor, sit amet rutrum sapien tristique.
    Integer et blandit turpis, vel laoreet justo. Phasellus in leo placerat, tristique tellus in, finibus turpis.
    Donec sed justo et dui hendrerit placerat ut et nisl. Duis a tellus aliquet, porta mi et, efficitur sem.
    Cras rhoncus nibh ut ante lacinia, ac lobortis nunc blandit. Maecenas sapien turpis, scelerisque id laoreet non, dapibus id leo.
    Curabitur sed leo vel diam malesuada posuere. Mauris et turpis lobortis, fermentum libero vitae, efficitur sem.
    Etiam scelerisque lorem a gravida venenatis. Nulla facilisi. Donec in lectus orci. Curabitur et ante id ex facilisis consectetur.
  </p>
  <p>
    Mauris ac vestibulum justo. Curabitur tempus nisi sit amet lacus euismod fringilla. Quisque id massa vitae nibh lobortis pretium.
    Proin consequat posuere velit at volutpat. Aliquam ipsum dui, venenatis ut aliquam a, varius sit amet mi.
    In id mi fringilla neque imperdiet ultricies. Cras nec eros iaculis, viverra ante vitae, vulputate risus.
    Nam mollis interdum tellus, et lobortis dolor vulputate id. Duis eget convallis ligula, eget luctus urna.
    Etiam nibh sapien, varius quis nunc id, tempor laoreet ante.
    Duis malesuada, lectus vel mollis vestibulum, diam nibh condimentum est, ac volutpat lacus ante sed velit.
    Aliquam sollicitudin dictum gravida. In semper ultrices mauris eget gravida. Etiam nec cursus ante.
    Morbi blandit, enim et venenatis ullamcorper, risus magna dapibus ex, aliquet pharetra nisi lorem ullamcorper lacus.
  </p>

  <div>
    <?= Html::a('Account Settings', ['help/account-settings']) ?>
  </div>
  <div>
    <?= Html::a('Login and Security ', ['help/login-and-security']) ?>
  </div>
  <div>
    <?= Html::a('Privacy', ['help/privacy']) ?>
  </div>