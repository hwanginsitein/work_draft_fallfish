<?php
class ZabbixApi {
    private $headers;
    private $url;
    private $user;
    private $password;

    function __construct($user, $password, $url, $header) {
        $this->headers = array($header);
        $this->url = $url;
        $this->user = $user;
        $this->password = $password;
    }

    private function doCurl($d) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($d));
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function userLogin() {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "user.login",
            "params" => array(
                "user" => $this->user,
                "password" => $this->password,
                "userData" => true,
            ),
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data['result']['sessionid'];
    }

    function hostgroupCreate($sessionid, $name) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "hostgroup.create",
            "params" => array(
                "name" => $name,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }
    function hostgroupGet($sessionid) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "hostgroup.get",
            "params" => array(
                "output" => "extend",
                /*
                "filter"=>array(
                    "host" => array(
                        "Zabbix server",
                        "Linux server"
                    )
                )
                 */
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function hostCreate($sessionid, $ip, $gid) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "host.create",
            "params" => array(
                "host" => $ip,
                "name" => $ip,
                "interfaces" => array(
                    array(
                        "type" => 1,
                        "main" => 1,
                        "useip" => 1,
                        "ip" => "127.0.0.1",
                        "dns" => "",
                        "port" => "10050",
                    ),
                ),
                "groups" => array(
                    array(
                        "groupid" => $gid,
                    ),
                ),
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function hostUpdate($sessionid, $hid, $d) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "host.update",
            "params" => array(
                "hostid" => $hid,
                "status" => $d,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }
    function hostGet($sessionid) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "host.get",
            "params" => array(
                "output" => "extend",
                /*
                "filter"=>array(
                    "host" => array(
                        "Zabbix server",
                        "Linux server"
                    )
                )
                 */
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }
    
    function hostGetByHostid($sessionid,$hostid){
            $d=array(
                "jsonrpc"=>"2.0",
                "method"=>"host.get",
                "params"=>array(
                    "output"=>'extend',
                    "filter"=>array(
                        "host" => $hostid//array
                    ),
                ),
                "auth"=>$sessionid,
                "id"=>1,
            );
            $output = $this->doCurl($d);
            $ot = explode("/json",$output);
            $data = json_decode($ot[1], true);
            return $data;
    }

    function hostinterfaceGet($sessionid, $hid) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "hostinterface.get",
            "params" => array(
                "output" => "extend",
                "hostids" => $hid,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function itemCreate($sessionid, $hid, $name, $key, $interfaceid, $history) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "item.create",
            "params" => array(
                "hostid" => $hid,
                "name" => $name,
                "key_" => $key,
                "type" => 0,
                "value_type" => 3,
                "history" => $history,
                "interfaceid" => $interfaceid,
                "delay" => 60,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function graphCreate($sessionid, $itemid, $name) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "graph.create",
            "params" => array(
                "name" => $name,
                "width" => 900,
                "height" => 200,
                "gitems" => array(
                    array(
                        "itemid" => $itemid,
                        "color" => "00AA00"
                    ),
                ),
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }
    function graphGet($sessionid, $hostids) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "graph.get",
            "params" => array(
                "output" => "extend",
                "sortfield" => 'name',
                "hostids" => $hostids,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function triggerCreate($sessionid, $description, $expression) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "trigger.create",
            "params" => array(
                "description" => $description,
                "expression" => $expression,
                "priority" => 2,
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }
    function triggerGet($sessionid){
            $d= array(
                    "jsonrpc"=>"2.0",
                    "method"=>"trigger.get",
                    "params"=>array(
                            //"triggerids"=>"13636",
                            "hostids"=>"10122",
                            "output"=>"extend",
                            "selectFunctions"=>"extend"
                    ),
                    "auth"=>$sessionid,
                    "id"=>1,
            );
            $output = $this->doCurl($d);
            $ot = explode("/json",$output);
            $data = json_decode($ot[1], true);
            return $data;
    }
    function eventGet($sessionid, $objectids, $acknowledged = 0) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "event.get",
            "params" => array(
                "output" => "extend",
                "select_acknowledges" => "extend",
                "objectids" => $objectids,
                "source" => 0,
                "acknowledged" => $acknowledged,
                "sortfield" => array("clock", "eventid"),
                "sortorder" => "DESC",
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

    function eventAcknowledge($sessionid, $eventids) {
        $d = array(
            "jsonrpc" => "2.0",
            "method" => "event.acknowledge",
            "params" => array(
                "eventids" => $eventids,
                "message" => "知悉"
            ),
            "auth" => $sessionid,
            "id" => 1,
        );
        $output = $this->doCurl($d);
        $ot = explode("/json", $output);
        $data = json_decode($ot[1], true);
        return $data;
    }

}
function p($v){
    var_dump($v);
}
//========报警列表显示、定时查询报警信息并发送邮件========
$user = "Admin";
$password = "zabbix";
$url = "http://192.168.80.92/zabbix/api_jsonrpc.php";
$header = "Content-Type:application/json";
$zabbix = new ZabbixApi($user, $password, $url, $header);
$sessionid = $zabbix->userLogin();
$result = $zabbix->triggerGet($sessionid);
var_dump($result);exit;
$objectids = array("13601", "13500");//?
//$objectids = array(10122);
$eg = $zabbix->eventGet($sessionid, $objectids, 1);
echo json_encode($eg);
$eventids = array(20, 96);
$ea = $zabbix->eventAcknowledge($sessionid, $eventids);
echo json_encode($ea);
exit;
//==================================================
//=====================平台用=============================
//$ip = "101.81.67.74";
$ip = "121.40.71.240";
$hgn = time();//群组名（uid_云账号id）
$hgn = "3_1_".time();
$jk = array(
    array("name"=>"服务器存活","key"=>"agent.ping"),
    array("name"=>"网络流入速率","key"=>"net.if.in[ens32]"),
    array("name"=>"网络流出速率","key"=>"net.if.out[ens32]"),
    array("name"=>"TCP活动状态","key"=>"net.tcp.service[tcp,127.0.0.1,80]"),
    array("name"=>"系统平均负载","key"=>"system.cpu.load[percpu,avg1]"),
    array("name"=>"CPU使用率","key"=>"system.cpu.util[,user,avg1]"),
    array("name"=>"磁盘IO读","key"=>"vfs.dev.read[all,sps,avg1]"),
    array("name"=>"磁盘IO写","key"=>"vfs.dev.write[all,sps,avg1]"),
    array("name"=>"磁盘使用率","key"=>"vfs.fs.size[/,free]"),
    array("name"=>"内存使用率","key"=>"vm.memory.size[free]"),
);
//
$hosts = $zabbix->hostGet($sessionid);
//p($hosts);exit;
//$hostid = $hosts['result'][0]['hostid'];
$graph = $zabbix->graphGet($sessionid,10122);
p($graph);exit;
//p($hosts);exit;
//$gd = $zabbix->hostgroupCreate($sessionid,$hgn);
//$hostgroup = $zabbix->hostgroupGet($sessionid);
//p($gd);
//p($hostgroup);exit;
//$hcd = $zabbix->hostCreate($sessionid,$ip,$hostgroup['result'][count($hostgroup['result'])-1]['groupid']);
//p($hcd);exit;
//$hud = $zabbix->hostUpdate($sessionid,$hcd['result']['hostids'][0],1);//禁用主机
//var_dump($hud);
//$hg = $zabbix->hostinterfaceGet($sessionid,$hcd['result']['hostids'][0]);
$hg = $zabbix->hostinterfaceGet($sessionid,10122);
//=====================监控和图表========================
foreach($jk as $v){
    /*
    $ic = $zabbix->itemCreate($sessionid,$hcd['result']['hostids'][0],$v['name'],$v['key'],$hg['result'][0]['interfaceid'],7);
    $gc = $zabbix->graphCreate($sessionid,$ic['result']['itemids'][0],$v['name']);
     */
    $ic = $zabbix->itemCreate($sessionid,10122,$v['name'],$v['key'],$hg['result'][0]['interfaceid'],7);
    $gc = $zabbix->graphCreate($sessionid,$ic['result']['itemids'][0],$v['name']);
    var_dump('ic');
    var_dump($ic);
    var_dump('gc');
    var_dump($gc);
}
exit;
//?graphids itemids
//=============================================
$hud = $zabbix->hostUpdate($sessionid,$hcd['result']['hostids'][0],0);//开启主机

//======================报警=======================
$description = "CPU使用率";
$expression = "{".$ip.":system.cpu.util[,user,avg1].avg(5,5)}>80";
$tc = $zabbix->triggerCreate($sessionid,$description,$expression);
//=============================================
//==================================================
var_dump($tc);
die("***");


