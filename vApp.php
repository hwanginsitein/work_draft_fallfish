HTTP/1.1 200 OK
Date: Wed, 23 Mar 2016 15:54:06 GMT
Vary: Accept-Encoding
Date: Wed, 23 Mar 2016 15:54:06 GMT
Content-Type: application/vnd.vmware.vcloud.vApp+xml; version=5.5
Transfer-Encoding: chunked

<?xml version="1.0" encoding="UTF-8"?>
<VApp xmlns="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ovfDescriptorUploaded="true" deployed="true" status="4" name="vApp_tolly.tu_1" id="urn:vcloud:vapp:e44b6b3d-7991-4f76-9b0c-a2289498f730" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730" xsi:schemaLocation="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2.22.0/CIM_VirtualSystemSettingData.xsd http://www.vmware.com/schema/ovf http://www.vmware.com/schema/ovf http://schemas.dmtf.org/ovf/envelope/1 http://schemas.dmtf.org/ovf/envelope/1/dsp8023_1.1.0.xsd http://schemas.dmtf.org/ovf/environment/1 http://schemas.dmtf.org/ovf/envelope/1/dsp8027_1.1.0.xsd http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2.22.0/CIM_ResourceAllocationSettingData.xsd">
    <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/power/action/powerOff"/>
    <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/power/action/reboot"/>
    <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/power/action/reset"/>
    <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/power/action/shutdown"/>
    <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/power/action/suspend"/>
    <Link rel="deploy" type="application/vnd.vmware.vcloud.deployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/deploy"/>
    <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/undeploy"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.vAppNetwork+xml" name="net_vdc" href="https://utm.fallage.com/api/network/c2a189c4-3b9b-44d4-97af-8272f1b1213c"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/controlAccess/"/>
    <Link rel="controlAccess" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/controlAccess"/>
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="edit" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/metadata"/>
    <Link rel="ovf" type="text/xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/ovf"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/productSections/"/>
    <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/createSnapshot"/>
    <Link rel="snapshot:revertToCurrent" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/revertToCurrentSnapshot"/>
    <Link rel="snapshot:removeAll" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/action/removeAllSnapshots"/>
    <Description/>
    <LeaseSettingsSection type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/leaseSettingsSection/" ovf:required="false">
        <ovf:Info>Lease settings section</ovf:Info>
        <Link rel="edit" type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/leaseSettingsSection/"/>
        <DeploymentLeaseInSeconds>0</DeploymentLeaseInSeconds>
        <StorageLeaseInSeconds>0</StorageLeaseInSeconds>
    </LeaseSettingsSection>
    <ovf:StartupSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/startupSection/" vcloud:type="application/vnd.vmware.vcloud.startupSection+xml">
        <ovf:Info>VApp startup section</ovf:Info>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="平台测试服务器"/>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="win7"/>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="平台测试环境"/>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="centos"/>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="纷讯测试"/>
        <Link rel="edit" type="application/vnd.vmware.vcloud.startupSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/startupSection/"/>
    </ovf:StartupSection>
    <ovf:NetworkSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/networkSection/" vcloud:type="application/vnd.vmware.vcloud.networkSection+xml">
        <ovf:Info>The list of logical networks</ovf:Info>
        <ovf:Network ovf:name="net_vdc">
            <ovf:Description/>
        </ovf:Network>
    </ovf:NetworkSection>
    <NetworkConfigSection type="application/vnd.vmware.vcloud.networkConfigSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/networkConfigSection/" ovf:required="false">
        <ovf:Info>The configuration parameters for logical networks</ovf:Info>
        <Link rel="edit" type="application/vnd.vmware.vcloud.networkConfigSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/networkConfigSection/"/>
        <NetworkConfig networkName="net_vdc">
            <Link rel="repair" href="https://utm.fallage.com/api/admin/network/c2a189c4-3b9b-44d4-97af-8272f1b1213c/action/reset"/>
            <Description/>
            <Configuration>
                <IpScopes>
                    <IpScope>
                        <IsInherited>true</IsInherited>
                        <Gateway>192.168.80.1</Gateway>
                        <Netmask>255.255.255.0</Netmask>
                        <Dns1>192.168.80.21</Dns1>
                        <Dns2>192.168.80.254</Dns2>
                        <DnsSuffix>fallfish.local</DnsSuffix>
                        <IsEnabled>true</IsEnabled>
                        <IpRanges>
                            <IpRange>
                                <StartAddress>192.168.80.230</StartAddress>
                                <EndAddress>192.168.80.240</EndAddress>
                            </IpRange>
                        </IpRanges>
                    </IpScope>
                    <IpScope>
                        <IsInherited>true</IsInherited>
                        <Gateway>192.168.2.1</Gateway>
                        <Netmask>255.255.255.0</Netmask>
                        <IsEnabled>true</IsEnabled>
                        <IpRanges>
                            <IpRange>
                                <StartAddress>192.168.2.100</StartAddress>
                                <EndAddress>192.168.2.200</EndAddress>
                            </IpRange>
                        </IpRanges>
                    </IpScope>
                </IpScopes>
                <ParentNetwork name="net_vdc" id="9590e3f9-33d3-4c42-9d2f-88c1b3957dc5" href="https://utm.fallage.com/api/admin/network/9590e3f9-33d3-4c42-9d2f-88c1b3957dc5"/>
                <FenceMode>bridged</FenceMode>
                <RetainNetInfoAcrossDeployments>false</RetainNetInfoAcrossDeployments>
            </Configuration>
            <IsDeployed>true</IsDeployed>
        </NetworkConfig>
    </NetworkConfigSection>
    <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730/snapshotSection" ovf:required="false">
        <ovf:Info>Snapshot information section</ovf:Info>
        <Snapshot size="90194313216" poweredOn="true" created="2016-01-14T22:49:11.221+08:00"/>
    </SnapshotSection>
    <DateCreated>2015-11-30T13:14:26.070+08:00</DateCreated>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="tolly.tu" href="https://utm.fallage.com/api/admin/user/957ef3b0-07bc-4cfb-a71f-55e60a43413d"/>
    </Owner>
    <InMaintenanceMode>false</InMaintenanceMode>
    <Children>
        <Vm nestedHypervisorEnabled="false" needsCustomization="true" deployed="true" status="4" name="centos" id="urn:vcloud:vm:c1a10bb3-876a-4366-a337-fe9fe9c3a2cd" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd">
            <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/power/action/powerOff"/>
            <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/power/action/reboot"/>
            <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/power/action/reset"/>
            <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/power/action/shutdown"/>
            <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/power/action/suspend"/>
            <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/undeploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/screen"/>
            <Link rel="screen:acquireTicket" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/screen/action/acquireTicket"/>
            <Link rel="screen:acquireMksTicket" type="application/vnd.vmware.vcloud.mksTicket+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/screen/action/acquireMksTicket"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/disk/action/detach"/>
            <Link rel="installVmwareTools" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/installVMwareTools"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/createSnapshot"/>
            <Link rel="snapshot:revertToCurrent" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/revertToCurrentSnapshot"/>
            <Link rel="snapshot:removeAll" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/removeAllSnapshots"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="centos" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
            <Description/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>centos</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-09</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:14</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:ipAddress="192.168.80.171" vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">net_vdc</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "net_vdc"</rasd:Description>
                    <rasd:ElementName>Network adapter 0</rasd:ElementName>
                    <rasd:InstanceID>1</rasd:InstanceID>
                    <rasd:ResourceSubType>E1000</rasd:ResourceSubType>
                    <rasd:ResourceType>10</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>SCSI Controller</rasd:Description>
                    <rasd:ElementName>SCSI Controller 0</rasd:ElementName>
                    <rasd:InstanceID>2</rasd:InstanceID>
                    <rasd:ResourceSubType>lsilogic</rasd:ResourceSubType>
                    <rasd:ResourceType>6</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:Description>Hard disk</rasd:Description>
                    <rasd:ElementName>Hard disk 1</rasd:ElementName>
                    <rasd:HostResource vcloud:capacity="32768" vcloud:busSubType="lsilogic" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 0</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource>CentOS-6.5-x86_64-bin-DVD.iso</rasd:HostResource>
                    <rasd:InstanceID>3000</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
                    <rasd:ResourceSubType>vmware.cdrom.iso</rasd:ResourceSubType>
                    <rasd:ResourceType>15</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>Floppy Drive</rasd:Description>
                    <rasd:ElementName>Floppy Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>8000</rasd:InstanceID>
                    <rasd:ResourceType>14</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>2 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>2</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">1</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>4096 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>4096</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="101" vcloud:href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="centos64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>CentOS 4/5/6 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="net_vdc" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IpAddress>192.168.80.171</IpAddress>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:14</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>false</Enabled>
                <ChangeSid>false</ChangeSid>
                <VirtualMachineId>c1a10bb3-876a-4366-a337-fe9fe9c3a2cd</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>centos</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
                <VMWareTools version="9354"/>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
                <Snapshot size="38654705664" poweredOn="true" created="2016-01-06T11:22:53.638+08:00"/>
            </SnapshotSection>
            <VAppScopedLocalId>983ce110-1c5d-4021-a90a-c11edc352014</VAppScopedLocalId>
            <ovfenv:Environment xmlns:ns10="http://www.vmware.com/schema/ovfenv" ovfenv:id="" ns10:vCenterId="vm-236">
                <ovfenv:PlatformSection>
                    <ovfenv:Kind>VMware ESXi</ovfenv:Kind>
                    <ovfenv:Version>5.5.0</ovfenv:Version>
                    <ovfenv:Vendor>VMware, Inc.</ovfenv:Vendor>
                    <ovfenv:Locale>zh_CN</ovfenv:Locale>
                </ovfenv:PlatformSection>
                <ve:EthernetAdapterSection xmlns:ve="http://www.vmware.com/schema/ovfenv" xmlns="http://schemas.dmtf.org/ovf/environment/1" xmlns:oe="http://schemas.dmtf.org/ovf/environment/1">
                    <ve:Adapter ve:mac="00:50:56:01:00:14" ve:network="dvPortGroup" ve:unitNumber="7"/>
   
                </ve:EthernetAdapterSection>
            </ovfenv:Environment>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-c1a10bb3-876a-4366-a337-fe9fe9c3a2cd/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
        <Vm nestedHypervisorEnabled="false" needsCustomization="true" deployed="true" status="4" name="纷讯测试" id="urn:vcloud:vm:4a06eb16-5abf-4b88-8dfd-b8ca59a28824" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824">
            <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/power/action/powerOff"/>
            <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/power/action/reboot"/>
            <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/power/action/reset"/>
            <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/power/action/shutdown"/>
            <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/power/action/suspend"/>
            <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/undeploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/screen"/>
            <Link rel="screen:acquireTicket" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/screen/action/acquireTicket"/>
            <Link rel="screen:acquireMksTicket" type="application/vnd.vmware.vcloud.mksTicket+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/screen/action/acquireMksTicket"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/disk/action/detach"/>
            <Link rel="installVmwareTools" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/installVMwareTools"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/createSnapshot"/>
            <Link rel="snapshot:revertToCurrent" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/revertToCurrentSnapshot"/>
            <Link rel="snapshot:removeAll" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/removeAllSnapshots"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="纷讯测试" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
            <Description/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>纷讯测试</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-09</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:18</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">net_vdc</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "net_vdc"</rasd:Description>
                    <rasd:ElementName>Network adapter 0</rasd:ElementName>
                    <rasd:InstanceID>1</rasd:InstanceID>
                    <rasd:ResourceSubType>E1000</rasd:ResourceSubType>
                    <rasd:ResourceType>10</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>SCSI Controller</rasd:Description>
                    <rasd:ElementName>SCSI Controller 0</rasd:ElementName>
                    <rasd:InstanceID>2</rasd:InstanceID>
                    <rasd:ResourceSubType>VirtualSCSI</rasd:ResourceSubType>
                    <rasd:ResourceType>6</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:Description>Hard disk</rasd:Description>
                    <rasd:ElementName>Hard disk 1</rasd:ElementName>
                    <rasd:HostResource vcloud:capacity="20480" vcloud:busSubType="VirtualSCSI" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 0</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource>CentOS-6.5-x86_64-bin-DVD.iso</rasd:HostResource>
                    <rasd:InstanceID>3000</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
                    <rasd:ResourceSubType>vmware.cdrom.iso</rasd:ResourceSubType>
                    <rasd:ResourceType>15</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>Floppy Drive</rasd:Description>
                    <rasd:ElementName>Floppy Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>8000</rasd:InstanceID>
                    <rasd:ResourceType>14</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>2 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>2</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">1</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>4096 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>4096</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="80" vcloud:href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="rhel6_64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>Red Hat Enterprise Linux 6 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="net_vdc" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:18</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>false</Enabled>
                <ChangeSid>false</ChangeSid>
                <VirtualMachineId>4a06eb16-5abf-4b88-8dfd-b8ca59a28824</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>fxt</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
                <Snapshot size="25769803776" poweredOn="true" created="2016-01-14T22:49:11.221+08:00"/>
            </SnapshotSection>
            <VAppScopedLocalId>97315915-0887-4575-bd0f-3f8e0c678cbb</VAppScopedLocalId>
            <ovfenv:Environment xmlns:ns10="http://www.vmware.com/schema/ovfenv" ovfenv:id="" ns10:vCenterId="vm-287">
                <ovfenv:PlatformSection>
                    <ovfenv:Kind>VMware ESXi</ovfenv:Kind>
                    <ovfenv:Version>5.5.0</ovfenv:Version>
                    <ovfenv:Vendor>VMware, Inc.</ovfenv:Vendor>
                    <ovfenv:Locale>zh_CN</ovfenv:Locale>
                </ovfenv:PlatformSection>
                <ve:EthernetAdapterSection xmlns:ve="http://www.vmware.com/schema/ovfenv" xmlns="http://schemas.dmtf.org/ovf/environment/1" xmlns:oe="http://schemas.dmtf.org/ovf/environment/1">
                    <ve:Adapter ve:mac="00:50:56:01:00:18" ve:network="dvPortGroup" ve:unitNumber="7"/>
   
                </ve:EthernetAdapterSection>
            </ovfenv:Environment>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-4a06eb16-5abf-4b88-8dfd-b8ca59a28824/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
        <Vm nestedHypervisorEnabled="false" needsCustomization="true" deployed="true" status="4" name="平台测试环境" id="urn:vcloud:vm:2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea">
            <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/power/action/powerOff"/>
            <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/power/action/reboot"/>
            <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/power/action/reset"/>
            <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/power/action/shutdown"/>
            <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/power/action/suspend"/>
            <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/undeploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/screen"/>
            <Link rel="screen:acquireTicket" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/screen/action/acquireTicket"/>
            <Link rel="screen:acquireMksTicket" type="application/vnd.vmware.vcloud.mksTicket+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/screen/action/acquireMksTicket"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/disk/action/detach"/>
            <Link rel="installVmwareTools" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/installVMwareTools"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/createSnapshot"/>
            <Link rel="snapshot:revertToCurrent" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/revertToCurrentSnapshot"/>
            <Link rel="snapshot:removeAll" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/removeAllSnapshots"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="平台测试环境" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
            <Description/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>平台测试环境</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-09</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:17</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">net_vdc</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "net_vdc"</rasd:Description>
                    <rasd:ElementName>Network adapter 0</rasd:ElementName>
                    <rasd:InstanceID>1</rasd:InstanceID>
                    <rasd:ResourceSubType>E1000</rasd:ResourceSubType>
                    <rasd:ResourceType>10</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>SCSI Controller</rasd:Description>
                    <rasd:ElementName>SCSI Controller 0</rasd:ElementName>
                    <rasd:InstanceID>2</rasd:InstanceID>
                    <rasd:ResourceSubType>VirtualSCSI</rasd:ResourceSubType>
                    <rasd:ResourceType>6</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:Description>Hard disk</rasd:Description>
                    <rasd:ElementName>Hard disk 1</rasd:ElementName>
                    <rasd:HostResource vcloud:capacity="20480" vcloud:busSubType="VirtualSCSI" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 0</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource>CentOS-6.5-x86_64-bin-DVD.iso</rasd:HostResource>
                    <rasd:InstanceID>3000</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
                    <rasd:ResourceSubType>vmware.cdrom.iso</rasd:ResourceSubType>
                    <rasd:ResourceType>15</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>Floppy Drive</rasd:Description>
                    <rasd:ElementName>Floppy Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>8000</rasd:InstanceID>
                    <rasd:ResourceType>14</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>2 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>2</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">1</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>4096 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>4096</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="80" vcloud:href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="rhel6_64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>Red Hat Enterprise Linux 6 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="net_vdc" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:17</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>false</Enabled>
                <ChangeSid>false</ChangeSid>
                <VirtualMachineId>2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>lnp</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
                <Snapshot size="25769803776" poweredOn="true" created="2016-01-13T00:06:31.341+08:00"/>
            </SnapshotSection>
            <VAppScopedLocalId>abe5c075-25eb-4827-903e-390bbbebc384</VAppScopedLocalId>
            <ovfenv:Environment xmlns:ns10="http://www.vmware.com/schema/ovfenv" ovfenv:id="" ns10:vCenterId="vm-263">
                <ovfenv:PlatformSection>
                    <ovfenv:Kind>VMware ESXi</ovfenv:Kind>
                    <ovfenv:Version>5.5.0</ovfenv:Version>
                    <ovfenv:Vendor>VMware, Inc.</ovfenv:Vendor>
                    <ovfenv:Locale>zh_CN</ovfenv:Locale>
                </ovfenv:PlatformSection>
                <ve:EthernetAdapterSection xmlns:ve="http://www.vmware.com/schema/ovfenv" xmlns="http://schemas.dmtf.org/ovf/environment/1" xmlns:oe="http://schemas.dmtf.org/ovf/environment/1">
                    <ve:Adapter ve:mac="00:50:56:01:00:17" ve:network="dvPortGroup" ve:unitNumber="7"/>
   
                </ve:EthernetAdapterSection>
            </ovfenv:Environment>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-2d8a4b2c-9cc0-46d1-9662-d75fe57bcbea/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
        <Vm nestedHypervisorEnabled="false" needsCustomization="true" deployed="true" status="4" name="win7" id="urn:vcloud:vm:4b8246b7-c664-4433-a2ce-7ae83125ec7d" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d">
            <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/power/action/powerOff"/>
            <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/power/action/reboot"/>
            <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/power/action/reset"/>
            <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/power/action/shutdown"/>
            <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/power/action/suspend"/>
            <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/action/undeploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/screen"/>
            <Link rel="screen:acquireTicket" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/screen/action/acquireTicket"/>
            <Link rel="screen:acquireMksTicket" type="application/vnd.vmware.vcloud.mksTicket+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/screen/action/acquireMksTicket"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/disk/action/detach"/>
            <Link rel="installVmwareTools" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/action/installVMwareTools"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/action/createSnapshot"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="win7" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
            <Description/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>win7</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-09</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:07</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:ipAddress="192.168.80.123" vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">net_vdc</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "net_vdc"</rasd:Description>
                    <rasd:ElementName>Network adapter 0</rasd:ElementName>
                    <rasd:InstanceID>1</rasd:InstanceID>
                    <rasd:ResourceSubType>E1000</rasd:ResourceSubType>
                    <rasd:ResourceType>10</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>SCSI Controller</rasd:Description>
                    <rasd:ElementName>SCSI Controller 0</rasd:ElementName>
                    <rasd:InstanceID>2</rasd:InstanceID>
                    <rasd:ResourceSubType>lsilogicsas</rasd:ResourceSubType>
                    <rasd:ResourceType>6</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:Description>Hard disk</rasd:Description>
                    <rasd:ElementName>Hard disk 1</rasd:ElementName>
                    <rasd:HostResource vcloud:capacity="32768" vcloud:busSubType="lsilogicsas" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 0</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource>cn_windows_7_ultimate_with_sp1_x64_dvd_u_677408（64位sp1）.iso</rasd:HostResource>
                    <rasd:InstanceID>3000</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
                    <rasd:ResourceSubType>vmware.cdrom.iso</rasd:ResourceSubType>
                    <rasd:ResourceType>15</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>Floppy Drive</rasd:Description>
                    <rasd:ElementName>Floppy Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>8000</rasd:InstanceID>
                    <rasd:ResourceType>14</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>1 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>1</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">1</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>2048 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>2048</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="102" vcloud:href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="windows7_64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>Microsoft Windows 7 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="net_vdc" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IpAddress>192.168.80.123</IpAddress>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:07</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>false</Enabled>
                <ChangeSid>true</ChangeSid>
                <VirtualMachineId>4b8246b7-c664-4433-a2ce-7ae83125ec7d</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>win7</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
                <VMWareTools version="9354"/>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
            </SnapshotSection>
            <VAppScopedLocalId>27c22208-a753-4e24-bccf-7e8f709771e4</VAppScopedLocalId>
            <ovfenv:Environment xmlns:ns10="http://www.vmware.com/schema/ovfenv" ovfenv:id="" ns10:vCenterId="vm-188">
                <ovfenv:PlatformSection>
                    <ovfenv:Kind>VMware ESXi</ovfenv:Kind>
                    <ovfenv:Version>5.5.0</ovfenv:Version>
                    <ovfenv:Vendor>VMware, Inc.</ovfenv:Vendor>
                    <ovfenv:Locale>zh_CN</ovfenv:Locale>
                </ovfenv:PlatformSection>
                <ve:EthernetAdapterSection xmlns:ve="http://www.vmware.com/schema/ovfenv" xmlns="http://schemas.dmtf.org/ovf/environment/1" xmlns:oe="http://schemas.dmtf.org/ovf/environment/1">
                    <ve:Adapter ve:mac="00:50:56:01:00:07" ve:network="dvPortGroup" ve:unitNumber="7"/>
   
                </ve:EthernetAdapterSection>
            </ovfenv:Environment>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-4b8246b7-c664-4433-a2ce-7ae83125ec7d/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
        <Vm nestedHypervisorEnabled="false" needsCustomization="true" deployed="true" status="4" name="平台测试服务器" id="urn:vcloud:vm:a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2">
            <Link rel="power:powerOff" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/power/action/powerOff"/>
            <Link rel="power:reboot" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/power/action/reboot"/>
            <Link rel="power:reset" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/power/action/reset"/>
            <Link rel="power:shutdown" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/power/action/shutdown"/>
            <Link rel="power:suspend" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/power/action/suspend"/>
            <Link rel="undeploy" type="application/vnd.vmware.vcloud.undeployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/action/undeploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/screen"/>
            <Link rel="screen:acquireTicket" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/screen/action/acquireTicket"/>
            <Link rel="screen:acquireMksTicket" type="application/vnd.vmware.vcloud.mksTicket+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/screen/action/acquireMksTicket"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/disk/action/detach"/>
            <Link rel="installVmwareTools" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/action/installVMwareTools"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/action/createSnapshot"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="平台测试服务器" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
            <Description/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>平台测试服务器</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-09</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:16</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">net_vdc</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "net_vdc"</rasd:Description>
                    <rasd:ElementName>Network adapter 0</rasd:ElementName>
                    <rasd:InstanceID>1</rasd:InstanceID>
                    <rasd:ResourceSubType>E1000</rasd:ResourceSubType>
                    <rasd:ResourceType>10</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>SCSI Controller</rasd:Description>
                    <rasd:ElementName>SCSI Controller 0</rasd:ElementName>
                    <rasd:InstanceID>2</rasd:InstanceID>
                    <rasd:ResourceSubType>VirtualSCSI</rasd:ResourceSubType>
                    <rasd:ResourceType>6</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:Description>Hard disk</rasd:Description>
                    <rasd:ElementName>Hard disk 1</rasd:ElementName>
                    <rasd:HostResource vcloud:capacity="20480" vcloud:busSubType="VirtualSCSI" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>0</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 0</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource>CentOS-6.5-x86_64-bin-DVD.iso</rasd:HostResource>
                    <rasd:InstanceID>3000</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
                    <rasd:ResourceSubType>vmware.cdrom.iso</rasd:ResourceSubType>
                    <rasd:ResourceType>15</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>Floppy Drive</rasd:Description>
                    <rasd:ElementName>Floppy Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>8000</rasd:InstanceID>
                    <rasd:ResourceType>14</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>2 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>2</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">2</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>4096 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>4096</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="80" vcloud:href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="rhel6_64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>Red Hat Enterprise Linux 6 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="net_vdc" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:16</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>false</Enabled>
                <ChangeSid>false</ChangeSid>
                <VirtualMachineId>a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>ngxphp</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
            </SnapshotSection>
            <VAppScopedLocalId>0dd50851-3400-452e-aaf2-a5f785ca569c</VAppScopedLocalId>
            <ovfenv:Environment xmlns:ns10="http://www.vmware.com/schema/ovfenv" ovfenv:id="" ns10:vCenterId="vm-262">
                <ovfenv:PlatformSection>
                    <ovfenv:Kind>VMware ESXi</ovfenv:Kind>
                    <ovfenv:Version>5.5.0</ovfenv:Version>
                    <ovfenv:Vendor>VMware, Inc.</ovfenv:Vendor>
                    <ovfenv:Locale>zh_CN</ovfenv:Locale>
                </ovfenv:PlatformSection>
                <ve:EthernetAdapterSection xmlns:ve="http://www.vmware.com/schema/ovfenv" xmlns="http://schemas.dmtf.org/ovf/environment/1" xmlns:oe="http://schemas.dmtf.org/ovf/environment/1">
                    <ve:Adapter ve:mac="00:50:56:01:00:16" ve:network="dvPortGroup" ve:unitNumber="7"/>
   
                </ve:EthernetAdapterSection>
            </ovfenv:Environment>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-a8b2ba3a-6469-4dfc-bf93-c1aa2dd24ba2/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
    </Children>
</VApp>