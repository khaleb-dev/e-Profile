@ECHO OFF

REM This script generate entities from database, generate annotations for the entities and proxies for the entities

REM To create alone
call .\vendor\bin\doctrine orm:schema-tool:create

REM For drop and create
call '\vendor\bin\doctrine orm:schema-tool:drop --force
call .\vendor\bin\doctrine orm:schema-tool:create

REM For update
call .\vendor\bin\doctrine orm:schema-tool:update --force