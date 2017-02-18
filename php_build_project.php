<?php
/**
 * About: To build a project whith PHP.
 * Author: XIAO
 * Date: 2017-02-17
 */
$path = dirname(__FILE__);
fwrite(STDOUT, 'Enter the project name：');
$project_name = trim(fgets(STDIN));

mkdir($path . '/' . $project_name, 0755);
mkdir($path . '/' . $project_name . '/conf', 0755);
fopen($path . '/' . $project_name . '/conf/config_sample.php', 'w');
mkdir($path . '/' . $project_name . '/deploy', 0755);
mkdir($path . '/' . $project_name . '/deploy/db_schema', 0755);
fopen($path . '/' . $project_name . '/deploy/db_schema/db.sql', 'w');
mkdir($path . '/' . $project_name . '/lib', 0755);
fopen($path . '/' . $project_name . '/lib/custom_function.php', 'w');
mkdir($path . '/' . $project_name . '/script', 0755);
fopen($path . '/' . $project_name . '/script/test.php', 'w');
mkdir($path . '/' . $project_name . '/templates', 0755);

$fp = fopen($path . '/' . $project_name . '/templates/header.php', 'w');
$header = '<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>xxx | xxxx</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://zinaer-source.b0.upaiyun.com/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>';
fwrite($fp, $header);
fclose($fp);

$fp = fopen($path . '/' . $project_name . '/templates/footer.php', 'w');
$footer = '        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>';
fwrite($fp, $footer);
fclose($fp);

mkdir($path . '/' . $project_name . '/www', 0755);
$fp = fopen($path . '/' . $project_name . '/www/index.php', 'w');
$index = '<?php
$path = dirname(dirname(__FILE__));
include_once($path . \'/templates/header.php\');
include_once($path . \'/templates/footer.php\');
';
fwrite($fp, $index);
fclose($fp);
mkdir($path . '/' . $project_name . '/www/css', 0755);
fopen($path . '/' . $project_name . '/www/css/custom.css', 'w');
mkdir($path . '/' . $project_name . '/www/js', 0755);
fopen($path . '/' . $project_name . '/www/js/custom.js', 'w');

$fp = fopen($path . '/' . $project_name . '/LICENSE', 'w');
fwrite(STDOUT, 'Enter the fullname for MIT LICENSE：');
$fullname = trim(fgets(STDIN));
$year = date('Y', time());
$license = 'MIT License

Copyright (c) [' . $year . '] [' . $fullname . ']

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.';
fwrite($fp, $license);
fclose($fp);

$fp = fopen($path . '/' . $project_name . '/README.md', 'w');
$title = '### ' . $project_name . "\n\n" . '### LICENSE' . "\n\n" . 'MIT';
fwrite($fp, $title);
fclose($fp);
