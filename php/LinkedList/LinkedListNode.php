<?php
/**
 * User: anchudan
 * Date: 2018/11/8 
 * Desc:php实现链表基础结构
 */

namespace LinkedList;

class LinkedListNode {
	// 链表节点数据
	public $data;

	// 链表节点指针，指向下一个节点
	public $next;

	// 初始化节点数据和节点指针
	public function __construct($data = NULL){
		$this->data = $data;
		$this->next = NULL;
	}
}



?>
