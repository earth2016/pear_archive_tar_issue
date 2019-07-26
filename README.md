
# Description

A script to reproduce Invalid checksum for file in Pear Archive_Tar

# Issue related to reproduce

The message generated for this script is: 
 
```
 Message from error_object: Invalid checksum for file
 "fghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefgh/ijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijklmnopefghabcdijkl"
 \: 52908 calculated, 0 expected
```

# Version used of php and tar script

 | PHP Version | Affected | 
 |:-----:| :----: |
 |PHP 7.1.9 (cli) (built: Aug 30 2017 18:34:46) ( ZTS MSVC14 (Visual C++ 2015) x64 )|<font color=red>Yes</font>|
 |PHP 7.2.4 (cli) (built: Mar 28 2018 04:27:01) ( ZTS MSVC15 (Visual C++ 2017) x64)|<font color=red>Yes</font>| 
 |PHP 7.2.8 (cli) (built: Jul 18 2018 10:03:03) ( ZTS MSVC15 (Visual C++ 2017) x64 )|<font color=red>Yes</font>|
 
Note: The Winrar program on windows is being able to extract the
`file.json`
