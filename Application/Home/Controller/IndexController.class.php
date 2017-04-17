<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;

class IndexController extends Controller
{

    public function index()
    {
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $this->display();
    }

    public function do_login()
    {
        if (I('post.email') == "" || I('post.pw') == "") {
            $this->error('The input can not be empty!');
        } else {
            $user = new UserModel();
            $data = $user->checkLogin(I('post.email'), I('post.pw'));
            if (count($data)) {
                $_SESSION['email'] = I('post.email');
                $_SESSION['user_id'] = $data[0]['id'];
                $this->success('Login Success');
            } else {
                $this->error('Wrong email or password!');
            }
        }
    }

    public function do_register()
    {
        if (I('post.email') == "" || I('post.pw') == "" || I('post.cpw') == "") {
            $this->error('The input can not be empty!');
        } else if (I('post.pw') != I('post.cpw')) {
            $this->error('You enter the password differently!');
        } else {
            $user = new UserModel();
            if ($user->doRegister(I('post.email'), I('post.pw'))) {
                $this->success('Success');
            } else {
                $this->error('Register Fail!The email has existed!');
            }
        }
    }

    public function logout()
    {
        if (session_destroy()) {
            $this->success("Logout Success!", "../../../");
        } else {
            $this->error("Logout Fail!");
        }
    }
}