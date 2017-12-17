<?php
class cms
{
	public $conn;
	
	public function __construct()
	{				
		$this->conn= mysqli_connect("localhost","root","","cms");
									/*host,user,password,database*/
	}
	
	public function showMenu($table)
	{
		/*this method return all record which status is Publish from the table name that we pass as parameter*/
		
		$query = mysqli_query($this->conn,"SELECT * FROM $table WHERE status='Publish'");
		return mysqli_fetch_all($query,MYSQLI_ASSOC);				
	}
	
	public function readContent($id,$table)
	{
		$query = mysqli_query($this->conn,"SELECT * FROM $table WHERE id=$id AND status='Publish'");
		return mysqli_fetch_assoc($query);
	}
	
	public function readAllArticles($id)
	{
		$query = mysqli_query($this->conn,"SELECT * FROM articles WHERE status='Publish' AND cat_id = $id");
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	
	public function readArticles($page)
	{
		$perpage = 5;
		$calc = $perpage * $page;
		$start = $calc - $perpage;
		/* Look if $page = 1, then $start = 0, so this Query retrive article index 0 to 5 */
		$query=mysqli_query($this->conn,"SELECT * FROM articles WHERE status='publish' Limit $start, $perpage");
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}	
	
	public function forPagination($page)
	{
		/*Display Per Page 5 Articles */
		$perpage = 5;
		
		/*To Find out how may rows in articles table & Store the result in a virtual column name "Total"*/
		$result = mysqli_query($this->conn,"select count(*) As Total from articles");
		$rs = mysqli_fetch_assoc($result);
		$total = $rs["Total"];
		
		/*Ceil will take the Highest value. like fi the result is 4.1 ceil make it 5*/
		$totalPages = ceil($total / $perpage);
		echo "<ul class='pagination'>";
		if($page <=1 )
		{
			/*If the page is less the 1 or 1 the Prev will not hold any link*/
			echo "<li><span id='page_links' style='font-weight: bold;'>&laquo; Prev</span></li>";
		}
		else
		{
			/*otherwise Prev always hold the previous page link*/
			$j = $page - 1;
			echo "<li><span><a id='page_a_link' href='index.php?page=$j'> &laquo; Prev</a></span></li>";
		}
		for($i=1; $i <= $totalPages; $i++)
		{
			if($i<>$page)
			{
				/*If the page not 1 the print the page number & hold the link.*/
				echo "<li><span><a id='page_a_link' href='index.php?page=$i'>$i</a></span></li>";
			}
			else
			{
				/*If the page is 1 the Display 1 & don't hold any link*/
				echo "<li><span id='page_links' style='font-weight: bold;'>$i</span></li>";
			}
		}
		if($page == $totalPages )
		{
			/*If the page is last page then "Next" don't hold any link*/
			echo "<li><span id='page_links' style='font-weight: bold;'>Next &raquo;</span></li>";
		}
		else
		{	/*If the page is not last then "Next" hold the link of the next page*/
			$j = $page + 1;							
			echo "<li><span><a id='page_a_link' href='index.php?page=$j'>Next &raquo;</a></span></li>";
		}
		echo "</ul>";
	}
}

$mycms = new cms;

?>