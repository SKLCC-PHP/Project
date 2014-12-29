<?php

/**
 * 表单填写项目材料
 * 
 * @author iat.net.cn
 * @since 2014-04-20
 */

class ProjectController extends CommonController {
	

	private $stuID;
	
	private $ProjectApplicationModel;
	private $ProjectMainInfoModel;
	private $ProjectModel;
	private $ProjectMiddleCheckModel;
	private $ProjectFinalApplicationModel;
	private $ProjectFinalCheckModel;
	private $ProjectAwardsModel;
	private $ProjectManagerModel;
	private $ProjectTimeSetModel;
	private $ProjectNameModel;

	private $get_cur_role_ID;
	private $get_all_college;
	private $get_cur_college;
	private $get_all_telephone;
	private $get_cur_manager_info;
	private $get_all_realname;
	private $get_cur_realname;
	private $get_cur_main_info;//当前身份的project_main_info
	private $get_cur_application;//当前身份的申请材料
	private $get_cur_project_time;//当前项目开展的时间
	

	
	
	public function __construct()
	{
		$this->ProjectModel = model('Project');
		$this->ProjectMainInfoModel = model('project_main_info');
		$this->ProjectApplicationModel = model("project_application");
		$this->ProjectMiddleCheckModel = model("project_middle_check");
		$this->ProjectFinalApplicationModel = model("project_final_application");
		$this->ProjectFinalCheckModel = model("project_final_check");
		$this->ProjectAwardsModel = model("project_awards");
		$this->ProjectManagerModel = model('manager');
		$this->ProjectTimeSetModel = model('project_time_set');
		$this->ProjectNameModel = model('project_name');

		$this->get_cur_manager_info = $this->ProjectModel->get_Cur_Manager_Info();
		$this->get_cur_role_ID = $this->ProjectModel->get_Cur_Role_ID();
		$this->get_all_college = $this->ProjectModel->get_All_College();
		$this->get_cur_college = $this->ProjectModel->get_Cur_college();
		$this->get_all_telephone = $this->ProjectModel->get_All_Telephone();
		$this->get_all_realname = $this->ProjectModel->get_All_Realname();
		$this->get_cur_realname = $this->ProjectModel->get_Cur_Realname();

		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
		$this->stuID = $_SESSION[SESSION_USER_NAME]['username'];
	}

	

	
	/**
	 * 列表页
	 */
	public function indexAction()
	{
		$PID = $this->request('PID');
		$TIME = $this->request('TIME');
		$sql = "PID = '$PID'" . " and " ."TIME = $TIME";
		if($this->isPost())
		{
			if(!empty($_POST['project_id']))
			{
				$sql .= " and project_id like ". "'%".htmlspecialchars($_POST['project_id'],ENT_QUOTES)."%'";
			}

			if(!empty($_POST['title']))
			{
				$sql .= " and title like ". "'%".htmlspecialchars($_POST['title'], ENT_QUOTES)."%'";
			}

			if(!empty($_POST['type']))
			{
				$sql .= " and type = ". "'".$_POST['type']."'";
			}

			if($_POST['college_id'] !="")
			{
				$sql .= " and college_id = "."'".$_POST['college_id']."'";
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
		//echo $sql;
		//决定看到本院的还是看到所有的
		/*if ($this->get_cur_role_ID == 'host_student' || $this->get_cur_role_ID == 'college_manager' || $this->get_cur_role_ID == 'counselor') 
		{
			
			$college_id = $this->get_cur_manager_info['college_id'];
			
			$all_stuID = model('manager')->field('username')->where("college_id = $college_id")->select();//所有注册时为本学院的uid
	
			$all_stuID_str = "";
			foreach ($all_stuID as $v) 
			{
				$all_stuID_str .= '"' . $v['username'] . '"' . ',';
			}
		
			$all_stuID_str = substr($all_stuID_str,0,strlen($all_stuID_str)-1);
			$sql .= "stuID IN($all_stuID_str)";
		}
		elseif ($this->get_cur_role_ID == 'school_manager' || $this->get_cur_role_ID == 'super_admin') 
		{
			$sql .= "true";
		}*/

	
		$page = $this->page($this->ProjectMainInfoModel->where($sql)->count(), 'project_id', asc);
		$list = $this->ProjectMainInfoModel->where($sql)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();

		if(is_array($list))
		{
			foreach($list as &$v)
			{
				
				$v['college_name'] = $this->get_all_college[$v['college_id']];
				$v['realname'] = $this->get_all_realname[$v['stuID']];
				$v['telephone'] = $this->get_all_telephone[$v['stuID']];

				$all_member_str = $v['member'];
				$v['totle_number'] = 1;
				//输入添加时成员的处理
				if(strstr($all_member_str, '*'))
				{
		        	$all_member_arr = explode("*", $all_member_str);
		        	$each_member_str = "";
		        	$v['totle_number'] = count($all_member_arr);
		        	for($i = 0; $i < count($all_member_arr) - 1; $i++)
		        	{
		        		$each_member_arr[$i] = explode("|", $all_member_arr[$i]);
		        		$each_member_str .= $each_member_arr[$i][1] . "	";//若改变姓名在字符串中的顺序需要修改姓名在数组的序号
		        	}
		        	$v['member_str'] = $each_member_str;
		        }
		        //导入添加时成员的处理
		        else
		        {
		        	if($all_member_str  != "")
					{
						$delimiters = array('、',',','，','、','/',';','；','。');
						$result = $this->ProjectModel->multipleExplode($delimiters,$all_member_str);
						$member_str = '';
						$totle_number = 1;
						foreach ($result as $k) 
						{
							$member_str .= $k . "  		" . " ";
							$totle_number ++;
						}
						$v['member_str'] = $member_str;
						$v['totle_number'] = $totle_number;
					}
		        }


	        	$all_teacher_str = $v['teacher'];
	        	//输入添加时老师的处理
	        	if(strstr($all_teacher_str, '*'))
	        	{
		        	$all_teacher_arr = explode("*", $all_teacher_str);
		        	$each_teacher_str = "";
		        	for($i = 0; $i < count($all_teacher_arr) - 1; $i++)
		        	{
		        		$each_teacher_arr[$i] = explode("|", $all_teacher_arr[$i]);
		        		$each_teacher_str .= $each_teacher_arr[$i][0] . "	";//若改变姓名在字符串中的顺序需要修改姓名在数组的序号
		        	}
		        	$v['teacher_str'] = $each_teacher_str;
		        }
		        else
		        {
		        	if($all_teacher_str  != "")
					{
						$delimiters = array('、',',','，','、','/',';','；','。');
						$result = $this->ProjectModel->multipleExplode($delimiters,$all_teacher_str);
						$teacher_str = '';
						foreach ($result as $k) 
						{
							$teacher_str .= $k . "  		" . " ";
						}
					}
					$v['teacher_str'] = $teacher_str;
		        }
				
				
			}
		}
		$project_type = $this->ProjectModel->get_Cur_Project_Type($PID);
		$this->assign('list', $list);
		$this->assign('PID', $PID);
		$this->assign('TIME', $TIME);
		$this->assign('manager_role', $this->get_cur_role_ID);
		$this->assign('project_type', $project_type);
		$this->assign('college', $this->get_all_college);
		$this->assign('page', $page);
		$this->display();
	}
	
	/**
	*我的项目里列出我的所有项目
	*/
	public function myprojectAction()
	{
		$sql = "stuID = '$this->stuID'";
		if($this->isPost())
		{
			if(!empty($_POST['project_id']))
			{
				$sql .= " and project_id like". "'%".htmlspecialchars($_POST['project_id'],ENT_QUOTES)."%'";
			}

			if(!empty($_POST['title']))
			{
				$sql .= " and title like". "'%".htmlspecialchars($_POST['title'], ENT_QUOTES)."%'";
			}
		}
		
		$page = $this->page($this->ProjectMainInfoModel->where($sql)->count());
		$list = $this->ProjectMainInfoModel->where($sql)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();
		$project_name = $this->ProjectModel->get_All_Project_Name();
		if(is_array($list))
		{
			foreach($list as &$v)
			{
				$v['PName'] = $project_name[$v['PID']];
				$v['college_name'] = $this->get_all_college[$v['college_id']];
				if($this->ProjectModel->Application_Check_Auth($v['PID'], $v['TIME']) === false)
				{
					$v['show_delete_botton'] = false;
				}
				else
				{
					$v['show_delete_botton'] = true;
				}
			}
		}

		$this->assign('list', $list);
		$this->assign('page', $page);

		$this->display();
	}
//=========================================================================
//以下部分为新增项目操作
//=========================================================================
	/**
	*我的项目里新增项目
	*/
	public function addmyprojectAction()
	{
		if($this->isPost())
		{
			$_POST['stuID'] = $this->stuID;
			$_POST['create_time'] = date('Y-m-d H:i:s');

			//处理批次
			$project_name_TIME_arr = explode('_', $_POST['TIME']);
			$_POST['TIME'] = $project_name_TIME_arr[1];

			//合并成员的字符串处理
			$college = $this->ProjectModel->get_All_College_By_Name();
			$member_str = "";
			for($i = 0; $i < count($_POST['member_stuID']); $i++)
			{
				//$result = $this->ProjectModel->WarningAlert_member($_POST['member_stuID'][$i],$_POST['member_name'][$i],$_POST['member_telephone'][$i],$_POST['member_specialty'][$i]);
				$result = 1;
				if ($result == 1)
				{
					/*$member_str .= $this->check($_POST['member_stuID'][$i]) . "|"
								. $this->check($_POST['member_name'][$i]) . "|"
								. $this->check($_POST['member_telephone'][$i]) . "|"
								. $college[$this->check($_POST['member_college'][$i])] . "|"
								. $this->check($_POST['member_specialty'][$i]) . "*";*/

					$member_str .= $this->check($_POST['member_stuID'][$i]) . "|"
								. $this->check($_POST['member_name'][$i]) . "|"
								. $this->check($_POST['member_telephone'][$i]) . "|"
								. $_POST['college_id']. "|"
								. $this->check($_POST['member_specialty'][$i]) . "|"
								. $this->check($_POST['member_task'][$i]) . "*";
				}
				else
				{
					$this->ajaxReturn(300, $result);
				}
				
			}
			$_POST['member'] = $member_str;

			//合并教师的字符串处理
			$teacher_str = "";
			for($i = 0; $i < count($_POST['teacher_name']); $i++)
			{
				//$result = $this->ProjectModel->WarningAlert_teacher($_POST['teacher_name'][$i],$_POST['teacher_title'][$i],$_POST['teacher_research'][$i]);
				$result = 1;
				if ($result == 1)
				{
					/*$teacher_str .= $this->check($_POST['teacher_name'][$i]) . "|"
								. $this->check($_POST['teacher_title'][$i]) . "|"
								. $college[$this->check($_POST['teacher_college'][$i])] . "|"
								. $this->check($_POST['teacher_research'][$i]) . "*";*/

					$teacher_str .= $this->check($_POST['teacher_name'][$i]) . "|"
								. $this->check($_POST['teacher_title'][$i]) . "|"
								. $_POST['college_id'] . "|"
								. $this->check($_POST['teacher_research'][$i]) . "*";
				}
				else
				{
					$this->ajaxReturn(300, $result);
				}
			}
			$_POST['teacher'] = $teacher_str;


		
			if($this->ProjectMainInfoModel->add())
			{
				/*$main_info_id = mysql_insert_id();//获取上个insert语句插入的id
				//插入新的项目时，申请材料等一同插入编号，以后每次只是更新
				$data = array('main_info_id' => $main_info_id,
								'stuID' => $this->stuID);
				if($this->ProjectApplicationModel->add($data)
					&& $this->ProjectMiddleCheckModel->add($data)
					&& $this->ProjectFinalApplicationModel->add($data)
					&& $this->ProjectFinalCheckModel->add($data)
					)*/
				{
					
					$this->ajaxReturn(200, "新增成功", "", "closeCurrent");
				}
				
			}
			else
			{
				$this->ajaxReturn(300, "新增失败");
			}
		}
		$manager_info = $this->get_cur_manager_info;


		$this->assign('college', $this->get_all_college);
		$this->assign('project_name', $this->ProjectModel->get_All_Project_Name());

		$this->assign('manager_info', $manager_info);
		$this->display();
	}


	/**
	 * 修改我的项目
	 */
	public function updatemyprojectAction()
	{
		if($this->isPost())
		{
			$id = $_POST['id'];
			$_POST['update_time'] = date('Y-m-d H:i:s');

			//处理批次，当是新级联获取的时候则分割，否者直接写入
			if(strstr($_POST['TIME'], '_'))
			{
				$project_name_TIME_arr = explode('_', $_POST['TIME']);
				$_POST['TIME'] = $project_name_TIME_arr[1];
			}
			

			//合并成员的字符串处理
			$college = $this->ProjectModel->get_All_College_By_Name();
			$member_str = "";
			for($i = 0; $i < count($_POST['member_stuID']); $i++)
			{
				//$result = $this->ProjectModel->WarningAlert_member($_POST['member_stuID'][$i],$_POST['member_name'][$i],$_POST['member_telephone'][$i],$_POST['member_specialty'][$i]);
				$result = 1;
				if ($result == 1)
				{
					/*$member_str .= $this->check($_POST['member_stuID'][$i]) . "|"
								. $this->check($_POST['member_name'][$i]) . "|"
								. $this->check($_POST['member_telephone'][$i]) . "|"
								. $college[$this->check($_POST['member_college'][$i])] . "|"
								. $this->check($_POST['member_specialty'][$i]) . "*";*/

					$member_str .= $this->check($_POST['member_stuID'][$i]) . "|"
								. $this->check($_POST['member_name'][$i]) . "|"
								. $this->check($_POST['member_telephone'][$i]) . "|"
								. $_POST['college_id']. "|"
								. $this->check($_POST['member_specialty'][$i]) . "|"
								. $this->check($_POST['member_task'][$i]) . "*";;
				}
				else
				{
					$this->ajaxReturn(300, $result);
				}
				
			}
			$_POST['member'] = $member_str;

			//合并教师的字符串处理
			$teacher_str = "";
			for($i = 0; $i < count($_POST['teacher_name']); $i++)
			{
				//$result = $this->ProjectModel->WarningAlert_teacher($_POST['teacher_name'][$i],$_POST['teacher_title'][$i],$_POST['teacher_research'][$i]);
				$result = 1;
				if ($result == 1)
				{
					/*$teacher_str .= $this->check($_POST['teacher_name'][$i]) . "|"
								. $this->check($_POST['teacher_title'][$i]) . "|"
								. $college[$this->check($_POST['teacher_college'][$i])] . "|"
								. $this->check($_POST['teacher_research'][$i]) . "*";*/

					$teacher_str .= $this->check($_POST['teacher_name'][$i]) . "|"
								. $this->check($_POST['teacher_title'][$i]) . "|"
								. $_POST['college_id'] . "|"
								. $this->check($_POST['teacher_research'][$i]) . "*";
				}
				else
				{
					$this->ajaxReturn(300, $result);
				}
			}
			$_POST['teacher'] = $teacher_str;
		
			if($this->ProjectMainInfoModel->where("id = '$id'")->save())
			{
				$this->ajaxReturn(200, "修改成功", "", "closeCurrent");
			}
			else
			{
				$this->ajaxReturn(300, "修改失败");
			}
		}
		else
		{
			$id = (int)$this->get('id');
			$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($id);

			//处理成员串
			$member_str = $project_main_info['member'];
			$all_member_arr = explode("*", $member_str);
			foreach ($all_member_arr as $key => $value) 
			{
				$each_member_arr[$key] = explode("|", $all_member_arr[$key]);
			}
			array_pop($each_member_arr);

			//处理老师串
			$teacher_str = $project_main_info['teacher'];
			$all_teacher_arr = explode("*", $teacher_str);
			foreach ($all_teacher_arr as $key => $value) 
			{
				$each_teacher_arr[$key] = explode("|", $all_teacher_arr[$key]);
			}
			array_pop($each_teacher_arr);

			$this->assign('memberlist', $each_member_arr);
			$this->assign('teacherlist', $each_teacher_arr);
			$this->assign('college', $this->get_all_college);
			$this->assign('project_name', $this->ProjectModel->get_All_Project_Name());
			$this->assign('project_main_info', $project_main_info);
			$this->assign('manager_info', $this->get_cur_manager_info);
			$this->display();
		}
	}

	/**
	 * 删除我的项目
	 */
	public function deleteAction()
	{
		$id = $this->request('id');
		if(!$id){
			$this->ajaxReturn(300, '编号错误');
		}
		$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($id);
		if(empty($project_main_info) || $project_main_info['stuID'] != $this->stuID || $this->ProjectModel->Application_Check_Auth($project_main_info['PID'], $project_main_info['TIME']) === false)
		{
			$this->ajaxReturn(300, '不允许删除！');
		}
		if(!empty($id) && $this->ProjectMainInfoModel->where("id=$id")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}else{
			$this->ajaxReturn(300, '删除失败');
		}
	}
	/**
	*检测是否有特殊字符以及做相应处理
	*/
	protected function check($str)
	{
		if(strstr($str, '*'))
		{
			$this->ajaxReturn(300, "怎么会有 * 呢？？", '', 'closeCurrent');
		}
		else if(strstr($str, '|'))
		{
			$this->ajaxReturn(300, "怎么会有 | 呢？？", '', 'closeCurrent');
		}
		return $str;
	}

	/**
	*添加我的项目时的选择学院lookup
	*/
	public function selectcollegeAction()
	{
		$page = $this->page(model('college')->where(true)->count(),college_id,asc);
		$list = model('college')->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->display();
	}

	/**
	*根据项目大类和批次获得项目类型
	*/
	public function getprojecttypeAction()
	{
		$project_name_TIME = $this->request('project_name_TIME');
		$project_name_TIME_arr = explode('_', $project_name_TIME);
		$project_name = $project_name_TIME_arr[0];
		$project_TIME = $project_name_TIME_arr[1];

		
		if($project_TIME != "")
		{
			$cur_project_launch_time = $this->ProjectModel->get_Cur_Project_Launch_Time($project_name, $project_TIME);
			if(!($cur_project_launch_time['begin_add_time'] <= date("Y-m-d") && $cur_project_launch_time['end_add_time'] >= date("Y-m-d")))
			{
				$text = '[["", "--不是该批次的报名时间 --"]]'; 
				exit($text); 
			}
			$project_type = $this->ProjectModel->get_Cur_Project_Type_on_TIME($project_name, $project_TIME);
		}

		$text = '[["", "--请选择--"]'; 
		if(is_array($project_type))
		{
	 	   	foreach ($project_type as $v) 
	    	{ 
	        	$text .= ',["' . $v . '", "' . $v . '"]';
	  	  	} 
		}
	    $text .= ']'; 
	    exit($text); 
	}

	/**
	*根据项目大类获得项目批次
	*/
	public function getprojecttimeAction()
	{
		$project_name = $this->request('project_name');
		if($project_name == '') exit('[["", "--请选择--"]]');
		$project_TIME = $this->ProjectModel->get_Cur_Project_TIME($project_name);
		
		$text = '[["", "--请选择--"]'; 
	    foreach ($project_TIME as $v) 
	    { 
	    	//批次级联后很难再获取到project_name,所以在批次中带上表明project_name,需要字符串处理
	        $text .= ',["' . $project_name . '_' . $v . '", "' . $v . '"]';
	    } 
	    $text .= ']'; 
	    exit($text); 
	}

	/**
	 * 管理员修改项目编号及中期结题结果
	 */
	public function updatestudentprojectAction()
	{
		if($this->isPost())
		{
			$id = $_POST['id'];
			$_POST['update_time'] = date('Y-m-d H:i:s');
			
			if($this->ProjectMainInfoModel->where("id = '$id'")->save())
			{
				$this->ajaxReturn(200, "修改成功", "", "closeCurrent");
			}
			else
			{
				$this->ajaxReturn(300, "修改失败");
			}
		}
		else
		{
			$id = (int)$this->get('id');
			$project_main_info = $this->ProjectModel->get_Main_Info_By_Id($id);

			$this->assign('project_main_info', $project_main_info);
			$this->assign('realname', $this->get_all_realname[$project_main_info['stuID']]);
			$this->display();
		}
	}
//=========================================================================
//以上部分为新增项目操作
//=========================================================================

//=========================================================================
//我的项目里点击详细，通过点击不同的表头，显示不同的页面
//=========================================================================
	/**
	 *我的项目里点击详细
	*/
	public function mydetailsAction()
	{
		$id = (int)$this->request('id');
		$list = $this->ProjectMainInfoModel->where("id=$id")->find();
		$PID = $list['PID'];
		$TIME = $list['TIME'];
		if($column = (int)$this->request('column'))
		{
			if(FORM_CLOSE === true)
			{
				$this->assign('close_message', "目前仍使用上传附件的形式提交材料，该功能未启用");
			}
			switch($column)
			{
				case 1:
					$list = $this->ProjectMainInfoModel->where("id=$id")->find();
					if(!empty($list))
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
		            $this->assign('list', $list);
		            $this->display('project/mymaininfo');
		            break;

		        case 2:
					$list = $this->ProjectApplicationModel->where("main_info_id=$id")->find();
					if(!empty($list))
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);//检查是否有权访问该页面
		           	if($this->ProjectModel->Application_Check_Auth($PID, $TIME) === false)
		           	{
		           		$this->assign('message', "不是项目申请的时间，材料不可修改");
		           	}	
		            
		            $this->assign("PID", $PID);
		            $this->assign("TIME", $TIME);
		            $this->assign('list', $list); 
		            $this->display('project/updatemyapplication');
		            break;

		        case 3:
					$list = $this->ProjectMiddleCheckModel->where("main_info_id=$id")->find();
					if(!empty($list))
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
		            if($this->ProjectModel->Middle_Check_Check_Auth($PID, $TIME) === false)
		           	{
		           		$this->assign('message', "不是项目中期检查的时间，材料不可修改");
		           	}	

		           	$this->assign("PID", $PID);
		            $this->assign("TIME", $TIME);
		            $this->assign('list', $list);
		            $this->display('project/updatemymiddlecheck');
		            break;

		        case 4:
					$list = $this->ProjectFinalApplicationModel->where("main_info_id=$id")->find();
					if(!empty($list))
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
					if($this->ProjectModel->Final_Check_Check_Auth($PID, $TIME) === false)
		           	{
		           		$this->assign('message', "不是项目结题评审的时间，材料不可修改");
		           	}

		           	$this->assign("PID", $PID);
		            $this->assign("TIME", $TIME);
		            $this->assign('list', $list);
		            $this->display('project/updatemyfinalapplication');
		            break;

		        case 5:
					$list = $this->ProjectFinalCheckModel->where("main_info_id=$id")->find();
					if(!empty($list))
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
					if($this->ProjectModel->Final_Check_Check_Auth($PID, $TIME) === false)
		           	{
		           		$this->assign('message', "不是项目结题评审的时间，材料不可修改");
		           	}

					$this->assign("PID", $PID);
		            $this->assign("TIME", $TIME);
		           	$this->assign('list', $list);
		            $this->display('project/updatemyfinalcheck');
		            break;

		        case 6:
					$list = $this->ProjectAwardsModel->where("main_info_id=$id")->order("create_time DESC")->select();
					foreach ($list as $v) 
					{
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $v['stuID']);
					}

					$this->assign("PID", $PID);
		            $this->assign("TIME", $TIME);
					$this->assign('list', $list);
		            $this->assign("main_info_id", $id);
		            $this->display('project/updatemyawards');
		            break;

		        default:
		        	redirect('./');
			}
        }
        else
        {
        	
        	$this->assign('list', $list);

        	//防止地址栏直接输入，项目主持人不能看到别人的信息
        	$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
        	
        	//处理成员与指导老师的字符串
        	$member_str = $list['member'];
        	$member_arr = explode("*", $member_str);
        	for($i = 0; $i < count($member_arr) - 1; $i++)
        	{
        		$member_each_arr[$i] = explode("|", $member_arr[$i]);
        		$member_each_arr[$i][3] = $this->get_all_college[$member_each_arr[$i][3]];//字符串的第四个表示学院
        	}

        	$teacher_str = $list['teacher'];
        	$teacher_arr = explode("*", $teacher_str);
        	for($i = 0; $i < count($teacher_arr) - 1; $i++)
        	{
        		$teacher_each_arr[$i] = explode("|", $teacher_arr[$i]);
        		$teacher_each_arr[$i][2] = $this->get_all_college[$teacher_each_arr[$i][2]];//字符串的第三个表示学院
        	}
        	//------------成员-----------------------
        	$j_menber = count($member_each_arr);
        	$list_member = $member_each_arr;
        	$member_each_arr['sum'] = $j_menber+1;
        	$this->assign("list_member", $list_member);
        	$this->assign("member", $member_each_arr);
        	//----------老师----------------------
        	$j_teacher = count($teacher_each_arr);
        	$list_teacher = $teacher_each_arr;
        	$teacher_each_arr['sum'] = $j_teacher+1;
        	$this->assign("list_teacher", $list_teacher);
        	$this->assign("teacher", $teacher_each_arr);
        	//------------------------------------------
        	$project_name = $this->ProjectModel->get_All_Project_Name();   	
        	$this->assign("cur_project_name", $project_name[$list['PID']]);
        	$this->assign("college_name", $this->get_all_college[$list['college_id']]);
        	$this->assign('id', $id);
        	//------------项目主持人-------------
        	$this->assign('manager_info', $this->get_cur_manager_info);
			$this->display();

		}
	}




//==================================================================
//以下部分为更新项目材料
//==================================================================
	/**
	*更新我的项目里的基本信息
	*/
	public function updatemymaininfoAction()
	{
		if($this->isPost())
		{
			$stuID = $_POST['stuID'];
			$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);
			$id = $_POST['id'];
			$_POST['update_time'] = date("Y-m-d H:i:s");
			if($this->ProjectMainInfoModel->save())
			{
				$this->ajaxReturn("200", "保存成功");
			}
			else
			{
				$this->ajaxReturn("300", "保存失败");
			}
		}
	}

	/**
	*更新我的项目里的申请材料
	*/
	public function updatemyapplicationAction()
	{
		if($this->isPost())
		{
			if(FORM_CLOSE === true)
			{
				$this->ajaxReturn("300", "表单填写未启用，请上传附件");
			}
			$stuID = $_POST['stuID'];
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];
			$main_info_id = $_POST['main_info_id'];

			if($this->ProjectModel->Application_Check_Auth($PID, $TIME) === false)
           	{
           		$this->ajaxReturn('300', "不是项目申请的时间，材料不可修改");
           	}
           	$project_application = $this->ProjectApplicationModel->where("main_info_id=$main_info_id")->find();
			if(!empty($project_application))
				$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);
			if(empty($project_application))
			{
				$_POST['create_time'] = date("Y-m-d H:i:s");
				if($this->ProjectApplicationModel->add())
				{
					$this->ajaxReturn("200", "保存成功");
				}
				else
				{
					$this->ajaxReturn("300", "保存失败");
				}
			}
			else
			{
				$_POST['update_time'] = date("Y-m-d H:i:s");
				if($this->ProjectApplicationModel->where("main_info_id = $main_info_id")->save())
				{
					$this->ajaxReturn("200", "保存成功");
				}
				else
				{
					$this->ajaxReturn("300", "保存失败");
				}
			}
		}
	}

	/**
	*更新我的项目里的中期检查材料
	*/
	public function updatemymiddlecheckAction()
	{
		if($this->isPost())
		{
			if(FORM_CLOSE === true)
			{
				$this->ajaxReturn("300", "表单填写未启用，请上传附件");
			}
			$stuID = $_POST['stuID'];
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];
			$main_info_id = $_POST['main_info_id'];
			if($this->ProjectModel->Middle_Check_Check_Auth($PID, $TIME) === false)
           	{
           		$this->ajaxReturn('300', "不是项目中期检查的时间，材料不可修改");
           	}

			$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);
			$project_middle_check = $this->ProjectMiddleCheckModel->where("main_info_id=$main_info_id")->find();
			if(empty($project_middle_check))
			{
				$_POST['create_time'] = date("Y-m-d H:i:s");
				if($this->ProjectMiddleCheckModel->add())
				{
					$this->ajaxReturn("200", "保存成功");
				}
				else
				{
					$this->ajaxReturn("300", "保存失败");
				}
			}
			else
			{
				$_POST['update_time'] = date("Y-m-d H:i:s");
				if($this->ProjectMiddleCheckModel->where("main_info_id = $main_info_id")->save())
				{
					$this->ajaxReturn("200", "保存成功");
				}
				else
				{
					$this->ajaxReturn("300", "保存失败");
				}
			}	
		}
	}

	/**
	*更新我的项目里的结题申请
	*/
	public function updatemyfinalapplicationAction()
	{
		if($this->isPost())
		{
			if(FORM_CLOSE === true)
			{
				$this->ajaxReturn("300", "表单填写未启用，请上传附件");
			}
			$stuID = $_POST['stuID'];
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];

			if($this->ProjectModel->Final_Check_Check_Auth($PID, $TIME) === false)
           	{
           		$this->ajaxReturn('300', "不是项目结题评审的时间，材料不可修改");
           	}

			$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);
			$_POST['update_time'] = date("Y-m-d H:i:s");

			$main_info_id = $_POST['id'];
			if($this->ProjectFinalApplicationModel->where("main_info_id = $main_info_id")->save())
			{
				$this->ajaxReturn("200", "保存成功");
			}
			else
			{
				$this->ajaxReturn("300", "保存失败");
			}
		}
	}

	/**
	*更新我的项目里的结题总结
	*/
	public function updatemyfinalcheckAction()
	{
		if($this->isPost())
		{
			if(FORM_CLOSE === true)
			{
				$this->ajaxReturn("300", "表单填写未启用，请上传附件");
			}
			$stuID = $_POST['stuID'];
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];

			if($this->ProjectModel->Final_Check_Check_Auth($PID, $TIME) === false)
           	{
           		$this->ajaxReturn('300', "不是项目结题评审的时间，材料不可修改");
           	}

			$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);
			$_POST['update_time'] = date("Y-m-d H:i:s");

			$main_info_id = $_POST['id'];
			if($this->ProjectFinalCheckModel->where("main_info_id = $main_info_id")->save())
			{
				$this->ajaxReturn("200", "保存成功");
			}
			else
			{
				$this->ajaxReturn("300", "保存失败");
			}
		}
	}
