<div class="aw-side" id="aw-side">
    <div class="mod">
        <div class="mod-logo">
            <img class="pull-left" src="<?php echo G_STATIC_URL; ?>/admin/img/logo.png" alt="" />
            <h1>AFACMS</h1>
        </div>

        <div class="mod-message">
            <div class="message">
                <a class="btn btn-sm" href="<?php echo input::uri('base'); ?>" target="_blank" title="<?php echo ('首页'); ?>">
                    <i class="icon icon-home"></i>
                </a>

                <a class="btn btn-sm" href="/admin/index" title="<?php echo ('概述'); ?>">
                    <i class="icon icon-ul"></i>
                </a>

                <a class="btn btn-sm" href="/admin/logout" title="<?php echo ('退出'); ?>">
                    <i class="icon icon-logout"></i>
                </a>
            </div>
        </div>

        <ul class="mod-bar" >
            <input type="hidden" id="hide_values" val="0" />
            <?php foreach ($this->menu_list as $key => $val) { ?>
                <li>
                    <a href="<?php if ($val['url'] AND !$val['children']) { echo $val['url']; } else { ?>javascript:;<?php } ?>" class="icon icon-<?php echo $val['cname']; if ($val['select']) { ?> active<?php } ?>"<?php if ($val['children']) { ?> data="icon"<?php } ?>>
                        <span><?php echo $val['title']; ?></span>
                    </a>
                    <?php if ($val['children']) { ?>

                        <ul<?php if (!$val['select']) { ?> class="hide"<?php } ?>>
                            <?php foreach ($val['children'] as $child) { ?>
                                <li>
                                    <a <?php if ($child['select']) { ?> class="active"<?php } ?> href="<?php echo $child['url']; ?>">
                                        <span><?php echo $child['title'];?></span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
