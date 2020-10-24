<?php

	class USER
	{
	    public $db;
	 
	    function __construct($con)
	    {
	      $this->db = $con;
	    }

	public function LoginAdmin($user_email, $user_password)
	{
		$select = $this->db->prepare("SELECT * FROM admin_table WHERE admin_email=:email and admin_password=:password");
		$select->bindParam(':email', $user_email);
		$select->bindParam(':password', $user_password);
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}

	public function LoginUser($user_email, $user_password)
	{
		$select = $this->db->prepare("SELECT * FROM user_table WHERE user_email=:email and user_password=:password");
		$select->bindParam(':email', $user_email);
		$select->bindParam(':password', $user_password);
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}
	public function addInventory($product_brand_name,$product_generic_name,$product_pack_size,$product_dosage_form,$product_quantity,$product_cog,$product_tp,$product_mrp,$product_foc_of,$product_foc)
	{
			
		$st = $this->db->prepare("INSERT INTO product_table (product_brand_name,product_generic_name,product_pack_size,product_dosage_form,product_quantity,product_cog,product_tp,product_mrp,product_foc_of,product_foc) VALUES (:product_brand_name,:product_generic_name,:product_pack_size,:product_dosage_form, :product_quantity, :product_cog, :product_tp, :product_mrp, :product_foc_of, :product_foc)");
		$st->bindParam(':product_brand_name',$product_brand_name);
		$st->bindParam(':product_generic_name',$product_generic_name);
		$st->bindParam(':product_pack_size',$product_pack_size);
		$st->bindParam(':product_dosage_form',$product_dosage_form);
		$st->bindParam(':product_quantity',$product_quantity);
		
		$st->bindParam(':product_cog',$product_cog);
		$st->bindParam(':product_tp',$product_tp);
		$st->bindParam(':product_mrp',$product_mrp);
		$st->bindParam(':product_foc_of',$product_foc_of);
		$st->bindParam(':product_foc',$product_foc);
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	} 

	public function addCustomer($customer_company,$customer_name,$customer_contact,$customer_address)
	{
			
		$st = $this->db->prepare("INSERT INTO customer_table (customer_company_name,customer_name,customer_contact,customer_address) VALUES (:customer_company_name,:customer_name,:customer_contact,:customer_address)");
		$st->bindParam(':customer_company_name',$customer_company);
		$st->bindParam(':customer_name',$customer_name);
		$st->bindParam(':customer_contact',$customer_contact);
		$st->bindParam(':customer_address',$customer_address);
		
		
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}

	public function addRecord($product_id,$quantity,$date)
	{
			
		$st = $this->db->prepare("INSERT INTO stock_record_table (product_id,quantity,add_date) VALUES (:product_id,:quantity,:add_date)");
		$st->bindParam(':product_id',$product_id);
		$st->bindParam(':quantity',$quantity);
		$st->bindParam(':add_date',$date);

		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}

	public function addUser($user_email,$user_password)
	{
			
		$st = $this->db->prepare("INSERT INTO user_table (user_email,user_password) VALUES (:user_email,:user_password)");
		$st->bindParam(':user_email',$user_email);
		$st->bindParam(':user_password',$user_password);
		
		
		
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}

	public function addTerritory($territory_name,$territory_district,$territory_add_date)
	{
			
		$st = $this->db->prepare("INSERT INTO territory_table (territory_name,territory_district,territory_add_date) VALUES (:territory_name,:territory_district,:territory_add_date)");
		
		$st->bindParam(':territory_name',$territory_name);
		$st->bindParam(':territory_district',$territory_district);
		$st->bindParam(':territory_add_date',$territory_add_date);
		
		
		
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}

	public function addInvoiceProduct($invoice_id,$invoice_product_id,$invoice_product_quantity,$invoice_product_tp,$invoice_product_foc)
	{
			
		$st = $this->db->prepare("INSERT INTO invoice_products_table (invoice_id,invoice_product_id,invoice_product_quantity,invoice_product_tp,invoice_product_foc) VALUES (:invoice_id,:invoice_product_id,:invoice_product_quantity,:invoice_product_tp,:invoice_product_foc)");
		$st->bindParam(':invoice_id',$invoice_id);
		$st->bindParam(':invoice_product_id',$invoice_product_id);
		$st->bindParam(':invoice_product_quantity',$invoice_product_quantity);
		$st->bindParam(':invoice_product_tp',$invoice_product_tp);
		$st->bindParam(':invoice_product_foc',$invoice_product_foc);
		
		
		
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}

	public function addInvoice($invoice_date,$invoice_delivery_date,$invoice_mpo,$invoice_territory,$invoice_discount,$invoice_discount_total,$invoice_total,$invoice_price,$invoice_customer_id)
	{
			
		$st = $this->db->prepare("INSERT INTO invoice_table (invoice_date,invoice_delivery_date,invoice_mpo,invoice_territory_id,invoice_discount,invoice_discount_total,invoice_total,invoice_price,invoice_customer_id) VALUES (:invoice_date,:invoice_delivery_date,:invoice_mpo,:invoice_territory,:invoice_discount,:invoice_discount_total,:invoice_total,:invoice_price,:invoice_customer_id)");
		$st->bindParam(':invoice_date',$invoice_date);
		$st->bindParam(':invoice_delivery_date',$invoice_delivery_date);
		$st->bindParam(':invoice_mpo',$invoice_mpo);
		$st->bindParam(':invoice_territory',$invoice_territory);
		
		$st->bindParam(':invoice_discount',$invoice_discount);
		$st->bindParam(':invoice_discount_total',$invoice_discount_total);
		
		$st->bindParam(':invoice_total',$invoice_total);
		$st->bindParam(':invoice_price',$invoice_price);
		$st->bindParam(':invoice_customer_id',$invoice_customer_id);
		
		
		$st->execute();
		$id=$this->db->lastInsertId();
		return $id;
			
			
	}


	

	public function getProductById($id)
	{
		$select= $this->db->prepare("SELECT * FROM product_table WHERE product_id='$id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function getStockRecord($product_id)
	{
		$select= $this->db->prepare("SELECT * FROM stock_record_table WHERE product_id='$product_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getAllProducts()
	{
		$select= $this->db->prepare("SELECT * FROM product_table");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getAllTerritory()
	{
		$select= $this->db->prepare("SELECT * FROM territory_table ORDER BY territory_id DESC");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getAllUsers()
	{
		$select= $this->db->prepare("SELECT * FROM user_table");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getTerritory($territory_name)
	{
		$select= $this->db->prepare("SELECT * FROM territory_table WHERE territory_name LIKE  '$territory_name%' ORDER BY territory_id DESC");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getTerritoryById($territory_id)
	{
		$select= $this->db->prepare("SELECT * FROM territory_table WHERE territory_id = '$territory_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function matchTerritory($territory_name,$territory_district)
	{
		$select= $this->db->prepare("SELECT * FROM territory_table WHERE territory_name = '$territory_name' AND territory_district= '$territory_district'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function matchUser($user_email)
	{
		$select= $this->db->prepare("SELECT * FROM user_table WHERE user_email = '$user_email'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function matchInventory($product_brand_name,$product_generic_name,$product_pack_size)
	{
		$select= $this->db->prepare("SELECT * FROM product_table WHERE product_brand_name = '$product_brand_name' AND product_generic_name= '$product_generic_name' AND product_pack_size='$product_pack_size'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function getInvoicesFromTerritory($territory_id)
	{
		$select= $this->db->prepare("SELECT invoice_id FROM invoice_table WHERE invoice_territory_id = '$territory_id'");
		$select->setFetchMode(PDO::FETCH_NUM);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	


	public function getProductsFromInvoice($invoices)
	{
		$select= $this->db->prepare("SELECT * FROM invoice_products_table WHERE invoice_id = '$invoices'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getCustomersByName($customer_name)
	{
		$select= $this->db->prepare("SELECT customer_id FROM customer_table WHERE customer_name='$customer_name'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getSales($product_id)
	{
		$select= $this->db->prepare("SELECT * FROM invoice_products_table WHERE invoice_product_id='$product_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}


	public function getInvoiceByTerritory($invoice_territory_id)
	{
		$select= $this->db->prepare("SELECT * FROM invoice_table WHERE invoice_territory_id = '$invoice_territory_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}




	public function getAllInvoices()
	{
		$select= $this->db->prepare("SELECT * FROM invoice_table ORDER BY invoice_id DESC");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	

	public function getSearchedProducts($product_brand_name,$product_generic_name)
	{
		$select= $this->db->prepare("SELECT * FROM product_table WHERE product_brand_name LIKE '%$product_brand_name%' AND product_generic_name LIKE '%$product_generic_name%'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getSearchedProductsByGP($product_generic_name,$product_pack_size)
	{
		$select= $this->db->prepare("SELECT product_id,product_brand_name,product_generic_name,product_quantity,product_tp,product_foc_of,product_foc FROM product_table WHERE product_brand_name='$product_generic_name' AND product_pack_size='$product_pack_size'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getProductsByGN($product_generic_name)
	{
		$select= $this->db->prepare("SELECT * FROM product_table WHERE product_generic_name LIKE '%$product_generic_name%'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getGenericName($product_generic_name)
	{
		$select= $this->db->prepare("SELECT distinct product_brand_name FROM product_table WHERE product_brand_name LIKE '$product_generic_name%'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getPackSizeFromG($product_generic_name)
	{
		$select= $this->db->prepare("SELECT product_pack_size FROM product_table WHERE product_brand_name = '$product_generic_name'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getInvoice($id)
	{
		$select= $this->db->prepare("SELECT * FROM invoice_table WHERE invoice_id = '$id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function getCustomer($invoice_customer_id)
	{
		$select= $this->db->prepare("SELECT * FROM customer_table WHERE customer_id = '$invoice_customer_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function getInvoiceProducts($invoice_id)
	{
		$select= $this->db->prepare("SELECT * FROM invoice_products_table WHERE invoice_id = '$invoice_id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function getDiscount()
	{
		$select= $this->db->prepare("SELECT * FROM discount_table");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function getProductsByBN($product_brand_name)
	{
		$select= $this->db->prepare("SELECT * FROM product_table WHERE product_brand_name LIKE '%$product_brand_name%'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetchAll();
		return $torres;
	}

	public function updateProduct($product_id,$product_brand_name,$product_generic_name,$product_pack_size,$product_dosage_form,$product_quantity,$product_cog,$product_tp,$product_mrp,$product_foc_of,$product_foc)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET product_brand_name=:product_brand_name, product_generic_name=:product_generic_name, product_pack_size=:product_pack_size, product_dosage_form=:product_dosage_form, product_quantity=:product_quantity, product_cog=:product_cog, product_tp=:product_tp, product_mrp=:product_mrp, product_foc_of=:product_foc_of, product_foc=:product_foc WHERE product_id=:product_id");
				$select->bindParam(':product_brand_name',$product_brand_name);
				$select->bindParam(':product_generic_name',$product_generic_name);
				$select->bindParam(':product_pack_size',$product_pack_size);
				$select->bindParam(':product_dosage_form',$product_dosage_form);
				$select->bindParam(':product_quantity',$product_quantity);
				$select->bindParam(':product_cog',$product_cog);
				$select->bindParam(':product_tp',$product_tp);
				$select->bindParam(':product_mrp',$product_mrp);
				$select->bindParam(':product_foc_of',$product_foc_of);
				$select->bindParam(':product_foc',$product_foc);
				
				$select->bindParam(':product_id',$product_id);
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function updateTerritory($territory_id,$territory_name,$territory_district)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE territory_table SET territory_name=:territory_name, territory_district=:territory_district WHERE territory_id=:territory_id");
				$select->bindParam(':territory_name',$territory_name);
				$select->bindParam(':territory_district',$territory_district);
				
				
				$select->bindParam(':territory_id',$territory_id);
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}	


	public function addStock($id,$new_quantity)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET product_quantity=:product_quantity WHERE product_id=:product_id");
				
				$select->bindParam(':product_quantity',$new_quantity);
				
				
				$select->bindParam(':product_id',$id);
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function changeDiscount($discounts,$discount_date)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE discount_table SET discount=:discounts, discount_date=:discount_date WHERE discount_id='1'");
				
				$select->bindParam(':discounts',$discounts);
				$select->bindParam(':discount_date',$discount_date);
				
				
				
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function changeProduct($name,$value,$id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET $name='$value' WHERE product_id='$id'");
				
				
				
				
				
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}	

	public function resetEmail($admin_email)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE admin_table SET admin_email=:admin_email WHERE admin_id='1'");
				
				$select->bindParam(':admin_email',$admin_email);
	
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function resetEmailUser($user_email,$id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE user_table SET user_email=:user_email WHERE user_id='$id'");
				
				$select->bindParam(':user_email',$user_email);
	
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}	

	public function resetPassword($admin_password)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE admin_table SET admin_password=:admin_password WHERE admin_id='1'");
				
				$select->bindParam(':admin_email',$admin_email);
	
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function resetPasswordUser($user_password,$id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE user_table SET user_password=:user_password WHERE user_id='$id'");
				
				$select->bindParam(':admin_email',$admin_email);
	
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}	

	public function deleteProduct($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM product_table WHERE product_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				return true;
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function deleteInvoice($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM invoice_table WHERE invoice_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				return true;
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function deleteInvoiceProducts($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM invoice_products_table WHERE invoice_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				return true;
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

	public function deleteTerritory($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM territory_table WHERE territory_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				return true;
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}	

	public function lessProduct($product_less,$invoice_product_id)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE product_table SET product_quantity=product_quantity-:product_less WHERE product_id=:id");
				$select->bindParam(':id',$invoice_product_id);
				$select->bindParam(':product_less',$product_less);
				
				
				
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}		

	


			
}		
?>    