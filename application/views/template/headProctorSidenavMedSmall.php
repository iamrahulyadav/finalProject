<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--contents of the side navbar for small and med screen-->
<ul id="slide-out" class="side-nav hide-on-large-only" style="width: 308px;">
  <li style="padding-top: 5%;"><span style="padding-left: 5%; font-size: 15px;"><?= $title?></span></li>
  <li><div class="divider"></div></li>
  <li style="padding-top: 5%;"><a href="<?php echo base_url('headProctorController')?>" class="waves-effect <?= $color1?>-text text-darken-3"><?= $text?></a></li>
  <li class="hide-on-med-and-up"><a href="<?php echo base_url($profile)?>">Profile</a></li>
  <li class="hide-on-med-and-up"><a href="<?php echo base_url('loginController/logout')?>">Logout</a></li>
</ul>
  <!--contents of the side navbar for small and med screen end-->