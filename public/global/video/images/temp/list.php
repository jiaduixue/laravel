<?
$ID = $_GET[id];
switch ($ID){
    case 1:
        for($i = 0;$i<10;$i++){ ?>
            <dd <? if($i == 1 ) echo 'class="sold-out"'?>>
                <div class="img-wrap slider-photo">
                    <a id="xxx<?=$i?>" href="javascript:;" class="photo-group" data-imgGroup="http://i.ebayimg.com/images/g/HmoAAOSwOyJX-hzr/s-l500.webp,http://i2.ebayimg.com/images/g/lb4AAOSwFe5X0w-U/s-l500.webp,http://i.ebayimg.com/images/g/FCoAAOSwMmBV4K00/s-l500.webp">
                        <img src="images/default_mamall.png" data-original="http://i.ebayimg.com/00/s/NTMyWDY5Ng==/z/qFMAAOSwpDdVQmMl/$_12.JPG?set_id=880000500F">
                    </a>
                </div>
                <div class="right">
                    <a href="javascript:;" onclick="creatLayer(this,'detail','products-detail.html','products-detail-iframe.html');"><h4>Womens Doppel Fingerring Gliederring Daumenring Gelenkring</h4></a>
                    <? if($i == 1 ){?>
                    <div class="sold-out-alert">
                        <span></span>
                    </div>
                    <? } ?>
                    <div class="p-info">
                        <div class="left  m-b-1">
                            <p class="save text-muted">
                                <span class="o-price">US$ 14.68</span>
                                save: <span class="text-primary">US$ 2.45</span>
                            </p>
                            <p class="price text-primary"><strong>US$ 12.23</strong></p>
                        </div>
                        <div class="right">
                            <p class="store text-muted">from SheIn</p>
                            <a class="cart " href="javascript:;" data-videoproductid="<?=rand(100000,999999)?>" data-weblinkid="16" data-modalid="selectVariation">
                                <i class="iconfont"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </dd>
        <?}
        break;
    case 2:
        for($i = 0;$i<10;$i++){ ?>
            <li data-id="<?=rand(100,999)?>" >
                <div class="img-wrap">
                    <a href="javascript:;" onclick="creatLayer(this,'watch','watch.html','watchIframe.html');">
                        <img src="images/default_mamall.png" data-original="https://i.ytimg.com/vi/0-n2OgvUvMY/hqdefault.jpg">
                    </a>
                </div>
                <a class="right" href="javascript:;" onclick="creatLayer(this,'watch','watch.html','watchIframe.html');">
                    <h3>Huge Try On Fall Haul 2016! Nordstrom, Sephora, Forever</h3>
                    <div class="row">
                        <span class="value text-muted">843,123</span>
                        <span class="title text-muted">Views</span>
                    </div>
                    <div class="row">
                        <span class="value text-muted">23,124</span>
                        <span class="title text-muted">Products</span>
                    </div>
                    <div class="row">
                        <span class="value text-muted">5 months ago</span>
                    </div>
                </a>
            </li>
        <? }
        break;
    case 3:
        for($i = 0;$i<10;$i++){ ?>
            <li data-id="<?=rand(100,999)?>" <? if($i == 1 ) echo 'class="sold-out"'?>>
                <div class="img-wrap">
                    <a href="javascript:;" onclick="creatLayer(this,'watch','watch.html','watchIframe.html');">
                        <img src="images/default_mamall.png" data-original="http://i.ebayimg.com/00/s/MTAwMFg3NDk=/z/QJ0AAOSwvt1WRW4V/$_58.JPG">
                    </a>
                </div>
                <a class="right" href="javascript:;" onclick="creatLayer(this,'watch','watch.html','watchIframe.html');">
                    <h4>Womens Doppel Fingerring Gliederring Daumenring Gelenkring</h4>
                    <div class="p-info">
                        <p class="save text-muted">
                            <span class="o-price">US$ 14.68</span>
                            save: <span class="text-primary">US$ 2.45</span>
                        </p>
                        <p class="price text-primary"><strong>US$ 12.23</strong></p>
                        <p class="store text-muted">from SheIn</p>
                    </div>
                    <? if($i == 1 ){?>
                        <div class="sold-out-alert">
                            <span></span>
                        </div>
                    <? } ?>
                </a>
            </li>
        <? }
        break;
    case 4;
        ?>
        <li data-reply-id="<?=rand(100,999)?>">
            <div class="fb-content">
                <div class="left">
                    <div class="avatar-wrap">
                        <img src="../../sellerOurmall2/temp/avatars/user3.jpg">
                    </div>
                </div>
                <div class="right">
                    <div class="title">
                        <div class="left">
                            <p class="name">Christen Dominique8</p>
                            <p class="time">1 montsh ago</p>
                        </div>
                        <div class="right">
                            <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg" data-action="reply"><i class="iconfont icon-share"></i></a>
                        </div>
                    </div>
                    <div class="fb-a">
                        <p>
                            Nars Sheer Glow is my fave! I've been in love with your hair and makeup these past few videos as well! Hope you're having a lovely time on holiday Zoe!<3﻿
                        </p>
                    </div>
                </div>
            </div>
            <ul class="fb-inner-list">
                <li data-reply-id="<?=rand(100,999)?>">
                    <div class="left">
                        <div class="avatar-wrap">
                            <img src="../../sellerOurmall2/temp/avatars/avatar_notif.png">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <div class="left">
                                <p class="name">Christen Dominique1</p>
                                <p class="time">1 montsh ago</p>
                            </div>
                            <div class="right">
                                <a href="javascript:;" data-toggle="modal" data-modalid="confirm" >
                                    <i class="iconfont icon-delete"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <p>Nars Sheer Glow is my fave! I've been in love with your hair and</p>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="more" href="javascript:;">View all replies</a>
        </li>
        <li  data-reply-id="<?=rand(100,999)?>">
            <div class="fb-content">
                <div class="left">
                    <div class="avatar-wrap">
                        <img src="../../sellerOurmall2/temp/avatars/user3.jpg">
                    </div>
                </div>
                <div class="right">
                    <div class="title">
                        <div class="left">
                            <p class="name">Christen Dominique2</p>
                            <p class="time">1 montsh ago</p>
                        </div>
                        <div class="right">
                            <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"  data-action="reply"><i class="iconfont icon-share"></i></a>
                        </div>
                    </div>
                    <div class="fb-a">
                        <p>
                            Nars Sheer Glow is my fave! I've been in love with your hair and makeup these past few videos as well! Hope you're having a lovely time on holiday Zoe!<3﻿
                        </p>
                    </div>
                </div>
            </div>
            <ul class="fb-inner-list"></ul>
        </li>
        <li  data-reply-id="<?=rand(100,999)?>">
            <div class="fb-content">
                <div class="left">
                    <div class="avatar-wrap">
                        <img src="../../sellerOurmall2/temp/avatars/user3.jpg">
                    </div>
                </div>
                <div class="right">
                    <div class="title">
                        <div class="left">
                            <p class="name">Christen Dominique3</p>
                            <p class="time">1 montsh ago</p>
                        </div>
                        <div class="right">
                            <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"  data-action="reply"><i class="iconfont icon-share"></i></a>
                        </div>
                    </div>
                    <div class="fb-a">
                        <p>
                            Nars Sheer Glow is my fave! I've been in love with your hair and makeup these past few videos as well! Hope you're having a lovely time on holiday Zoe!<3﻿
                        </p>
                    </div>
                </div>
            </div>
            <ul class="fb-inner-list">
                <li data-reply-id="<?=rand(100,999)?>">
                    <div class="left">
                        <div class="avatar-wrap">
                            <img src="../../sellerOurmall2/temp/avatars/avatar_notif.png">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <div class="left">
                                <p class="name">Christen Dominique4</p>
                                <p class="at">@ Zheng Fan</p>
                                <p class="time">1 montsh ago</p>
                            </div>
                            <div class="right">
                                <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"   data-action="reply">
                                    <i class="iconfont icon-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <p>Nars Sheer Glow is my fave! I've been in love with your hair and</p>
                        </div>
                    </div>
                </li>
                <li data-reply-id="<?=rand(100,999)?>">
                    <div class="left">
                        <div class="avatar-wrap">
                            <img src="../../sellerOurmall2/temp/avatars/avatar_notif.png">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <div class="left">
                                <p class="name">Christen Dominique5</p>
                                <p class="time">1 montsh ago</p>
                            </div>
                            <div class="right">
                                <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"   data-action="reply">
                                    <i class="iconfont icon-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <p>Nars Sheer Glow is my fave! I've been in love with your hair and</p>
                        </div>
                    </div>
                </li>
                <li data-reply-id="<?=rand(100,999)?>">
                    <div class="left">
                        <div class="avatar-wrap">
                            <img src="../../sellerOurmall2/temp/avatars/avatar_notif.png">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <div class="left">
                                <p class="name">Christen Dominique6</p>
                                <p class="time">1 montsh ago</p>
                            </div>
                            <div class="right">
                                <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"   data-action="reply">
                                    <i class="iconfont icon-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <p>Nars Sheer Glow is my fave! I've been in love with your hair and</p>
                        </div>
                    </div>
                </li>
                <li data-reply-id="<?=rand(100,999)?>">
                    <div class="left">
                        <div class="avatar-wrap">
                            <img src="../../sellerOurmall2/temp/avatars/avatar_notif.png">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <div class="left">
                                <p class="name">Christen Dominique7</p>
                                <p class="time">1 montsh ago</p>
                            </div>
                            <div class="right">
                                <a href="javascript:;" data-toggle="modal" data-modalid="reply-msg"  data-action="reply">
                                    <i class="iconfont icon-share"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <p>Nars Sheer Glow is my fave! I've been in love with your hair and</p>
                        </div>
                    </div>
                </li>
            </ul>
            <a class="more" href="javascript:;">View all replies</a>
        </li>
<?

}
?>

