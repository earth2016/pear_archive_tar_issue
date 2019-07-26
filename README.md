
# Description

A script to reproduce Invalid checksum for file in Pear Archive_Tar

Generate a 24GB file and then compressed by tar 

```
$ tar --version
tar (GNU tar) 1.29
Copyright (C) 2015 Free Software Foundation, Inc.
License GPLv3+: GNU GPL version 3 or later <http://gnu.org/licenses/gpl.html>.
This is free software: you are free to change and redistribute it.
There is NO WARRANTY, to the extent permitted by law.

Written by John Gilmore and Jay Fenlason. 
```

# Issue related to reproduce

The message generated for this script is: 
 
```
 Message from error_object: Invalid checksum for file
 "fghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefgh/ijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijkl"
 \: 52908 calculated, 0 expected
```

Expected to happen all will be ok:

```
Hurray!!, the file was extracted {"thisAObject": 0}
```

# Version used of php and tar script

 | PHP Version | Affected | 
 |:-----:| :----: |
 |PHP 7.1.9 (cli) (built: Aug 30 2017 18:34:46) ( ZTS MSVC14 (Visual C++ 2015) x64 )|<font color=red>Yes</font>|
 |PHP 7.2.4 (cli) (built: Mar 28 2018 04:27:01) ( ZTS MSVC15 (Visual C++ 2017) x64)|<font color=red>Yes</font>| 
 |PHP 7.2.8 (cli) (built: Jul 18 2018 10:03:03) ( ZTS MSVC15 (Visual C++ 2017) x64 )|<font color=red>Yes</font>|
 
Note: The Winrar program on windows is being able to extract the
`file.json`