//==================================================================
//以上部分为更新项目材料
//==================================================================

//==================================================================
//以下部分为获奖记录相关操作
//==================================================================
	/**
	*添加一条获奖记录
	*/
	public function addmyawardsAction()
	{
		$main_info_id = $this->request("main_info_id");
		if($this->isPost())
		{
			$_POST['stuID'] = $this->stuID;
			$_POST['create_time'] = date('Y-m-d H:i:s');
			$this->uploadFile();
			if($this->ProjectAwardsModel->add())
			{
				$this->ajaxReturn("200", "新增成功", "", "closeCurrent");
			}
			else
			{
				$this->ajaxReturn("300", "新增失败");
			}
		}
		$this->assign("main_info_id", $main_info_id);
		$this->display();
	}

	/**
	 * 上传文件函数，addmyawardsAction里调用
	 */
	protected function uploadFile()
	{
		$uploadObj = new Upload();
	    $uploadDir = getUploadAddr();//PUB_DIR.'share/upload/'下
	    $uploadObj->allowTypes = array('image/gif','image/jpg','image/jpeg', 'image/pjpeg','image/bmp','image/x-png','image/png');
	   
	    if(!empty($_FILES['address']['tmp_name']))
	    {
	         $file_info = $uploadObj->uploadOne($_FILES['address'], $uploadDir.getCfgVar('cfg_awards_dir'));
	         if($file_info !== false)
	         {
	             $_POST['address'] = getCfgVar('cfg_awards_dir').$file_info[0]['savename'];

	         }else{
	             $this->ajaxReturn(300, $uploadObj->getErrorMsg());
	         }
	    }
	    else
	    {
	    	$this->ajaxReturn("300", "请选择图片");
	    }
	}

	/**
	*删除一条获奖记录
	*/
	public function deletemyawardsAction()
	{
		$id = $this->request("id");
		if(!empty($id) && $this->ProjectAwardsModel->where("id IN($id)")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
		
	}
//==================================================================
//以上部分为获奖记录操作
//==================================================================

//==================================================================
//以下部分为预览项目材料
//==================================================================
	/**
	*老师预览项目详细
	*/
	public function viewdetailsAction()
	{
		$id = (int)$this->request('main_info_id');
		
		if($column = (int)$this->request('column'))
		{
			switch($column)
			{
				case 1:
					redirect('./');
		       
		        case 2:
					$list = $this->ProjectApplicationModel->where("main_info_id=$id")->find();
					$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);

					$list_tran['feasibility'] = html_entity_decode($list['feasibility']);
					$list_tran['background'] = html_entity_decode($list['background']);
					$list_tran['content'] = html_entity_decode($list['content']);
					$list_tran['value'] = html_entity_decode($list['value']);
					$list_tran['plan'] = html_entity_decode($list['plan']);

					$this->assign('list', $list);
					$this->assign('list_tran', $list_tran);
					$this->assign("cur_role", $this->get_cur_role_ID);
					$this->display('project/viewapplication');
		            break;

		        case 3:
					$list = $this->ProjectMiddleCheckModel->where("main_info_id=$id")->find();
					$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
		           	
		           	$list_tran['member'] = html_entity_decode($list['member']);
					$list_tran['background'] = html_entity_decode($list['background']);
					$list_tran['content'] = html_entity_decode($list['content']);
					$list_tran['next'] = html_entity_decode($list['next']);
					
					$this->assign('list', $list);
					$this->assign('list_tran', $list_tran);
					$this->assign("cur_role", $this->get_cur_role_ID);
		            $this->display('project/viewmiddlecheck');
		            break;

		        case 4:
					$list = $this->ProjectFinalApplicationModel->where("main_info_id=$id")->find();
					$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
		           
		            $list_tran['plan'] = html_entity_decode($list['plan']);
					$list_tran['real'] = html_entity_decode($list['real']);
					$list_tran['result'] = html_entity_decode($list['result']);
					$list_tran['application'] = html_entity_decode($list['application']);
					
					$this->assign('list', $list);
					$this->assign('list_tran', $list_tran);
					$this->assign("cur_role", $this->get_cur_role_ID);
		            $this->display('project/viewfinalapplication');
		            break;

		        case 5:
					$list = $this->ProjectFinalCheckModel->where("main_info_id=$id")->find();
					$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
		            
		            $list_tran['progress'] = html_entity_decode($list['progress']);
					$list_tran['background'] = html_entity_decode($list['background']);
					$list_tran['content'] = html_entity_decode($list['content']);
					$list_tran['result'] = html_entity_decode($list['result']);
					
					$this->assign('list', $list);
					$this->assign('list_tran', $list_tran);
					
					$this->assign("cur_role", $this->get_cur_role_ID);
		            $this->display('project/viewfinalcheck');
		            break;

		        case 6:
					$list = $this->ProjectAwardsModel->where("main_info_id=$id")->order("create_time DESC")->select();
					foreach ($list as $v) 
					{
						$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $v['stuID']);
					}
					
		            
		            $this->assign('list', $list);
		            $this->assign("main_info_id", $id);
		            $this->display('project/viewawards');
		            break;

		        default:
		        	redirect('./');
			}
		}
		else
		{
			$list = $this->ProjectMainInfoModel->where("id=$id")->find();
			$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $list['stuID']);
        	$this->assign('list', $list);
        	
        	//处理成员与指导老师的字符串
        	$member_str = $list['member'];
        	$member_arr = explode("*", $member_str);
        	for($i = 0; $i < count($member_arr) - 1; $i++)
        	{
        		$member_each_arr[$i] = explode("|", $member_arr[$i]);
        		$member_each_arr[$i][3] = $this->get_all_college[$member_each_arr[$i][3]];//字符串的第四个表示学院
        	}

        	$teacher_str = $list['teacher'];
        	$teacher_arr = explode("*", $teacher_str);
        	for($i = 0; $i < count($teacher_arr) - 1; $i++)
        	{
        		$teacher_each_arr[$i] = explode("|", $teacher_arr[$i]);
        		$teacher_each_arr[$i][2] = $this->get_all_college[$teacher_each_arr[$i][2]];//字符串的第三个表示学院
        	}

        	//------------成员-----------------------
        	$j_menber = count($member_each_arr);
        	$list_member = $member_each_arr;
        	$member_each_arr['sum'] = $j_menber+1;
        	$this->assign("list_member", $list_member);
        	$this->assign("member", $member_each_arr);
        	//----------老师----------------------
        	$j_teacher = count($teacher_each_arr);
        	$list_teacher = $teacher_each_arr;
        	$teacher_each_arr['sum'] = $j_teacher+1;
        	$this->assign("list_teacher", $list_teacher);
        	$this->assign("teacher", $teacher_each_arr);
        	//------------------------------------------
        	$project_name = $this->ProjectModel->get_All_Project_Name();   	
        	$this->assign("cur_project_name", $project_name[$list['PID']]);
        	$this->assign("college_name", $this->get_all_college[$list['college_id']]);
        	$this->assign('id', $id);
        	//------------项目主持人-------------
        	$temp = $list['stuID'];
        	$get_project_manager_info = $this->ProjectManagerModel->field('username, realname, telephone, sex, birthday, polical_status, education, specialty, admit_time')->where("username = '$temp'")->find();
        	$this->assign('manager_info', $get_project_manager_info);
			$this->display();
		}
	}
