<?php

/**
 * 文档管理控制器
 * 
 * @author iat
 * @since 2014-10-09
 */

class AttachmentController extends CommonController {
	private $AttachmentModel = null;
	private $AttachmentTypeModel = null;
	private $ProjectModel = null;
	private $uid;
	private $get_cur_role_ID;
	private $get_cur_manager_info;
	private $get_attachment_type;
	
	
	public function __construct()
	{
		$this->AttachmentModel = model('Attachment');
		$this->AttachmentTypeModel = model('Attachment_type');
		$this->ProjectModel = model('Project');
		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
		$this->stuID = $_SESSION[SESSION_USER_NAME]['username'];
		$this->get_cur_role_ID = $this->ProjectModel->get_Cur_Role_ID();
		$this->get_cur_manager_info = $this->ProjectModel->get_Cur_Manager_Info();
		$this->get_attachment_type = $this->AttachmentModel->get_Attachment_Type();
	}	

	/*
	 *我的附件 
	*/
	public function myAction()
	{
		$sql = "stuID = '$this->stuID'";
		if($this->isPost())
		{
			if(!empty($_POST['PID']))
			{
				$sql .= " and PID =" . "'" .$_POST['PID'] . "'";
			}
		}

		$page = $this->page($this->AttachmentModel->where($sql)->count());
		$list = $this->AttachmentModel->where($sql)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();	
		$all_main_info = $this->ProjectModel->get_All_Main_Info();
		$project_name = $this->ProjectModel->get_All_Project_Name();
		
		if(is_array($list)){
			foreach($list as &$v){
				$v['project_id'] = $all_main_info[$v['main_info_id']]['project_id'];
				$v['title'] = $all_main_info[$v['main_info_id']]['title'];
				$v['PName'] = $project_name[$v['PID']];
				$v['type'] = $this->get_attachment_type[$v['PID']][$v['type']];
			}
		}
		$this->assign('project_name', $project_name);
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->display();
	}
	/**
	 * 列表页
	 */
	public function indexAction()
	{
		$PID = $this->request('PID');//获项目代号
		$TIME = $this->request('TIME');//获取批次
		$sql = 'PID = '."'".$PID."'".' and TIME = '. "'" .$TIME ."'";
		if($this->isPost())
		{
			if(!empty($_POST['type']))
			{
				$sql .= " and type =". "'".$_POST['type']."'";
			}

			if($_POST['college_id'] !="")
			{
				$sql .= " and college_id ="."'".$_POST['college_id']."'";
			}

			if(!empty($_POST['student_name']))
			{
				$stuID = $this->ProjectModel->get_StuID_By_Name($_POST['student_name']);
				if($stuID != '')
				{
					$sql .= " and stuID in($stuID)";
				}
				else
				{
					$sql .= " and stuID = ''";
				}
			}
		}
		/*if ($this->get_cur_role_ID == 'college_manager' || $this->get_cur_role_ID == 'counselor') //学院管理员看到学院的附件
		{
			$get_cur_manager_info = $this->ProjectModel->get_Cur_Manager_Info();
			$college_id = $get_cur_manager_info['college_id'];
			
			$all_stuID = model('manager')->field('stuID')->where("college_id = $college_id")->select();//所有注册时为本学院的uid
			
			$all_stuID_str = "";
			foreach ($all_stuID as $v) 
			{
				$all_stuID_str .= $v['stuID'] . ',';
			}
		
			$all_stuID_str = substr($all_stuID_str,0,strlen($all_stuID_str)-1);
			$sql .= "stuID IN($all_stuID_str)";
		}
		elseif ($this->get_cur_role_ID == 'school_manager' || $this->get_cur_role_ID == 'super_admin') 
		{
			$sql .= "true";//学校管理员、超级管理员看到全部的附件
		}*/
		
		$page = $this->page($this->AttachmentModel->where($sql)->count());
		$list = $this->AttachmentModel->where($sql)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();	
		$all_college = $this->ProjectModel->get_All_College();
		$all_realname = $this->ProjectModel->get_All_Realname();
		$all_main_info = $this->ProjectModel->get_All_Main_Info();
		if(is_array($list)){
			foreach($list as &$v){
				$v['college_name'] = $all_college[$v['college_id']];
				$v['realname'] = $all_realname[$v['stuID']];		
				$v['title'] = $all_main_info[$v['main_info_id']]['title'];
				$v['project_id'] = $all_main_info[$v['main_info_id']]['project_id'];
				$v['type'] = $this->get_attachment_type[$v['PID']][$v['type']];
			}
		}
		//print_r($list);
		$this->assign('PID', $PID);
		$this->assign('TIME', $TIME);
		$this->assign('attachment_type', $this->get_attachment_type[$PID]);
		$this->assign('college', $all_college);
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->display('attachment/index');
	}

