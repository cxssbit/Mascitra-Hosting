<ul>
    <?php if(!empty($this->SocialModel->get('facebook'))){?>
    <li><a href="<?=$this->SocialModel->get('facebook')?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <?php }if(!empty($this->SocialModel->get('twitter'))){?>
    <li><a href="<?=$this->SocialModel->get('twitter')?>"  target="_blank"><i class="fa fa-twitter"></i></a></li>
    <?php }if(!empty($this->SocialModel->get('gplus'))){?>
    <li><a href="<?=$this->SocialModel->get('gplus')?>"    target="_blank"><i class="fa fa-google-plus"></i></a></li>
    <?php }if(!empty($this->SocialModel->get('instagram'))){?>
    <li><a href="<?=$this->SocialModel->get('instagram')?>"target="_blank"><i class="fa fa-instagram"></i></a></li>
    <?php }?>
</ul>