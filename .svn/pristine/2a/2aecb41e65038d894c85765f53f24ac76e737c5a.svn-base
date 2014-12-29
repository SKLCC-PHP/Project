<?php

/**
 * 表单填写时共用项目model
 * 
 * @author iat
 * @since 2014-02-27
 */

class ProjectModel extends Model {
	private $curModel = null;
	private $uid;
	private $get_cur_manager_info;
	private $get_all_role_ID;
	private $get_all_college;
	private $get_all_realname;
	private $get_cur_project_title;
	private $get_all_project_ID;
	private $getUserprogram;

	public function __construct()
	{
		$this->uid = (int)$_SESSION[SESSION_USER_NAME]['uid'];
		$this->stuID = $_SESSION[SESSION_USER_NAME]['username'];
		$this->get_cur_manager_info = $this->get_Cur_Manager_Info();
	}	
	
	/**
	*获取当前用户的manager所有信息
	*/
	public function get_Cur_Manager_Info()
	{
		return model('manager')->field('uid, username, realname, college_id, role_id, telephone, email, sex, specialty, polical_status, birthday, admit_time, education')->where("uid = $this->uid")->find();
	}


	/**
	 *获取role_ID,与id相匹对用于权限的管理
	 */
	public function get_All_Role_ID()
	{
		
		if($role_info = model('role')->field('role_ID,id')->select())
		{
			foreach ($role_info as $v)
			{
				$data[$v['id']] = $v['role_ID'];
			}
		}
		return $data;
	}

	/**
	 *获取当前用户的role_ID
	 */
	public function get_Cur_Role_ID()
	{
		$all_role_ID = $this->get_All_Role_ID();
		$cur_role_ID = $this->get_cur_manager_info["role_id"];
		return $all_role_ID["$cur_role_ID"];

	}

	/**
	 *获取所有角色
	 */
	public function get_All_Role_Name()
	{
		if($role_info = model('role')->field('name,id')->select())
		{
			foreach ($role_info as $v)
			{
				$data[$v['id']] = $v['name'];
			}
		}
		return $data;

	}

	/**
	 *从college表里获取学院名称，将学院的id号与学院的名称匹对
	*/
	public function get_All_College()
	{
		if($college = model('college')->field('college_id,college_name')->order('college_id ASC')->select())
		{
			foreach($college as $v)
			{
				$data[$v['college_id']] = $v['college_name'];
			}
		}
		return $data;
	}

	/**
	 *从college表里获取学院名称，将学院的id号与学院的名称匹对
	*/
	public function get_All_College_By_Name()
	{
		if($college = model('college')->field('college_id,college_name')->order('college_id ASC')->select())
		{
			foreach($college as $v)
			{
				$data[$v['college_name']] = $v['college_id'];
			}
		}
		return $data;
	}

	/**
	 *获取当前用户的学院
	*/
	public function get_Cur_college()
	{
		$all_college = $this->get_All_College();
		$cur_college = $this->get_cur_manager_info["college_id"];
		return $all_college["$cur_college"];
	}

	/**
	*获取当前用户学院的id
	*/
	public function get_Cur_college_ID()
	{
		$get_cur_college_id = model('project')->field('college_id')->where("uid = $this->uid")->find();
		return $get_cur_college_id['college_id'];
	}

	/**
	 *从manager表里获得所有项目主持人的真实姓名
	*/
	public function get_All_Realname()
	{
		if($realname = model('manager')->field('username,realname')->select())
		{
			foreach($realname as $v)
			{
				$data[$v['username']] = $v['realname'];
			}
		}
		return $data;
	}

	/**
	 * 根据姓名寻找学号
	 */
	public function get_StuID_By_Name($name)
	{
		$name = htmlspecialchars($name, ENT_QUOTES);
		$username = model('manager')->field('username')->where("realname like '%$name%'")->select();
		$all_stuID_str = '';
		foreach($username as $v)
		{
			$all_stuID_str .= '"' . $v['username'] . '"' . ',';
		}
		$all_stuID_str = substr($all_stuID_str,0,strlen($all_stuID_str)-1);
		return $all_stuID_str;
	}
	/**
	 * 根据uid获取真实姓名
	 */
	public function get_All_Realname_By_Uid()
	{
		if($realname = model('manager')->field('uid,realname')->select())
		{
			foreach($realname as $v)
			{
				$data[$v['uid']] = $v['realname'];
			}
		}
		return $data;
	}
	/**
	 *从manager表里获得所有项目主持人的学号
	*/
	public function get_All_Username()
	{
		if($username = model('manager')->field('uid,username')->select())
		{
			foreach($username as $v)
			{
				$data[$v['uid']] = $v['username'];
			}
		}
		return $data;
	}

	