	/**
	 *全校附件归档，一键下载
	*/
	public function allcollegesAction()
	{
		$PID = $this->request('PID');
		$TIME = $this->request('TIME');
		$sql = "PID = '$PID' and TIME = $TIME ";
		if($this->isPost())
		{

			if($_POST['college_id'] !="")
			{
				$sql .= " and college_id ="."'".$_POST['college_id']."'";
			}
		}
		
		$page = $this->page($this->AttachmentModel->where($sql)->count('distinct type'));//college_id为排序字段，asc为排序方式
		$list = $this->AttachmentModel->field('distinct type, PID, TIME')->where($sql)->order($page['orderFieldStr'])->select();	
		
		//获取类型，去除重复，构成新数组
		$attachment_type = array();
		if(is_array($list))
		{
			/*foreach ($list as $key => $value) {
				$attachment_type[$key] = $value['type'];
			}
			$attachment_unique_type = array_values(array_unique($attachment_type));*/
			foreach ($list as &$v) 
			{	$v['TID'] = $v['type'];
				$v['type'] = $this->get_attachment_type[$v['PID']][$v['type']];
			}
		}
		
		$this->assign('page', $page);
		$this->assign('list', $list);
		$this->assign('PID', $PID);
		$this->assign('PID_CHN', $this->ProjectModel->get_All_Project_Name());
		$this->assign('TIME', $TIME);
		$this->assign('attachment_type', $this->get_attachment_type[$PID]);
		$this->assign('attachment_unique_type', $attachment_unique_type);
		$this->display();
	}
	
	
	/**
	 * 删除
	 */
	public function deleteAction()
	{
		$ids = $this->request('ids');
		if(!empty($ids) && $this->AttachmentModel->where("id IN($ids)")->delete())
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
	protected function uploadFile($project_main_info_id)
	{
		$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($project_main_info_id);

		$uploadObj = new Upload();
	    $uploadDir = getUploadAddr();//PUB_DIR.'share/upload/'下
	    if(preg_match('/^[0-9][A-Z]P$/', $_POST['type']))
	    {
	 	   $uploadObj->allowTypes = array('application/pdf');
		}
		elseif(preg_match('/^[0-9][A-Z]Z$/', $_POST['type']))
	    {
	 	  $uploadObj->allowTypes = array('application/octet-stream', 'application/x-zip-compressed', 'application/zip', 'application/x-rar-compressed');
		} 
		else	
		{
			//$uploadObj->allowTypes = array('application/pdf');
		}
	    if(!empty($_FILES['address']['tmp_name']))
	    {
	        $address_url = getCfgVar('cfg_project_dir').$project_main_info['PID'].'/'.$project_main_info['college_id']."/";
	      
	      	if(!file_exists($uploadDir.$address_url))
	      	{
	      		@mkdir($address_url, 0777);
	      	}
			$file_info = $uploadObj->uploadOne($_FILES['address'], $uploadDir.$address_url);
	        if($file_info !== false){
				$_POST['address'] = $address_url.$file_info[0]['savename'];
				$_POST['name'] = $file_info[0]['name'];
				$_POST['stuID'] = $this->stuID;
				$_POST['main_info_id'] = $project_main_info_id;
				$_POST['PID'] = $project_main_info['PID'];
				$_POST['TIME'] = $project_main_info['TIME'];
				$_POST['college_id'] = $project_main_info['college_id'];
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
		//获取当前用户的所有项目
		$get_cur_main_info_title = $this->ProjectModel->get_Cur_Main_Info_Title();

		if($this->isPost())
		{
			$project_main_info_id = $_POST['project_main_info_id'];
			$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($project_main_info_id);
			$PID = $project_main_info['PID'];
			$TIME = $project_main_info['TIME'];

			/**
			 * 时间控制
			 */
			if(preg_match('/^[0-9]B/', $_POST['type']))
			{
				if($this->ProjectModel->Application_Check_Auth($PID, $TIME) === false)
		        {
		           	$this->ajaxReturn(300, "不是项目申请的时间，不可提交文档");
		       	}
			}
			if(preg_match('/^[0-9]M/', $_POST['type']))
			{
				if($this->ProjectModel->Middle_Check_Check_Auth($PID, $TIME) === false)
				{
					$this->ajaxReturn(300, "不是项目中期检查的时间，不可提交文档");
				}
			}
			if(preg_match('/^[0-9]E/', $_POST['type']))
			{
				if($this->ProjectModel->Final_Check_Check_Auth($PID, $TIME) === false)
				{
					$this->ajaxReturn(300, "不是项目结题评审的时间，不可提交文档");
				}
			}

			$_POST['create_time'] = date("Y-m-d H:i:s");
			if(!$this->post('project_main_info_id'))
			{
				$this->ajaxReturn(300, '请选择项目名称');
			}
			$this->uploadFile($project_main_info_id);
			if(!$this->post('address')){
				$this->ajaxReturn(300, '请选择附件');
			}
			
			if($this->AttachmentModel->add()){
				$this->ajaxReturn(200, '上传成功','','closeCurrent');
			}else{
				$this->ajaxReturn(300, '添加失败');
			}
		}else{
		    $this->assign('cur_main_info_title', $get_cur_main_info_title);
			$this->display();
		}
		
	}

	/**
	 * 根据下拉选择的项目获取项目附件的类型
	 */
	public function getprojectattachmenttypeAction()
	{
		$project_main_info_id = $this->request('project_main_info_id');
		if($project_main_info_id == false) exit('[["", "--附件归属--"]]');
		$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($project_main_info_id);
		$PID = $project_main_info['PID'];
		$attachment_type =  $this->get_attachment_type[$PID];
		$text = '[["", "--附件归属--"]'; 
	    foreach ($attachment_type as $key=>$v) 
	    { 
	    	$text .= ',["' . $key . '", "' . $v . '"]';
	    } 
	    $text .= ']'; 
	    exit($text); 
	}

	/**
	*下载附件
	*/
	public function DownloadAction()
	{
		$address = $this->request('address');
		$stuID = $this->request('stuID');
		$realname = model("manager")->field("realname")->where("username = '$stuID'")->find();
		$out_filename = $realname['realname'] . ".pdf";
		if($realname == "")
		{
			$out_filename = "new.pdf";
		}
		$filename = PUB_DIR."share/upload/".$address;

		if(!file_exists($filename)) 
		{
			$this->ajaxReturn(300, '文件不存在!');
		} 
		else 
		{
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

	/**
	 *一键下载
	*/
	public function alldownloadAction()
	{
		$PID = $this->request('PID');
		$TIME = $this->request('TIME');
		$type = $this->request('type');
		//var_dump($PID);
		//var_dump($type);
		$typename = $this->get_attachment_type[$PID][$type];
		function deldir($dir) 
		{
		  	//先删除目录下的文件：
		  	$dh=opendir($dir);
		  	while ($file=readdir($dh)) 
		 	{
			    if($file!="." && $file!="..") 
			    {
			    	$fullpath=$dir."/".$file;

			      	if(!is_dir($fullpath)) 
			      	{
						unlink($fullpath);
					}
					else 
					{
			          	deldir($fullpath);
			      	}
			    }
		 	}
			closedir($dh);
		  	if(rmdir($dir)) 
		  	{
		    	return true;
		  	} 
		  	else 
		  	{
		    	return false;
			}
		}

		$collect_file_name = $this->ProjectModel->UTF_to_GBK($typename);//最外层的文件夹名
		try
		{
			if(file_exists($collect_file_name))//已经存在的话先删了，因为即使是覆盖，若第二次的少于第一次，下载最新的会包括第一次的部分
			{
				deldir($collect_file_name);
				
			}
			mkdir($collect_file_name, 0777);
			
			
			$address = $this->AttachmentModel->field('address, college_id, stuID')->where("PID = '$PID' and TIME = '$TIME' and type = '$type'")->select();	
			$college_name = $this->ProjectModel->get_All_College();

			foreach ($address as $key => $value) 
			{
				
				$stuID = $value['stuID'];
				
				$address = $value['address'];
				
				$info = model("manager")->field("realname, college_id")->where("username = '$stuID'")->find();
				$college_id = $info['college_id'];
				//$student_file_name = $info['realname'] . ".pdf";//以学生姓名命名的pdf格式文件
				$student_file_name = $info['realname'] . "." . end(explode('.', $address));
				
				$source_file_name = PUB_DIR."share\upload\\".$address;//源文件的路径

				if(!file_exists($source_file_name)) 
				{
					die("部分文件不存在，请单个下载");
					$this->ajaxReturn(300, '文件不存在!');
				} 
				else 
				{
					$collect_college_file_name = $collect_file_name.'\\'.$this->ProjectModel->UTF_to_GBK($college_name[$college_id]);//里一层，学院的文件夹
					$collect_college_student_file_name = $collect_college_file_name.'\\'.$this->ProjectModel->UTF_to_GBK($student_file_name);//再里一层，学生文件
					
					if (!file_exists($collect_college_file_name))
					{
						mkdir($collect_college_file_name, 0777);
					}
					if(!copy($source_file_name, $collect_college_student_file_name))
					{
						throw new Exception("复制出现问题");
						
					}
					
				}
				
			}
		}catch(Exception $e)
		{
			die($e->getMessage());
			$this->ajaxReturn(300, $e->getMessage());
		}

		$zip_file = $this->ProjectModel->UTF_to_GBK($typename);
	
		function addFileToZip($path,$zip)
		{
			$handler=opendir($path); //打开当前文件夹由$path指定。
			while(($filename=readdir($handler))!==false)
			{
				
				if($filename != "." && $filename != "..")
				{	//文件夹文件名字为'.'和‘..’，不要对他们进行操作
					if(is_dir($path."/".$filename))
					{// 如果读取的某个对象是文件夹，则递归
						addFileToZip($path."/".$filename, $zip);
					}
					else
					{ //将文件加入zip对象
						$zip->addFile($path."/".$filename);
					}
				}
			}
			@closedir($path);
		}

		$zip_file = $this->ProjectModel->UTF_to_GBK($typename).".zip";//压缩之后的文件路径及名称

		  
		//生成压缩文件
		try
		{
		    $zip = new ZipArchive();
		    if ($zip->open($zip_file, ZIPARCHIVE::OVERWRITE)!=TRUE) 
		    {   
		        throw new Exception("创建出现问题");
		    }   
	    	addFileToZip($collect_file_name, $zip);
		    $zip->close();
			  
			if(!file_exists($zip_file))
			{   
			    throw new Exception("复制出现问题");
			} 

			@header('Accept-Ranges: bytes');
			@header('Accept-Length: ' . filesize($zip_file));
			@header('Content-Transfer-Encoding: binary');
			@header('Content-type: application/octet-stream');
			@header('Content-Disposition: attachment; filename=' . $zip_file);
			@header('Content-Type: application/octet-stream; name=' . $zip_file);

			$file = @fopen($zip_file, "r");
			echo  @fread($file, @filesize($zip_file));
			
			@fclose($file);
		}catch(Exception $e)
		{
			$this->ajaxReturn(300, $e->getMessage());
		}catch(Exception $e)
		{
			$this->ajaxReturn(300, $e->getMessage());
		}

		deldir($collect_file_name);

	}


	/**
	 * 附件归属首页
	 */
	public function viewattachmenttypeAction()
	{
		$page = $this->page($this->AttachmentTypeModel->where(true)->count());
		$list = $this->AttachmentTypeModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();

		$this->assign("project_name", $this->ProjectModel->get_All_Project_Name());
		$this->assign("list", $list);
		$this->assign("page", $page);
		$this->display();
	}

	/**
	 * 添加附件归属
	 */
	public function addattachmenttypeAction()
	{
		if($this->isPost())
		{
			$PID = $_POST['PID'];
			$TID = $_POST['TID'];
			$type = $_POST['type'];

			if($TID == '' || $type == '')
			{
				$this->ajaxReturn(300, "请点击“新增附件归属”按钮新增附件归属或者取消");
			}
			//判断新增的类型中是否有重复的
			if(count($TID) != count(array_unique($TID)) || count($type) != count(array_unique($type)))
			{
				$this->ajaxReturn(300, "当前填写的附件归属存在重复，请修改！");
			}
			//判断数据库中是否存在改类型
			foreach ($TID as $v)
			{
				if($this->AttachmentTypeModel->where("PID = '$PID' and TID = '$v'")->find())
				{
					$this->ajaxReturn(300, "已存在附件归属:$v, 请修改");
				}
			}

			foreach ($TID as $key=>$value)
			{
				if(!$this->AttachmentTypeModel->add(array('PID' => $PID, 'TID' => $TID[$key], 'type' => $type[$key])))
				{
					$this->ajaxReturn(300, "添加失败！");
				}
			}
			$this->ajaxReturn(200, "添加成功", '', 'closeCurrent');
		}

		$project_name = $this->ProjectModel->get_All_Project_Name();
		$this->assign('project_name', $project_name);
		$this->display();
	}

	/**
	 * 修改附件归属
	 */
	public function updateattachmenttypeAction()
	{

	}

	/**
	 * 删除附件归属
	 */
    public function deleteattachmenttypeAction()
    {
    	$id = $this->request('id');
		if(!empty($id) && $this->AttachmentTypeModel->where("id = $id")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
    }
}
?>