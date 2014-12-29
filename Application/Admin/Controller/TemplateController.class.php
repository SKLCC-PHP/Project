<?php

/**
 * 模版控制器
 * 
 * @author iat
 * @since 2014-02-02
 * @modify 2014-10-10
 */

class TemplateController extends CommonController {
	private $TemplateModel = null;
	private $ProjectModel = null;
	private $uid;
	
	public function __construct()
	{
		$this->TemplateModel = model('template');
		$this->ProjectModel = model('Project');

		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
		$this->stuID = $_SESSION[SESSION_USER_NAME]['username'];
		$this->get_cur_role_ID = $this->ProjectModel->get_Cur_Role_ID();
	}

	public function indexAction()
	{
		$page = $this->page($this->TemplateModel->where(true)->count());
		$list = $this->TemplateModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();	
		$realname = $this->ProjectModel->get_All_Realname();
		$project_name = $this->ProjectModel->get_All_Project_Name();
		if(is_array($list)){
			foreach($list as &$v){
				$v['realname'] = $realname[$v['stuID']];
				$v['PName'] = $project_name[$v['PID']];
				if($v['stuID'] == $this->stuID)
				{
					$v['can_delete'] = true;
				}
			}
		}
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->assign('role_ID', $this->get_cur_role_ID);
		$this->display();
	}

	/**
	 * 删除
	 */
	public function deleteAction()
	{
		$ids = $this->request('ids');
		if(!empty($ids) && $this->TemplateModel->where("id IN($ids)")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
	}

	/**
	 * 上传文件函数，uploadAction里调用
	 */
	protected function uploadFile()
	{
		$uploadObj = new Upload();
	    $uploadDir = getUploadAddr();
	    $uploadObj->allowTypes = array('application/msword', 'application/kswps', 'application/kset', 'application/vnd.ms-excel');
	    if(!empty($_FILES['address']['tmp_name'])){
	         $file_info = $uploadObj->uploadOne($_FILES['address'], $uploadDir.getCfgVar('cfg_template_dir'));
	         if($file_info !== false){
	             $_POST['address'] = getCfgVar('cfg_template_dir').$file_info[0]['savename'];
	             $_POST['name'] = $file_info[0]['name'];
	         }else{
	             $this->ajaxReturn(300, $uploadObj->getErrorMsg());
	         }
	    }
	}

	/**
	 *上传附件
	*/
	public function uploadAction()
	{	
		
		if($this->isPost()){
			$_POST['stuID'] = $this->stuID;
			$_POST['create_time'] = date("Y-m-d H:i:s");
			$this->uploadFile();
			if(!$this->post('PID'))
			{
				$this->ajaxReturn(300, '请选择所属项目');
			}
			if(!$this->post('address')){
				$this->ajaxReturn(300, '请选择模版');
			}
			if($this->TemplateModel->add()){
				$this->ajaxReturn(200, '上传成功','','closeCurrent');
			}else{
				$this->ajaxReturn(300, '上传失败');
			}
		}else{
		    $this->assign('project_name', $this->ProjectModel->get_All_Project_Name());
			$this->display();
		}
		
	}

	/**
	 *下载附件
	*/
	public function DownloadAction()
	{
		$id = $this->request('id');
		$address = $this->request('address');
		$out_filename = $this->request('name');
		if($out_filename == "")
		{
			$out_filename = "new.doc";
		}
		$filename = PUB_DIR."share/upload/".$address;
		
		if(!file_exists($filename)) 
		{
			redirect(__PROJECT__, 2, '文件不存在！');
		} 
		else 
		{
			$template_info = model('template')->field('num')->where("id=$id")->find();
			$num = (int)$template_info['num'] + 1;
			$this->TemplateModel->where("id=$id")->save(array('num'=>$num));
			
			@header('Accept-Ranges: bytes');

			@header('Accept-Length: ' . filesize($filename));
			
			@header('Content-Transfer-Encoding: binary');
			@header('Content-type: application/octet-stream');
			@header('Content-Disposition: attachment; filename=' . $out_filename);
			@header('Content-Type: application/octet-stream; name=' . $out_filename);

			$file = @fopen($filename, "r");
			
			echo  @fread($file, @filesize($filename));
			
			@fclose($file);

			exit();
			
		}
	}
}
?>