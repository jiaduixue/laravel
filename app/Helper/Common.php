<?php
/**
 * author: jinhanjiang
 * mailto: jinhanjiang@sohu.com
 * date:   2011-04-11
 */
namespace App\Helper;

class Common
{
    /**
     * js数组转换为php数组
     * @param $text 要转找的js数组
     */
    public static function jsArrayToPhpArray($text)
    {
        $text = preg_replace("/\[/", "array(", $text);
        $text = preg_replace("/\]/", ")", $text);
        $text = preg_replace("/，/", ",", $text);

        $temp = preg_replace("/(\s+),/",",",$text);
        $text = '';
        $temp_array = str_split($temp);

        foreach($temp_array as $i =>$char)
        {
            if(','== $char)
            {
                if(',' == $temp_array[$i-1] || '(' == $temp_array[$i-1]) $char = "'',";
                else if(')' == $temp_array[$i-1] && ')' == $temp_array[$i+1]) $char = '';
            }
            $text .= $char;
        }
        eval("\$array=$text;");
        return $array ;
    }

    /**
     * 验证1,2,3,5 或 5 这样的字符串,格式是否正确
     * 如批量操作时，会传过来一批字符串格式，这里做简单验证
     * @param $text 要验证的字符串
     * @return boolean
     */
    public static function verifyImplodeStr(&$text)
    {
        if(! is_scalar($text)) return false;
        $text = preg_replace('/\s/', '', $text);
        return preg_match("/^(\d+,)+\d+$/", $text) || preg_match("/^\d+$/", $text) ;
    }

    /**
     * 生成随机验证码
     */
    public static function getVerificationImage($vCode)
    {
        header('Content-type: image/png');
        $im = imagecreate(50,20) or die ('Cannot Initialize new GD image stream');
        $black = ImageColorAllocate($im, 204,204,204);
        $foreColor = ImageColorAllocate($im, 255,255,255);
        $white = ImageColorAllocate($im, 0,0,0);
        imageline($im, 1, 1, 350, 25, $black);
        imagearc($im, 200, 15, 20, 20, 35, 190, $white);
        for($i = 0; $i < strlen($vCode); $i ++)
        {
            imagestring($im, 5, (($i + 5) + 9 * $i), rand($i, 6), substr($vCode, $i ,1), $white);
        }
        for($i = 0 ; $i < 190 ; $i ++)
        {
            imagesetpixel($im, rand()%50 , rand()%50 , $foreColor);
        }
        imagepng($im);
        imagedestroy($im);
    }

