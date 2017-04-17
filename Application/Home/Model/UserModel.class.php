<?php 
namespace Home\Model;
use Think\Model;
/**
* 
*/
class UserModel extends Model
{
	public function checkLogin($email,$password)
	{
		$where['email']=$email;
		$where['password']=md5($password);
		return M('user')->where($where)->select();
	}

	public function doRegister($email,$password){
		$where['email']=$email;
		$check = M('user')->where($where)->select();
		if (count($check)==0) {
			$data['email']=$email;
			$data['password']=md5($password);
			return M('user')->add($data);
		}else{
			return false;
		}
		
	}

	public function getMyFound(){
		$where['foundUser']=$_SESSION['username'];
		$data = M('found')->order('foundtime desc')->where($where)->select();		
		return $data;
	}

	public function getComments($f_id){
		$where['found_id']=$f_id;
		$comments = M('comment')->where($where)->select();
		return $comments;
	}

	public function deleteItem($f_id){
		$model = new Model();
		$where['id']=$f_id;
		$check['found_id']=$f_id;
		$model->startTrans();
		$line1 = $model->table('comment')->where($check)->delete();
		$line2 = $model->table('found')->where($where)->delete();
		if ($line1 !== false && $line2!==false) {
			$model->commit();
			return 1;
		}else{
			$model->rollback();
			return 0;
		}
	}

}

?>