//==================================================================
//以上部分为预览项目材料
//==================================================================
    
//==================================================================
//以下部分为导出EXCEL
//==================================================================
	public function exportAction()
	{
		$TIME = $this->request('TIME');
		$PID = $this->request('PID');
		$sql = "PID = '$PID' and TIME = '$TIME'";
		$data[0] = array('项目编号', '项目名称', '类型', '单位', '主持人', '指导老师', '成员', '参与人数', '联系电话', '邮箱');

		if ($this->get_cur_role_ID == 'host_student' || $this->get_cur_role_ID == 'college_manager' || $this->get_cur_role_ID == 'counselor') 
		{
			$college_id = $this->get_cur_manager_info['college_id'];
			$all_stuID= model('manager')->field('username')->where("college_id = $college_id")->select();//所有注册时为本学院的uid
		
			//将数组形式的$all_uid转换为以逗号隔开的字符串形式,其中最后一个没有逗号
			$all_stuID_str = "";
			foreach ($all_stuID as $v) 
			{
				$all_stuID_str .= "'" . $v['username'] . "'". ',';
			}
			
			$all_stuID_str = substr($all_stuID_str,0,strlen($all_stuID_str)-1);

			$sql .= " and stuID IN($all_stuID_str)";
		}
		$list = $this->ProjectMainInfoModel->field('project_id, title, type, college_id, stuID, teacher, member')->where($sql)->order('project_id ASC')->select();
		$college = $this->get_all_college;
		$realname = $this->get_all_realname;
		$email = $this->ProjectModel->get_All_Email();
		if(is_array($list))
		{
			foreach($list as &$v)
			{	
				$v['college_id'] = $college[$v["college_id"]];
				$stuID = $v['stuID'];
				$v['stuID'] = $realname[$v["stuID"]];

				//处理成员
				$all_member_str = $v['member'];
	        	$all_member_arr = explode("*", $all_member_str);
	        	$each_member_str = "";
	        	$v['totle_number'] = count($all_member_arr);//参与人数
	        	for($i = 0; $i < count($all_member_arr) - 1; $i++)
	        	{
	        		$each_member_arr[$i] = explode("|", $all_member_arr[$i]);
	        		$each_member_str .= $each_member_arr[$i][1] . "	";
	        	}
	        	$v['member'] = $each_member_str;
				
	        	//处理指导老师
	        	$all_teacher_str = $v['teacher'];
	        	$all_teacher_arr = explode("*", $all_teacher_str);
	        	$each_teacher_str = "";
	        	for($i = 0; $i < count($all_teacher_arr) - 1; $i++)
	        	{
	        		$each_teacher_arr[$i] = explode("|", $all_teacher_arr[$i]);
	        		$each_teacher_str .= $each_teacher_arr[$i][0] . "	";//若改变姓名在字符串中的顺序需要修改姓名在数组的序号
	        	}
	        	$v['teacher'] = $each_teacher_str;

	        	//联系电话
	        	$v['telephone'] = $this->get_all_telephone[$stuID];
	        	$v['email'] = $email[$stuID];
			}

			$data = array_merge($data, $list);
		}
		$xls = new Excel('UTF-8', false, '科研项目');
		$xls->addArray($data);
		$xls->generateXML('project_'.date('YmdHis'));
	}