    /**
     * 生成随机密码： 去掉容易迷惑的：1,l,o,0
     */
    public static function generateRandomString($length)
    {
        $characters = array('2', '3', '4', '5', '6', '7', '8', '9',
            'a', 'c', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'm', 'p',
            'q', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        $randomString = "";
        while(strlen($randomString) < $length) {
            $randomCharacterIndex = rand(0, count($characters) - 1);
            $randomString .= $characters[$randomCharacterIndex];
        }
        return $randomString;
    }

    /**
     * 获取IP
     */
    public static function getIP()
    {
        if ($_SERVER["HTTP_X_FORWARDED_FOR"])
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; //OSPHP.com.CN
        else if ($_SERVER["HTTP_CLIENT_IP"])
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        else if ($_SERVER["REMOTE_ADDR"])
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

    public static function checkIP()
    {
        if(ip2long($ip)=="-1") {
            return false;
        }
        return true;
    }

    public static function readFromFile($file_name)
    {
        if (file_exists($file_name)) {
            $filenum=fopen($file_name,"r");
            flock($filenum,LOCK_EX);
            $file_data=fread($filenum, filesize($file_name));
            rewind($filenum);
            fclose($filenum);
            return $file_data;
        }
    }

    public static function writeToFile($file_name,$data,$method="w")
    {
        $filenum=fopen($file_name,$method);

        flock($filenum,LOCK_EX);
        $file_data=fwrite($filenum,$data);
        fclose($filenum);
        return $file_data;
    }

    public static function checkEmail($email, $strictCheck=false) {
        $isOk = preg_match("/^([a-zA-Z0-9_#&~!\-\.\+\/\'\$])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/", $email);
        if($isOk && $strictCheck) {
            if(filter_var($email) === false || checkdnsrr(array_pop(explode("@", $email)),"MX") === false) $isOk = false;
        }
        return $isOk;
    }

    public static function genOptions($arrays, $select = '')
    {
        $return_str = '';
        if(is_array($arrays) && count($arrays) > 0) {
            foreach($arrays as $key => $value) {
                $select_str = (isset($select) && '' !== $select && $key == $select) ? ' SELECTED' : '';
                $return_str .= '<option value="'.$key.'" '.$select_str.'>'.$value.'</option>';
            }
        }
        return $return_str;
    }

    public static function genRadios($control, $arrays = '', $default = '', $function = '')
    {
        reset ($arrays);
        ($function != '') && $function_str = " onclick=\"".$function."\"";

        while (list($key, $value) = each($arrays))
        {
            $checked = ($default == $key) ? ' checked ' : '';
            echo '<input name="'.$control.'" type="radio"  value="'.$key.'"'.$checked.$function_str.'><span style="margin-right:8px;">'.$value.'</span>';
        }
    }

    public static function formatDateTime($date_str, $f_str = 'Y-m-d H:i:s')
    {
        $return_str = '';
        if (('' == $date_str) || ($date_str == '0-0-0') || ($date_str == '00-00-00') ||
            ($date_str == '0000-00-00') || ($date_str == '0000-00-00 00:00:00')){
            //返回空
        } else {
            $return_str = date($f_str,strtotime($date_str));
            $return_str = strtolower($return_str);
            $return_str = str_replace('am','上午',$return_str);
            $return_str = str_replace('pm','下午',$return_str);
        }
        return $return_str;
    }

    public static function getWeekByDate($date_str, $language = 'cn') {
        $date = self::formatDateTime($date_str);
        if(empty($date)) return '';

        $week_array_cn = array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
        $week_array_en = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

        $week_array = ${"week_array_".$language};
        $week_day = date('w', strtotime($date));
        return $week_array[$week_day];
    }

    /**
     * HTML 转换成文本,此方法来自phpDocument :preg_replace方法中介绍
    & 可参照strip_tags — 从字符串中去除 HTML 和 PHP 标记
     */
    public static function html2text($text)
    {
        /**
         * $document 应包含一个 HTML 文档。
         * 本例将去掉 HTML 标记，javascript 代码
         * 和空白字符。还会将一些通用的
         * HTML 实体转换成相应的文本。
         */
        $search = array ("'<script[^>]*?>.*?</script>'si",  // 去掉 javascript
            "'<[\/\!]*?[^<>]*?>'si",           // 去掉 HTML 标记
            "'([\r\n])[\s]+'",                 // 去掉空白字符
            "'&(quot|#34);'i",                 // 替换 HTML 实体
            "'&(amp|#38);'i",
            "'&(lt|#60);'i",
            "'&(gt|#62);'i",
            "'&(nbsp|#160);'i",
            "'&(iexcl|#161);'i",
            "'&(cent|#162);'i",
            "'&(pound|#163);'i",
            "'&(copy|#169);'i");

        $replace = array ("",
            "",
            "\\1",
            "\"",
            "&",
            "<",
            ">",
            " ",
            chr(161),
            chr(162),
            chr(163),
            chr(169));

        $text = preg_replace ($search, $replace, $text);
        return preg_replace_callback("'&#(\d+);'", function($m) { return chr($m[1]); }, $text);
    }

    public static function 	text2html($text)
    {
        return nl2br(str_replace('  ', '&nbsp;', $text));
    }

    public static function removeScriptTag($text)
    {
        $search = array ("'<script[^>]*?>.*?</script>'si",  // 去掉 javascript
            "'<iframe[^>]*?>.*?</iframe>'si");  //去掉iframe
        $replace = array ('',
            '');
        $text = preg_replace ($search, $replace, $text);
        return preg_replace_callback("'&#(\d+);'", function($m) { return chr($m[1]); }, $text);
    }

    /**
     * 开启;extension=php_mbstring.dll
     * mb_substr是按字来切分字符
     * mb_strcut是按字节来切分字符
     * 都不会产生半个字符的现象
     */
    public static function subString($str, $len, $byByte=false, $etc = '...')
    {
        $rtstr = ''; $slen = 0;
        if($byByte) {
            $slen = strlen($str); $rtstr = mb_strcut($str, 0, $len, 'utf-8');
        } else {
            $slen = mb_strlen($str, 'utf-8'); $rtstr = mb_substr($str, 0, $len, 'utf-8');
        }
        return $rtstr.(($len < $slen) ? $etc : '');
    }

    /**
     * @param $num	需要格式化的浮点数
     * @param int $precision 保留小数位数
     * @param string $split	价格超过3位分隔符
     * @param bool $keepLastZero 是否保留最后小数点最后面的零, 此参数设置为false 例如:4.90 返回 4.9
     * @return mixed|string
     */
    public static function formatNumber($num, $precision = 2, $split = ',', $keepLastZero = true)
    {
        // $num = explode(".", $num);
        // $val = count($num) > 1 ? $num[0] . '.' . substr($num[1], 0, $precision) : $num[0];
        $point = $split == ',' ? '.' : ',';
        $formatNumber = number_format(floatval($num), $precision, $point, $split);
        $point = $point == '.' ? '\.' : $point;
        if(! $keepLastZero && $precision > 0)
        {
            while(preg_match('/'.$point.'\d+$/', $formatNumber) && preg_match('/0$/', $formatNumber))
            {
                $formatNumber = preg_replace('/0$/', '', $formatNumber);
                if(preg_match('/'.$point.'$/', $formatNumber)) $formatNumber = preg_replace('/'.$point.'$/', '', $formatNumber);
            }
        }
        return $formatNumber;
    }

    /**
     * 科学计算法数据转为正整型数据
     * 或使用 例如：number_format(1.4602127762055E+16, 0, '', '');
     */
    public static function scientificNotation($num)
    {
        if (stripos($num,'e')===false) return $num;
        $num = trim(preg_replace('/[=\'"]/','',$num,1),'"');//出现科学计数法，还原成字符串
        $result = "";
        while ($num > 0){
            $v = $num - floor($num / 10)*10;
            $num = floor($num / 10);
            $result   =   $v . $result;
        }
        return $result;
    }

    public static function httpClientRequest($url, $data, $method = 'POST', $waitForResponse = true, $timeout = 60)
    {
        $urlarr = parse_url($url);
        $data = is_array($data) ? http_build_query($data) : $data;
        $timeout = ($waitForResponse === true) ? $timeout : 1;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        if (strtolower($urlarr['scheme']) == 'https')
        {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
        }
        if (isset($urlarr['port']))
            curl_setopt($ch, CURLOPT_PORT, $urlarr['port']);
        if (strtoupper($method) == 'POST')
        {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        else //GET method
        {
            if ($data)
            {
                if (false===strpos($url, '?'))
                    $url .= '?'.$data;
                else
                    $url .= '&'.$data;
            }
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    /**
     * 取下载文件的头函数
     */
    public static function genHeadDownloadFile($filepath)
    {
        $filepath = realpath($filepath);
        if (is_file($filepath))
        {
            $pathinfo = pathinfo ($filepath);
            $filename = $pathinfo['basename'];
            switch(strtolower($pathinfo['extension']))
            {
                case 'csv':
                case 'xls':
                case 'xlsx':
                    header('Content-type: application/vnd.ms-excel;');
                    break;

                default :
                    header('Content-type: application/octet-stream;');
                    break;
            }
            header('Pragma: cache');
            header('Cache-Control: public, must-revalidate, max-age=0');
            header('Accept-Ranges: bytes');
            header('Accept-Length: '.filesize($filepath));
            header('Content-Disposition: attachment; filename='.$filename);
            $fh = fopen($filepath, 'rb');
            echo fread($fh,filesize($filepath));
            fclose($fh);
            exit;
        }
        die;
    }

    /**
     * 取两个日期之间的所有日期
     */
    public static function getDateByRange($start, $end, $format='Y-m-d') {
        $return_array = array();
        $dt_start = strtotime($start);
        $dt_end = strtotime($end);
        while ($dt_start<=$dt_end){
            $return_array[] = date($format,$dt_start);
            $dt_start = strtotime('+1 day',$dt_start);
        }
        return $return_array;
    }

    /**
     * 传入数组如：array("2010-12-31","2011-01-01","2011-01-02");
     * 返回:array("year"=>array("2010","2011"),"date"=>array("12-31","01-01","01-02"))
     */
    function getDateInfo($arrays)
    {
        $return_array = array("year"=>array(), "date"=>array());
        if(count($arrays) > 0) {
            $year_array = array();
            $date_array = array();
            foreach($arrays as $array) {
                //此处，可扩展(字符串中有可能带引号的处理)
                $return_array['year'][] = date("Y", strtotime($array));
                $return_array['date'][] = date("m-d", strtotime($array));
            }
            $return_array['year'] = array_unique($return_array['year']) ;
        }
        return $return_array;
    }

    /**
     * 取两个日期相差天数
     * php时间日期函数已经把日期变成了时间戳，就是变成了秒。这样只要让两数值相减，然后把秒变成天就可以了
     */
    public static function getDayByDiminish($start, $end) {
        $startdate=strtotime($start);
        $enddate=strtotime($end);
        return round(($enddate-$startdate)/3600/24) ;
    }

    /*
    * 功能：取得给定日期所在周的开始日期和结束日期
    * 参数：$gdate 日期，默认为当天，格式：YYYY-MM-DD
    * $first 一周以星期一还是星期天开始，0为星期天，1为星期一
    * 返回：数组array("开始日期", "结束日期");
    */
    public static function aweek($gdate = "", $first = 0){
        if(!$gdate) $gdate = date("Y-m-d");
        $w = date("w", strtotime($gdate));//取得一周的第几天,星期天开始0-6
        $dn = $w ? $w - $first : 6;//要减去的天数
        $st = date("Y-m-d", strtotime("$gdate -".$dn." days"));
        $en = date("Y-m-d", strtotime("$st +6 days"));
        return array($st, $en);//返回开始和结束日期
    }

    /**
     *	生成缩图，调用代码如下：
     *
    if($_FILES['image']['size']){
    //echo $_FILES['image']['type'];
    if($_FILES['image']['type'] == "image/pjpeg"||$_FILES['image']['type'] == "image/jpg"||$_FILES['image']['type'] == "image/jpeg"){
    $im = imagecreatefromjpeg($_FILES['image']['tmp_name']);
    }elseif($_FILES['image']['type'] == "image/x-png"){
    $im = imagecreatefrompng($_FILES['image']['tmp_name']);
    }elseif($_FILES['image']['type'] == "image/gif"){
    $im = imagecreatefromgif($_FILES['image']['tmp_name']);
    }
    if($im){
    if(file_exists($pic_name.'.jpg')){
    unlink($pic_name.'.jpg');
    }
    resizeImage($im,$pic_width,$pic_height,$pic_name);
    imagedestroy ($im);
    }
    }

     */
    public static function resizeImage($im, $maxwidth, $maxheight, $name){
        //取得当前图片大小
        $width = imagesx($im);
        $height = imagesy($im);
        //生成缩略图的大小
        if(($width > $maxwidth) || ($height > $maxheight)){
            $widthratio = $maxwidth/$width;
            $heightratio = $maxheight/$height;
            if($widthratio < $heightratio){
                $ratio = $widthratio;
            }else{
                $ratio = $heightratio;
            }
            $newwidth = $width * $ratio;
            $newheight = $height * $ratio;

            if(function_exists("imagecopyresampled")){
                $newim = imagecreatetruecolor($newwidth, $newheight);
                imagecopyresampled($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            }else{
                $newim = imagecreate($newwidth, $newheight);
                imagecopyresized($newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            }
            imagejpeg($newim, $name.".jpg");
            imagedestroy($newim);
        } else {
            imagejpeg($im, $name.".jpg");
        }

    }

    /**
     * 判断是否为文件
     * is_file() expects parameter 1 to be a valid path, string given
     */
    public static function isFile($file) {
        $file = strval(str_replace("\0", "", $file)); return is_file($file);
    }

    /**
     * 递归创建目录
     */
    public static function mkdirRecurse($dir,$mode=0777)
    {
        return is_dir($dir) ? true : mkdir($dir, $mode, true);
    }

    /**
     * 递归删除目录（包括子目录下所有文件）
     */
    public static function rmdirRecurse($dir, $deleteMe = false) {
        if(! is_dir($dir)) return false;
        if($objs = glob($dir."/*")){
            foreach($objs as $obj) {
                is_dir($obj)? self::rmdirRecurse($obj, true) : @unlink($obj);
            }
        }
        $deleteMe && is_dir($dir) && rmdir($dir);
    }

    /**
     * PHP彻底销毁目录及目录下的所有文件
     */
    public static function deleteDir($dir, $deleteMe = false)  {
        if(!$dh = @opendir($dir)) return false;
        while (false !== ($obj = readdir($dh))) {
            if($obj=='.' || $obj=='..') continue;
            is_dir($nowFile = $dir.'/'.$obj) ? self::deleteDir($nowFile, true) : @unlink($nowFile);
        }
        closedir($dh);
        $deleteMe &&  @rmdir($dir);
    }

    /**
     * 获取目录下文档(不包括以.开头的文件)
     * 1 获取目录下所有文件，包括目录或文件
     * 2 获取目录下的目录
     * 3 获取目录下的文件
     */
    public static function getDirFiles($dir, $type=1)
    {
        $dirArray = array();
        if (false != ($handle = opendir ( $dir )))
        {
            while ( false !== ($file = readdir ( $handle )) ) {
                //去掉""."、".."以及带".xxx"后缀的文件
                if (! preg_match('/^\./', $file)) {
                    if(2 == $type && ! is_dir($dir.'/'.$file)) continue;
                    if(3 == $type && ! is_file($dir.'/'.$file)) continue;
                    $dirArray[]=$file;
                }
            }
            //关闭句柄
            closedir ( $handle );
        }
        return $dirArray;
    }


    /**
     *批量拷贝目录（包括子目录下所有文件）
     * copy a direction's all files to another direction
     *用法：
     * copydir_recurse("feiy","feiy2",1):拷贝feiy下的文件到 feiy2,包括子目录
     * copydir_recurse("feiy","feiy2",0):拷贝feiy下的文件到 feiy2,不包括子目录
     * 参数说明：
     * $source:源目录名
     * $destination:目的目录名
     * $child:复制时，是不是包含的子目录
     */
    public static function copydirRecurse($source,$destination ,$child = true)
    {
        if(!is_dir($source)){
            echo("Error:the $source is not a direction!");
            return false;
        }

        if(!is_dir($destination)){
            mkdir($destination,0777);
        }
        $handle=dir($source);

        while($entry=$handle->read())
        {
            if(($entry!=".")&&($entry!=".."))
            {
                if(is_dir($source."/".$entry))
                {
                    if($child)
                        self::copydirRecurse($source."/".$entry,$destination."/".$entry,$child);
                }
                else
                {
                    copy($source."/".$entry,$destination."/".$entry);

                }
            }
        }
        return true;
    }

    public static function genUtf8Header()
    {
        $header = '<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		</head>
		<body>';
        return $header;
    }

    public static function genFooter()
    {
        $footer = '</body></html>';
        return $footer;
    }

    public static function scripts($scriptcode)
    {
        echo self::genUtf8Header();
        echo '<script type="text/javascript">';
        echo $scriptcode;
        echo '</script>';
        echo self::genFooter();
    }

    public static function genRandom()
    {
        preg_match('/0.([0-9]+) ([0-9]+)/', microtime(), $regs);
        return $regs[2].$regs[1].sprintf('%03d',rand(0,999));
    }

    public static function getArrayByFile($filename)
    {
        return file($filename);//读取谜语文件
    }

    public static function utf8($data)
    {
        if(! empty($data) ){
            $type = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;
            if($type != 'UTF-8'){
                $data = mb_convert_encoding($data ,'utf-8' , $type);
            }
        }
        return $data;
    }

    public static function array2object($array)
    {
        if (is_array($array)) {
            $obj = new stdClass();

            foreach ($array as $key => $val){
                $obj->{$key} = $val;
            }
        }
        else { $obj = $array; }

        return $obj;
    }

    public static function object2array($object)
    {
        if(is_scalar($object)) return $object;
        if (is_object($object)) {
            $object = (array)$object;
        }
        if(is_array($object)) {
            if(count($object) > 0) foreach ($object as $key => $value) {
                $array[$key] = self::object2array($value);
            } else {
                $array = array();
            }
        } else if($object === NULL) {
            $array = NULL;
        } else {
            $array = array();
        }
        return $array;
    }

    public static function num2str($num)
    {
        if(!is_numeric($num)) return false;
        $ret = '';
        if($num < 0) {
            $ret = '负';
            $num = -$num;
        }

        $zhNumArray = array(
            "1" => "一",
            "2" => "二",
            "3" => "三",
            "4" => "四",
            "5" => "五",
            "6" => "六",
            "7" => "七",
            "8" => "八",
            "9" => "九",
            "0" => "零",
        );

        $bitStrArray = array(
            "1" => "",
            "10" => "十",
            "100" => "百",
            "1000" => "千",
            "10000" => "万",
            "100000000" => "亿",
        );

        $prebit = 0;//上次记录的位数
        krsort($bitStrArray);
        foreach($bitStrArray as $bit => $name) {
            $bit = floatval($bit);
            if($num >= $bit) {
                $tmpNum = floor($num / $bit);
                if($tmpNum >= 10) {
                    $tmpRet = num2str($tmpNum);
                    $ret .= $tmpRet . $name;
                } else {
                    if($prebit/$bit > 10) {//按照中文习惯补零
                        $ret .= '0';
                    }
                    $ret .= $tmpNum . $name;
                }
                $prebit = $bit;
                $num = fmod($num, $bit);//取模
            }
        }

        $ret = str_replace(array_keys($zhNumArray), array_values($zhNumArray), $ret);
        return $ret;
    }

    /**
     * 读取操作大文件
     * var_dump(tail(fopen("access.log","r+"),10));
     * 整个代码执行完成耗时 0.0003(s)
     */
    public static function tail($fp,$n,$base=5)
    {
        assert($n>0);
        $pos = $n+1;
        $lines = array();
        while(count($lines) <= $n){
            try{
                fseek($fp,-$pos,SEEK_END);
            } catch (Exception $e){
                fseek(0);
                break;
            }
            $pos *= $base;
            while(!feof($fp)){
                array_unshift($lines,fgets($fp));
            }
        }
        return array_slice($lines,0,$n);
    }

    public static function guid($trim = true)
    {
        $uuid = '';
        if (function_exists('com_create_guid')){
            $uuid = com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
        }
        return $trim ? trim($uuid, '{}') : $uuid;
    }

    /**
     * eg:
    echo '优:'.percent(20,120).'<br/>';
    echo '良:'.percent(40,120).'<br/>';
    echo '差:'.percent(60,120).'<br/>';
    ================
    输出
    优:16.67%
    良:33.33%
    差:50.00%
     */
    public static function percent($p,$t)
    {
        return sprintf('%.2f%%',$p/$t*100);
    }

    /**
     * 时间轴，即显示为"刚刚"、"5分钟前"、"昨天10:23"等
     * 函数tranTime()中的参数$time必须为Unix时间戳，如果不是请先用strtotime()将其转换成Unix时间戳。
     */
    public static function tranTime($time)
    {
        $rtime = date("m-d H:i", $time);
        $htime = date("H:i", $time);

        $time = time() - $time;

        if ($time < 60) {
            $str = '刚刚';
        } elseif ($time < 60 * 60) {
            $min = floor($time / 60);
            $str = $min.'分钟前';
        } elseif ($time < 60 * 60 * 24) {
            $h = floor($time/(60 * 60));
            $str = $h.'小时前 '.$htime;
        } elseif ($time < 60 * 60 * 24 * 3) {
            $d = floor($time/(60 * 60 * 24));
            if($d==1)
                $str = '昨天 '.$rtime;
            else
                $str = '前天 '.$rtime;
        } else {
            $str = $rtime;
        }
        return $str;
    }

    /**
     * 将字符串压缩后存放数据库中
     * 以下为测试实例(在45-50个单词以上，可以看到明显效果)
    $str = 'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz';
    $c1   = gzdeflate($str, 9);
    $c2   = gzcompress($str, 9);

    echo 'original data length:'.strlen($str).'<br>';
    echo 'gzdeflate length:'.strlen($c1).'<br>';
    echo 'gzcompress length:'.strlen($c2).'<br>';

    $b1 =  base64_encode($c1);
    $b2 =  base64_encode($c2);
    echo 'gzdeflate_base64 length:'.strlen($b1).'<br>';
    echo 'gzcompress_base64 length:'.strlen($b2).'<br>';

    echo 'gzdeflate_base64:'.$b1.'<br>';
    echo 'gzcompress_base64:'.$b2.'<br>';
     */
    public static function compressStrings($text)
    {
        return base64_encode(gzdeflate(self::utf8($text), 9));
    }

    public static function decompressStrings($text)
    {
        return empty($text) || ! self::isBase64($text) ? '' : self::utf8(@gzinflate(base64_decode($text)));
    }


    public static function isBase64($text) {
        return ($text == base64_encode(base64_decode($text)));
    }

    /**
     * Split comma-, semi-colon, or pipe-separated string
     * @return array
     * @param $str string
     */
    public static function split($str) {
        return array_map('trim',
            preg_split('/[,;|]/',$str,0,PREG_SPLIT_NO_EMPTY));
    }

    /**
     * 通过数组的值，获取键
     * @param $value 数组值
     * @param $array 数据
    $array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');
     * @return array array('fruit1', 'fruit4', 'fruit5')
     */
    public static function getArrayKeyByValue($value, $array)
    {
        $return_values = array();
        while ($name = current($array)) {
            if ($name == $value) {
                $return_values[] = key($array);
            }
            next($array);
        }
        return $return_values;
    }

    /**
     * 类反射,类构造方法为public
     * @param $class_name 类名
     * @param $method_name 类方法名
     * @param $params 方法参数
     */
    public static function reflection($class_name, $method_name, $params)
    {
        $class = new ReflectionClass($class_name);

        $reflectionMethod = $class->getMethod($method_name);
        if($reflectionMethod->isStatic())
        {
            //调用静态方法，注意参数是null而不是一个反射类实例
            return $reflectionMethod->invoke(null, $params);
        }
        else
        {
            //使用反射api来调用一个方法，参数是通过反射实例化的对象引用
            $weiboInstance = $class->newInstance();
            return $reflectionMethod->invoke($weiboInstance, $params);
        }
    }

    /**
     * 生成系统配置文件(由于k值和系统其他变量会有冲突和容易识别，所以这里不作这些参数的添加，修改操作)

     * @param $file 配置文件地址
     * @param $params 数组值 如： array('BOOLEAN_ARRAY'=>array(1=>'是', 2=>'否'), 'VISABLE_ARRAY'=>array(1=>'开启', 2=>'关闭'))
     * @return boolean
     *
     * <?php
    $BOOLEAN_ARRAY = array(
    1=>'是',
    2=>'否',
    );

    $VISABLE_ARRAY = array(
    1=>'开启',
    2=>'关闭',
    );
    ?>
     *
     */
    public static function genSystemConfigFile($file, $params = array())
    {
        if(is_array($params) && count($params) > 0) $CUSTOM_DEFINED_CONSTANT_ARRAY = $params;
        else
            return false;

        $str = '';
        foreach($CUSTOM_DEFINED_CONSTANT_ARRAY as $CONSTANT_KEY => $CONSTANT_VALUES)
        {
            $str .= '$'.$CONSTANT_KEY.' = array('."\r\n";
            if(count($CONSTANT_VALUES) > 0) foreach($CONSTANT_VALUES as $K=>$V)
            {
                $K = preg_replace(array('/\\\/'), array(''), $K); $K = preg_replace(array('/\'/'), array('\\\''), $K);
                $V = preg_replace(array('/\\\/'), array(''), $V); $V = preg_replace(array('/\'/'), array('\\\''), $V);
                $str .= "\t".'\''.$K.'\'=>\''.$V.'\','."\r\n";
            }
            $str .= ');'."\r\n";
        }

        $content = self::genConfigFileHeaderFooter($str);

        is_file($file) && unlink($file);
        if(!is_dir($file_dir = dirname($file))) self::mkdirRecurse($file_dir);
        file_put_contents($file, $content);
        return true;
    }

    private static function genConfigFileHeaderFooter($content)
    {
        $str = '';
        $str .= '<?php'."\r\n";
        $str .= '/**'."\r\n";
        $str .= ' * 创建时间:'.date('Y-m-d H:i:s')."\r\n";
        $str .= ' */'."\r\n";
        $str .= "\r\n";

        $str .= $content;

        $str .= '?>'."\r\n";

        return $str;
    }

    /**
     * 生成字母，通过数字
     * 0=A, 1=B, 2=C,...
     * 26=AA, 701=ZZ, 702=AAA, ...
     */
    public static function makeAlphaFromNumbers($number)
    {
        $numeric = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        if($number<strlen($numeric))
        {
            return $numeric[$number];
        }
        else
        {
            $dev_by = floor($number/strlen($numeric));
            return "" . self::makeAlphaFromNumbers($dev_by-1) . self::makeAlphaFromNumbers($number-($dev_by*strlen($numeric)));
        }
    }

    /**
     * 过滤参数
     */
    public static function getDecodeRequestParam($paras)
    {
        $return_array = array();
        if(is_array($paras) && count($paras) > 0)foreach($paras as $k=>$para)
        {
            $value = self::onceUrldecode($para);
            //eg:$str = 'b64d,jtj|VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
            if(preg_match('/^(b64d,\s*jta\|)/i', $value))
            {
                $value = substr($value, strpos($value, '|') + 1);
                $value = ('' != $value && preg_match('/\s/', $value)) ? preg_replace('/\s/', '+', $value) : $value;
                $value = base64_decode($value);
                $value = self::isJsonStr($value) ? json_decode($value, true) : $value;
            }
            else if(preg_match('/^(b64d,\s*jtj\|)/i', $value))
            {
                $value = substr($value, strpos($value, '|') + 1);
                $value = ('' != $value && preg_match('/\s/', $value)) ? preg_replace('/\s/', '+', $value) : $value;
                $value = base64_decode($value);
                $value = self::isJsonStr($value) ? json_decode($value) : $value;
            }
            else if(preg_match('/^(b64d\|)/i', $value))
            {
                $value = substr($value, strpos($value, '|') + 1);
                $value = ('' != $value && preg_match('/\s/', $value)) ? preg_replace('/\s/', '+', $value) : $value;
                $value = base64_decode($value);
            }
            else if(preg_match('/^(jtj\|)/i', $value))
            {
                $value = substr($value, strpos($value, '|') + 1);
                $value = self::isJsonStr($value) ? json_decode($value) : $value;
            }
            else if(preg_match('/^(jta\|)/i', $value))
            {
                $value = substr($value, strpos($value, '|') + 1);
                $value = self::isJsonStr($value) ? json_decode($value, true) : $value;
            }
            else
            {
                //'{\"point\":\"30\",\"code\":\"\",\"type\":2,\"promotionId\":\"21\",\"prolongDay\":30,\"test\":\"\\u8fd9\\u662f\\u4e00\\u4e2a\\u6d4b\\u8bd5\"}';
                $str1 = str_replace('\\"','"',$value);
                $str2 = str_replace('\\u','\u',$str1);
                //过滤之后：{"point":"30","code":"","type":2,"promotionId":"21","prolongDay":30,"test":"\u8fd9\u662f\u4e00\u4e2a\u6d4b\u8bd5"}
                $value = trim($str2);
            }
            $return_array[$k] = $value;
        }
        return $return_array;
    }

    /**
     * 避免二次解码导致加号丢失
     */
    public static function onceUrldecode($string)
    {
        if(preg_match('#%[0-9A-Z]{2}#isU', $string) > 0) {
            $string = urldecode($string);
        }
        return $string;
    }

    /**
     * 写日志，方便测试（看网站需求，也可以改成把记录存入数据库）
     * 注意：服务器需要开通fopen配置
     * @param $word 要写入日志里的文本内容 默认值：空值
     */
    public static function wlog($word='', $logname = '', $logpath = '')
    {
        $logpath = empty($logpath) ? __DIR__ : $logpath; self::mkdirRecurse($logpath);
        $logname = empty($logname) ? date("Ym").".log" : (preg_match('/^\d{6}.*\.log$/', $logname) ? $logname : date("Ym").'-'.$logname.(preg_match('/\.log$/', $logname) ? '' : '.log'));
        file_put_contents(preg_replace('/\/$/',  '', $logpath).'/'.$logname, "执行日期：".strftime("%Y-%m-%d %H:%M:%S",time())."\n".$word."\n", FILE_APPEND);
    }

    /**
     * 写文件到指定,$data为要写入的内容
     */
    public static function wfile($data, $filepath, $append = false)
    {
        if($filename = basename($filepath))
        {
            $dirname = dirname($filepath); self::mkdirRecurse($dirname);
            file_put_contents($filepath, $data, $append);
        }
    }

    /**
     * 网络检测
     * @param   string  机器IP
     * @param   string  机器port
     * @return  bool
     */
    public static function checkConnect($ip, $port = 4730)
    {
        // socket链接测试,200ms超时
        @$fp = fsockopen($ip, $port, $errno, $errstr, 0.2);
        if ($fp){
            $fp && fclose($fp);
            return true;
        } else {
            return false;
        }
    }

    public static function getAge($birthdate, $compareDate='', $defaultName = '未知')
    {
        $birthdateArr = preg_split ('/\D/',  $birthdate, -1, PREG_SPLIT_NO_EMPTY);
        $age = 0;
        if (is_array($birthdateArr))
        {
            if (isset($birthdateArr[2]) && $birthdateArr[2] == 0)
                unset($birthdateArr[2]);
            if (isset($birthdateArr[1]) && $birthdateArr[1] == 0)
                unset($birthdateArr[1]);
            if (isset($birthdateArr[0]) && $birthdateArr[0] == 0)
                unset($birthdateArr[0]);
            switch(count($birthdateArr))
            {
                case 1://只填写了年份
                    $age = date('Y') - $birthdateArr[0];
                    break;
                case 3://完整的日期
                    $compareDate = $compareDate == '' ? date('Y-m-d') : $compareDate;
                    $cm = date('n', strtotime($compareDate));
                    $cd = date('j', strtotime($compareDate));
                    $age = date('Y', strtotime($compareDate)) - $birthdateArr[0] - 1;
                    if ($cm > $birthdateArr[1] || $cm == $birthdateArr[1] && $cd > $birthdateArr[2])
                        $age ++;
                    break;
            }
        }
        return ($age > 0) ? $age : $defaultName;
    }


    /**
    Generate 64bit/base36 hash
    @return string
    @param $str
     **/
    public static function hashStr($str) {
        return str_pad(base_convert(
            hexdec(substr(sha1($str),-16)),10,36),11,'0',STR_PAD_LEFT);
    }

    /**
     * 将ab_bc_def转换为:abBcDef
     */
    public static function camelcase($str) {
        return preg_replace_callback('/_(\w)/',function($match) {return strtoupper($match[1]);},$str);
    }

    /**
     * 将abBcDef转换为:ab_bc_def
     */
    public static function snakecase($str) {
        return strtolower(preg_replace('/[[:upper:]]/','_\0',$str));
    }

    public static function deepTrim($value)
    {
        if (is_array($value)) {
            @array_walk_recursive($value, 'self::deepTrim');
        } else {
            $value = trim($value);
        }
        return $value;
    }

    public static function deepStr($value)
    {
        if (is_array($value)) {
            @array_walk_recursive($value, 'self::deepStr');
        } else if(is_scalar($value)) {
            $value = strval(trim($value));
        }
        return $value;
    }

    /**
     * preg_match("/^{.*}$/", $text)	判断{"a":"123", "b":"32"}
     * preg_match("/^\[.*\]$/", $text)	判断["23", "53", "32", "666"]
     */
    public static function isJsonStr($text) {
        return is_scalar($text) && (preg_match("/^{.*}$/", $text) || preg_match("/^\[.*\]$/", $text));
    }

    /**
     * @param array $weight 权重 例如array('a'=>200,'b'=>300,'c'=>500)
     * @return string key 键名
     * echo getByWeight(array('a'=>200,'b'=>300,'c'=>500, 'd'=>'1000'));
     */
    public static function getByWeight($weight = array())
    {
        $roll = rand(1, array_sum($weight));
        $_tmpW = 0; $rollnum = 0;
        foreach($weight as $k => $v)
        {
            $min = $_tmpW; $_tmpW += $v; $max = $_tmpW;
            if ($roll > $min && $roll <= $max) {
                $rollnum = $k; break;
            }
        }
        return $rollnum;
    }


    //判断是否为手机端浏览器
    public static function isMobile()
    {
        // returns true if one of the specified mobile browsers is detected
        $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
        $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
        $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
        $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
        $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
        $regex_match.=")/i";
        return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
    }

    /**
     * cutzero("4.7600");     // returns 4.76
     * cutzero("4.7604")      // returns 4.7604
     * cutzero("4.7000");     // returns 4.7
     * cutzero("4.0000");     // returns 4
     */
    public static function cutzero($value) {
        return preg_replace("/(\.\d+?)0+$/", "$1", $value) * 1;
    }

    /**
     * 生成随机数
     */
    public static function randpw($len=8, $format='all')
    {
        $is_abc = $is_numer = 0;
        $password = $tmp ='';
        $format = strtolower($format);
        switch($format)
        {
            case 'char': $chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; break;
            case 'number': $chars='0123456789'; break;
            default: $chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; break;
        }
        mt_srand((double)microtime()*1000000*getmypid());
        while(strlen($password) < $len) {
            $tmp =substr($chars,(mt_rand()%strlen($chars)),1);
            if(($is_numer <> 1 && is_numeric($tmp) && $tmp > 0 )|| $format == 'char'){
                $is_numer = 1;
            }
            if(($is_abc <> 1 && preg_match('/[a-zA-Z]/',$tmp)) || $format == 'number'){
                $is_abc = 1;
            }
            $password.= $tmp;
        }
        if($is_numer <> 1 || $is_abc <> 1 || empty($password) ){
            $password = self::randpw($len,$format);
        }
        return $password;
    }

    /**
     * 获取当前时间戳，精确到毫秒
     */
    public static function microtimeFloat()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    /**
     * 格式化时间戳，精确到毫秒，x代表毫秒
     */
    public static function microtimeFormat($tag='Y-m-d H:i:s.x', $time=0)
    {
        if(! $time) $time = self::microtimeFloat();
        list($usec, $sec) = explode(".", $time);
        $date = date($tag,$usec);
        return str_replace('x', $sec, $date);
    }

    /**
     * 计算脚本执行时间
     * @param  int  $start_time 开始时间点
     * @param  integer $stop_time  结束时间点
     * @return string              用时
     */
    public static function runTime($start_time, $stop_time=0) {
        $stop_time = $stop_time > 0 ? $stop_time : self::microtimeFloat();
        $sec = $stop_time - $start_time;
        return $sec < 1 ? round(($sec) * 1000, 2).' ms' : round($sec, 2).' s';
    }

    /**
     * xml转数组
     */
    public static function simpleXmlToArray($xmlstring) {
        return json_decode(json_encode((array) simplexml_load_string($xmlstring)), true);
    }

    /** 返回文件从X行到Y行的内容(支持php5、php4)
     * @param string $filename 文件名
     * @param int $startLine 开始的行数
     * @param int $endLine 结束的行数
     * @return string
     */
    public static function getFileLines($filename, $startLine = 1, $endLine=50, $method='rb')
    {
        $content = array();
        $count = $endLine - $startLine;
        // 判断php版本（因为要用到SplFileObject，PHP>=5.1.0）
        if(version_compare(PHP_VERSION, '5.1.0', '>=')){
            $fp = new SplFileObject($filename, $method);
            $fp->seek($startLine-1);// 转到第N行, seek方法参数从0开始计数
            for($i = 0; $i <= $count; ++$i) {
                $content[]=$fp->current();// current()获取当前行内容
                $fp->next();// 下一行
            }
        }else{//PHP<5.1
            $fp = fopen($filename, $method);
            if(!$fp) return 'error:can not read file';
            for ($i=1;$i<$startLine;++$i) {// 跳过前$startLine行
                fgets($fp);
            }
            for($i;$i<=$endLine;++$i){
                $content[]=fgets($fp);// 读取文件行内容
            }
            fclose($fp);
        }
        return array_filter($content); // array_filter过滤：false,null,''
    }

    /**
     * 对数组键值排序
     * @param $arrays
     * @return array|bool
     */
    public static function arrayKeySort($arrays)
    {
        if(is_array($arrays)) {
            foreach ($arrays as $key=>$value) {
                $arrays[$key] = is_array($value) ? self::arrayKeySort($value) : $value;
            }
            ksort($arrays);
            reset($arrays);
            return $arrays;
        }
        return false;
    }

    /**
     * 字节转换
     * 输出当前内容占用,用法: echo byteConvert(memory_get_usage()).PHP_EOL;
     * @param $size
     * @return string
     */
    public static function byteConvert($size){
        $unit=array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }

    /**
     * 输入框值过滤
     * @param $value
     * @return string
     */
    public static function inputFilter($value)
    {
        return htmlspecialchars ($value, ENT_QUOTES);
    }

    /**
     * 二维数组排序
     * @param $arrays array 要排序的数据
     * @param $field string 排序字段
     * @param $sort int 升(SORT_ASC) 降(SORT_DESC)序
     * @return array
     * eg:
    $arrays = array(
    array('age'=>18, 'name'=>'张三'),
    array('age'=>23, 'name'=>'李四'),
    array('age'=>20, 'name'=>'王五'),
    array('age'=>21, 'name'=>'赵六'),
    );
    print_r(multiArraySort($arrays));
     */
    public static function multiArraySort($arrays, $field, $sort=SORT_DESC)
    {
        if(is_array($arrays) && count($arrays) > 0)
        {
            $arraySorts = array();
            foreach($arrays as $uniqid => $array) {
                foreach($array as $k=>$v) {
                    $arraySorts[$k][$uniqid] = $v;
                }
            }
            array_multisort($arraySorts[$field], $sort, $arrays);
        }
        return $arrays;
    }

    public static function br2nl($string) {
        return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
    }

    /**
     * 过滤Json字符串，某些通过手动拼装的json字符，包含一些特殊字符导致php解析错误
     * 例如：$str = '{"test":"Test 79\1 , ABC"}';
     */
    public static function filterJsonStr($str)
    {
        $arrays = str_split($str); $k=0;
        if(is_array($arrays)) foreach($arrays as $i=>$char)
        {
            if($k > 0) {$k--; continue;}
            if("\\" == $char)
            {
                if(isset($arrays[$i+1]))
                {
                    if($arrays[$i+1] == '"' || $arrays[$i+1] == "'"){}
                    else
                    {
                        if($arrays[$i+1] == "\\")
                        {
                            $k = 0;
                            while(true) {
                                if(! isset($arrays[$i+$k]) || "\\" != $arrays[$i+$k]) break; $k++;
                            }
                            if($k%2 != 0) {
                                if($arrays[$i+$k] == '"' || $arrays[$i+$k] == "'"){} else {
                                    unset($arrays[$i]);
                                }
                            }
                            else {
                                if($arrays[$i+$k] == '"' || $arrays[$i+$k] == "'") unset($arrays[$i]);
                            }
                        }
                        else {
                            unset($arrays[$i]);
                        }
                    }
                }
                else {
                    unset($arrays[$i]);
                }
            }
        }
        return implode("", $arrays);
    }

    public static function isAjaxRequest() {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? true : false;
    }

    /**
     * 退出登录的时候，如果session或者cookie清除不干净，往往会造成各种问题。尤其是当你的session在服务器上是用数据库驱动存储的。使用上面的代码可以彻底清除干净
     */
    public static function logout()
    {
        $_SESSION = array();
        isset($_COOKIE[session_name()]) && setcookie(session_name(), '', time()-1, '/');
        session_destroy();
    }

    /**
     * 格式化SQL语句, 传入sql可换行方便程序开发理解
     * @param  string $sql sql语句
     * @return string
     */
    public static function formatSQL($sql) {
        return trim(preg_replace(array("/\n/", "/\s+/"), " ", $sql));
    }

    /**
     * 日期根据时区转换
     * 更多时间请查看：http://www.php.net/manual/zh/timezones.php
     */
    public static function toTimeZone($src,
                                      $from_tz = 'Asia/Shanghai', $to_tz = 'America/Los_Angeles', $fm = 'Y-m-d H:i:s') {
        $datetime = new DateTime($src, new DateTimeZone($from_tz));
        $datetime->setTimezone(new DateTimeZone($to_tz));
        return $datetime->format($fm);
    }
}
?>