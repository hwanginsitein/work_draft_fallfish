Login
curl -i -k -H "Accept:application/*+xml;version=5.5" -u 'test1@fallfish:123.com' -X POST https://utm.fallage.com/api/sessions
HTTP/1.1 200 OK
Date: Mon, 21 Mar 2016 09:35:54 GMT
Vary: Accept-Encoding
x-vcloud-authorization: nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=
Set-Cookie: vcloud-token=nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=; Secure; Path=/
Content-Type: application/vnd.vmware.vcloud.session+xml; version=5.5
Date: Mon, 21 Mar 2016 09:35:54 GMT
Content-Length: 1286
<Session xmlns="http://www.vmware.com/vcloud/v1.5" userId="urn:vcloud:user:df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb" user="test1" org="fallfish" type="application/vnd.vmware.vcloud.session+xml" href="https://utm.fallage.com/api/session/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="down" type="application/vnd.vmware.vcloud.orgList+xml" href="https://utm.fallage.com/api/org/"/>
    <Link rel="remove" href="https://utm.fallage.com/api/session/"/>
    <Link rel="down" type="application/vnd.vmware.admin.vcloud+xml" href="https://utm.fallage.com/api/admin/"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.query.queryList+xml" href="https://utm.fallage.com/api/query"/>
    <Link rel="entityResolver" type="application/vnd.vmware.vcloud.entity+xml" href="https://utm.fallage.com/api/entity/"/>
    <Link rel="down:extensibility" type="application/vnd.vmware.vcloud.apiextensibility+xml" href="https://utm.fallage.com/api/extensibility"/>
</Session>

List All Organizations
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/org
<OrgList xmlns="http://www.vmware.com/vcloud/v1.5" type="application/vnd.vmware.vcloud.orgList+xml" href="https://utm.fallage.com/api/org/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Org type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
</OrgList>

Get Specific Organization
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544
<Org xmlns="http://www.vmware.com/vcloud/v1.5" name="fallfish" id="urn:vcloud:org:2bf84a53-a37f-4b86-815e-4641f5508544" type="application/vnd.vmware.vcloud.org+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="down" type="application/vnd.vmware.vcloud.vdc+xml" name="fallfish" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.tasksList+xml" href="https://utm.fallage.com/api/tasksList/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.catalog+xml" name="iso" href="https://utm.fallage.com/api/catalog/eaa9c821-e5c9-46cb-911c-de8e994afe09"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544/catalog/eaa9c821-e5c9-46cb-911c-de8e994afe09/controlAccess/"/>
    <Link rel="controlAccess" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544/catalog/eaa9c821-e5c9-46cb-911c-de8e994afe09/action/controlAccess"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.catalog+xml" name="template" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544/catalog/c628966a-f6d7-467a-b650-801802b6f389/controlAccess/"/>
    <Link rel="controlAccess" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/controlAccess"/>
    <Link rel="add" type="application/vnd.vmware.admin.catalog+xml" href="https://utm.fallage.com/api/admin/org/2bf84a53-a37f-4b86-815e-4641f5508544/catalogs"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.orgNetwork+xml" name="net_vdc" href="https://utm.fallage.com/api/network/9590e3f9-33d3-4c42-9d2f-88c1b3957dc5"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.supportedSystemsInfo+xml" href="https://utm.fallage.com/api/supportedSystemsInfo/"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544/metadata"/>
    <Description>fallfish</Description>
    <FullName>fallfish</FullName>
</Org>

Get Catalog
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389
<Catalog xmlns="http://www.vmware.com/vcloud/v1.5" name="template" id="urn:vcloud:catalog:c628966a-f6d7-467a-b650-801802b6f389" type="application/vnd.vmware.vcloud.catalog+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="up" type="application/vnd.vmware.vcloud.org+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/metadata"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.catalogItem+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/catalogItems"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.media+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/upload"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.uploadVAppTemplateParams+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/upload"/>
    <Link rel="copy" type="application/vnd.vmware.vcloud.copyOrMoveCatalogItemParams+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/copy"/>
    <Link rel="move" type="application/vnd.vmware.vcloud.copyOrMoveCatalogItemParams+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/move"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.captureVAppParams+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389/action/captureVApp"/>
    <CatalogItems>
        <CatalogItem type="application/vnd.vmware.vcloud.catalogItem+xml" name="WIN7模板" id="3b861659-1019-4464-b816-301fe138dc22" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22"/>
    </CatalogItems>
    <IsPublished>false</IsPublished>
    <DateCreated>2015-11-30T15:46:09.972+08:00</DateCreated>
    <VersionNumber>6</VersionNumber>
