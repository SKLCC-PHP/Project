<?php
/**
 * 图表展示
 * 
 * @author Tony
 * @since 2014-05-07
 */

class ChartController extends CommonController {
	
	private $ProjectModel = null;
	private $ProjectMainInfoModel = null;
	private $pName = null;
	private $get_all_college;
	
	public function __construct()
	{
		// $this->curModel = model('project_main_info');
		// $this->curModel = model('KYJJ');
		$this->ProjectModel = model('project');
		$this->ProjectMainInfoModel = model('project_main_info');
		$this->pName = model('project_name');
		$this->get_all_college = $this->ProjectModel->get_All_College();//从KYJJmodel中调用函数
	}
	
	
	/**
	 *显示图片
	 */
	public function indexAction()
	{
		//读取数据库对字段处理//下放注释的有用
		// $list_all = $this->curModel->field('project_id, member, teacher')->where()->select();

		// // print_r($list_all);

		// foreach ($list_all as $v)
		// {
		// 	$delimiters = array(',','，','、','/',';','；');
			
		// 	$member_arr = array();
		// 	$member_arr = explode($delimiters,$v['member']);

		//  	$member_record = null;
		// 	foreach ($member_arr as $s)
		// 	{
		// 		$member_record .= "|".$s."|||*";
		// 	}

		// 	print_r($member_record);


		// 	$teacher_arr = array();
		// 	$teacher_arr = explode($delimiters,$v['teacher']);

		//  	$teacher_record = null;
		// 	foreach ($teacher_arr as $s)
		// 	{
		// 		$teacher_record .= "|".$s."|||*";
		// 	}
		// 	print_r($teacher_record);

		// 	$id = $v['project_id'];

		// 	$this->ProjectMainInfoModel->where("id = $id")->save(array("member" => $member_str));

		// 	// $mysql_command = "update".$table_name."set member = $member_record"."where project_id = $id";
		// 	// $result = mysql_query($mysql_command) or die ("数据库表格member修改失败".mysql_error());

		// 	// $mysql_command = "update".$table_name."set teacher = $teacher_record"."where project_id = $id";
		// 	// $result = mysql_query($mysql_command) or die ("数据库表格修改失败".mysql_error());
		// }


		/*$TIME = 16;
		$sql = $TIME;*/
		$TIME = $this->request('TIME');//获取批次
		// $PID = $this->request('PID');
		$PID = "KYJJ";
		$title = "第".$TIME."批";
		$sql = "TIME = $TIME";

		// $TIME = $this->request("TIME");
		// $sql = "TIME = $TIME";
		
		if ($this->isPost())
		{
			if($_POST['college_id'] != "")
			{
				$college_all_name = $this->ProjectModel->get_All_College();
				$sql .= " and college_id ="."'".$_POST['college_id']."'";
				$title .= $college_all_name[$_POST['college_id']];
			}
			else
			{
				$title .= "所有学院";
			}
			
			//$sql .= "program_id like". "'%".htmlspecialchars($_POST['program_id'],ENT_QUOTES)."%' and ";
			
			if ($_POST['project_type'] != "")
			{
				$title .= $_POST['project_type'];
				$sql .= " and type ="."'".$_POST['project_type']."'";
			}
			else
			{
				$title .= "所有项目类型";
			}

			$list_all = $this->ProjectMainInfoModel->field('type, college_id, member')->where($sql)->order($page['orderFieldStr'])->select();

			//sort by college_id
			for ($i = 0;$i < count($list_all)-1;$i++)
			{
				$min_inx = $i;
				for($j = $i+1;$j < count($list_all);$j++)
				{
					if ($list_all[$min_inx]['college_id'] > $list_all[$j]['college_id'])
					{
						$min_inx = $j;
					}
				}
				if ($min_inx != $i)
				{
					$tmp = array();
					$tmp[0] = $list_all[$i]['college_id'];
					$tmp[1] = $list_all[$i]['type'];
					$tmp[2] = $list_all[$i]['member'];
					
					$list_all[$i]['college_id'] = $list_all[$min_inx]['college_id'];
					$$list_all[$i]['type'] = $list_all[$min_inx]['type'];
					$list_all[$i]['member'] = $list_all[$min_inx]['member'];

					$list_all[$min_inx]['college_id'] = $tmp[0];
					$list_all[$min_inx]['type'] = $tmp[1];
					$list_all[$min_inx]['member'] = $tmp[2];
				}
			}

			$count = array();
			$illustration = array();
			$data = array();
			
			if ($_POST['statistics_type'] != "" and $_POST['statistics_type'] != "项目总数")
			{
				$statisticstype = "member";

				foreach ($list_all as $v)
				{
					$count[$v[college_id]]['college_id'] = $v[college_id];
					$member = $v[member];

					$delimiters = array(',','，','、','/',';','；');
					$sum = $this->ProjectModel->multipleExplode($delimiters,$member);
						
					$count[$v[college_id]]['totle_member'] += (count($sum) + 1);
					// echo count($sum);//OK
					//echo $count[$v[college_id]]['totle_member']."<br>";//OK
					if($v['type'] == '一般项目')
					{
						$count[$v[college_id]]['YBXM'] += (count($sum) + 1);
						// echo $count[$v[college_id]]['YBXM'];
						// echo "<br>";
						$type = 'YBXM';
					}
					elseif ($v['type'] == '重点项目')
					{
						$count[$v[college_id]]['ZDXM'] += (count($sum) + 1);
						$type = 'ZDXM';
					}
					elseif ($v['type'] == '重大项目预研项目')
					{
						$count[$v[college_id]]['ZDYY'] += (count($sum) + 1);
						$type = 'ZDYY';
					}
					elseif ($v['type'] == '重大项目')
					{
						$count[$v[college_id]]['ZDAXM'] += (count($sum) + 1);
						$type = 'ZDAXM';
					}
				}
				

				if ($_POST['project_type'] != "")
				{
					if ($_POST['college_id'] != "")//一院一项目人
					{
						$illustration = array();
						$data = array();
						$college_all_name = $this->ProjectModel->get_All_College();
						$illustration[0] = $college_all_name[$_POST['college_id']].$_POST['project_type'];
						$data[0] = $count[$_POST['college_id']][$type];
					}
					else//所有院一项目人
					{
						$i = 0;
						$illustration = array();
						$data = array();
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							//echo $v['totle_member']."<br>";
							$data[$i] = $v[$type];
							
							$i++;
						}
					}
				}
				else
				{
					if ($_POST['college_id'] != "")//一院所有项目人
					{
						$illustration = array("一般项目","重点项目","重大项目预研项目","重大项目");
						$data = array($count[$_POST['college_id']]['YBXM'],$count[$_POST['college_id']]['ZDXM'],$count[$_POST['college_id']]['ZDYY'],$count[$_POST['college_id']]['ZDAXM']);
					}
					else//所有院所有项目人
					{
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v['totle_member'];
							// echo "I am here";
							// echo $v['totle_number'];
							
							$i++;
						}
					}
					// $illustration = array("一般项目","重点项目","重大项目预研项目","重大项目");
					// $data = array();
				}	

				$title .= "人数";
			}
			else
			{
				$statisticstype = "project";

				if ($_POST['project_type'] != "")
				{
					foreach ($list_all as $v)
					{
						$count[$v[college_id]]['college_id'] = $v[college_id];
						if($v['type'] == '一般项目')
						{
							$count[$v[college_id]]['YBXM']++;
							$type = 'YBXM';
							// echo "1";
						}
						elseif ($v['type'] == '重点项目')
						{
							$count[$v[college_id]]['ZDXM']++;
							$type = 'ZDXM';
							// echo "2";
						}
						elseif ($v['type'] == '重大项目预研项目')
						{
							$count[$v[college_id]]['ZDYY']++;
							$type = 'ZDYY';
							// echo "3";
						}
						elseif ($v['type'] == '重大项目')
						{
							$count[$v[college_id]]['ZDAXM']++;
							$type = 'ZDAXM';
							// echo "4";
						}
					}

					if ($_POST['college_id'] != "")//一院一项目项目
					{
						$college_all_name = $this->ProjectModel->get_All_College();
						// $illustration[0] = $college_all_name[$_POST['college_id']].$_POST['project_type'];
						$illustration[0] = $_POST['project_type'];
						// $data[1] = $count[$_POST['college_id']][$_POST[$type]];
						$data[0] = $count[$_POST['college_id']][$type];
					}
					else//所有院一项目项目
					{
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							// $data[$i] = $v[$_POST[$type]];
							$data[$i] = $v[$type];
							
							$i++;
						}
					}				
				}
				else
				{
					foreach ($list_all as $v)
					{
						$count[$v[college_id]]['college_id'] = $v[college_id];
						$count[$v[college_id]]['totle_number'] += 1;
						if($v['type'] == '一般项目')
						{
							$count[$v[college_id]]['YBXM']++;
							// $type = 'YBXM';
							// echo "1";
						}
						elseif ($v['type'] == '重点项目')
						{
							$count[$v[college_id]]['ZDXM']++;
							// $type = 'ZDXM';
							// echo "2";
						}
						elseif ($v['type'] == '重大项目预研项目')
						{
							$count[$v[college_id]]['ZDYY']++;
							// $type = 'ZDYY';
							// echo "3";
						}
						elseif ($v['type'] == '重大项目')
						{
							$count[$v[college_id]]['ZDAXM']++;
							// $type = 'ZDAXM';
							// echo "4";
						}
					}

					if ($_POST['college_id'] != "")//一院所有项目项目
					{
						// echo "I am here";
						// echo $_POST['college_id'];
						// echo $count[$_POST['college_id']]['YBXM'];
						// echo $count[$_POST['college_id']]['ZDXM'];
						// echo $count[$_POST['college_id']]['ZDYY'];
						// echo $count[$_POST['college_id']]['ZDAXM'];

						$illustration = array("一般项目","重点项目","重大项目预研项目","重大项目");
						$data[0] = $count[$_POST['college_id']]['YBXM'];
						$data[1] = $count[$_POST['college_id']]['ZDXM'];
						$data[2] = $count[$_POST['college_id']]['ZDYY'];
						$data[3] = $count[$_POST['college_id']]['ZDAXM'];
						// echo "<br>"."I am here";
						// print_r($data);
					}
					else//所有院所有项目项目
					{
						// echo "I am here";
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v['totle_number'];
							
							$i++;
						}
					}
				}	

				$title .= "项目数";
			}

			if ($_POST['chart_type'] != "" and $_POST['chart_type'] != "柱状图")
			{
				$chart_type = $_POST['chart_type'];
			}
			else
			{
				$chart_type	= "柱状图";
			}

			// $i = 0;
			// foreach ($count as $v)
			// {
			// 	$data[$i] = $v['totle_number'];
			// 	$i++;

			// 	if ($_POST['college_id'] !="")
			// 	{
			// 		$illustration[$i] = $college_all_name[$v['college_id']];
			// 	}
			// }

			// echo $title;
			// echo "<br>";
			// print_r($illustration);
			// echo "<br>";
			// print_r($data);

			$str_illustration = null;
			foreach($illustration as $v)
			{
				$str_illustration .= $v.",";
			}
			$str_illustration = substr($str_illustration,0,strlen($str_illustration)-1);
			$str_data = null;
			foreach($data as $v)
			{
				$str_data .= $v.",";
			}
			$str_data = substr($str_data,0,strlen($str_data)-1);

			$i++;
		
		
			$college_name = json_encode($college_name);
			// print_r($totle_number);
		
			$str_college_id = null;
			foreach($count as $v)
			{
				$str_college_id .= $v['college_id'].",";
			}
			$str_college_id = substr($str_college_id,0,strlen($str_college_id)-1);
			$this->assign("selected_college_id",$str_college_id);
			// print_r($str_college_id);

			$i = 0;
			$column_illustration = "<chart>";
			foreach ($count as $v)
			{
				$column_illustration .= $v['college_id']."——".$illustration[$i]."<br>";
				$i++;
			}
			$column_illustration .= "</chart>";
			$tmp = "<table>"."Hello"."</table>";
			$column_illustration = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>{$tmp}";
			// exit($column_illustration);
			$flag = $this->get('flag');
			// $this->assign('collumn_illustration', url(__ACTION__.'&flag=column_illustration', true));

			if (($chart_type == "柱状图" or $chart_type == "") and $_POST['college_id'] != "")
			{
				$column_illustration = array();
				$i = 1;
				$column_illustration[0][0] = "类型号：类型名称";
				foreach($illustration as $v)
				{
					$column_illustration[$i][0] = "类".$i."：".$illustration[$i-1];
					$i++;
				}
				// print_r($column_illustration);
				// echo "I am here";
				$this->assign("column_illustration",$column_illustration);
			}
			if (($chart_type == "柱状图" or $chart_type == "") and $_POST['college_id'] == "")
			{
				$column_illustration = array();
				$tmp_column_illustration = array();
				$i = 0;
				$column_illustration[0][0] = "学院号：学院名称";
				foreach($count as $v)
				{
					$tmp_column_illustration[$i] = $v['college_id']."：".$illustration[$i];
					$i++;
				}
				$k = 1;
				for($i = 0;$i <= count($tmp_column_illustration);$i += 4)
				{
					$column_illustration[$k][0] =	$tmp_column_illustration[$i];
					$column_illustration[$k][1] =	$tmp_column_illustration[$i+1];
					$column_illustration[$k][2] =	$tmp_column_illustration[$i+2];
					$column_illustration[$k][3] =	$tmp_column_illustration[$i+3];
					$k++;
				}
				$this->assign("column_illustration",$column_illustration);
				// print_r($column_illustration);
			}

			// echo "I am here";
			// if ($_POST['project_type'] == "")
			// {
			// 	$project = "all";
			// }
			// if ($_POST['project_type'] == '一般项目')
			// {
			// 	$project = "YBXM";
			// }
			// if ($_POST['project_type'] == '重点项目')
			// {
			// 	$project = "ZDXM";
			// }
			// if ($_POST['project_type'] == '重大项目预研项目')
			// {
			// 	$project = "ZDYY";
			// }
			// if ($_POST['project_type'] == '重大项目')
			// {
			// 	$project = "ZDAXM";
			// }
			// echo $project;
			// $collegetype = $_POST['college_id'];

			// echo $collegetype;
			// $this->assign("project",$project);
			$this->assign("collegetype",$_POST['college_id']);

			$this->assign("TIME", $TIME);
			$this->assign("title",$title);
			$this->assign("illustration",$str_illustration);
			$this->assign("data",$str_data);
			$this->assign("chart",$chart_type);
			$this->assign("page",$this->page);
			$this->assign("college",$this->get_all_college);
			$this->assign("statisticstype",$statisticstype);
			$this->display();

			// $page = $this->page($this->KYJJModel->where($sql)->count('distinct college_id'),'college_id',asc);//college_id为排序字段，asc为排序方式
			// $page = $this->page($this->ProjectModel->where($sql)->count('distinct college_id'),'college_id',asc);//college_id为排序字段，asc为排序方式

		}
		else
		{
			$list_all = $this->ProjectMainInfoModel->field('type, college_id, member')->where($sql)->order($page['orderFieldStr'])->select();

			//sort by college_id
			for ($i = 0;$i < count($list_all)-1;$i++)
			{
				$min_inx = $i;
				for($j = $i+1;$j < count($list_all);$j++)
				{
					if ($list_all[$min_inx]['college_id'] > $list_all[$j]['college_id'])
					{
						$min_inx = $j;
					}
				}
				if ($min_inx != $i)
				{
					$tmp = array();
					$tmp[0] = $list_all[$i]['college_id'];
					$tmp[1] = $list_all[$i]['type'];
					$tmp[2] = $list_all[$i]['member'];
					
					$list_all[$i]['college_id'] = $list_all[$min_inx]['college_id'];
					$$list_all[$i]['type'] = $list_all[$min_inx]['type'];
					$list_all[$i]['member'] = $list_all[$min_inx]['member'];

					$list_all[$min_inx]['college_id'] = $tmp[0];
					$list_all[$min_inx]['type'] = $tmp[1];
					$list_all[$min_inx]['member'] = $tmp[2];
				}
			}

			$count = array();
			foreach ($list_all as $v)
			{
				$count[$v[college_id]]['college_id'] = $v[college_id];
				$count[$v[college_id]]['totle_number'] += 1;
				if ($v['type'] == '一般项目')
				{
					$count[$v[college_id]]['YBXM']++;
				}
				elseif ($v['type'] == '重点项目')
				{
					$count[$v[college_id]]['ZDXM']++;
				}
				elseif ($v['type'] == '重大项目预研项目')
				{
					$count[$v[college_id]]['ZDYY']++;
				}
				elseif ($v['type'] == '重大项目')
				{
					$count[$v[college_id]]['ZDAXM']++;
				}
			}

			// $college_chart = array();
			// $totle_number = array();
			// $college_percent = array();

			$college_all_name = $this->ProjectModel->get_All_College();

			$i = 0;
			$illustration = array();
			$data = array();
			foreach ($count as $v)
			{
				$illustration[$i] = $college_all_name[$v['college_id']];
				$data[$i] = $v['totle_number'];
				
				$i++;
			}

			$str_illustration = null;
			foreach($illustration as $v)
			{
				$str_illustration .= $v.",";
			}
			$str_illustration = substr($str_illustration,0,strlen($str_illustration)-1);
			$str_data = null;
			foreach($data as $v)
			{
				$str_data .= $v.",";
			}
			$str_data = substr($str_data,0,strlen($str_data)-1);

			$str_college_id = null;
			foreach($count as $v)
			{
				$str_college_id .= $v['college_id'].",";
			}
			$str_college_id = substr($str_college_id,0,strlen($str_college_id)-1);
			$this->assign("selected_college_id",$str_college_id);
			// print_r($str_college_id);

			// print_r($illustration);
			// echo "<br>";
			// print_r($data);

			// $project_type = array('一般项目','重点项目','重大项目预研项目','重大项目');
			// $statistics_type = array('项目数','人数');
			// $chart_type = array('饼状图','柱状图','折线图');
			// $selection = array("project" => $project_type,"statistics" => $statistics_type,"char" => $char_type);

			// $this->assign("selection",$selection);

			// $flag = $this->get('flag');
			  //   	if($flag == 'set'){
			  //   		$this->getSet();
			  //   	}else if($flag == 'data'){
			  //   		$this->getXMLData();
			  //   	}
					// $this->assign('illustration', url(__ACTION__.'&illustration', true));
		   	//	$this->assign('data', url(__ACTION__.'&data', true));
			if ($chart_type == "柱状图" or $chart_type == "")
			{
				$column_illustration = array();
				$tmp_column_illustration = array();
				$i = 0;
				$column_illustration[0][0] = "学院号：学院名称";
				foreach($count as $v)
				{
					$tmp_column_illustration[$i] = $v['college_id']."：".$illustration[$i];
					$i++;
				}
				$k = 1;
				for($i = 0;$i <= count($tmp_column_illustration);$i += 4)
				{
					$column_illustration[$k][0] =	$tmp_column_illustration[$i];
					$column_illustration[$k][1] =	$tmp_column_illustration[$i+1];
					$column_illustration[$k][2] =	$tmp_column_illustration[$i+2];
					$column_illustration[$k][3] =	$tmp_column_illustration[$i+3];
					$k++;
				}
				$this->assign("column_illustration",$column_illustration);
				// print_r($column_illustration);
			}

			$this->assign("collegetype","");

			// $this->assign("project","all");
			$this->assign("TIME", $TIME);
			$this->assign("page",$this->page);
			$this->assign("title","第".$TIME."批科研基金");
			$this->assign("illustration",$str_illustration);
			$this->assign("data",$str_data);
			$this->assign("chart","柱状图");
			$this->assign("statisticstype","project");
			$this->assign("college",$this->get_all_college);
			$this->display();




				
		}


		
		//json_encode 使用方法//以下注释有用

		// $string  = $_POST['member'];
		// $delimiters = array(',','，','、','/',';','；');
		// $result = $this->curModel->multipleExplode($delimiters,$string);
		// $_POST['totle_number'] = count($result) + 1;


		// $sum = 0;
		// foreach($count as $v)
		// {
		// 	$sum += $v[totle_number];
		// }		

		
		// print_r($totle_number);
		// for ($totle_number as $v)
		// {
		// 	echo $v;
		// }
		// $arr = "再见";
		// $brr = urldecode($arr);
		// $college_name = json_encode($brr);
		// $college_name = json_encode($college_name);
		// $totle_number = json_encode($totle_number);

		// section数组：下拉框显示项目
		// $college = $this->get_all_college;
		// $project_type = array('一般项目','重点项目','重大项目预研项目','重大项目');
		// $statistics_type = array('项目数','人数');
		// $chart_type = array('饼状图','柱状图','折线图');
		// $selection = array("college" => $college[college_id],"project" => $project_type,"statistics" => $statistics_type,"char" => $char_type);

		// $this->assign("selection",$selection);

		

		// $arr = array(1,2,3,4);
		// $brr = json_encode($arr);
		// echo $brr;
		// $this->assign("arr",$brr);
		// $str = array("123","abc");
		// $str = json_encode($str);
		// $this->assign("str",$str);
		
	}

