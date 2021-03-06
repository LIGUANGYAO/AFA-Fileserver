<?php include View::output('admin/global/header.php'); ?>
<?php include View::output('admin/global/nav_menu.php'); ?>

    <div class="aw-content-wrap">
        <?php if ($this->writable_check) { ?>
            <?php foreach ($this->writable_check as $key => $val) { ?>
                <?php if (!$val) { ?>
                    <div class="alert alert-danger"><?php echo $key; ?> <?php echo ('文件夹无法写入, 请检查并将文件夹权限设置为 0777'); ?></div>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div id="main"></div>
                        <div class="form-group echart-date">
                            <label class="col-sm-2 col-xs-3 control-label nopadding">统计时间段:</label>
                            <div class="col-sm-8 col-xs-9">
                                <div class="row">
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-start">
                                        <i class="icon icon-date"></i>
                                    </div>
                               <span class="mod-symbol col-xs-1 col-sm-1">
                                   -
                               </span>
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-end">
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <a href="javascript:;" class="btn btn-primary  btn-sm date-seach">确认查询</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="main2"></div>
                        <div class="form-group echart-date">
                            <label class="col-sm-2 col-xs-3 control-label nopadding">统计时间段:</label>
                            <div class="col-sm-8 col-xs-9">
                                <div class="row">
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-start">
                                        <i class="icon icon-date"></i>
                                    </div>
                               <span class="mod-symbol col-xs-1 col-sm-1">
                                   -
                               </span>
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-end">
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <a href="javascript:;" class="btn btn-primary btn-sm date-seach">确认查询</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="main3"></div>
                        <div class="form-group echart-date col-xs-offset-1">
                            <label class="col-sm-2 col-xs-3 control-label nopadding">统计时间段:</label>
                            <div class="col-sm-8 col-xs-9">
                                <div class="row">
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-start">
                                        <i class="icon icon-date"></i>
                                    </div>
                               <span class="mod-symbol col-xs-1 col-sm-1">
                                   -
                               </span>
                                    <div class="col-sm-6 mod-double">
                                        <input type="text" class="form-control mod-data date-end">
                                        <i class="icon icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <a href="javascript:;" class="btn btn-primary btn-sm date-seach">确认查询</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mod-echat-info">
            <div class="col-md-6">
                <div class="mod">
                    <div class="mod-head">
                        <h3>
                            <span class="pull-left"><?php echo ('热门话题'); ?></span>
                        </h3>
                    </div>
                    <div class="mod-body tab-content">
                        <table  class="table table-striped" id="sorttable">
                            <thead align="center">
                            <tr>
                                <td>话题名称</td>
                                <td>
                                    本周/问题数
                                    <i class="icon icon-down"></i>
                                </td>
                                <td>
                                    本月/问题数
                                    <i class="icon hide"></i>
                                </td>
                                <td>
                                    全部/问题数
                                    <i class="icon hide"></i>
                                </td>
                            </tr>
                            </thead>
                            <tbody id="sorttbody">
                            </tbody>
                        </table>
                        <div class="sorttable-mask hide">
                            <p>当前周期内没有数据！</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mod">
                    <div class="mod-head">
                        <h3>
                            <span class="pull-left"><?php echo ('系统信息'); ?></span>
                        </h3>
                    </div>
                    <div class="tab-content mod-content">
                        <table  class="table table-striped">
                            <tbody>
                            <tr>
                                <td><?php echo ('操作系统'); ?></td>
                                <td><?php echo php_uname('s'); ?> <?php echo php_uname('r'); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('PHP 版本'); ?></td>
                                <td><?php echo PHP_VERSION; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('MySQL 版本'); ?></td>
                                <td><?php echo MYSQL_VERSION; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mod">
                    <div class="mod-head">
                        <h3>
                            <span class="pull-left"><?php echo ('用户数据'); ?></span>
                        </h3>
                    </div>
                    <div class="tab-content mod-content">
                        <table  class="table table-striped">
                            <tbody>
                            <tr>
                                <td><?php echo ('会员总数'); ?></td>
                                <td><?php echo $this->users_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('Email 激活会员'); ?></td>
                                <td><?php echo $this->users_valid_email_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('问题总数'); ?></td>
                                <td><?php echo $this->question_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('回答总数'); ?></td>
                                <td><?php echo $this->answer_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('等待回答的问题'); ?></td>
                                <td><?php echo $this->question_no_answer_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('最佳答案数量'); ?></td>
                                <td><?php echo $this->best_answer_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('话题总数'); ?></td>
                                <td><?php echo $this->topic_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('附件总数'); ?></td>
                                <td><?php echo $this->attach_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('待审核问题'); ?></td>
                                <td><?php echo $this->approval_question_count; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ('待审核回答'); ?></td>
                                <td><?php echo $this->approval_answer_count; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo G_STATIC_URL; ?>/admin/js/echarts-data.js"></script>
    <script type="text/javascript" src="<?php echo G_STATIC_URL; ?>/admin/js/echarts.js"></script>
<?php include View::output('admin/global/footer.php'); ?>