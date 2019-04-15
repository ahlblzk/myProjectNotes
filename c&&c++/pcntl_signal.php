<?php
// 
// 

// 注册信号处理方法
pcntl_signal(SIGINT, function($signo,$signinfo){
	var_dump($signo,$signinfo);
});

echo "running....".PHP_EOL;

while (true) {
	pcntl_signal_dispatch();
	sleep(1);
}

?>