//==================================================================
//以上部分为导出EXCEL
//==================================================================

//==================================================================
//以下部分为添加、修改、删除项目大类与类型
//==================================================================
	public function viewprojectnameAction()
	{
		$page = $this->page($this->ProjectNameModel->where(true)->count(), PID, asc);
		$list = $this->ProjectNameModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();

		
		$this->assign("project_name", $this->ProjectModel->get_All_Project_Name());
		$this->assign("list", $list);
		$this->assign("page", $page);
		$this->display();
	}

	/**
	 * 添加项目大类与名称
	 */
	public function addprojectnameAction()
	{
		if($this->isPost())
		{
			if(empty($_POST['PID']) || empty($_POST['PName']))
			{
				$this->ajaxReturn(300, "请填写必填项！");
			}
			$PID = $_POST['PID'];

			$exist_PID = $this->ProjectNameModel->where("PID = '$PID'")->select();
			if(!empty($exist_PID))
			{
				$this->ajaxReturn(300, "该项目代号已经存在！");
			}
			if($this->ProjectNameModel->add())
			{
				$this->ajaxReturn(200, "添加成功", "", "closeCurrent");
			}
			else
			{
				$this->ajaxReturn(300, "添加失败！");
			}
		}
		$this->display();
	}

	/**
	 * 新增项目批次
	 */
	public function addprojecttimeAction()
	{
		$id = $this->request('id');
		$project_name = $this->ProjectNameModel->where("id = '$id'")->find();

		if($this->isPost())
		{
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];
			if($this->ProjectNameModel->where("PID = '$PID' and TIME = '$TIME'")->find())
			{
				$this->ajaxReturn(300, "该项目的该批次已经存在！");
			}
			//只存在项目代号还未添加批次的则在该记录上更新，不存在一个项目有多个批次未添加的情况
			if($this->ProjectNameModel->where("PID = '$PID' and TIME = ''")->find())
			{
				if($this->ProjectNameModel->where("PID = '$PID' and TIME = ''")->save(array("TIME" => $_POST['TIME'])))
				{
					$this->ajaxReturn(200, "添加成功", '', 'closeCurrent');
				}
				else
				{
					$this->ajaxReturn(300, "添加失败！");
				}
			}
			//没有该项目批次为空的记录则新增
			else
			{
				if($this->ProjectNameModel->add(array("PID" => $_POST['PID'], "PName" => $project_name['PName'], "TIME" => $_POST['TIME'])))
				{
					$this->ajaxReturn(200, "添加成功", '', 'closeCurrent');
				}
				else
				{
					$this->ajaxReturn(300, "添加失败！");
				}
			}


		}

		$this->assign('id', $id);
		$this->assign('PID', $project_name['PID']);
		$this->assign('PName', $project_name['PName']);
		$this->display();
	}

	/**
	 * 新增项目类型
	 */
	public function addprojecttypeAction()
	{
		$id = $this->request('id');
		$project_name = $this->ProjectNameModel->where("id = '$id'")->find();
		if($project_name['TIME'] == '')
		{
			$this->ajaxReturn(300, "当前所选还未有项目批次！");
		}
		if($this->isPost())
		{
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];
			$PName = $_POST['PName'];
			$type = $_POST['type'];
			if($type == '')
			{
				$this->ajaxReturn(300, "请点击“新增项目类型”按钮新增项目或者取消");
			}
			//判断新增的类型中是否有重复的
			if(count($type) != count(array_unique($type)))
			{
				$this->ajaxReturn(300, "当前填写的项目类型存在重复，请修改！");
			}
			//判断数据库中是否存在改类型
			foreach ($type as $v) 
			{
				if($this->ProjectNameModel->where("PID = '$PID' and TIME = '$TIME' and PType = '$v'")->find())
				{
					$this->ajaxReturn(300, "已存在改类型:$v, 请修改");
				}
			}
			try
			{
				$this->ProjectNameModel->startTrans();
				//该项目该批次有空白的类型则删除，然后根据新增的类型数量批量添加
				$exist_empty_type = $this->ProjectNameModel->where("PID = '$PID' and TIME = '$TIME' and PType = ''")->find();
				if(!empty($exist_empty_type))
				{
					if(!$this->ProjectNameModel->where("PID = '$PID' and TIME = '$TIME' and PType = ''")->delete()) throw new Exception("删除出错", 1);
				}
				foreach ($type as $v) 
				{
					if(!$this->ProjectNameModel->add(array('PID' => $PID, 'PName' => $PName, 'PType' => $v, 'TIME' => $TIME))) throw new Exception("删除出错", 1);
				}
				
				$this->ProjectNameModel->commit();
			}
			catch(Exception $e)
			{
				$this->ProjectNameModel->rollback();
				$this->ajaxReturn(300, "新增失败！");
			}
			$this->ajaxReturn(200, "新增成功！", '', 'closeCurrent');
			
		}
		$this->assign('id', $id);
		$this->assign('PID', $project_name['PID']);
		$this->assign('TIME', $project_name['TIME']);
		$this->assign('PName', $project_name['PName']);
		$this->display();
	}

	public function updateprojectnameAction()
	{
		$PID = $this->request('PID');
		$PType = $this->request('PType');
		$TIME = $this->request('TIME');
		if($this->isPost())
		{
			$old_PID = $_POST['old_PID'];
			$old_type = $_POST['old_PType'];
			$old_TIME = $_POST['old_TIME'];
			$exist_project = $this->ProjectMainInfoModel->where("PID = '$old_PID'and type = '$old_type' and TIME = '$old_TIME'")->select();
			if(!empty($exist_project))
			{
				$this->ajaxReturn(300, "该项目已有学生参加不能修改项目信息！");
			}
			$old_PType = $_POST['old_PType'];
			$data = array("PID" => $_POST['PID'],
							"PName" => $_POST['PName'],
							"PType" => $_POST['PType'],
							"TIME" => $_POST['TIME']);
			if($this->ProjectNameModel->where("PID = '$old_PID' and PType = '$old_PType' and TIME = '$old_TIME'")->save($data))
			{
				$this->ajaxReturn(200, "修改成功", "", "closeCurrent");
			}
			else
			{
				$this->ajaxReturn(300, "修改失败！");
			}
		}
		$list = $this->ProjectNameModel->where("PID = '$PID' and PType = '$PType' and TIME = '$TIME'")->find();

		$this->assign('list', $list);
		$this->display();
	}

	/**
	 * 删除项目大类
	 */
	public function deleteprojectnameAction()
	{
		$PID = $this->request('PID');
		$PType = $this->request('PType');
		$TIME = $this->request('TIME');
		if(!empty($PID))
		{
			$exist_project = $this->ProjectMainInfoModel->where("PID = '$PID' and type = '$PType' and TIME = '$TIME'")->find();
			if(!empty($exist_project))
			{
				$this->ajaxReturn(300, "该项目已有学生参加不能删除！");
			}
			if($this->ProjectNameModel->where("PID = '$PID' and PType = '$PType' and TIME = '$TIME'")->delete())
			{
				$this->ajaxReturn(200, '删除成功');
			}
			else
			{
				$this->ajaxReturn(300, '删除失败');
			}
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
		$this->display();
	}
//==================================================================
//以上部分为添加、修改、删除项目大类与类型
//==================================================================

//==================================================================
//以下部分为时间管理
//==================================================================
	/**
	 * 时间设置
	 */
	public function timesetAction()
	{
		$id = $this->request('id');
		$project_name = $this->ProjectNameModel->where("id = '$id'")->find();
		$PID = $project_name['PID'];
		$TIME = $project_name['TIME'];
		if($TIME == '')
		{
			$this->ajaxReturn(300, "当前所选没有项目批次！");
		}
		if($this->isPost())
		{
			$PID = $_POST['PID'];
			$TIME = $_POST['TIME'];
			if(!$this->ProjectTimeSetModel->where("PID = '$PID' and TIME = '$TIME'")->find())
			{
				if(!$this->ProjectTimeSetModel->add())
				{
					$this->ajaxReturn(300, "保存失败");
				}
				else
				{
					$this->ajaxReturn(200, "保存成功",'' , 'closeCurrent');
				}
			}
			else
			{
				if($this->ProjectTimeSetModel->where("PID = '$PID' and TIME = '$TIME'")->save())
				{
					$this->ajaxReturn(200, "保存成功",'' , 'closeCurrent');
				}
				else
				{
					$this->ajaxReturn(300, "保存失败");
				}
			}
		}
		$list = $this->ProjectTimeSetModel->where("PID = '$PID' and TIME = '$TIME'")->find();
		$this->assign('id', $id);
		$this->assign('list', $list);
		$this->assign('PID', $PID);
		$this->assign('TIME', $TIME);
		$this->assign('PName', $project_name['PName']);
		$this->display();
	}

	/**
	 * 时间设置首页
	 */
	public function viewtimesetAction()
	{
		$page = $this->page($this->ProjectTimeSetModel->where(true)->count());
		$list = $this->ProjectTimeSetModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();

		$this->assign("project_name", $this->ProjectModel->get_All_Project_Name());
		$this->assign("list", $list);
		$this->assign("page", $page);
		$this->display();
	}

	/**
	 * 新增时间
	 */
	public function addtimesetAction()
	{
		if($this->isPost())
		{
			if($this->ProjectTimeSetModel->where("PID = "."'".$_POST['PID']."'"." and TIME = "."'".$_POST['TIME']."'"."")->find())
			{
				$this->ajaxReturn(300, "该项目该批次时间已经存在，请选中该项目该批次点击修改");
			}
			else
			{
				if(!$this->ProjectTimeSetModel->add())
				{
					$this->ajaxReturn(300, "保存失败");
				}
				else
				{
					$this->ajaxReturn(200, "保存成功",'' , 'closeCurrent');
				}
			}
		}
		$this->assign("project_name", $this->ProjectModel->get_All_Project_Name());
		$this->display();
	}


	/**
	 * 新增项目时间里的级联获取批次
	 */
	public function getprojecttimeintimesetAction()
	{
		$PID = $this->request('PID');
		if($PID == '') exit('[["", "--请选择--"]]');
		$project_TIME = $this->ProjectModel->get_Cur_Project_TIME($PID);
		
		$text = '[["", "--请选择--"]'; 
	    foreach ($project_TIME as $v) 
	    { 
	    	$text .= ',["' . $v . '", "' . $v . '"]';
	    } 
	    $text .= ']'; 
	    exit($text); 
	}

	/**
	 * 修改时间
	 */
	public function updatetimesetAction()
	{
		$id = $this->request('id');
		if($this->isPost())
		{
			if($this->ProjectTimeSetModel->where("id = '$id'")->save())
			{
				$this->ajaxReturn(200, "保存成功",'' , 'closeCurrent');
			}
			else
			{
				$this->ajaxReturn(300, "保存失败");
			}
		}
		$list = $this->ProjectTimeSetModel->where("id = '$id'")->find();
		$project_name = $this->ProjectModel->get_All_Project_Name();
		$this->assign('id', $id);
		$this->assign('list', $list);
		$this->assign('TIME', $list['TIME']);
		$this->assign('PName', $project_name[$list['PID']]);
		$this->display();
	}


//==================================================================
//以上部分为时间管理
//==================================================================

//==================================================================
//以下部分为审核材料
//==================================================================
	//审核申请书application
	public function checkapplicationAction()
	{
		if(FORM_CLOSE === true)
		{
				$this->ajaxReturn("300", "在线审核功能未开启，请查看学生提交的电子附件");
		}
		$main_info_id = $this->request('main_info_id');
		$stuID = $this->request('stuID');
		$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);

		if($this->get_cur_role_ID == 'college_manager')
		{
			$data = array("college_check_ID" => $this->stuID,
						"college_check_result" => $_POST['college_check_result'],
						"college_check_time" => date("Y-m-d H:i:s"));
		}
		elseif ($this->get_cur_role_ID == 'school_manager') 
		{
			$data = array("school_check_ID" => $this->stuID,
						"school_check_result" => $_POST['school_check_result'],
						"school_check_time" => date("Y-m-d H:i:s"));
		}
		else
		{
			$this->ajaxReturn(300, '你没有权限审核！');
		}

		if($this->ProjectApplicationModel->where("main_info_id = '$main_info_id'")->save($data))
		{
			$this->ajaxReturn(200, "审核成功");
		}
		else
		{
			$this->ajaxReturn(300, "审核失败");
		}
	}

	//审核中期检查
	public function checkmiddlecheckAction()
	{
		if(FORM_CLOSE === true)
		{
			$this->ajaxReturn("300", "在线审核功能未开启，请查看学生提交的电子附件");
		}
		$main_info_id = $this->request('main_info_id');
		$stuID = $this->request('stuID');
		//一层检验
		$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);

		//二层检验
		if($this->get_cur_role_ID == 'college_manager')
		{
			$data = array("college_check_ID" => $this->stuID,
						"college_check_result" => $_POST['college_check_result'],
						"college_check_time" => date("Y-m-d H:i:s"));
		}
		elseif ($this->get_cur_role_ID == 'school_manager') 
		{
			$data = array("school_check_ID" => $this->stuID,
						"school_check_result" => $_POST['school_check_result'],
						"school_check_time" => date("Y-m-d H:i:s"));
		}
		else
		{
			$this->ajaxReturn(300, '你没有权限审核！');
		}

		//三层检验：数据库action权限的分配
		if($this->ProjectMiddleCheckModel->where("main_info_id = '$main_info_id'")->save($data))
		{
			$this->ajaxReturn(200, "审核成功");
		}
		else
		{
			$this->ajaxReturn(300, "审核失败");
		}
	}

	//审核结题申请
	public function checkfinalapplicationAction()
	{
		if(FORM_CLOSE === true)
		{
			$this->ajaxReturn("300", "在线审核功能未开启，请查看学生提交的电子附件");
		}
		$main_info_id = $this->request('main_info_id');
		$stuID = $this->request('stuID');
		$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);

		if($this->get_cur_role_ID == 'college_manager')
		{
			$data = array("college_check_ID" => $this->stuID,
						"college_check_result" => $_POST['college_check_result'],
						"college_check_time" => date("Y-m-d H:i:s"));
		}
		elseif ($this->get_cur_role_ID == 'school_manager') 
		{
			$data = array("school_check_ID" => $this->stuID,
						"school_check_result" => $_POST['school_check_result'],
						"school_check_time" => date("Y-m-d H:i:s"));
		}
		else
		{
			$this->ajaxReturn(300, '你没有权限审核！');
		}

		if($this->ProjectFinalApplicationModel->where("main_info_id = '$main_info_id'")->save($data))
		{
			$this->ajaxReturn(200, "审核成功");
		}
		else
		{
			$this->ajaxReturn(300, "审核失败");
		}

	}

	//审核结题总结
	public function checkfinalcheckAction()
	{
		if(FORM_CLOSE === true)
		{
			$this->ajaxReturn("300", "在线审核功能未开启，请查看学生提交的电子附件");
		}
		$main_info_id = $this->request('main_info_id');
		$stuID = $this->request('stuID');
		$this->ProjectModel->host_student_check_auth($this->get_cur_role_ID, $stuID);

		if($this->get_cur_role_ID == 'college_manager')
		{
			$data = array("college_check_ID" => $this->stuID,
						"college_check_result" => $_POST['college_check_result'],
						"college_check_time" => date("Y-m-d H:i:s"));
		}
		elseif ($this->get_cur_role_ID == 'school_manager') 
		{
			$data = array("school_check_ID" => $this->stuID,
						"school_check_result" => $_POST['school_check_result'],
						"school_check_time" => date("Y-m-d H:i:s"));
		}
		else
		{
			$this->ajaxReturn(300, '你没有权限审核！');
		}

		if($this->ProjectFinalCheckModel->where("main_info_id = '$main_info_id'")->save($data))
		{
			$this->ajaxReturn(200, "审核成功");
		}
		else
		{
			$this->ajaxReturn(300, "审核失败");
		}
	}
