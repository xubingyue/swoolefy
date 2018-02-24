<?php
// httpserver的配置
return [
	'application_index' => 'App\\Application',
	'start_init' => 'Swoolefy\\Websocket\\StartInit',
	'master_process_name' => 'php-websocket-master',
	'manager_process_name' => 'php-websocket-manager',
	'worker_process_name' => 'php-websocket-worker',
	'www_user' => 'www',
	'host' => '0.0.0.0',
	'port' => '9503',
	// websocket独有
	'accept_http' => true,
	'time_zone' => 'PRC', 
	'setting' => [
		'dispatch_mode' => 3
	],
	'table_tick_task' => true,
	'table' => [
		'table1' => [
			'size' => 1024,
			'fields'=> [
				['tick_tasks','string',512]
			]
		],
		'table2' => [
			'size' => 1024,
			'fields'=> [
				['after_tasks','string',512]
			]
		],
	],

	// tcp端口配置
	'tcp_port' => 9999,
	'tcp_setting' => [
		'open_eof_check' => true, //打开EOF检测
		'open_eof_split' => true,
		'package_eof' => "\r\n", //设置EOF
	],
];