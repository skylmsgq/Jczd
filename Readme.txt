===安装步骤===

1.建立数据库：mysql中新建数据库，数据库名jczd。
2.导入sql文件：在新建数据库中导入/Jczd/Sql/2014-10-23.sql文件。
3.连接数据库：前后台有两个config文件都需要配置数据连接。
	1>路径/Jczd/Common/Conf/system_config.php
	2>路径/Jczd/Application/Common/Conf/config.php
两个文件分别配置'DB_USER'数据库用户名，'DB_PWD'用户密码，'DB_PORT'数据库端口号，其他不需要改动。
4.测试：浏览器中分别测试主页和/admin.php页面。

===skylmsgq===