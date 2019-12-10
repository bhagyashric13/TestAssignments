Codeigniter Setup:

1. Please extract 'AssignmentTest.zip'. This is the codeigniter pproject setup.
2. Change base URL in variable $config['base_url'] which is in config file.
3. Open file AssignmentTest\application\controllers\Dashboard.php goto line no 28 and change the url $url variable which is used for curl.

vTiger setup:

1. Please create database with name 'vtigercrmdec9' in PhpMyadmin and import database vtiger_new65.sql.
2. Please extract all files and folders of following zip file in 'source65vtiger' in your wanpp/xampp directory.
source65vtiger.zip	
source65vtiger1.zip		
source65vtiger333.zip		
source65vtiger4.zip		
source65vtiger5.zip

Note that all above zip files have vTiger CRM code base. Due to 25 MB validation on git, i need to break this in code in diffrent zip.

3. After extracting zip, open source65vtiger/config.inc.php file and change following variables.
$dbconfig['db_server']
$dbconfig['db_port']
$dbconfig['db_username']
$dbconfig['db_password']
$site_URL
$root_directory

After set up go to crm url
http://localhost/source65vtiger/
username = admin
password = admin
