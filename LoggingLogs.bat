@echo off

echo Reading From CSV File...
@setlocal enableextensions enabledelayedexpansion
set stringCount=0
set totalCount=0
rem set /p file = " "
for /F "tokens=2 delims=," %%a in (C:\xampp\htdocs\projects\Legacy\d$\inetpub\wwwroot\isda\LegacyFiles.csv) do (
	echo Reading Log files...
	echo This may take a while depending on how many log files exist...
	for %%G IN (*.log)  do (
		for /f %%b IN ('find /i "%%a" "%%G"') do (
			set /a stringCount+=1
			echo !stringCount! %%a %%G
		)
		set /a stringCount = !stringCount! -1
		set /a totalCount= !totalCount! + !stringCount!
		echo Total Count is: !totalCount!
		if !stringCount! gtr 0 echo !stringCount! %%a %%G >> AccessedFiles2.txt
		set stringCount=0
	)
		if !totalCount! gtr 0 echo !totalCount!, %%a  >> C:\xampp\htdocs\projects\Legacy\d$\inetpub\wwwroot\isda\LegacyLogFiles2.csv
		set totalCount=0
)
endlocal
echo Done...
echo Press any key to close this shell.
pause