	/**
	 *从manager表里获得所有项目主持人的联系方式
	*/
	public function get_All_Telephone()
	{
		if($telephone = model('manager')->field('username,telephone')->select())
		{
			foreach($telephone as $v)
			{
				$data[$v['username']] = $v['telephone'];
			}
		}
		return $data;
	}

	/**
	 * 获取所有邮箱
	 */
	public function get_All_Email()
	{
		if($email = model('manager')->field('username,email')->select())
		{
			foreach($email as $v)
			{
				$data[$v['username']] = $v['email'];
			}
		}
		return $data;
	}

	/**
	*获取当前用户的真实姓名
	*/
	public function get_Cur_Realname()
	{
		return $this->get_cur_manager_info["realname"];//可以直接从manager_info里获取，不需要再通过get_All_Realname了
	}

	

	/**
	*字符串分割
	*/
	public function multipleExplode($delimiters = array(), $string = '')
	{

	    $mainDelim=$delimiters[count($delimiters)-1]; // dernier

	    array_pop($delimiters);

	    foreach($delimiters as $delimiter)
	    {

	        $string= str_replace($delimiter, $mainDelim, $string);

	    }

	    $result= explode($mainDelim, $string);
	    return $result;

	}

	/**
	 *获取项目的名称
	*/
	public function get_Project_Name()
	{
		$data = model('project_name')->field('distinct PID,PName ')->select();
		for ($i=0; $i < count($data); $i++) 
		{ 
			$project_name[$data[$i]['PID']] = $data[$i]['PName'];
		}

		return $project_name;
	}

	/**
	 *UTF-8转gbk
	*/
	public function UTF_to_GBK($UTF_name)
	{
		return iconv('utf-8', 'gbk', $UTF_name);
	}

	/**
	 *获取某一PID的批次
	*/
	public function get_project_times($PID)
	{
		$times = model('project_name')->field('distinct TIME')->where("PID = $PID")->select();
		sort($times);
		return $times;
	}

	/**
	 *获取某一PID某批次各学院的项目总数
	*/
	public function get_project_totalnumber($PID,$time)
	{
		$all_project_info = model('project_main_info')->field('college_id')->where("TIME = $time and PID = $PID ")->select();
		//print_r($all_project_info);
		foreach ($all_project_info as $value) 
		{
			$all_college[$value['college_id']]++;
		}
		if(is_array($all_college))
		{
			ksort($all_college);
		}

		return $all_college;
	}

	//========================================================
	/**
	 *  获取当前用户所有项目的标题
	 */
	public function get_Cur_Main_Info_Title()
	{
		if($cur_main_info_title = model('project_main_info')->field('id, title, PID')->where("stuID = '$this->stuID'")->select())
		{
			$PName = $this->get_Project_Name();
			foreach ($cur_main_info_title as $v) 
			{
				$data[$v['id']] = "《<b>" . $v['title'] ."</b>》(" .$PName[$v['PID']] .")";
			}
		}
		return $data;
	}
	/**
	*当前用户的所有项目的全部信息
	*/
	public function get_Cur_Main_Info()
	{
		if($cur_main_info = model('project_main_info')->where("stuID = '$this->stuID'")->select())
		{
			foreach ($cur_main_info as $v) 
			{
				$data[$v['id']] = $v;
			}
		}
		return $data;
	}

	/**
	 * 根据main_info_id获取该id项目的信息
	 */
	public function get_Main_Info_By_Id($main_info_id)
	{
		return model('project_main_info')->where("id = $main_info_id")->find();
	}

	/**
	*所有用户的所有项目
	*/
	public function get_All_Main_Info()
	{
		if($all_main_info = model('project_main_info')->select())
		{
			foreach ($all_main_info as $v) 
			{
				$data[$v['id']] = $v;
			}
		}
		return $data;
	}


	/**
	*获取项目大类
	*/
	public function get_All_Project_Name()
	{
		if($all_project_name= model('project_name')->field('distinct PID, PName')->select())
		{
			foreach ($all_project_name as $v) 
			{
				$data[$v['PID']] = $v['PName'];
			}
		}
		return $data;
	}

