<?php
/** * 公用的方法  返回json数据，进行信息的提示 *
 * @param $status 状态
 * @param string $message 提示信息
 * @param array $data 返回数据 */
function showMsg($status,$message = '',$data = array()){
    $result = array(        'status' => $status,        'message' =>$message,        'data' =>$data    );
    exit(json_encode($result));
}
function genLoginKey($memberUid)
{
    return md5($memberUid.'-'.genRandom());
}
function adminLogin($admin)
{
    if(!$admin->username)return false;
    $memberInfo = array(
        'memberId'=>$admin->id,
        'memberType'=>ADMIN_TYPE_MANAGER,
        'adminType'=>$admin->type,
        'username' => $admin->username,
        'name' => $admin->name,
        'adminId' => $admin->id,
        'uid'=>'_'.ADMIN_TYPE_MANAGER.'_0',
    );
    $memberInfo['loginKey'] = genLoginKey($memberInfo['uid']);
    $loginIp = getIP();
    if($admin->id) {
        //登录信息计入数据库
        DB::table('Admin')->where('id',$admin->id)->update(array(
            'loginTimes' => DB::raw('loginTimes+ 1'),
            'ipLastLogin' => ip2long($loginIp),
            'timeLogin'=>date('Y-m-d H:i:s'),
            'timeLastModified' => date('Y-m-d H:i:s'))
        );
    }
    session(['MEMBER_INFO'=>$memberInfo]);
    //Cache::me()->set('MEMBER_LOGIN_'.$memberInfo['loginKey'], array('memberId'=>$memberInfo['memberId'], 'memberType'=>MEMBER_TYPE_MANAGER, 'uid'=>$memberInfo['uid'], 'clientIp'=>$loginIp), 3600 * 4);//保存4个小时 共享
    return true;
}
/**
 * 获取IP
 */
function getIP()
{
    if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && $_SERVER["HTTP_X_FORWARDED_FOR"])
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; //OSPHP.com.CN
    else if (isset($_SERVER["HTTP_CLIENT_IP"]) && $_SERVER["HTTP_CLIENT_IP"])
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    else if (isset($_SERVER["REMOTE_ADDR"]) && $_SERVER["REMOTE_ADDR"])
        $ip = $_SERVER["REMOTE_ADDR"]; //OsPHP.COM.CN
    else if (getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP"); //PHP开源代码
    else if (getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else
        $ip = "Unknown";
    return $ip;
}
function genRandom()
{
    preg_match('/0.([0-9]+) ([0-9]+)/', microtime(), $regs);
    return $regs[2].$regs[1].sprintf('%03d',rand(0,999));
}



