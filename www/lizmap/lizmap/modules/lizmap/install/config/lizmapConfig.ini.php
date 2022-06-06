;Services
;list the different map services (servers, generic parameters, etc.)
[services]
;Wms map server
wmsServerURL="http://127.0.0.1/cgi-bin/qgis_mapserv.fcgi"
;WMS subdomain URLs list (optional)
wmsPublicUrlList=
;URL to the API exposed by the Lizmap plugin for QGIS Server
lizmapPluginAPIURL=

onlyMaps=0
defaultRepository=
defaultProject=

; cache configuration for tiles
cacheStorageType=file
;cacheStorageType=sqlite => store cached images in one sqlite file per repo/project/layer
;cacheStorageType=file => store cached images in one folder per repo/project/layer. The root folder is /tmp/
;cacheStorageType=redis => store cached images through redis
cacheRedisHost=localhost
cacheRedisPort=6379
cacheRedisDb=
cacheRedisKeyPrefix=

; default cache expiration : the default time to live of data, in seconds.
; 0 means no expiration, max : 2592000 seconds (30 days)
cacheExpiration=0

; debug mode
; on = print debug messages in lizmap/var/log/messages.log
; off = no lizmap debug messages
debugMode=0

; cache root directory where cache files will be stored
; must be writable
cacheRootDirectory="/tmp/"

; path to find repositories
;rootRepositories="path"
; Does the server use relative path from root folder? 0/1
;relativeWMSPath=0
