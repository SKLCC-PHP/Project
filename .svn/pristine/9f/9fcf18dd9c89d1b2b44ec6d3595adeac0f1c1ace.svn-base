<?php

/**
 * 账户管理
 * 
 * @author iat.net.cn@gmail.com
 * @since 2014-02-10
 */
 
class ManagerController extends CommonController {
	
	private $manager_model, $roles, $status;
	
	public function __construct(){
		$this->manager_model = model('manager');
		$this->roles = $this->getRoles();
		$this->status = array('Y'=>'可用', 'N'=>'邮件验证');
		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
	}
	
	
	/**
	 * 获取角色
	 */
	protected function getRoles(){
		if($roles = model('role')->field('id,name')->select()){
			foreach($roles as $v){
				$data[$v['id']] = $v['name'];
			}
		}
		return $data;
	}
	
	/**
	 *从college表里获取学院名称
	*/
	protected function getCollege()
	{
		if($college = model('college')->field('college_id,college_name')->select())
		{
			foreach($college as $v)
			{
				$data[$v['college_id']] = $v['college_name'];
			}
		}
		return $data;
	}


	/**
	 * 获得频道盒子
	 */
	protected function getChannelBox($channelIds='')
	{
	    $channelArr = array();
	    $box = null;
	    if($channelIds) $channelArr = explode(',', $channelIds);
	    //$list = model('helper')->getNewsTypeList();
	    foreach ($list as $k=>$v)
	    {
	        //$box .= "<option value='{$k}' ".(is_array($channelArr) && in_array($k, $channelArr) ? 'selected="true"' : '').">{$v}</option>";
	    }
	    return $box;
	}
	
	
	
	/**
	 * 列表页
	 */
	public function indexAction(){
		$page = $this->page($this->manager_model->where(true)->count(), 'uid');
		$users = $this->manager_model->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();
		if(is_array($users)){
			foreach($users as &$user){
				$user['role_id'] = $this->roles[$user['role_id']];
				$user['status'] = $this->status[$user['status']];
			}
		}
		$all_colleges = model('project')->get_All_College();
		$this->assign('all_colleges', $all_colleges);
		$this->assign('roles', $this->roles);	
		$this->assign('users', $users);
		$this->assign('page', $page);
		$this->display();
	}
	
	
	
	/**
	 * 验证表单提交的值是否符合条件
	 */
	private function checkValidate($flag='add'){
	    $username = $this->post('username');
	    $uid = $this->post('uid');
		
	    $sql = "username='{$username}'";
		$sql .= ($flag == 'update') ? " AND uid!={$uid}" : '';
		
		$password = $this->post('password');
	    $channel_ids = $this->post('channel_ids');
		$pwd_len = strlen($password);
		if($this->manager_model->where($sql)->count() > 0){
			$this->ajaxReturn(300, '用户名已经存在');
		}else if(!empty($password) && ($pwd_len<6)){
			$this->ajaxReturn(300, '密码长度必须大于等于6位');
		}
		if($flag == 'update' && empty($password)){
		    unset($_POST['password']);
		}else{
		    $_POST['password'] = md5($password);
		}
		
		if($channel_ids){
		    $_POST['channel_ids'] = implode(',', $channel_ids);
		}
	}
	
	
	/**
	 * 添加用户
	 */
	public function addAction(){
		if(count($_POST) > 0){
			$this->checkValidate();
			$_POST['register_time'] = date('Y-m-d H:i:s');
			if($this->manager_model->add()){
				$this->ajaxReturn(200, '添加成功');
			}else{
				$this->ajaxReturn(300, '添加失败');
			}
		}else{
		    //$this->assign('channelBox', $this->getChannelBox());
		    $all_colleges = model('project')->get_All_College();
			$this->assign('all_colleges', $all_colleges);
			$this->assign('roles', $this->roles);
			$this->assign('status', $this->status);
			$this->display();
		}
	}
	
