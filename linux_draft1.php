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
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="hwanginsitein1" href="https://utm.fallage.com/api/vApp/vapp-bab5e3d7-8d3c-4e24-9422-69302951ea2c"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="hwanginsitein2" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="Linux FTP server" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="vApp_tolly.tu_1" href="https://utm.fallage.com/api/vApp/vapp-e44b6b3d-7991-4f76-9b0c-a2289498f730"/>
        <ResourceEntity type="application/vnd.vmware.vcloud.vApp+xml" name="hwanginsitein" href="https://utm.fallage.com/api/vApp/vapp-48a3869c-990c-4d5f-b538-ea41a602624c"/>
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


Instantiate from vAppTemplate
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -H "Content-Type:application/vnd.vmware.vcloud.instantiateVAppTemplateParams+xml" -X POST https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed/action/instantiateVAppTemplate -d @deploy_request

HTTP/1.1 201 Created
Date: Tue, 22 Mar 2016 13:43:07 GMT
Vary: Accept-Encoding
Date: Tue, 22 Mar 2016 13:43:08 GMT
Location: https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826
Content-Type: application/vnd.vmware.vcloud.vApp+xml; version=5.5
Content-Length: 3250

<?xml version="1.0" encoding="UTF-8"?>
<VApp xmlns="http://www.vmware.com/vcloud/v1.5" ovfDescriptorUploaded="true" deployed="false" status="0" name="hwanginsitein2" id="urn:vcloud:vapp:8bd80eea-ed34-4eea-ab03-40d7f31dc826" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="down" type="application/vnd.vmware.vcloud.vAppNetwork+xml" name="net_vdc" href="https://utm.fallage.com/api/network/239745f7-361a-41d9-81bb-49fb6d18aa9c"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/controlAccess/"/>
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/metadata"/>
    <Link rel="ovf" type="text/xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/ovf"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.productSections+xml" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/productSections/"/>
    <Description>made by Hwanginsitein</Description>
    <Tasks>
        <Task status="running" startTime="2016-03-22T21:43:08.418+08:00" serviceNamespace="com.vmware.vcloud" operationName="vdcInstantiateVapp" operation="Creating Virtual Application hwanginsitein2(8bd80eea-ed34-4eea-ab03-40d7f31dc826)" expiryTime="2016-06-20T21:43:08.418+08:00" cancelRequested="false" name="task" id="urn:vcloud:task:965b94c9-0289-4803-9faf-0e821fd56d80" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/965b94c9-0289-4803-9faf-0e821fd56d80">
            <Link rel="task:cancel" href="https://utm.fallage.com/api/task/965b94c9-0289-4803-9faf-0e821fd56d80/action/cancel"/>
            <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="hwanginsitein2" href="https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826"/>
            <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
            <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
            <Progress>1</Progress>
            <Details/>
        </Task>
    </Tasks>
    <DateCreated>2016-03-22T21:43:07.735+08:00</DateCreated>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    </Owner>
    <InMaintenanceMode>false</InMaintenanceMode>
</VApp>