//**********************************************************************************************************************
//**********************************************************************************************************************
//**********************************************************************************************************************
//**********************************************************************************************************************

	public function chartAction()
	{
		// $list_all = $this->ProjectModel->get_All_College();
		// print_r($list_all);

		$TIME = $this->request('TIME');
		$PID = $this->request('PID');
		
		$sql = "PID = "."'".$PID."'";
		$sql .= " and TIME = $TIME";
		// $list_all = $this->ProjectMainInfoModel->field('project_id, member, teacher')->where()->select();
		// print_r($list_all);

		if ($TIME >= 2000)
		{
			$title = $TIME."年";
		}
		else
		{
			$title = "第".$TIME."批";
		}
		$project_name = $this->pName->field('PName')->where("PID = '$PID' and TIME = $TIME")->select();
		// print_r($project_name);
		$title .= $project_name[0][PName];

		//把所有项目类型获得
		$list_all = $this->ProjectMainInfoModel->field('type')->where($sql)->select();

		//结果为3
		// $str = "hello*a*";
		// $s = explode("*",$str);
		// echo count($s);

		$pro_type = array();
		$num = 0;
		foreach ($list_all as $v)
		{
			$flag = 1;

			foreach($pro_type as $s)
			{
				if ($v[type] == $s)
				{
					$flag = 0;
				}
			}

			if ($flag == 1)
			{
				$pro_type[$num] = $v[type];
				$num++;
			}
		}
		$project_type = array();
		foreach ($pro_type as $v)
		{
			$project_type[$v] = $v;
		}
		$statistics_type = array('项目总数'=>'项目总数','项目人数'=>'项目人数');
		$charttype = array('饼状图'=>'饼状图','柱状图'=>'柱状图');
		// print_r($pro_type);

		if ($this->isPost())
		{
			if($_POST['college_id'] != "")
			{
				$college_all_name = $this->ProjectModel->get_All_College();
				$sql .= " and college_id ="."'".$_POST['college_id']."'";
				$title .= $college_all_name[$_POST['college_id']];
			}
			else
			{
				$title .= "所有学院";
			}
				
			if ($_POST['project_type'] != "")
			{
				$title .= $_POST['project_type'];
				$sql .= " and type ="."'".$_POST['project_type']."'";
			}
			else
			{
				$title .= "所有项目类型";
			}
			
			// print_r($sql);
			$list_all = $this->ProjectMainInfoModel->field('type,college_id,member,teacher')->where($sql)->select();

			//sort by college_id
			for ($i = 0;$i < count($list_all)-1;$i++)
			{
				$min_inx = $i;
				for($j = $i+1;$j < count($list_all);$j++)
				{
					if ($list_all[$min_inx]['college_id'] > $list_all[$j]['college_id'])
					{
						$min_inx = $j;
					}
				}
				if ($min_inx != $i)
				{
					$tmp = array();
					$tmp[0] = $list_all[$i]['college_id'];
					$tmp[1] = $list_all[$i]['type'];
					$tmp[2] = $list_all[$i]['member'];
					$tmp[3] = $list_all[$i]['teacher'];
					
					$list_all[$i]['college_id'] = $list_all[$min_inx]['college_id'];
					$list_all[$i]['type'] = $list_all[$min_inx]['type'];
					$list_all[$i]['member'] = $list_all[$min_inx]['member'];
					$list_all[$i]['teacher'] = $list_all[$min_inx]['teacher'];

					$list_all[$min_inx]['college_id'] = $tmp[0];
					$list_all[$min_inx]['type'] = $tmp[1];
					$list_all[$min_inx]['member'] = $tmp[2];
					$list_all[$min_inx]['teacher'] = $tmp[3];
				}
			}

			$count = array();
			$illustration = array();
			$data = array();
			
			if ($_POST['statistics_type'] != "" and $_POST['statistics_type'] != "项目总数")
			{
				$statisticstype = "member";

				foreach ($list_all as $v)
				{
					$count[$v[college_id]]['college_id'] = $v[college_id];
					$member = $v[member];
					$teacher = $v[teacher];

					// $delimiters = array(",","，","、","/",";","；","*");
					$delimiters = "*";
					$sum_member = explode($delimiters,$member);
					$sum_teacher = explode($delimiters,$teacher);
						
					$count[$v[college_id]]['totle_member'] += (count($sum_member) + count($sum_teacher) -2);

					for ($i = 0;$i < $num;$i++)
					{
						if ($v['type'] == $pro_type[$i])
						{
							$count[$v[college_id]][$pro_type[$i]] += (count($sum_member) + count($sum_teacher) -2);
							$type = $pro_type[$i];
						}
					}

					// if($v['type'] == '一般项目')
					// {
					// 	$count[$v[college_id]]['YBXM'] += (count($sum) + 1);
					// 	$type = 'YBXM';
					// }
					// elseif ($v['type'] == '重点项目')
					// {
					// 	$count[$v[college_id]]['ZDXM'] += (count($sum) + 1);
					// 	$type = 'ZDXM';
					// }
					// elseif ($v['type'] == '重大项目预研项目')
					// {
					// 	$count[$v[college_id]]['ZDYY'] += (count($sum) + 1);
					// 	$type = 'ZDYY';
					// }
					// elseif ($v['type'] == '重大项目')
					// {
					// 	$count[$v[college_id]]['ZDAXM'] += (count($sum) + 1);
					// 	$type = 'ZDAXM';
					// }
				}
				

				if ($_POST['project_type'] != "")
				{
					if ($_POST['college_id'] != "")//一院一项目人
					{
						$illustration = array();
						$data = array();
						$college_all_name = $this->ProjectModel->get_All_College();
						$illustration[0] = $college_all_name[$_POST['college_id']].$_POST['project_type'];
						$data[0] = $count[$_POST['college_id']][$type];
					}
					else//所有院一项目人
					{
						$i = 0;
						$illustration = array();
						$data = array();
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v[$type];
							
							$i++;
						}
					}
				}
				else
				{
					if ($_POST['college_id'] != "")//一院所有项目人
					{
						$illustration = array();
						$data = array();
						for ($i = 0;$i < $num;$i++)
						{
							$illustration[$i] = $pro_type[$i];
							$data[$i] = $count[$_POST['college_id']][$pro_type[$i]];
						}
					}
					else//所有院所有项目人
					{
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v['totle_member'];
							
							$i++;
						}
					}
				}	

				$title .= "人数";
			}
			else
			{
				$statisticstype = "project";
				// print_r($list_all);

				if ($_POST['project_type'] != "")
				{
					foreach ($list_all as $v)
					{
						$count[$v[college_id]]['college_id'] = $v[college_id];
						for ($i = 0;$i < $num;$i++)
						{
							if ($v['type'] == $pro_type[$i])
							{
								$count[$v[college_id]][$pro_type[$i]]++;
								$type = $pro_type[$i];
							}
						}

						// if($v['type'] == '一般项目')
						// {
						// 	$count[$v[college_id]]['YBXM']++;
						// 	$type = 'YBXM';
						// }
						// elseif ($v['type'] == '重点项目')
						// {
						// 	$count[$v[college_id]]['ZDXM']++;
						// 	$type = 'ZDXM';
						// }
						// elseif ($v['type'] == '重大项目预研项目')
						// {
						// 	$count[$v[college_id]]['ZDYY']++;
						// 	$type = 'ZDYY';
						// }
						// elseif ($v['type'] == '重大项目')
						// {
						// 	$count[$v[college_id]]['ZDAXM']++;
						// 	$type = 'ZDAXM';
						// }
					}
					// print_r($count);

					if ($_POST['college_id'] != "")//一院一项目项目
					{
						$college_all_name = $this->ProjectModel->get_All_College();
						$illustration[0] = $_POST['project_type'];
						$data[0] = $count[$_POST['college_id']][$type];
					}
					else//所有院一项目项目
					{
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v[$type];
							
							$i++;
						}
					}				
				}
				else
				{
					foreach ($list_all as $v)
					{
						$count[$v[college_id]]['college_id'] = $v[college_id];
						$count[$v[college_id]]['totle_number'] += 1;
						for ($i = 0;$i < $num;$i++)
						{
							if ($v['type'] == $pro_type[$i])
							{
								$count[$v[college_id]][$pro_type[$i]]++;
							}
						}

						// if($v['type'] == '一般项目')
						// {
						// 	$count[$v[college_id]]['YBXM']++;
						// }
						// elseif ($v['type'] == '重点项目')
						// {
						// 	$count[$v[college_id]]['ZDXM']++;
						// }
						// elseif ($v['type'] == '重大项目预研项目')
						// {
						// 	$count[$v[college_id]]['ZDYY']++;
						// }
						// elseif ($v['type'] == '重大项目')
						// {
						// 	$count[$v[college_id]]['ZDAXM']++;
						// }
					}

					if ($_POST['college_id'] != "")//一院所有项目项目
					{
						$illustration = array();
						$data = array();
						for ($i = 0;$i < $num;$i++)
						{
							$illustration[$i] = $pro_type[$i];
							$data[$i] = $count[$_POST['college_id']][$pro_type[$i]];
						}

						// $illustration = array("一般项目","重点项目","重大项目预研项目","重大项目");
						// $data[0] = $count[$_POST['college_id']]['YBXM'];
						// $data[1] = $count[$_POST['college_id']]['ZDXM'];
						// $data[2] = $count[$_POST['college_id']]['ZDYY'];
						// $data[3] = $count[$_POST['college_id']]['ZDAXM'];
					}
					else//所有院所有项目项目
					{
						// echo "I am here";
						$i = 0;
						foreach ($count as $v)
						{
							$college_all_name = $this->ProjectModel->get_All_College();
							$illustration[$i] = $college_all_name[$v['college_id']];
							$data[$i] = $v['totle_number'];
							
							$i++;
						}
					}
				}	

				$title .= "项目数";
			}

			if ($_POST['chart_type'] != "" and $_POST['chart_type'] != "柱状图")
			{
				$chart_type = $_POST['chart_type'];
			}
			else
			{
				$chart_type	= "柱状图";
			}

			$str_illustration = null;
			foreach($illustration as $v)
			{
				$str_illustration .= $v.",";
			}
			$str_illustration = substr($str_illustration,0,strlen($str_illustration)-1);
			$str_data = null;
			foreach($data as $v)
			{
				$str_data .= $v.",";
			}
			$str_data = substr($str_data,0,strlen($str_data)-1);

			$i++;
		
		
			$college_name = json_encode($college_name);
		
			$str_college_id = null;
			foreach($count as $v)
			{
				$str_college_id .= $v['college_id'].",";
			}
			$str_college_id = substr($str_college_id,0,strlen($str_college_id)-1);
			$this->assign("selected_college_id",$str_college_id);

			$i = 0;
			$column_illustration = "<chart>";
			foreach ($count as $v)
			{
				$column_illustration .= $v['college_id']."——".$illustration[$i]."<br>";
				$i++;
			}
			$column_illustration .= "</chart>";
			$tmp = "<table>"."Hello"."</table>";
			$column_illustration = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>{$tmp}";
			$flag = $this->get('flag');

			if (($chart_type == "柱状图" or $chart_type == "") and $_POST['college_id'] != "")
			{
				$column_illustration = array();
				$i = 1;
				$column_illustration[0][0] = "类型号：类型名称";
				foreach($illustration as $v)
				{
					$column_illustration[$i][0] = "类".$i."：".$illustration[$i-1];
					$i++;
				}
				
				$this->assign("column_illustration",$column_illustration);
			}
			if (($chart_type == "柱状图" or $chart_type == "") and $_POST['college_id'] == "")
			{
				$column_illustration = array();
				$tmp_column_illustration = array();
				$i = 0;
				$column_illustration[0][0] = "学院号：学院名称";
				foreach($count as $v)
				{
					$tmp_column_illustration[$i] = $v['college_id']."：".$illustration[$i];
					$i++;
				}
				$k = 1;
				for($i = 0;$i <= count($tmp_column_illustration);$i += 4)
				{
					$column_illustration[$k][0] =	$tmp_column_illustration[$i];
					$column_illustration[$k][1] =	$tmp_column_illustration[$i+1];
					$column_illustration[$k][2] =	$tmp_column_illustration[$i+2];
					$column_illustration[$k][3] =	$tmp_column_illustration[$i+3];
					$k++;
				}
				$this->assign("column_illustration",$column_illustration);
			}

			// if ($_POST['project_type'] == "")
			// {
			// 	$project = "all";
			// }
			// if ($_POST['project_type'] == '一般项目')
			// {
			// 	$project = "YBXM";
			// }
			// if ($_POST['project_type'] == '重点项目')
			// {
			// 	$project = "ZDXM";
			// }
			// if ($_POST['project_type'] == '重大项目预研项目')
			// {
			// 	$project = "ZDYY";
			// }
			// if ($_POST['project_type'] == '重大项目')
			// {
			// 	$project = "ZDAXM";
			// }

			$this->assign("project",$project);
			$this->assign("collegetype",$_POST['college_id']);

			$this->assign("TIME", $TIME);
			$this->assign("PID",$PID);
			$this->assign("title",$title);
			$this->assign("illustration",$str_illustration);
			$this->assign("data",$str_data);
			$this->assign("chart",$chart_type);
			$this->assign("page",$this->page);
			$this->assign("college",$this->ProjectModel->get_all_college());
			$this->assign("type",$project_type);
			$this->assign("statistics",$statistics_type);
			$this->assign("statisticstype",$statisticstype);
			$this->assign("charttype",$charttype);
			$this->display();

		}
		else
		{
			$list_all = $this->ProjectMainInfoModel->field('type,college_id,member,teacher')->where($sql)->select();

			//sort by college_id
			for ($i = 0;$i < count($list_all)-1;$i++)
			{
				$min_inx = $i;
				for($j = $i+1;$j < count($list_all);$j++)
				{
					if ($list_all[$min_inx]['college_id'] > $list_all[$j]['college_id'])
					{
						$min_inx = $j;
					}
				}
				if ($min_inx != $i)
				{
					$tmp = array();
					$tmp[0] = $list_all[$i]['college_id'];
					$tmp[1] = $list_all[$i]['type'];
					$tmp[2] = $list_all[$i]['member'];
					$tmp[3] = $list_all[$i]['teacher'];
					
					$list_all[$i]['college_id'] = $list_all[$min_inx]['college_id'];
					$list_all[$i]['type'] = $list_all[$min_inx]['type'];
					$list_all[$i]['member'] = $list_all[$min_inx]['member'];
					$list_all[$i]['teacher'] = $list_all[$min_inx]['teacher'];

					$list_all[$min_inx]['college_id'] = $tmp[0];
					$list_all[$min_inx]['type'] = $tmp[1];
					$list_all[$min_inx]['member'] = $tmp[2];
					$list_all[$min_inx]['teacher'] = $tmp[3];
				}
			}

			$count = array();
			foreach ($list_all as $v)
			{

				$count[$v[college_id]]['college_id'] = $v[college_id];
				$count[$v[college_id]]['totle_number'] += 1;
				for ($i = 0;$i < $num;$i++)
				{
					if ($v['type'] == $pro_type[$i])
					{
						$count[$v[college_id]][$pro_type[$i]]++;
					}
				}
				// if ($v['type'] == '一般项目')
				// {
				// 	$count[$v[college_id]]['YBXM']++;
				// }
				// elseif ($v['type'] == '重点项目')
				// {
				// 	$count[$v[college_id]]['ZDXM']++;
				// }
				// elseif ($v['type'] == '重大项目预研项目')
				// {
				// 	$count[$v[college_id]]['ZDYY']++;
				// }
				// elseif ($v['type'] == '重大项目')
				// {
				// 	$count[$v[college_id]]['ZDAXM']++;
				// }
			}

			$college_all_name = $this->ProjectModel->get_All_College();

			$i = 0;
			$illustration = array();
			$data = array();
			foreach ($count as $v)
			{
				$illustration[$i] = $college_all_name[$v['college_id']];
				$data[$i] = $v['totle_number'];
				
				$i++;
			}

			$str_illustration = null;
			foreach($illustration as $v)
			{
				$str_illustration .= $v.",";
			}
			$str_illustration = substr($str_illustration,0,strlen($str_illustration)-1);
			$str_data = null;
			foreach($data as $v)
			{
				$str_data .= $v.",";
			}
			$str_data = substr($str_data,0,strlen($str_data)-1);

			$str_college_id = null;
			foreach($count as $v)
			{
				$str_college_id .= $v['college_id'].",";
			}
			$str_college_id = substr($str_college_id,0,strlen($str_college_id)-1);
			$this->assign("selected_college_id",$str_college_id);

			if ($chart_type == "柱状图" or $chart_type == "")
			{
				$column_illustration = array();
				$tmp_column_illustration = array();
				$i = 0;
				$column_illustration[0][0] = "学院号：学院名称";
				foreach($count as $v)
				{
					$tmp_column_illustration[$i] = $v['college_id']."：".$illustration[$i];
					$i++;
				}
				$k = 1;
				for($i = 0;$i <= count($tmp_column_illustration);$i += 4)
				{
					$column_illustration[$k][0] =	$tmp_column_illustration[$i];
					$column_illustration[$k][1] =	$tmp_column_illustration[$i+1];
					$column_illustration[$k][2] =	$tmp_column_illustration[$i+2];
					$column_illustration[$k][3] =	$tmp_column_illustration[$i+3];
					$k++;
				}
				$this->assign("column_illustration",$column_illustration);
			}

			$this->assign("collegetype","");

			$this->assign("project","all");
			$this->assign("TIME", $TIME);
			$this->assign("PID",$PID);
			$this->assign("page",$this->page);
			$this->assign("title",$title);
			$this->assign("illustration",$str_illustration);
			$this->assign("data",$str_data);
			$this->assign("chart","柱状图");
			$this->assign("statisticstype","project");
			$this->assign("college",$this->ProjectModel->get_all_college());
			$this->assign("type",$project_type);
			$this->assign("statistics",$statistics_type);
			$this->assign("charttype",$charttype);
			$this->display();

		}
	}


	/**
	* 各学院不同批次项目总数比较
	*
	* @author Green
	* @since 2014-06-04
	*/

	/*
	**各学院不同批次项目总数比较
	*/
	public function timecompareAction()
	{
		$PID = "'".$this->request('PID')."'";
		$get_all_college = $this->ProjectModel->get_All_College();
		$time = $this->ProjectModel->get_project_times($PID);
		$Project_Name_all = $this->ProjectModel->get_Project_Name();
		$All_College_temp = $get_all_college;
		$i = 0;
		$totaltimes = count($time);
		// print_r($time);
		// print_r($get_all_college);
		// print_r($get_all_college );//显示学院名字与学院ID


		foreach ($Project_Name_all as $key => $value) //由项目代号确定项目名称
		{
			$key = "'".$key."'";
			if($PID == $key)
			{
				$Project_Name = $value;
			}
		}


		for ($i = 1;$i <= $totaltimes;$i++)//初始化数组
		{
			$All_College[] = $get_all_college;
		}
		foreach ($All_College_temp as $key => &$value) 
		{
			$value = 0;
		}
		// print_r($All_College_temp);

		/*
		**获取学院项目总数
		*/
		for ($i = 0;$i < $totaltimes;$i++)
		{
			$all_college_totalnum[$i] = $this->ProjectModel->get_project_totalnumber($PID,$time[$i]['TIME']);
			$All_College[$i] = $All_College_temp;
			foreach ($All_College[$i] as $key => $value)
			{
				if(is_array($all_college_totalnum[$i]))
				{
					foreach ($all_college_totalnum[$i] as $k => $v) 
					{
						if ($key == $k)
						{
							$All_College[$i][$key] = $v;
						}
					}
				}
			}

		}
		// print_r($All_College);

		/*以图示形式说明数据*/
		$i = 0;
		$totalnumber = count($get_all_college);
		foreach ($get_all_college as $k => $v) 
		{
			if($i == 0)
			{
				$College_Name_text .= "<DIV style='OVERFLOW: auto; WIDTH: 100%; HEIGHT: 150px'><table class='zebra' border='0px'><tr align='center'><tr><td>学院号：学院名称</td></tr>";
			}
			else if ($i%4 == 0) 
			{
				$College_Name_text .= "</tr><tr align='center'>";
			}
			$i++;
			$College_Name_text .= "<td width='274px'>".$k." : ".$v."</td>";
		}
		$College_Name_text .= "</tr></table></div>";
		// echo $College_Name_text;

		/*把数据转换为字符串*/
		foreach ($All_College as $v_college) 
		{
			$College_Number_text = "";
			$College_CollegeId_text = "";
			if(is_array($v_college))
			{
				foreach ($v_college as $key => $value3) 
				{
					$College_CollegeId_text .= $key.',';
					$College_Number_text .= $value3.',';
				}
			}
			// echo $College_CollegeId_text;
			// echo $College_Number_text;
			$College_Number_text = substr($College_Number_text,0,strlen($College_Number_text)-1);
			$College_Number[] = $College_Number_text;
		}
		$College_CollegeId_text = substr($College_CollegeId_text,0,strlen($College_CollegeId_text)-1);

		$All_College_Number_text='';
		for ($i = 0;$i < count($College_Number);$i++)
		{
			$All_College_Number_text .= $College_Number[$i];
			if($i != count($College_Number)-1)
			{
				$All_College_Number_text .= '|';
			}
		}
		// print_r($College_Number_text);

		
		$this->assign("College_Number",$All_College_Number_text);
		$this->assign("College_Name",$College_Name_text);
		$this->assign("College_CollegeId",$College_CollegeId_text);
		$this->assign("Project_Name",$Project_Name);
		$this->display();
	}

}