</Catalog>

Get CatalogItem
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22
<CatalogItem xmlns="http://www.vmware.com/vcloud/v1.5" size="0" name="WIN7模板" id="urn:vcloud:catalogitem:3b861659-1019-4464-b816-301fe138dc22" type="application/vnd.vmware.vcloud.catalogItem+xml" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="up" type="application/vnd.vmware.vcloud.catalog+xml" href="https://utm.fallage.com/api/catalog/c628966a-f6d7-467a-b650-801802b6f389"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22/metadata"/>
    <Link rel="edit" type="application/vnd.vmware.vcloud.catalogItem+xml" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22"/>
    <Link rel="remove" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22"/>
    <Entity type="application/vnd.vmware.vcloud.vAppTemplate+xml" name="WIN7模板" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e"/>
    <DateCreated>2015-12-01T09:47:51.414+08:00</DateCreated>
    <VersionNumber>1</VersionNumber>
</CatalogItem>

Retrieve Deployment Information From the VDC / List Org vDC
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed
<Vdc xmlns="http://www.vmware.com/vcloud/v1.5" status="1" name="fallfish" id="urn:vcloud:vdc:a371a699-5470-482c-b480-77d19b8b33ed" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="up" type="application/vnd.vmware.vcloud.org+xml" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/metadata"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.uploadVAppTemplateParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/uploadVAppTemplate"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.media+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/media"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.instantiateOvfParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/instantiateOvf"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.instantiateVAppTemplateParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/instantiateVAppTemplate"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.cloneVAppParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/cloneVApp"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.cloneVAppTemplateParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/cloneVAppTemplate"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.cloneMediaParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/cloneMedia"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.captureVAppParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/captureVApp"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.composeVAppParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/composeVApp"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.diskCreateParams+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/disk"/>
    <Link rel="edgeGateways" type="application/vnd.vmware.vcloud.query.records+xml" href="https://utm.fallage.com/api/admin/vdc/a371a699-5470-482c-b480-77d19b8b33ed/edgeGateways"/>
    <Link rel="add" type="application/vnd.vmware.vcloud.orgVdcNetwork+xml" href="https://utm.fallage.com/api/admin/vdc/a371a699-5470-482c-b480-77d19b8b33ed/networks"/>
    <Link rel="orgVdcNetworks" type="application/vnd.vmware.vcloud.query.records+xml" href="https://utm.fallage.com/api/admin/vdc/a371a699-5470-482c-b480-77d19b8b33ed/networks"/>
    <AllocationModel>AllocationPool</AllocationModel>
    <ComputeCapacity>
        <Cpu>
            <Units>MHz</Units>
            <Allocated>2380</Allocated>
            <Limit>2380</Limit>
            <Reserved>1190</Reserved>
            <Used>0</Used>
            <Overhead>0</Overhead>
        </Cpu>
        <Memory>
            <Units>MB</Units>
            <Allocated>25528</Allocated>
            <Limit>25528</Limit>
            <Reserved>12764</Reserved>
            <Used>18432</Used>
            <Overhead>236</Overhead>
        </Memory>
    </ComputeCapacity>
    <ResourceEntities>
        <ResourceEntity type="application/vnd.vmware.vcloud.vAppTemplate+xml" name="WIN7模板" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="Linux FTP server" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="vApp_tolly.tu_1" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.media+xml" name="CentOS-6.5-x86_64-bin-DVD.iso" href="https://utm.fallage.com/api/media/784a8976-c499-4922-a414-d562a8e93a0c"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.media+xml" name="cn_windows_7_ultimate_with_sp1_x64_dvd_u_677408（64位sp1）.iso" href="https://utm.fallage.com/api/media/2e9c7afa-7981-4907-9cc5-160690d783dd"/>
    </ResourceEntities>
    <AvailableNetworks>
        <Network type="application/vnd.vmware.vcloud.network+xml" name="net_vdc" href="https://utm.fallage.com/api/network/9590e3f9-33d3-4c42-9d2f-88c1b3957dc5"/>
    </AvailableNetworks>
    <Capabilities>
        <SupportedHardwareVersions>
            <SupportedHardwareVersion>vmx-04</SupportedHardwareVersion>
            <SupportedHardwareVersion>vmx-07</SupportedHardwareVersion>
            <SupportedHardwareVersion>vmx-08</SupportedHardwareVersion>
            <SupportedHardwareVersion>vmx-09</SupportedHardwareVersion>
        </SupportedHardwareVersions>
    </Capabilities>
    <NicQuota>0</NicQuota>
    <NetworkQuota>10</NetworkQuota>
    <UsedNetworkCount>0</UsedNetworkCount>
    <VmQuota>0</VmQuota>
    <IsEnabled>true</IsEnabled>
    <VdcStorageProfiles>
        <VdcStorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
    </VdcStorageProfiles>