Get Newly Deployed vApp
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826
<?xml version="1.0" encoding="UTF-8"?>
<VApp xmlns="http://www.vmware.com/vcloud/v1.5" ovfDescriptorUploaded="true" deployed="false" status="0" name="Linux FTP server" id="urn:vcloud:vapp:615cebde-303e-4e35-87d3-01b95640db7e" type="application/vnd.vmware.vcloud.vApp+xml" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Link rel="down" type="application/vnd.vmware.vcloud.vAppNetwork+xml" name="net_vdc" href="https://utm.fallage.com/api/network/3cfcb2f1-dd75-42f6-ae93-e1a4964d8cc1"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.controlAccess+xml" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e/controlAccess/"/>
    <Link rel="recompose" type="application/vnd.vmware.vcloud.recomposeVAppParams+xml" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e/action/recomposeVApp"/>
    <Link rel="up" type="application/vnd.vmware.vcloud.vdc+xml" href="https://utm.fallage.com/api/vdc/a371a699-5470-482c-b480-77d19b8b33ed"/>
    <Link rel="remove" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.owner+xml" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e/owner"/>
    <Link rel="down" type="application/vnd.vmware.vcloud.metadata+xml" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e/metadata"/>
    <Description>Example FTP Server</Description>
    <Tasks>
        <Task status="error" startTime="2016-03-21T21:30:44.714+08:00" operationName="vdcInstantiateVapp" operation="Created Virtual Application Linux FTP server(615cebde-303e-4e35-87d3-01b95640db7e)" expiryTime="2016-06-19T21:30:44.714+08:00" endTime="2016-03-21T21:30:45.363+08:00" name="task" id="urn:vcloud:task:94fdbdbc-8c0c-42eb-89e6-b3f243c8d477" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/94fdbdbc-8c0c-42eb-89e6-b3f243c8d477">
            <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="Linux FTP server" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e"/>
            <Error minorErrorCode="BAD_REQUEST" message="The VCD entity network &quot;VM Network&quot; does not exist." majorErrorCode="400"/>
            <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
            <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
            <Progress>1</Progress>
        </Task>
    </Tasks>
    <Owner type="application/vnd.vmware.vcloud.owner+xml">
        <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    </Owner>
    <InMaintenanceMode>false</InMaintenanceMode>
</VApp>

Power On vApp
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vapp-8bd80eea-ed34-4eea-ab03-40d7f31dc826/power/action/powerOn


Get vApp PowerOn Task
curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X GET https://utm.fallage.com/api/task/94fdbdbc-8c0c-42eb-89e6-b3f243c8d477
<Task xmlns="http://www.vmware.com/vcloud/v1.5" status="error" startTime="2016-03-21T21:30:44.714+08:00" serviceNamespace="com.vmware.vcloud" operationName="vdcInstantiateVapp" operation="Created Virtual Application Linux FTP server(615cebde-303e-4e35-87d3-01b95640db7e)" expiryTime="2016-06-19T21:30:44.714+08:00" endTime="2016-03-21T21:30:45.363+08:00" cancelRequested="false" name="task" id="urn:vcloud:task:94fdbdbc-8c0c-42eb-89e6-b3f243c8d477" type="application/vnd.vmware.vcloud.task+xml" href="https://utm.fallage.com/api/task/94fdbdbc-8c0c-42eb-89e6-b3f243c8d477" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vmware.com/vcloud/v1.5 http://utm.fallage.com/api/v1.5/schema/master.xsd">
    <Owner type="application/vnd.vmware.vcloud.vApp+xml" name="Linux FTP server" href="https://utm.fallage.com/api/vApp/vapp-615cebde-303e-4e35-87d3-01b95640db7e"/>
    <Error minorErrorCode="BAD_REQUEST" message="The VCD entity network &quot;VM Network&quot; does not exist." majorErrorCode="400"/>
    <User type="application/vnd.vmware.admin.user+xml" name="test1" href="https://utm.fallage.com/api/admin/user/df37f0ac-67d5-4b3e-9d38-9c2f0b03f6cb"/>
    <Organization type="application/vnd.vmware.vcloud.org+xml" name="fallfish" href="https://utm.fallage.com/api/org/2bf84a53-a37f-4b86-815e-4641f5508544"/>
    <Progress>1</Progress>
    <Details>  The VCD entity network "VM Network" does not exist.</Details>
</Task>

curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vapp-48a3869c-990c-4d5f-b538-ea41a602624c/power/action/undeploy

curl -i -k -H "Accept:application/*+xml;version=5.5" -H "x-vcloud-authorization:nw2GV6CabqeZD2Pzz523yGxMRqpj1MzbgKFkveTO2a0=" -X POST https://utm.fallage.com/api/vApp/vm-c27ae7a6-fe41-4073-87d3-49f0a9731af1/screen/action/acquireTicket