	/**
	*获取项目种类
	*/
	public function get_Cur_Project_Type($PID)
	{
		if($cur_project_type= model('project_name')->field('PType')->where("PID = '$PID'")->select())
		{
			foreach ($cur_project_type as $v) 
			{
				$data[$v['PType']] = $v['PType'];
			}
		}
		return $data;
	}

	/**
	*获取项目批次
	*/
	public function get_Cur_Project_TIME($PID)
	{
		if($cur_project_TIME= model('project_name')->field('TIME')->where("PID = '$PID'")->select())
		{
			foreach ($cur_project_TIME as $v) 
			{
				$data[$v['TIME']] = $v['TIME'];
			}
		}
		return $data;
	}

	/**
	*获取项目种类
	*/
	public function get_Cur_Project_Type_on_TIME($PID, $TIME)
	{
		if($cur_project_type= model('project_name')->field('PType')->where("PID = '$PID' and TIME = $TIME")->select())
		{
			foreach ($cur_project_type as $v) 
			{
				$data[$v['PType']] = $v['PType'];
			}
		}
		return $data;
	}
	
	/**
	*授权check
	*/
	public function host_student_check_auth($role_ID, $list_id)
	{
		//若没有权限访问则跳转首页
		if($role_ID == "host_student" && $list_id != $this->stuID)
		{
			redirect('./');
		}
	}

	//根据PID和TIME获取项目开展的时间
	public function get_Cur_Project_Launch_Time($PID, $TIME)
	{
		$list = model("project_time_set")->where("PID = '$PID' and TIME = '$TIME'")->find();
		return $list;
	}

	//根据PID和TIME获取项目申请的时间
	public function Application_Check_Auth($PID, $TIME)
	{
		$list = model("project_time_set")->field('begin_add_time, end_add_time')->where("PID = '$PID' and TIME = '$TIME'")->find();
		if(!($list['begin_add_time'] <= date("Y-m-d") && $list['end_add_time'] >= date("Y-m-d")))
		{
			return false;
		}
	}

	//根据PID和TIME获取项目中期检查的时间
	public function Middle_Check_Check_Auth($PID, $TIME)
	{
		$list = model("project_time_set")->field('begin_middle_check_time, end_middle_check_time')->where("PID = '$PID' and TIME = '$TIME'")->find();
		if(!($list['begin_middle_check_time'] <= date("Y-m-d") && $list['end_middle_check_time'] >= date("Y-m-d")))
		{
			return false;
		}
	}

	//根据PID和TIME获取项目结题评审的时间
	public function Final_Check_Check_Auth($PID, $TIME)
	{
		$list = model("project_time_set")->field('begin_final_check_time, end_final_check_time')->where("PID = '$PID' and TIME = '$TIME'")->find();
		if(!($list['begin_final_check_time'] <= date("Y-m-d") && $list['end_final_check_time'] >= date("Y-m-d")))
		{
			return false;
		}
	}



	//新增项目时判断输入是否合法
	//********************************************************************************
	// adder  Tony
	// date   2014-06-10
	public function is_StudentID($stuID)
	{
		//if (@ereg("([0-9]{10})",$stuID,$regs) and strlen($stuID) == 10)
		$stuID_rule = "/^([0-9]{10,11})$/";
		if(preg_match($stuID_rule, $stuID))
		{
			return 1;
		}
		else
		{
			return "学号为10或11位0~9的数字！\n";
		}
	}

	// 用is_LegelString代替is_Name,is_Major,is_RearchDirection,is_Profession
	// 需要另外两个参数：Max为字符串最大长度，Info为此输入框的所需输入的类容

	// public function is_LegelString($String,$Max,$Info)
	// {
	// 	$length = strlen($String);

	// 	$legel = $this->is_LegelOperator($String);

	// 	if ($length <= $Max && $legel)
	// 	{
	// 		return 1;
	// 	}
	// 	else
	// 	{
	// 		if ($length > $Max && $legel == 1)
	// 		{
	// 			return "".$Info."的长度不能大于".$Max."！\n";
	// 		}   
	// 		elseif ($length <= $Max && $legel != 1)
	// 		{
	// 			return $legel;
	// 		}
	// 		else
	// 		{
	// 			return $legel."      ".$Info."的长度不能大于".$Max."！\n";
	// 		}
	// 	}
	// }