</Vdc>

Get vAppTemplate
curl -i -k -H "Accept:application/*+xml;version=1.5" -H "x-vcloud-authorization: nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e
<VAppTemplate xmlns="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" ovfDescriptorUploaded="true" goldMaster="false" status="8" name="WIN7模板" id="urn:vcloud:vapptemplate:984d71f9-d5f8-493c-81d1-821a72fe347e" type="application/vnd.vmware.vcloud.vAppTemplate+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://schemas.dmtf.org/ovf/envelope/1 http://schemas.dmtf.org/ovf/envelope/1/dsp8023_1.1.0.xsd http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="catalogItem" type="application/vnd.vmware.vcloud.catalogItem+xml" href="https://utm.fallage.com/api/catalogItem/3b861659-1019-4464-b816-301fe138dc22"/>
    <Link rel="remove" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e"/>
    <Link rel="edit" type="application/vnd.vmware.vcloud.vAppTemplate+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e"/>
    <Link rel="enable" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/action/enableDownload"/>
    <Link rel="disable" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/action/disableDownload"/>
    <Link rel="ovf" type="text/xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/ovf"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/metadata"/>
    <Description/>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="system" href="https://utm.fallage.com/api/admin/user/c319d133-8a55-4bb3-ab3d-ff353c6b5ebf"/>
    </Owner>
    <Children>
        <Vm goldMaster="false" status="8" name="WIN7模板" id="urn:vcloud:vm:c27ae7a6-fe41-4073-87d3-49f0a9731af1" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vAppTemplate/vm-c27ae7a6-fe41-4073-87d3-49f0a9731af1">
            <Link rel="up" type="application/vnd.vmware.vcloud.vAppTemplate+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vAppTemplate/vm-c27ae7a6-fe41-4073-87d3-49f0a9731af1/metadata"/>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vm-c27ae7a6-fe41-4073-87d3-49f0a9731af1/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="VM Network" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:0b</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vm-c27ae7a6-fe41-4073-87d3-49f0a9731af1/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>true</Enabled>
                <ChangeSid>true</ChangeSid>
                <VirtualMachineId>c27ae7a6-fe41-4073-87d3-49f0a9731af1</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>WIN7-001</ComputerName>
            </GuestCustomizationSection>
            <VAppScopedLocalId>WIN7模板</VAppScopedLocalId>
        </Vm>
    </Children>
    <ovf:NetworkSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/networkSection/" vcloud:type="application/vnd.vmware.vcloud.networkSection+xml">
        <ovf:Info>The list of logical networks</ovf:Info>
        <ovf:Network ovf:name="VM Network">
            <ovf:Description>The VM Network network</ovf:Description>
        </ovf:Network>
    </ovf:NetworkSection>
    <NetworkConfigSection type="application/vnd.vmware.vcloud.networkConfigSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/networkConfigSection/" ovf:required="false">
        <ovf:Info>The configuration parameters for logical networks</ovf:Info>
        <NetworkConfig networkName="VM Network">
            <Description>The VM Network network</Description>
            <Configuration>
                <IpScope>
                    <IsInherited>false</IsInherited>
                    <Gateway>192.168.254.1</Gateway>
                    <Netmask>255.255.255.0</Netmask>
                    <IpRanges>
                        <IpRange>
                            <StartAddress>192.168.254.100</StartAddress>
                            <EndAddress>192.168.254.199</EndAddress>
                        </IpRange>
                    </IpRanges>
                </IpScope>
                <FenceMode>isolated</FenceMode>
                <RetainNetInfoAcrossDeployments>false</RetainNetInfoAcrossDeployments>
            </Configuration>
            <IsDeployed>false</IsDeployed>
        </NetworkConfig>
    </NetworkConfigSection>
    <LeaseSettingsSection type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/leaseSettingsSection/" ovf:required="false">
        <ovf:Info>Lease settings section</ovf:Info>
        <Link rel="edit" type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/leaseSettingsSection/"/>
        <StorageLeaseInSeconds>0</StorageLeaseInSeconds>
    </LeaseSettingsSection>
    <CustomizationSection type="application/vnd.vmware.vcloud.customizationSection+xml" href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e/customizationSection/" goldMaster="false" ovf:required="false">
        <ovf:Info>VApp template customization section</ovf:Info>
        <CustomizeOnInstantiate>true</CustomizeOnInstantiate>
    </CustomizationSection>
