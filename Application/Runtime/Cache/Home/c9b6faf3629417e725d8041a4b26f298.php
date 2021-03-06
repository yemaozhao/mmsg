<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-cn" xml:lang="zh-cn">
<head>
    <title>多用户留言系统</title>
    <link rel="stylesheet" type="text/css" href="/www/mmsg/Public/css/moodle.css" />
    <link rel="stylesheet" type="text/css" href="/www/mmsg/Public/css/moodle2.css" />
    <script type="text/javascript" src="/www/mmsg/Public/script.js"></script>
</head>
 
<body  class="login course-1 notloggedin dir-ltr lang-zh_cn_utf8" id="login-index"> 
    <div id="page">
        <div id="header" class="clearfix"> 
            <h1 class="headermain">多用户留言系统</h1> 
            <div class="headermenu">
                <div class="logininfo">
                    <?php if(isset($_SESSION['loginedUser'])): ?>欢迎您，<?php echo (session('loginedUser')); ?>！ | <a href="<?php echo U('user/logout');?>">注销</a>
                    <?php else: ?>
                    您尚未登录(<a  href="<?php echo U('user/login');?>">登录</a>)&nbsp;
                    还没有用户名(<a href="<?php echo U('user/register');?>">注册</a>)<?php endif; ?>
                </div>
            </div> 
        </div>      

        <!-- 面包屑（即“留言板->登录”之类的内容）-->
        <div class="navbar clearfix"> 
            <div class="breadcrumb"> 
                <ul> 
                    <li class="first"><a href="<?php echo U('msg/index');?>">多用户留言系统</a></li>
                    <li> <span class="arrow sep">&#x25BA;</span> <?php echo ($view_title); ?> </li>
                </ul>
            </div>          
        </div> 

        <!-- START OF CONTENT --> 
        <div id="content">
            <div id="content">      
            <!-- 注意form标签的action属性 -->
            <form action="<?php echo U('msg/editmsg',array('msgid' => $msg['id']));?>" method="post" class="mform">
                <fieldset>
                    <legend>您的新讨论话题</legend>
                    <div style="text-align: center;">   
                        <table align="center">                          
                            <tbody><tr>
                                <td>主题：</td>
                                <td>
                                    <input style="width: 400px;" value="<?php echo ($msg["title"]); ?>" type="text" name="title">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">正文：</td>
                                <td>
                                    <textarea name="content" style="width: 400px; height: 400px;"><?php echo ($msg["body"]); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input name="submit" value="更新留言" type="submit">
                                </td>
                            </tr>
                        </tbody></table>

                    </div>
                </fieldset>
            </form>
        </div>
        </div> 
        <!-- END OF CONTENT --> 

        
        <!-- START OF FOOTER -->
        <div id="footer">
            &copy;2017 <a href="https://github.com/yemaozhao" target="_blank"> 点击打开我的Github</a><br />
        </div>
        <!-- END OF FOOTER -->
    </div>
</body>
</html>