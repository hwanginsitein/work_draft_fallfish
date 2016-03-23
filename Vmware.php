<?php
class Vmware {
    static private $instance;
    private $domain;
    static public $authorization;
    static public $organizationUrl;
    static public $vdcUrl;
    private function __construct() {
        
    }
    static function getInstance($domain="https://utm.fallage.com"){
        if(isset(static::$instance)){
            echo "logined";
            return static::$instance;
        }else{
            static::$instance = new Vmware();
            static::$instance->domain = $domain;
            return static::$instance;
        }
    }
    public function login($user="test1",$org="fallfish",$password="123.com"){
        if(isset(static::$authorization)){
            echo "logined";return $this;
        }
        $userInfo = "$user@$org:$password";
        $Authorization_encode = base64_encode($userInfo);
        $ch = curl_init();
        $requestUrl = "/api/sessions";
        $headerArr = ["Accept: application/*+xml;version=5.5","Authorization: Basic $Authorization_encode"];
        $curlArray = [
            [CURLOPT_URL,$this->domain.$requestUrl],[CURLOPT_CUSTOMREQUEST,'POST'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,1]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $str = "HTTP/1.1 401 Unauthorized";
        if(strstr($response,$str)){
            echo $str;return $this;
        }
        //header("Content-type:text/xml");
        $header_size = curl_getinfo($ch,CURLINFO_HEADER_SIZE);
        $xml = substr($response,$header_size);
        preg_match('/x-vcloud-authorization: ([\s\S]+)\nSet-Cookie/', $response,$match);
        $authorization = $match[1];
        $simpleXML = simplexml_load_string($xml);
        $organzationUrl = $this->getXMLAttr($simpleXML->Link, ["key"=>"type","val"=>"application/vnd.vmware.vcloud.org+xml"], "href");
        self::$authorization = $authorization;
        self::$organizationUrl = (string)$organzationUrl;
        echo "login successfully<br>",self::$authorization,"<hr>";
        return $this;
    }
    public function logout(){
        if(!isset(self::$authorization)){echo "not logined";}
        $ch = curl_init();
        $requestUrl = "/api/logout";
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$this->domain.$requestUrl],[CURLOPT_CUSTOMREQUEST,'POST'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,1]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $str = "HTTP/1.1 200 OK";
        if(strstr($response,$str)){
            echo "log out successfully";
        }else{
            echo "failure";
        }
    }
    public function getVdcUrl(){
        $requestUrl = self::$organizationUrl;
        $ch = curl_init();
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$requestUrl],[CURLOPT_CUSTOMREQUEST,'GET'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,0]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $simpleXML = simplexml_load_string($response);
        $vdcUrl = $this->getXMLAttr($simpleXML->Link, ["key"=>"type","val"=>"application/vnd.vmware.vcloud.vdc+xml"], "href");
        return (string)$vdcUrl;
    }
    public function listVApps($vdcUrl){
        $requestUrl = $vdcUrl;
        $ch = curl_init();
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$requestUrl],[CURLOPT_CUSTOMREQUEST,'GET'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,0]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $simpleXML = simplexml_load_string($response);
        $vApps = [];
        foreach($simpleXML->ResourceEntities->ResourceEntity as $v){
            if($v['type'] == 'application/vnd.vmware.vcloud.vApp+xml'){
                $vApps[] = $v;
            }
        }
        return $vApps;
    }
    public function getVAppByAttr($vApps,$key_val,$attr){
        $vAppUrl = $this->getXMLAttr($vApps, $key_val, $attr);
        $requestUrl = $vAppUrl;
        $ch = curl_init();
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$requestUrl],[CURLOPT_CUSTOMREQUEST,'GET'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,0]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        file_put_contents("1.txt", $response);
        $simpleXML = simplexml_load_string($response);
        $vAppXML = $simpleXML;
        return $vAppXML;
    }
    public function powerOn($vAppXML,$key_val){
        foreach($vAppXML->Children->Vm as $row){
            if($row[$key_val["key"]] == $key_val["val"]){
                $Vm = $row;
                break;
            }
        }
        $powerOnUrl = (string)$this->getXMLAttr($Vm->Link, ["key"=>"rel","val"=>"power:powerOn"], "href");
        $requestUrl = $powerOnUrl;
        $ch = curl_init();
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$requestUrl],[CURLOPT_CUSTOMREQUEST,'POST'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,0]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $simpleXML = simplexml_load_string($response);
        $attributes = $simpleXML->attributes();
        $status = (string)$attributes['status'];
        if($status == "running"){
            echo "power on successfully";
        }else{
            
        }
    }
    public function powerOff($vAppXML,$key_val){
        foreach($vAppXML->Children->Vm as $row){
            if($row[$key_val["key"]] == $key_val["val"]){
                $Vm = $row;
                break;
            }
        }
        $powerOnUrl = (string)$this->getXMLAttr($Vm->Link, ["key"=>"rel","val"=>"power:powerOff"], "href");
        $requestUrl = $powerOnUrl;
        $ch = curl_init();
        $headerArr = ["Accept:application/*+xml;version=5.5","x-vcloud-authorization:".self::$authorization];
        $curlArray = [
            [CURLOPT_URL,$requestUrl],[CURLOPT_CUSTOMREQUEST,'POST'],[CURLOPT_HTTPHEADER,$headerArr],[CURLOPT_RETURNTRANSFER,1],[CURLOPT_SSL_VERIFYPEER,0],[CURLOPT_SSL_VERIFYHOST,0],[CURLOPT_HEADER,0]
        ];
        $this->curlOptions($ch,$curlArray);
        $response = curl_exec($ch);
        $simpleXML = simplexml_load_string($response);
        p($simpleXML);
        $attributes = $simpleXML->attributes();
        $status = (string)$attributes['status'];
        if($status == "running"){
            echo "power off successfully";
        }else{
            
        }
        
    }
    public function actions(){
        
    }
    private function curlOptions($ch,$curlArray){
        foreach($curlArray as $curlOption){
            curl_setopt($ch,$curlOption[0],$curlOption[1]);
        }
    }
    
    private function getXMLAttr($xmlData,$key_val,$attr){
        foreach($xmlData as $row){
            if($row[$key_val["key"]] == $key_val["val"]){
                return $row[$attr];
            }
        }
    }
}


$vmware = Vmware::getInstance();
$vmware->login();
$vdcUrl = $vmware->getVdcUrl();
$vApps = $vmware->listVApps($vdcUrl);
var_dump($vApps);
$vAppXML = $vmware->getVAppByAttr($vApps,["key"=>"name","val"=>"vApp_tolly.tu_1"],"href");
$vmware->powerOn($vAppXML,['key'=>"name","val"=>"centos"]);

function p($var){
    echo "<pre>";
    print_r($var);
}