</VAppTemplate>

deploy_request
<?xml version="1.0" encoding="UTF-8"?>
<InstantiateVAppTemplateParams
   xmlns="http://www.vmware.com/vcloud/v1.5"
   name="Linux FTP server"
   deploy="true"
   powerOn="true"
   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1">
   <Description>Example FTP Server</Description>
   <InstantiationParams>
      <NetworkConfigSection>
         <ovf:Info>Configuration parameters for logical networks
         </ovf:Info>
         <NetworkConfig
            networkName="vAppNetwork">
            <Configuration>
               <ParentNetwork
                  href="https://utm.fallage.com/api/network/9590e3f9-33d3-4c42-9d2f-88c1b3957dc5" />
               <FenceMode>bridged</FenceMode>
            </Configuration>
         </NetworkConfig>
      </NetworkConfigSection>
   </InstantiationParams>
   <Source
      href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e" />
</InstantiateVAppTemplateParams>

<?xml version="1.0" encoding="UTF-8"?>
<InstantiateVAppTemplateParams 
    xmlns="http://www.vmware.com/vcloud/v1.5" 
    xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" 
    name="AppServer-TESTING" 
    deploy="false" 
    powerOn="false">
   <Description>Testing AppServer11</Description>
   <Source href="https://utm.fallage.com/api/vAppTemplate/vappTemplate-984d71f9-d5f8-493c-81d1-821a72fe347e" />
</InstantiateVAppTemplateParams>

Instantiate from vAppTemplate
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -H "Content-Type:application/vnd.vmware.vcloud.instantiateVAppTemplateParams+xml" -X POST https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/instantiateVAppTemplate -d @deploy_request

HTTP/1.1 201 Created
Date: Tue, 22 Mar 2016 15:25:37 GMT
Vary: Accept-Encoding
Date: Tue, 22 Mar 2016 15:25:42 GMT
Location: https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348
Content-Type: application/vnd.vmware.vcloud.vApp+xml; version=5.5
Content-Length: 3260

