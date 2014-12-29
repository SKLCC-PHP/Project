
<?php
/**
 * 通知发文管理
 * @author May
 * @since 2014-05-07
 */
class NoticeController extends CommonController {
	private $NoticeModel = null;
	private $ProjectModel = null;
	private $get_all_notice;
	private $get_all_realname;
	private $uid;
	private $stuID;
	private $get_cur_role_ID;
	
	public function __construct()
	{
		$this->NoticeModel = model('Notice');
		$this->ProjectModel = model('Project');
		$this->get_all_realname = $this->ProjectModel->get_All_Realname();
		$this->get_all_notice = $this->NoticeModel->select();
		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
		$this->stuID = $_SESSION[SESSION_USER_NAME]['username'];

		$role = model('Manager')->field('role_id, uid')->where("uid = $this->uid")->find();
		$role_id = $role['role_id'];
		$this->get_cur_role_ID = model('role')->field('id, role_ID')->where("id = $role_id")->find();
	}
	
	/**
	 * 列表页
	 */
	public function histroyAction()
	{
		$page = $this->page($this->NoticeModel->where(true)->count());
		$list = $this->NoticeModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();	
		$author = array();
		if(is_array($list))
		{
			foreach ($list as &$v) 
			{
				$v['realname'] = $this->get_all_realname[$v['stuID']];
				if($v['stuID'] == $this->stuID)
				{
					$v['show_delete_botton'] = true;
				}
				else
				{
					$v['show_delete_botton'] = false;
				}

			}
		}
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->assign("cur_role", $this->get_cur_role_ID['role_ID']);
		$this->display();
	}

	/**
	 * 添加通知发文
	 */
	public function addAction()
	{	
		if(count($_POST) > 0){
			$_POST['stuID'] = $this->stuID;
			$_POST['create_time'] = date('Y-m-d H:i:s');

			if($this->NoticeModel->add())
			{
				$this->ajaxReturn(200, '添加成功','' , 'closeCurrent');
			}else{
				$this->ajaxReturn(300, '添加失败');
			}
		}else{
			$this->display();
		}
	}

	/**
	 * 修改通知发文信息
	 */
	public function updateAction()
	{
		if(count($_POST) > 0)
		{
			$id = $_POST['id'];
			$_POST['update_time'] = date('Y-m-d H:i:s');
			if($this->NoticeModel->where("id = $id")->save())
			{
				$this->ajaxReturn(200, '修改成功','' , 'closeCurrent');

			}else{
				$this->ajaxReturn(300, '修改失败');
			}
		}
		else{
			$id = (int)$this->get('id');                     //确定当前用户只能修改自己的通知发文
			$update_info = $this->NoticeModel->where("id = $id")->find();
			if ($update_info['stuID'] != $this->stuID)
			{
				$this->ajaxReturn(300, '您无法修改他人的通知发文','', 'closeCurrent');
			}	
			$notice_info = $this->NoticeModel->where("id = $id")->find();
			$this->assign('notice_info', $notice_info);
			$this->display();
		}
	}

	/*
	 * 批量删除文档
	 */
	public function deleteAction()
	{
        $id = (int)$this->get('id');
        $deletd_info = $this->NoticeModel->where("id = $id")->find();
        if ($deletd_info['stuID'] != $this->stuID)
		{
			$this->ajaxReturn(300, '您无法删除他人的通知发文');
		}

		if(!empty($id) && $this->NoticeModel->where("id = $id")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
	}

	/*
	 * 查看文档
	 */
	public function watchAction()
	{
		$id = (int)$this->get('id');
		$get_notice = $this->NoticeModel->where("id = $id")->find();
		$this->assign('get_notice', $get_notice);
		$tran['content'] = html_entity_decode($get_notice['content']);
		$tran['author'] = $this->get_all_realname[$get_notice['stuID']];
		$tran['id'] = $id;
		$tran['stuID'] = $get_notice['stuID'];
		$this->assign('id', $id);
		$this->assign('tran', $tran);
		$this->assign('uid', $this->uid);
		$this->display();
	}
}
?>