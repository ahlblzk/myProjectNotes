#include <signal.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
   
// static void signal_handle(int sign_no)
// {
//     printf("I have get signal %d!\n",sign_no);
//     exit(EXIT_SUCCESS);
// }
 
// int main(void)
// {
//     // 注册信号处理器
//     if (signal(SIGINT, signal_handle) == SIG_ERR)
//     {
//         fprintf(stderr, "信号处理注册失败\n");
//         exit(EXIT_FAILURE);
//     }
    
//     for(;;)
//         pause();
//     return 0;
// }

void my_func(int sign_no)
{
    if(sign_no==SIGINT)
        printf("I have get SIGINT\n");
    else if(sign_no==SIGTERM)  
        printf("I have get SIGQUIT\n");
}
 
int main()
{
    printf("Waiting for signal SIGINT or SIGTERM \n ");
    printf("process is %d\n ",getpid());
 
    signal(SIGINT, my_func);
    signal(SIGTERM, my_func);
 
    while(1);
    exit(0);
}