<?xml version="1.0" encoding="UTF-8"?>
<VApp xmlns="http://www.vmware.com/vcloud/v1.5" ovfDescriptorUploaded="true" deployed="false" status="0" name="AppServer-TESTING" id="urn:vcloud:vapp:1fe06e37-5047-4936-a9fa-61735f1b8348" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="down" type="application/vnd.vmware.vcloud.vAppNetwork+xml" name="VM Network" href="https://utm.fallage.com/api/network/e1ee14b5-a5f1-49f3-ad86-8b0cd31835d1"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/controlAccess/"/>
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/metadata"/>
    <Link rel="ovf" type="text/xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/ovf"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/productSections/"/>
    <Description>Testing AppServer11</Description>
    <Tasks>
        <Task status="running" startTime="2016-03-22T23:25:42.559+08:00" serviceNamespace="com.vmware.vcloud" operationName="vdcInstantiateVapp" operation="Creating Virtual Application AppServer-TESTING(1fe06e37-5047-4936-a9fa-61735f1b8348)" expiryTime="2016-06-20T23:25:42.559+08:00" cancelRequested="false" name="task" id="urn:vcloud:task:9ea4e07a-3a80-4948-a6ef-88208971ba95" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/9ea4e07a-3a80-4948-a6ef-88208971ba95">
            <Link rel="task:cancel" href="https://utm.fallage.com/api/task/9ea4e07a-3a80-4948-a6ef-88208971ba95/action/cancel"/>
            <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="AppServer-TESTING" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
            <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
            <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
            <Progress>1</Progress>
            <Details/>
        </Task>
    </Tasks>
    <DateCreated>2016-03-22T23:25:37.451+08:00</DateCreated>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    </Owner>
    <InMaintenanceMode>false</InMaintenanceMode>
</VApp>

