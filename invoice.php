<?php
  require 'session_required.php';
  require 'connection.php';
  $terr = $user->getAllTerritory();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Create Invoice</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <link rel="icon" type="image/png" href="images/Logo-2.jpg"/>

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    
    <link href="css/responsive.css" rel="stylesheet"/>
    <link href="css/invoice.css" rel="stylesheet"/>
    <link href="css/navbar.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
</head>
<body>
  <?php include 'navbar.php'; ?>
        <div class="container">
                <div class="note" id="note_input">
                        <h2 class="text-center">Create Invoice</h2>
                        <hr>

                        <div class="col-md-6"> 
                          <h4 class="text-center"> Chemist's Info </h4>

                          <div class="form-group">
                            <label for="exampleTextarea">Company Name:</label>
                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter Company name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Chemist's Name:</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Enter Chemist's name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Address:</label>
                            <textarea name="customer_address" rows="1" class="form-control" id="customer_address" placeholder="Enter Chemist's address" required> </textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Contact Number:</label>
                            <input type="text" name="customer_contact" class="form-control" id="customer_contact" placeholder="Enter Chemist's contact number" required>
                          </div>

                          
                        </div> 
                        
                        <div class="col-md-6"> 
                          <h4 class="text-center"> Invoice Details </h4>

                          <div class="form-group">
                            <label for="exampleTextarea">Delivery Date:</label>
                            <input type="date" name="invoice_delivery_date" class="form-control" id="invoice_delivery_date" placeholder="Enter delivery date" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">MPO:</label>
                            <input type="text" name="invoice_mpo" class="form-control" id="invoice_mpo" placeholder="Enter medical promotion officer's name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Territory:</label>
                            <select class="form-control" name="invoice_territory[]" id="invoice_territory">
                              
                              <?php foreach ($terr as $row) {
                                ?>
                              <option value="<?php echo $row['territory_id']; echo "_"; echo $row['territory_name'];?>"><?php echo $row['territory_name'];?></option>
                              <?php }?>
                            </select>
                          </div>

                          <div style="text-align: right;">
                          <label id="fill_check"></label>
                          <button type="submit" class="btn btn-success" id="note_submit"  input type="submit" name="submit">Submit</button>
                          </div>  
                          

                          
                        </div>
                                   
                        
                </div>
                 <div class="note" id="note_show" style="display: none;">
                        <h2 class="text-center">Invoice</h2>
                        <hr>
                        <div class="col-md-6"> 
                          <h4 class="text-center"> Chemist's Info </h4>

                          <div class="form-group">
                            <label for="exampleTextarea">Company Name:</label>
                            <label id="company_name_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Chemist's Name:</label>
                            <label id="customer_name_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Address:</label>
                            <label id="customer_address_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Contact Number:</label>
                            <label id="customer_contact_show"></label>
                          </div>

                        </div> 
                        
                        <div class="col-md-6"> 
                          <h4 class="text-center"> Invoice Details </h4>

                          <div class="form-group">
                            <label for="exampleTextarea">Invoice Date:</label>
                           <label id="invoice_date_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Delivery Date:</label>
                            <label id="invoice_delivery_date_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">MPO:</label>
                            <label id="invoice_mpo_show"></label>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Territory:</label>
                            <label id="invoice_territory_show"></label>
                          </div>
                          
                        </div>
                        <div style="text-align: right;" id="note_show_submit_div">
                          <button type="submit" class="btn btn-success"  input type="submit" id="note_show_submit" >Submit</button>
                          <button type="submit" class="btn btn-danger"  input type="submit" id="note_show_cancel">Cancel</button>
                        </div>             
                        
                </div>
                <br/>
                <br/>
                <br/>
                <!-- add select -->
                <div class="add" id="add" style="display: none;">
                  <div class="col-md-3 form-inline">
                      <label for="exampleTextarea">Brand Name:</label>
                      <input type="text" list="browser" name="product_generic_name" class="form-control" id="product_generic_name" placeholder="Enter Brand Name" required>
                      <datalist id="browser"></datalist>
                  </div>

                  <div class="col-md-3 form-inline">
                      <label for="exampleTextarea">Pack Size:</label>
                      <select name="product_pack_size[]" class="form-control" id="product_pack_size" style="display: block;"></select>
                  </div>

                  <div class="col-md-3 form-inline">
                      <label for="exampleTextarea">Quantity:</label>
                      <input type="number" name="product_quantity" class="form-control" id="product_quantity" placeholder="Enter product quantity" required>
                  </div>

                  <div class="col-md-1 form-inline" style="margin-top: 2%;">
                      <button type="submit" class="btn btn-success" input type="submit" name="select" id="add_submit">SELECT</button>
                  </div>
                  <br>
                  <br>
                </div>

                <br/>
                <br/>
                <!-- invoice table -->
                <div class="selected" id="invoice_table" style="display: none;">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Brand Name</th>
                      <th>Generic Name</th>
                      <th>Pack Size</th>
                      <th>TP</th>
                      <th>Quantity</th>
                      <th>FOC</th>
                      <th>Sub Total</th>
                    </tr>
                  </thead>
                  <tbody id="table_tbody">
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="7"><b>Total</b></td>
                      <td id="total"></td>
                    </tr>
                    <tr>
                      <td colspan="6"><b>Discount</b></td>
                      <td id="discount_percent"></td>
                      <td id="discount_total"></td>
                    </tr>
                    <tr>
                      <td colspan="7"><b>Price</b></td>
                      <td id="price"></td>
                    </tr>
                    
                  </tfoot>
                </table>
                </div>
                <div id="submit_table_div" style="display: none;">
                  <button style="float: right;" type="submit" class="btn btn-success" name="Submit" id="submit_table_value">Submit</button>
                </div>
                <div id="pdf_div" style="display: none;">
                  <button style="float: right;" class="btn btn-warning" id="pdf_print">PDF</button>
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#invoice").addClass("active");
            // note submit click than done this task......
            var invoice_discount=parseInt(<?php echo $discount['discount']; ?>);
            var customer_table_list=[];
            var invoice_table_list=[];
            var invoice_product_table_list=[];
            var product_id=0;
            var increment_serial=1;
            var total=0;
            var discount_total=0;
            var product_pack_size='';
            $("#note_submit").on("click",function(){
              console.log("kk");
              console.log($("#company_name").val());
              company_name=$("#company_name").val();
              customer_name=$("#customer_name").val();
              customer_contact=$("#customer_contact").val();
              customer_address=$("#customer_address").val();
              invoice_date=new Date();
              time=invoice_date.toISOString().slice(11,16).split(":");
              hours=(parseInt(time[0])+6)%24;
              k="am";
              if(hours>12)
              {
                k="pm";
                hours=hours%12;
              }
              invoice_date=invoice_date.toISOString().slice(0,10)+" "+hours+":"+time[1]+" "+k;
              //console.log(invoice_date);
              invoice_delivery_date=$("#invoice_delivery_date").val();
              invoice_mpo=$("#invoice_mpo").val();
              invoice_territory=$("#invoice_territory").val().split("_");
              if(customer_address =="" || customer_contact =="" || customer_name ==""  || invoice_date =="" || invoice_delivery_date=="" || invoice_mpo=="" || invoice_territory=="" || company_name=="" )
              {//console.log("kkkkk1");
                $("#fill_check").html("Please fill-up all the fields.");
              }
              else{
                //console.log("kkkk2");
                $("#fill_check").html("");
                $("#note_input").hide();
                $("#company_name_show").html(company_name);
                $("#customer_name_show").html(customer_name);
                $("#customer_contact_show").html(customer_contact);
                $("#customer_address_show").html(customer_address);
                $("#invoice_mpo_show").html(invoice_mpo);
                $("#invoice_territory_show").html(invoice_territory[1]);
                $("#invoice_date_show").html(invoice_date);
                $("#invoice_delivery_date_show").html(invoice_delivery_date);
                $("#invoice_discount_show").html(invoice_discount);
                $("#note_show").show();
                customer_table_list.push({company_name:company_name,customer_name:customer_name,customer_contact:customer_contact,customer_address:customer_address});
                invoice_table_list.push({invoice_date:invoice_date,invoice_delivery_date:invoice_delivery_date,invoice_mpo:invoice_mpo,invoice_territory:invoice_territory[0]});
              }
            });

            //note show submit click than done this task....
            $("#note_show_submit").on("click", function(){
              $("#note_show_submit_div").hide();
              $("#invoice_discount_div").hide();
              $("#add").show();
            });

            //note show cancel click than done this task...
            $("#note_show_cancel").on("click",function(){
              $("#note_show").hide();
              $("#note_show_submit_div").show();
              $("#note_input").show();
            });

            //auto set packsize option value......
            $("#product_generic_name").on("blur",function(){
              product_generic_name=$(this).val();
              if (product_generic_name!="")
              {
                $.ajax({ 
                    type: 'POST', 
                    url: 'getpacksize.php', 
                    data: { "product_generic_name": product_generic_name }, 
                    success: function (data) { 
                        var names = data.trim().split("*");
                        text=''
                        $("#product_pack_size").html("");
                        if (names.length>1)
                        {
                          
                          for( i=0; i<names.length-1;i++)
                            $("#product_pack_size").append("<option>"+names[i]+"</option");
                        }
                    }
                });
              }
            });

            //auto value show datalist of product geeneric name.....
            $("#product_generic_name").on("keyup",function(){
              product_generic_name=$(this).val();
              if (product_generic_name!="")
              {
                $.ajax({ 
                    type: 'POST', 
                    url: 'getgenericname.php', 
                    data: { "product_generic_name": product_generic_name }, 
                    success: function (data) { 
                        var names = data.trim().split("*");
                        $("#browser").html("");
                        //console.log(names);
                        if (names.length>1)
                        {
                          for( i=0; i<names.length-1;i++)
                            $("#browser").append("<option>"+names[i]+"</option>");
                        }
                    }
                });
              }
            });

            //create object all of the table data store in site this poduct_object_list...

            //add value and show value in the list.....
            $("#add_submit").on("click",function(){
              product_pack_size=$("#product_pack_size").val();
              product_quantity=parseInt($("#product_quantity").val());
              product_generic_name=$("#product_generic_name").val();
              if (product_pack_size !="" && product_quantity >0 && product_generic_name !="")
              {
                $.ajax({ 
                    type: 'POST', 
                    url: 'fetch_result.php', 
                    data: { "product_generic_name": product_generic_name,"product_pack_size": product_pack_size }, 
                    success: function (data) { 
                        var names = data.trim().split("*");
                        //console.log(names);
                        foc=parseInt(names[6]);
                        product_foc=parseInt(names[5]);
                        product_tp=parseInt(names[4]);
                        product_quantity_db=parseInt(names[3]);
                        product_id=parseInt(names[0]);
                      if (foc>0 && product_quantity>=product_foc)
                        {
                            var total_foc=Math.floor(product_quantity/product_foc)*foc;
                            var total_product=product_quantity+total_foc;
                            if (total_product>product_quantity_db)
                            {
                              alert("Product is not sufficent...");
                            }
                            else{
                              if (increment_serial==1)
                              {$("#invoice_table").show();
                              $("#submit_table_div").show();
                               $("#discount_percent").html('<b>'+invoice_discount+"%</b>");
                              }
                              quantity=product_quantity*product_tp;
                              $("#table_tbody").append("<tr><td>"+increment_serial+"</td><td>"+names[1]+"</td><td>"+names[2]+"</td><td>"+product_pack_size+"</td><td>"+names[4]+"</td><td>"+product_quantity+"</td><td>"+total_foc+"</td><td>"+quantity+"</td></tr>");
                              increment_serial+=1;
                              invoice_product_table_list.push({'product_id':product_id,'product_tp':names[4],'product_quantity':product_quantity,'product_foc':total_foc,"quantity":quantity});
                              total+=quantity;
                              discount_total=Math.round((total)*(invoice_discount/100));
                              $("#total").html("<b>"+total+"</b>");
                              $("#discount_total").html("<b>"+discount_total+"</b>");
                              $("#price").html("<b>"+(total-discount_total)+"</b>");
                            }
                        }
                      else{
                        if (product_quantity>product_quantity_db)
                            {
                              alert("Product is not sufficent...");
                            }
                        else{
                          if (increment_serial==1)
                          {$("#invoice_table").show();
                           $("#submit_table_div").show();
                            $("#discount_percent").html('<b>'+invoice_discount+"%</b>");
                          }
                          quantity=product_quantity*product_tp;
                          $("#table_tbody").append("<tr><td>"+increment_serial+"</td><td>"+names[1]+"</td><td>"+names[2]+"</td><td>"+product_pack_size+"</td><td>"+names[4]+"</td><td>"+product_quantity+"</td><td>"+0+"</td><td>"+quantity+"</td></tr>");
                          invoice_product_table_list.push({'product_id':product_id,'product_tp':names[4],'product_quantity':product_quantity,'product_foc':0,"quantity":quantity});
                          increment_serial+=1;
                          total+=quantity;
                          discount_total=Math.round((total)*(invoice_discount/100));
                            $("#total").html('<b>'+total+"</b>");
                            $("#discount_total").html('<b>'+discount_total+'</b>');
                            $("#price").html('<b>'+(total-discount_total)+'</b>');
                          }
                        }
                        //console.log(invoice_product_table_list);
                      }
                  });
                }
                else
                {
                  alert("Please fill the all input");
                }
          });
            var invoice_id_value="";
            $("#submit_table_value").on("click",function(){
            // console.log(subtotal_without_foc);
            // console.log(discount_total);
            // console.log(fos_subtotal);
            // console.log(invoice_discount);
            $("#submit_table_div").hide();
            $("#pdf_div").show();
            $("#add").hide();
            $.ajax({
              type: 'POST', 
              url: 'update_db_value.php', 
              data: { "invoice_table_list":invoice_table_list ,"invoice_product_table_list":invoice_product_table_list ,"customer_table_list":customer_table_list,"total":total,"discount_total":discount_total,"invoice_discount":invoice_discount,"price":total-discount_total}, 
              success: function (data) { 
                console.log(data);
                invoice_id_value=data;
              }
            });
          });
          $("#pdf_print").on("click", function(){
            window.location.href="invoice_pdf.php?id="+invoice_id_value;
          });
          
});
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>