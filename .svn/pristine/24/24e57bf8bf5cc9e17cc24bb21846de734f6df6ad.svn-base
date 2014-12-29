<?php

/**
 * 附件model
 * 
 * @author iat
 * @since 2014-10-09
 */

class AttachmentModel extends Model {
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
	}	
	
	/**
	*获取所有的附件类型，按项目大类归类
	*/
	public function get_Attachment_Type()
	{
		$attachment_type = model('attachment_type')->order('TID')->select();
		foreach ($attachment_type as $v) 
		{
			$data[$v['PID']][$v['TID']] = $v['type'];
		}
		return $data;
	}
}