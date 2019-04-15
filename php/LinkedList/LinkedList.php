<?php
/**
 * User: anchudan
 * Date: 2018/11/8 
 * Desc:实现链表中数据的基本操作方法，
 */

namespace LinkedList;
require_once './LinkedListNode.php';

class LinkedList {
	// 单向链表头节点
	public $head;

	// 链表长度
	public $length;

	// 初始化一个单链表
	public function __construct($head = NULL){
		if ($head == NULL) {
			$this->head = new LinkedListNode();
		}else{
			$this->head = $head;
		}
		$this->length = 0;
	}

	/**
	 * [insert 插入节点数据]
	 * @return [type] [description]
	 */
	public function insert($data){
		return $this->insertDataAfter($this->head, $data);

	}

	/**
	 * [delete 删除节点数据]
	 * @return [type] [description]
	 */
	public function delete(){

	}


	public function insertDataAfter(LinkedListNode $oldNode,$data){
		if ($oldNode == NULL) {
			return false;
		}
		// print_r($oldNode);
		// 新建一个链表节点
		$newNode = new LinkedListNode();
		$newNode->data = $data;

		$newNode->next = $oldNode->next;
		$oldNode->next = $newNode;

		$this->length++;
		// print_r($oldNode);
		return $newNode;
	}	

	/**
	 * [getLength 获取链表长度]
	 * @return [type] [description]
	 */
    public function getLength()
    {
        return $this->length;
    }

	/**
	 * [printList 打印链表所有数据和结构]
	 * @return [type] [description]
	 */
	public function printList(){

		$curNode = $this->head;
		// 获取链表长度
		$listLength = $this->length;
		// echo $listLength;

		while ($curNode->next!=NULL&& $listLength--) {
			echo $curNode->next->data . '->';
			$curNode = $curNode->next;
		}
		echo 'NULL' . PHP_EOL;
		return true;
	}



}



$list = new LinkedList();
$list->insert('a');
$list->insert('b');
$list->printList();

?>
