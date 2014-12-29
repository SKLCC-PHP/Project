<?php
/**
 * 学院控制器
 * 
 * @author May
 * @since 2014-04-20
 */

class CollegeController extends CommonController {
	private $curModel = null;
	private $college_info = null;

	public function __construct()
	{
		$this->curModel = model('college');
	}

	/**
	 * 列表页
	 */
	public function indexAction()
	{
		$page = $this->page($this->curModel->where(true)->count(),'college_id',asc);
		$list = $this->curModel->where(true)->order($page['orderFieldStr'])->limit("{$page['limit']},{$page['numPerPage']}")->select();	
	
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->display();
	}

	/**
	 * 添加学院
	 */
	public function addAction()
	{
		$college_id = $_POST['college_id'];
		if(count($_POST) > 0){
			if (preg_match('/^[0-9]+$/', $college_id))       //正则表达式判断是否为数字
			{
				$program_id = null;
				$program_id = $this->curModel->where("college_id = $college_id")->find();
				if ($program_id == null)                                            //判断添加标号是否与数据库中编号冲突
				{
					if($this->curModel->add()){
					$this->ajaxReturn(200, '添加成功','' , 'closeCurrent');
					}else{
						$this->ajaxReturn(300, '添加失败');
					}
				}
				else
				{
					$this -> ajaxReturn(300, '学院编号已存在');
				}
			}
			else
			{
				$this -> ajaxReturn(300, '请正确填写编号');
			}
		}else{
			$this->assign('list', $this->list);
			$this->assign('page', $this->page);
			$this->display();
		}
	}

	/*
	 * 修改学院信息
	 */
	public function updateAction()
	{
		if(count($_POST) > 0)
		{
			if (preg_match('/^[0-9]+$/', $college_id))       //正则表达式判断是否为数字
			{
				$college_id = $_POST['college_id_old'];
				$college_id_new = $_POST['college_id'];
				
				if ($college_id == $college_id_new)
				{
					if($this->curModel->where("college_id = $college_id")->save())
					{
						$this->ajaxReturn(200, '修改成功','' , 'closeCurrent');
					}else{
						$this->ajaxReturn(300, '修改失败');
					}
				}
				else
				{
					$college_id_tmp = $this->curModel->field('college_id')->where("college_id = $college_id_new")->find();
					if (empty($college_id_tmp))
					{
						if($this->curModel->where("college_id = $college_id")->save())
						{
							$this->ajaxReturn(200, '修改成功','' , 'closeCurrent');

						}else{
							$this->ajaxReturn(300, '修改失败');
						}
					}
					else
					{
						$this->ajaxReturn(300, '学院编号已存在');
					}
				}
			}
			else
			{
				$this -> ajaxReturn(300, '请正确填写编号');
			}
		}
		else{
			$college_id = (int)$this->get('college_id');
			$this->college_info = $this->curModel->where("college_id = $college_id")->find();
			$this->assign('college_info', $this->college_info);
			$this->display();
		}
	}

	/**
	 * 删除学院信息
	 */
	public function deleteAction()
	{
		$ids = $this->request('college_ids');
		if(!empty($ids) && $this->curModel->where("college_id IN($ids)")->delete())
		{
			$this->ajaxReturn(200, '删除成功');
		}
		else
		{
			$this->ajaxReturn(300, '删除失败');
		}
	}
}