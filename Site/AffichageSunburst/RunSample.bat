@echo off
SET /P uname=Please Enter The PHP Installation Folder Path Like (C:\PHP): 
IF "%uname%"=="" GOTO Error
set PATH=%PATH%;%uname%
set freePort=
set startPort=8000
:SEARCHPORT
netstat -o -n -a | find "LISTENING" | find ":%startPort% " > NUL
if "%ERRORLEVEL%" equ "0" (
  set /a startPort +=1
  GOTO :SEARCHPORT
) ELSE (
  set freePort=%startPort%
)
start http://localhost:%freePort%
PHP -S localhost:%freePort%