	/**
	 * 修改用户
	 */
	public function updateAction(){
		if(count($_POST) > 0){
			$this->checkValidate('update');
			if($this->manager_model->save()){
				$this->ajaxReturn(200, '修改成功');
			}else{
				$this->ajaxReturn(300, '修改失败');
			}
		}else{
			$uid = (int)$this->get('uid');
			$user_info = $this->manager_model->where("uid=$uid")->find();
			$this->assign('user_info', $user_info);
			$this->assign('roles', $this->roles);
			$this->assign('status', $this->status);
			//$this->assign('channelBox', $this->getChannelBox($user_info['channel_ids']));
			$this->display();
		}
	}
	
	/**
	 * 删除用户
	 */
	public function deleteAction(){
		$ids = $this->request('ids');
		
		if(!$ids){
			$this->ajaxReturn(300, '编号错误');
		}
		
		$idArr = explode(',', $ids);
		
		if(in_array(1, $idArr)){
			$this->ajaxReturn(300, '无法删除超级管理员');
		}
		
		if(!empty($ids) && $this->manager_model->where("uid IN($ids)")->delete()){
			$this->ajaxReturn(200, '删除成功');
		}else{
			$this->ajaxReturn(300, '删除失败');
		}
	}
	
	
	/**
	 * 导出至Excel文件
	 */
	public function exportAction(){
		$data[0] = array('用户名', '真实姓名', '学院', '角色', '联系电话', '邮箱','最近登录时间', '登陆次数');
		$users = $this->manager_model->field('username, realname, college_id, role_id, telephone, email, login_time, login_num')->where(true)->limit(10000)->order('uid DESC')->select();
		$all_colleges = model('project')->get_All_College();
		if(is_array($users)){
			foreach($users as &$user){
				$user['role_id'] = $this->roles[$user['role_id']];
				$user['college_id'] = $all_colleges[$user['college_id']];
			}
			$data = array_merge($data, $users);
		}
		$xls = new Excel('UTF-8', false, '账号列表');
		$xls->addArray($data);
		$xls->generateXML('manager_'.date('YmdHis'));
	}
	
	
	/**
	 * 修改密码
	 */
	public function setPwdAction(){
		$username = self::$adminUser['username']; 
		$uid = $this->uid;
		$manager_info = $this->manager_model->where("uid=$uid")->find();
		if($this->isPost())
		{
			$password = $this->post('password');
			if(!empty($password))
			{
				if(strlen($password) < 6)
				{
					$this->ajaxReturn(300, '密码长度小于6位！');
				}
				else if($this->manager_model->where("uid={$manager_info['uid']}")->save(array('password'=>md5($password))))
				{
					$this->ajaxReturn(200, '密码修改成功',"","closeCurrent");
				}
				else
				{
					$this->ajaxReturn(300, '密码修改失败');
				}
			}
			else
			{
				$this->ajaxReturn(300, '密码没有修改',"","closeCurrent");
			}
			
			
		}
		
		$this->assign('manager_info', $manager_info);
		$this->display();
	}
	

	//==============================================
	//项目主持人个人信息的维护
	//==============================================
	public function updateselfAction()
	{
		$cur_role_id = model("project")->get_Cur_Role_ID();
		$list = $this->manager_model->where("uid = $this->uid")->find();
		$college = model("project")->get_All_College();
		$all_role_name = model("project")->get_All_Role_Name();
		if($this->isPost())
		{
			/*$data = array('realname'=>$_POST['realname'],
							
							'telephone'=>$_POST['telephone'],
							'sex'=>$_POST['sex'],
							'birthday'=>$_POST['birthday'],
							'specialty'=>$_POST['specialty'],
							'polical_status'=>$_POST['polical_status'],
							'admit_time'=>$_POST['admit_time'],
							'education'=>$_POST['education']);*/
			
			if($this->manager_model->where("uid={$list['uid']}")->save())
			{
				$this->ajaxReturn(200, '信息修改成功');
			}
			else
			{
				$this->ajaxReturn(300, '信息修改失败');
			}
			
		}
		$this->assign('role_name', $all_role_name[$list['role_id']]);
		$this->assign('college', $college);
		$this->assign('list', $list);
		$this->assign('sex', array('男','女'));
		$this->assign('cur_role_id', $cur_role_id);
		$this->display();
	}
    
}
?>