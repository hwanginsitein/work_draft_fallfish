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

//========报警列表显示、定时查询报警信息并发送邮件========
$user = "Admin";
$password = "zabbix";
$url = "http://192.168.80.144/zabbix/api_jsonrpc.php";
$header = "Content-Type:application/json";
$zabbix = new ZabbixApi($user, $password, $url, $header);
$sessionid = $zabbix->userLogin();
$objectids = array("13601", "13500");
$eg = $zabbix->eventGet($sessionid, $objectids, 1);
echo json_encode($eg);
exit;
$eventids = array(20, 96);
$ea = $zabbix->eventAcknowledge($sessionid, $eventids);
var_dump($ea);
var_dump("***");
//==================================================
//=====================平台用=============================
$user = "Admin";
$password = "zabbix";
$url = "http://192.168.80.92/zabbix/api_jsonrpc.php";
$header = "Content-Type:application/json";
$ip = "101.81.67.74";
$hgn = time();//群组名（uid_云账号id）
//
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
//echo(date("Y-m-d H:i:s",1458127890));


$zabbix = new ZabbixApi($user,$password,$url,$header);
$sessionid = $zabbix->userLogin();
$gd = $zabbix->hostgroupCreate($sessionid,$hgn);
$hcd = $zabbix->hostCreate($sessionid,$ip,$gd['result']['groupids'][0]);
var_dump($hcd);exit;
$hud = $zabbix->hostUpdate($sessionid,$hcd['result']['hostids'][0],1);//禁用主机
$hg = $zabbix->hostinterfaceGet($sessionid,$hcd['result']['hostids'][0]);
//=====================监控和图表========================
foreach($jk as $v){
    $ic = $zabbix->itemCreate($sessionid,$hcd['result']['hostids'][0],$v['name'],$v['key'],$hg['result'][0]['interfaceid'],7);
    $gc = $zabbix->graphCreate($sessionid,$ic['result']['itemids'][0],$v['name']);
}
echo "gc";
var_dump($gc);
echo "gc";
//=============================================
$hud = $zabbix->hostUpdate($sessionid,$hcd['result']['hostids'][0],0);//开启主机

//======================报警=======================
$description = "CPU使用率";
$expression = "{101.81.67.74:system.cpu.util[,user,avg1].avg(5,5)}>80";
$tc = $zabbix->triggerCreate($sessionid,$description,$expression);
//=============================================
//==================================================
print_r($tc);
die("***");