Get Newly Deployed vApp
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730
<?xml version="1.0" encoding="UTF-8"?>
<VApp xmlns="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ovfDescriptorUploaded="true" deployed="false" status="8" name="AppServer-TESTING" id="urn:vcloud:vapp:1fe06e37-5047-4936-a9fa-61735f1b8348" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348" xsi:schemaLocation="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2.22.0/CIM_VirtualSystemSettingData.xsd http://www.vmware.com/schema/ovf http://www.vmware.com/schema/ovf http://schemas.dmtf.org/ovf/envelope/1 http://schemas.dmtf.org/ovf/envelope/1/dsp8023_1.1.0.xsd http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2.22.0/CIM_ResourceAllocationSettingData.xsd">
    <Link rel="power:powerOn" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/power/action/powerOn"/>
    <Link rel="deploy" type="application/vnd.vmware.vcloud.deployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/deploy"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.vAppNetwork+xml" name="VM Network" href="https://utm.fallage.com/api/network/e1ee14b5-a5f1-49f3-ad86-8b0cd31835d1"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/controlAccess/"/>
    <Link rel="controlAccess" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/controlAccess"/>
    <Link rel="recompose" type="application/vnd.vmware.vcloud.recomposeVAppParams+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/recomposeVApp"/>
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="edit" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
    <Link rel="remove" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
    <Link rel="enable" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/enableDownload"/>
    <Link rel="disable" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/disableDownload"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/metadata"/>
    <Link rel="ovf" type="text/xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/ovf"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/productSections/"/>
    <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/action/createSnapshot"/>
    <Description>Testing AppServer11</Description>
    <LeaseSettingsSection type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/leaseSettingsSection/" ovf:required="false">
        <ovf:Info>Lease settings section</ovf:Info>
        <Link rel="edit" type="application/vnd.vmware.vcloud.leaseSettingsSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/leaseSettingsSection/"/>
        <DeploymentLeaseInSeconds>0</DeploymentLeaseInSeconds>
        <StorageLeaseInSeconds>0</StorageLeaseInSeconds>
    </LeaseSettingsSection>
    <ovf:StartupSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/startupSection/" vcloud:type="application/vnd.vmware.vcloud.startupSection+xml">
        <ovf:Info>VApp startup section</ovf:Info>
        <ovf:Item ovf:stopDelay="0" ovf:stopAction="powerOff" ovf:startDelay="0" ovf:startAction="powerOn" ovf:order="0" ovf:id="WIN7模板"/>
        <Link rel="edit" type="application/vnd.vmware.vcloud.startupSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/startupSection/"/>
    </ovf:StartupSection>
    <ovf:NetworkSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/networkSection/" vcloud:type="application/vnd.vmware.vcloud.networkSection+xml">
        <ovf:Info>The list of logical networks</ovf:Info>
        <ovf:Network ovf:name="VM Network">
            <ovf:Description>The VM Network network</ovf:Description>
        </ovf:Network>
    </ovf:NetworkSection>
    <NetworkConfigSection type="application/vnd.vmware.vcloud.networkConfigSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/networkConfigSection/" ovf:required="false">
        <ovf:Info>The configuration parameters for logical networks</ovf:Info>
        <Link rel="edit" type="application/vnd.vmware.vcloud.networkConfigSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/networkConfigSection/"/>
        <NetworkConfig networkName="VM Network">
            <Link rel="repair" href="https://utm.fallage.com/api/admin/network/e1ee14b5-a5f1-49f3-ad86-8b0cd31835d1/action/reset"/>
            <Description>The VM Network network</Description>
            <Configuration>
                <IpScopes>
                    <IpScope>
                        <IsInherited>false</IsInherited>
                        <Gateway>192.168.254.1</Gateway>
                        <Netmask>255.255.255.0</Netmask>
                        <IsEnabled>true</IsEnabled>
                        <IpRanges>
                            <IpRange>
                                <StartAddress>192.168.254.100</StartAddress>
                                <EndAddress>192.168.254.199</EndAddress>
                            </IpRange>
                        </IpRanges>
                    </IpScope>
                </IpScopes>
                <FenceMode>isolated</FenceMode>
                <RetainNetInfoAcrossDeployments>false</RetainNetInfoAcrossDeployments>
            </Configuration>
            <IsDeployed>false</IsDeployed>
        </NetworkConfig>
    </NetworkConfigSection>
    <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/snapshotSection" ovf:required="false">
        <ovf:Info>Snapshot information section</ovf:Info>
    </SnapshotSection>
    <DateCreated>2016-03-22T23:25:37.451+08:00</DateCreated>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    </Owner>
    <InMaintenanceMode>false</InMaintenanceMode>
    <Children>
        <Vm needsCustomization="true" deployed="false" status="8" name="WIN7模板" id="urn:vcloud:vm:05e1c6f2-3a17-456d-8dc9-7c70eea7ac73" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73">
            <Link rel="power:powerOn" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/power/action/powerOn"/>
            <Link rel="deploy" type="application/vnd.vmware.vcloud.deployVAppParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/action/deploy"/>
            <Link rel="edit" type="application/vnd.vmware.vcloud.vm+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73"/>
            <Link rel="remove" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/metadata"/>
            <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/productSections/"/>
            <Link rel="screen:thumbnail" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/screen"/>
            <Link rel="media:insertMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/media/action/insertMedia"/>
            <Link rel="media:ejectMedia" type="application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/media/action/ejectMedia"/>
            <Link rel="disk:attach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/disk/action/attach"/>
            <Link rel="disk:detach" type="application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/disk/action/detach"/>
            <Link rel="upgrade" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/action/upgradeHardwareVersion"/>
            <Link rel="snapshot:create" type="application/vnd.vmware.vcloud.createSnapshotParams+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/action/createSnapshot"/>
            <Link rel="reconfigureVm" type="application/vnd.vmware.vcloud.vm+xml" name="WIN7模板" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/action/reconfigureVm"/>
            <Link rel="up" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
            <ovf:VirtualHardwareSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:transport="" vcloud:href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Virtual hardware requirements</ovf:Info>
                <ovf:System>
                    <vssd:ElementName>Virtual Hardware Family</vssd:ElementName>
                    <vssd:InstanceID>0</vssd:InstanceID>
                    <vssd:VirtualSystemIdentifier>WIN7模板</vssd:VirtualSystemIdentifier>
                    <vssd:VirtualSystemType>vmx-08</vssd:VirtualSystemType>
                </ovf:System>
                <ovf:Item>
                    <rasd:Address>00:50:56:01:00:19</rasd:Address>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>true</rasd:AutomaticAllocation>
                    <rasd:Connection vcloud:primaryNetworkConnection="true" vcloud:ipAddressingMode="DHCP">VM Network</rasd:Connection>
                    <rasd:Description>E1000 ethernet adapter on "VM Network"</rasd:Description>
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
                    <rasd:HostResource vcloud:capacity="40960" vcloud:busSubType="lsilogicsas" vcloud:busType="6"/>
                    <rasd:InstanceID>2000</rasd:InstanceID>
                    <rasd:Parent>2</rasd:Parent>
                    <rasd:ResourceType>17</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:Address>1</rasd:Address>
                    <rasd:Description>IDE Controller</rasd:Description>
                    <rasd:ElementName>IDE Controller 1</rasd:ElementName>
                    <rasd:InstanceID>3</rasd:InstanceID>
                    <rasd:ResourceType>5</rasd:ResourceType>
                </ovf:Item>
                <ovf:Item>
                    <rasd:AddressOnParent>0</rasd:AddressOnParent>
                    <rasd:AutomaticAllocation>false</rasd:AutomaticAllocation>
                    <rasd:Description>CD/DVD Drive</rasd:Description>
                    <rasd:ElementName>CD/DVD Drive 1</rasd:ElementName>
                    <rasd:HostResource/>
                    <rasd:InstanceID>3002</rasd:InstanceID>
                    <rasd:Parent>3</rasd:Parent>
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
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/cpu" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>hertz * 10^6</rasd:AllocationUnits>
                    <rasd:Description>Number of Virtual CPUs</rasd:Description>
                    <rasd:ElementName>4 virtual CPU(s)</rasd:ElementName>
                    <rasd:InstanceID>4</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>3</rasd:ResourceType>
                    <rasd:VirtualQuantity>4</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <vmw:CoresPerSocket ovf:required="false">4</vmw:CoresPerSocket>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/cpu"/>
                </ovf:Item>
                <ovf:Item vcloud:href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/memory" vcloud:type="application/vnd.vmware.vcloud.rasdItem+xml">
                    <rasd:AllocationUnits>byte * 2^20</rasd:AllocationUnits>
                    <rasd:Description>Memory Size</rasd:Description>
                    <rasd:ElementName>8192 MB of memory</rasd:ElementName>
                    <rasd:InstanceID>5</rasd:InstanceID>
                    <rasd:Reservation>0</rasd:Reservation>
                    <rasd:ResourceType>4</rasd:ResourceType>
                    <rasd:VirtualQuantity>8192</rasd:VirtualQuantity>
                    <rasd:Weight>0</rasd:Weight>
                    <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/memory"/>
                </ovf:Item>
                <Link rel="edit" type="application/vnd.vmware.vcloud.virtualHardwareSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/cpu"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/cpu"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/memory"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItem+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/memory"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/disks"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/disks"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/media"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/networkCards"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/networkCards"/>
                <Link rel="down" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/serialPorts"/>
                <Link rel="edit" type="application/vnd.vmware.vcloud.rasdItemsList+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/virtualHardwareSection/serialPorts"/>
            </ovf:VirtualHardwareSection>
            <ovf:OperatingSystemSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" ovf:id="102" vcloud:href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/operatingSystemSection/" vcloud:type="application/vnd.vmware.vcloud.operatingSystemSection+xml" vmw:osType="windows7_64Guest">
                <ovf:Info>Specifies the operating system installed</ovf:Info>
                <ovf:Description>Microsoft Windows 7 (64-bit)</ovf:Description>
                <Link rel="edit" type="application/vnd.vmware.vcloud.operatingSystemSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/operatingSystemSection/"/>
            </ovf:OperatingSystemSection>
            <NetworkConnectionSection type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/networkConnectionSection/" ovf:required="false">
                <ovf:Info>Specifies the available VM network connections</ovf:Info>
                <PrimaryNetworkConnectionIndex>0</PrimaryNetworkConnectionIndex>
                <NetworkConnection network="VM Network" needsCustomization="true">
                    <NetworkConnectionIndex>0</NetworkConnectionIndex>
                    <IsConnected>true</IsConnected>
                    <MACAddress>00:50:56:01:00:19</MACAddress>
                    <IpAddressAllocationMode>DHCP</IpAddressAllocationMode>
                </NetworkConnection>
                <Link rel="edit" type="application/vnd.vmware.vcloud.networkConnectionSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/networkConnectionSection/"/>
            </NetworkConnectionSection>
            <GuestCustomizationSection type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/guestCustomizationSection/" ovf:required="false">
                <ovf:Info>Specifies Guest OS Customization Settings</ovf:Info>
                <Enabled>true</Enabled>
                <ChangeSid>true</ChangeSid>
                <VirtualMachineId>05e1c6f2-3a17-456d-8dc9-7c70eea7ac73</VirtualMachineId>
                <JoinDomainEnabled>false</JoinDomainEnabled>
                <UseOrgSettings>false</UseOrgSettings>
                <AdminPasswordEnabled>true</AdminPasswordEnabled>
                <AdminPasswordAuto>true</AdminPasswordAuto>
                <AdminAutoLogonEnabled>false</AdminAutoLogonEnabled>
                <AdminAutoLogonCount>0</AdminAutoLogonCount>
                <ResetPasswordRequired>false</ResetPasswordRequired>
                <ComputerName>WIN7-001</ComputerName>
                <Link rel="edit" type="application/vnd.vmware.vcloud.guestCustomizationSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/guestCustomizationSection/"/>
            </GuestCustomizationSection>
            <RuntimeInfoSection xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" vcloud:href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/runtimeInfoSection" vcloud:type="application/vnd.vmware.vcloud.virtualHardwareSection+xml">
                <ovf:Info>Specifies Runtime info</ovf:Info>
                <VMWareTools version="9354"/>
            </RuntimeInfoSection>
            <SnapshotSection type="application/vnd.vmware.vcloud.snapshotSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/snapshotSection" ovf:required="false">
                <ovf:Info>Snapshot information section</ovf:Info>
            </SnapshotSection>
            <VAppScopedLocalId>WIN7模板</VAppScopedLocalId>
            <VmCapabilities type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/vmCapabilities/">
                <Link rel="edit" type="application/vnd.vmware.vcloud.vmCapabilitiesSection+xml" href="https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/vmCapabilities/"/>
                <MemoryHotAddEnabled>false</MemoryHotAddEnabled>
                <CpuHotAddEnabled>false</CpuHotAddEnabled>
            </VmCapabilities>
            <StorageProfile type="application/vnd.vmware.vcloud.vdcStorageProfile+xml" name="*" href="https://utm.fallage.com/api/vdcStorageProfile/fb1f7d48-30d9-49ce-b3b5-8ff052e4d95d"/>
        </Vm>
    </Children>