	public function is_Name($Name)
	{
		$length = strlen($Name);

		$legel = $this->is_LegelOperator($Name);

		if ($length <= 20 && $legel == 1)
		{
			return 1;
		}
		else
		{
			if ($length > 20 && $legel == 1)
			{
				return "姓名的长度不能大于20！\n";
			}   
			elseif ($length <= 20 && $legel != 1)
			{
				return $legel;
			}
			else
			{
				return $legel." and 姓名的长度不能大于20！\n";
			}
		}
	}

	public function is_Specialty($Specialty)
	{
		$length = strlen($Specialty);

		$legel = $this->is_LegelOperator($Specialty);

		if ($length <= 30 && $legel == 1)
		{
			return 1;
		}
		else
		{
			if ($length > 30 && $legel == 1)
			{
				return "专业名称的长度不能大于30！\n";
			}   
			elseif ($length <= 30 && $legel != 1)
			{
				return $legel;
			}
			else
			{
				return $legel." and 专业名称的长度不能大于30！\n";
			}
		}
	}

	public function is_Profession($Profession)
	{
		$length = strlen($Profession);

		$legel = $this->is_LegelOperator($Profession);

		if ($length <= 15 && $legel == 1)
		{
			return 1;
		}
		else
		{
			if ($length > 15 && $legel == 1)
			{
				return "教授职称的长度不能大于15！\n";
			}   
			elseif ($length <= 15 && $legel != 1)
			{
				return $legel;
			}
			else
			{
				return $legel." and 教授职称的长度不能大于15！\n";
			}
		}
	}

	public function is_ResearchDirection($ResearchDirection)
	{
		$length = strlen($ResearchDirection);

		$legel = $this->is_LegelOperator($ResearchDirection);

		if ($length <= 50 && $legel == 1)
		{
			return 1;
		}
		else
		{
			if ($length > 50 && $legel == 1)
			{
				return "研究方向的长度不能大于50！\n";
			}   
			elseif ($length <= 50 && $legel != 1)
			{
				return $legel;
			}
			else
			{
				return $legel." and  研究方向的长度不能大于50！\n";
			}
		}
	}

	public function is_CellPhone($CellPhone)
	{
		if (@ereg("([0-9]{11})",$CellPhone,$regs) and strlen($CellPhone) == 11)
		{
			return 1;
		}
		else
		{
			return "手机号为11位0~9的数字！\n";
		}
	}

	public function is_LegelOperator($String)//字符串带有' " / ; 为非法
	{
		$warning = "".$String."中不能带有 ' \" / ; * | 这些符号\n";

		// $result = preg_match("/'/",$String);
		$result = substr_count($String,"'");
		if ($result)
		{
			return $warning;
		}

		// $result = preg_match("/\"/",$String);
		$result = substr_count($String,"\"");
		if ($result)
		{
			return $warning;
		}

		// $result = preg_match("///",$String);
		$result = substr_count($String,"/");
		if ($result)
		{
			return $warning;
		}

		// $result = preg_match("/;/",$String);
		$result = substr_count($String,";");
		if ($result)
		{
			return $warning;
		}

		// $result = preg_match("//*/",$String);
		$result = substr_count($String,"*");
		if ($result)
		{
			return $warning;
		}

		// $result = preg_match("/|/",$String);
		$result = substr_count($String,"|");
		if ($result)
		{
			return $warning;
		}

		return 1;
	}

	public function WarningAlert_member($stuID,$Name,$CellPhone,$Specialty)
	{
		$info = "提示: \n";
		$flag = 1;

		$res = $this->is_StudentID($stuID);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		$res = $this->is_Name($Name);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		$res = $this->is_CellPhone($CellPhone);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		$res = $this->is_Specialty($Specialty);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		if ($flag == 1)
		{
			return 1;
		}
		else
		{
			return $info;
		}
	}

	public function WarningAlert_teacher($Name,$Profession,$SearchDirection)
	{
		$info = "提示: \n";
		$flag = 1;

		$res = $this->is_Name($Name);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		$res = $this->is_Profession($Profession);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		$res = $this->is_ResearchDirection($SearchDirection);
		if ($res != 1)
		{
			$info .= $res;
			$flag = 0;
		}

		if ($flag == 1)
		{
			return 1;
		}
		else
		{
			return $info;
		}
	}
	//********************************************************************************s
}