//==================================================================
//以上部分为审核材料
//==================================================================

//==================================================================
//以下部分为全校统计
//==================================================================
	public function statisticsAction()
	{
		$PID = $this->request("PID");
		$TIME = $this->request("TIME");

		$sql = "PID = '$PID' and TIME = $TIME";
		if($this->isPost())
		{

			if($_POST['college_id'] !="")
			{
				$sql .= " and college_id ="."'".$_POST['college_id']."'";
			}
		}
		
		$page = $this->page($this->ProjectMainInfoModel->where($sql)->count('distinct college_id'),'college_id',asc);//college_id为排序字段，asc为排序方式
		$list_all = $this->ProjectMainInfoModel->field('type, college_id, member')->where($sql)->order($page['orderFieldStr'])->select();	
		$list_type = $this->ProjectMainInfoModel->field('distinct type')->where($sql)->select();
		
		$college_name = $this->ProjectModel->get_All_College();

		foreach ($list_all as $v)
		{
			$list[$v[college_id]]['college_id'] = $v[college_id];//单位编号
			$list[$v[college_id]]['college_name'] = $college_name[$v[college_id]];//单位名称

			$member_str = $v['member'];
			$member_count = substr_count($member_str, "*") + 1;//包括主持人
			$list[$v[college_id]]['totle_number'] += $member_count;//参与总人数
			$list[$v[college_id]]['project_count'] += 1;//申报项目总数

			$list[$v[college_id]][$v['type']] += 1;//不同类型的归类
			
		}

		$this->assign('page', $page);
		$this->assign('list_all', $list_all);
		$this->assign('list_type', $list_type);
		$this->assign('PID', $PID);
		$this->assign('TIME', $TIME);
		$this->assign('list', @array_values($list));//去除外层索引
		$this->assign('college', $this->get_all_college);
		$this->display();
	}

//==================================================================
//以上部分为全校统计
//==================================================================

}
?>