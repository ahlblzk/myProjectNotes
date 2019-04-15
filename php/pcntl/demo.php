<?php
// 多进程示例
$ppid = posix_getpid();
$pid = pcntl_fork();
if ($pid == -1) {
throw new Exception('fork子进程失败!');
} elseif ($pid > 0) {
cli_set_process_title("this is parent process,my pid is {$ppid}.");
sleep(30); 
} else {
$cpid = posix_getpid();
cli_set_process_title("this is {$ppid} 's chidren process,my pid is {$cpid}.");
sleep(30);
}

?>