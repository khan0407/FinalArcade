<<<<<<< HEAD

== CHANGELOG ==
1. Rename class name , see Service/Repository.php & Service/WebService/AlfrescoWebService.php
2. Change library path name
3. In Alfresco_Repository class construct function, set _port to 80 if it is not specified
4. MDL-20876 - replaced deprecated split() with explode()

== Alfresco PHP Libarary ==

Installation and developer documentation for the Alfresco PHP Library can be found on the Alfresco Wiki.
Get the source from  http://svn.alfresco.com/repos/alfresco-open-mirror/alfresco/HEAD/root/modules/php-sdk

== Documentation Links ==

Installation Instructions - http://wiki.alfresco.com/wiki/Alfresco_PHP_Library_Installation_Instructions
MediaWiki Integration Installation Instructions - http://wiki.alfresco.com/wiki/Alfresco_MediaWiki_Installation_Instructions
PHP API Documentation - http://wiki.alfresco.com/wiki/Alfresco_PHP_API
=======
== CHANGELOG ==

1. Rename class name 'Repository' to 'Alfresco_Repository' in
    - Service/Repository.php
    - Service/Webservice/AlfrescoWebService.php

2. Update path for require_once() in
    - Service/Logger/Logger.php
    - Service/WebService/WebServiceFactory.php
    - Service/ContentData.php
    - Service/Functions.php
    - Service/Node.php
    - Service/Repository.php
    - Service/Session.php
    - Service/SpacesStore.php
    - Service/Store.php

3. In Alfresco_Repository::__construct(), set _port to 80 when not specified

    @@ -46,7 +46,11 @@ class Alfresco_Repository extends BaseObject
            $this->_connectionUrl = $connectionUrl;
            $parts = parse_url($connectionUrl);
            $this->_host = $parts["host"];
    -       $this->_port = $parts["port"];
    +       if (empty($parts["port"])) {
    +           $this->_port = 80;
    +       } else {
    +           $this->_port = $parts["port"];
    +       }

4. Reapply changes from MDL-20876 Fix depreacted split() calls (bed733c)

5. Fix strict standards in Service/WebService/AlfrescoWebService.php
    - AlfrescoWebService::__soapCall() arguments do not match SoapClient::__soapCall()
    - AlfrescoWebService::__doRequest() arguments do not match SoapClient::__soapCall()

== Alfresco PHP Library ==

Installation and developer documentation for the Alfresco PHP Library can be found on the Alfresco Wiki.
Get the source from http://code.google.com/p/alfresco-php-sdk/

== Documentation Links ==

Installation Instructions - http://code.google.com/p/alfresco-php-sdk/wiki/AlfrescoPHPLibraryInstallationInstructions
MediaWiki Integration Installation Instructions - http://code.google.com/p/alfresco-php-sdk/wiki/AlfrescoMediaWikiInstallationInstructions
PHP API Documentation - http://code.google.com/p/alfresco-php-sdk/wiki/AlfrescoPHPAPI
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