</VApp>


Power On vApp
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348/power/action/powerOn
<Task xmlns="http://www.vmware.com/vcloud/v1.5" status="running" startTime="2016-03-22T23:39:40.972+08:00" serviceNamespace="com.vmware.vcloud" operationName="vappDeploy" operation="Starting Virtual Application AppServer-TESTING(1fe06e37-5047-4936-a9fa-61735f1b8348)" expiryTime="2016-06-20T23:39:40.972+08:00" cancelRequested="false" name="task" id="urn:vcloud:task:b9f07a79-d08e-44c0-a3d3-7cd990df173f" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/b9f07a79-d08e-44c0-a3d3-7cd990df173f" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="task:cancel" href="https://utm.fallage.com/api/task/b9f07a79-d08e-44c0-a3d3-7cd990df173f/action/cancel"/>
    <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="AppServer-TESTING" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
    <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Details/>
</Task>


Get vApp PowerOn Task
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/task/b9f07a79-d08e-44c0-a3d3-7cd990df173f
//unsuccessful
<Task xmlns="http://www.vmware.com/vcloud/v1.5" status="error" startTime="2016-03-22T23:39:40.972+08:00" serviceNamespace="com.vmware.vcloud" operationName="vappDeploy" operation="Running Virtual Application AppServer-TESTING(1fe06e37-5047-4936-a9fa-61735f1b8348)" expiryTime="2016-06-20T23:39:40.972+08:00" endTime="2016-03-22T23:39:45.130+08:00" cancelRequested="false" name="task" id="urn:vcloud:task:b9f07a79-d08e-44c0-a3d3-7cd990df173f" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/b9f07a79-d08e-44c0-a3d3-7cd990df173f" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="AppServer-TESTING" href="https://utm.fallage.com/api/vApp/vapp-1fe06e37-5047-4936-a9fa-61735f1b8348"/>
    <Error minorErrorCode="NETWORK_INTERNAL_SERVER" message="Unable to perform this action. Contact your cloud administrator." majorErrorCode="500"/>
    <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Details>  Unable to perform this action. Contact your cloud administrator.</Details>
</Task>

curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vm-05e1c6f2-3a17-456d-8dc9-7c70eea7ac73/screen/action/acquireTicket


curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vapp-48a3869c-990c-4d5f-b538-ea41a602624c/power/action/undeploy
