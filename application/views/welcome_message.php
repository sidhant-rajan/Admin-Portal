<!doctype html>
<head>
    <title>Admin Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<!--?php echo $message;?-->

 <div class="row">   
     <div class="col m3">
         <ul id="slide-out" class="side-nav fixed">
            <li><div class="userView">
              <div class="background">
                <img src="<?php echo base_url();?>assets/images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="<?php echo base_url();?>assets/images/admin.jpg"></a>
              <a class="homy" href="#!name"><span class="white-text name">Admin</span></a>
              <a href="#!email"><span class="white-text email">www.meetcareer.com</span></a>
            </div></li>
             <li><div class="divider"></div></li>
            <li><a class="add" href="#add"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Product</a></li>
            <li><a class="remove" href="#remove"><i class="fa fa-minus-circle" aria-hidden="true"></i>Remove Product</a></li>
             <li><a class="edit" href="#edit" onclick="<?php echo base_url();?>/welcome/edit_product"><i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Product</a></li>
             <li><a class="view" href="#view" onclick="<?php echo base_url();?>/welcome/view_products"><i class="fa fa-eye" aria-hidden="true"></i>View Products</a></li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
     </div>
    <div class="col m9">
        <div id="home">
            <div class="card-panel">
                <h3 class="center">Admin Portal</h3>
            </div>
            <div class="card-panel grey lighten-3">
                <div class="row">
                    <div class="col m6">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <div class="col m6">
                        <canvas id="myChart1" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div id="add" style="display:none;">
            <div class="card-panel">
                <div class="row">
                    <!--?php echo $message;?-->
                    <?php echo form_open_multipart('welcome/submit');?>
                    
                        <div class="input-field col s12">
                          <input placeholder="Type the type of the Product" name="p_type" id="p_type" type="text" class="validate">
                          <label for="p_type">Product Type</label>
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="Type the name of the Product" name="p_name" id="p_name" type="text" class="validate">
                          <label for="p_name">Product Name</label>
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="Type the price of the Product" name="p_price" id="p_price" type="text" class="validate">
                          <label for="p_price">Product Price</label>
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="Type the Discount of the Product" name="p_disc" id="p_disc" type="text" class="validate">
                          <label for="p_disc">Max Discount on the Product</label>
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="Type the Available Quantities of the Product" name="p_quan" id="p_quan" type="text" class="validate">
                          <label for="p_quan">Available Quantity</label>
                        </div>
                        <div class="input-field col s12">
                         <textarea name="p_desc"  id="p_desc">Type Description of the Product</textarea>
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="Type the Status of the Product" name="p_stat" id="p_stat" type="text" class="validate">
                          <label for="p_stat">Status of the Product</label>
                        </div>
                         <?php echo form_upload('pic');?>
                        </br>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn">
                    </form>
                    <!--?php echo form_open_multipart('welcome/save');?-->
                       
                        <!--?php echo form_submit('submit','Save','class="btn btn-primary"');?-->
                        
                    
                </div>   
            </div>
        </div>
        <div id="remove" style="display:none;">
            <div class="card-panel" style="padding:4px;">
                <div class="row">
                    <div class="heading col s12">
                        <center><h5>All Products</h5></center>
                    </div>
                </div>
            </div>
            <div class="card-panel" style="margin-top:0px;">
                <div class="row">
                    <table class="highlight centered responsive-table">
                        <thead>
                          <tr>
                              <th data-field="Id">ID</th>
                              <th data-field="Type">Type</th>
                              <th data-field="name">Product Name</th>
                              <th data-field="edit">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                             <?php
                                    foreach($products as $row):
                                ?>
                          <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->type;?></td>
                            <td><?php echo $row->name;?></td>
                            <td><a href="<?php echo base_url();?>welcome/remove/<?php echo $row->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                          </tr>
                             <?php
                                    endforeach;
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="edit" style="display:none;margin-bottom:0px;">
            <div class="card-panel" style="padding:4px;">
                <div class="row">
                    <div class="heading col s12">
                        <center><h5>All Products</h5></center>
                    </div>
                </div>
            </div>
            <div class="card-panel" style="margin-top:0px;">
                <div class="row">
                    <table class="highlight centered responsive-table">
                        <thead>
                          <tr>
                              <th data-field="Id">ID</th>
                              <th data-field="Type">Type</th>
                              <th data-field="name">Product Name</th>
                              <th data-field="edit">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                             <?php
                                    foreach($products as $row):
                                ?>
                          <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->type;?></td>
                            <td><?php echo $row->name;?></td>
                            <td><a href="<?php echo base_url();?>welcome/alter/<?php echo $row->id;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                          </tr>
                             <?php
                                    endforeach;
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="view"  style="display:none;">
            <div class="card-panel">
                <div class="row">
                    <table class="centered responsive-table striped">
                        <thead>
                          <tr>
                              <th data-field="id">Id</th>
                              <th data-field="name">Product Name</th>
                              <th data-field="type">Product Type</th>
                              <th data-field="price">Product Price</th>
                              <th data-field="discount">Product Discount</th>
                              <th data-field="number">Quantity of Product</th>
                              <th data-field="Status">Status of Product</th>
                              <th data-field="Image">Image of Product</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                    foreach($products as $row):
                                ?>
                          <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->name;?></td>
                            <td><?php echo $row->type;?></td>
                            <td><?php echo $row->price;?></td>
                            <td><?php echo $row->discount;?></td>
                            <td><?php echo $row->avail;?></td>
                            <td><?php echo $row->status;?></td>
                            <td><img src="<?php echo base_url();echo "assets/images/";echo $row->src;?>" width="60px" height="60px"></td>
                          </tr>
                            <?php
                                    endforeach;
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>

<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
  tinymce.init({
    selector: '#p_desc',
    height:100
       
  });
</script>    
    
    

<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Red", "Blue", "Yellow"],
        datasets: [{
            labels: [
        "Red",
        "Blue",
        "Yellow"
    ],
            data: [300, 50, 100],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            borderWidth: 1
        }]
    }
});
</script>
    <script>
var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
        {
            label: "Month Wise Data",
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
    }
});
</script>
<script>
    $(function() {
        $('.add').click( function(){
		      $("#add").css('display','block');
		      $("#home").css('display','none');
		      $("#remove").css('display','none');
              $("#edit").css('display','none');
              $("#view").css('display','none');
		   }
		   );
        $('.homy').click( function(){
		      $("#home").css('display','block');
		      $("#add").css('display','none');
		      $("#remove").css('display','none');
              $("#edit").css('display','none');
              $("#view").css('display','none');
		   }
		   );
        $('.remove').click( function(){
		      $("#home").css('display','none');
		      $("#add").css('display','none');
		      $("#remove").css('display','block');
              $("#edit").css('display','none');
              $("#view").css('display','none');
		   }
		   );
        $('.edit').click( function(){
		      $("#home").css('display','none');
		      $("#add").css('display','none');
		      $("#remove").css('display','none');
              $("#edit").css('display','block');
              $("#view").css('display','none');
		   }
		   );
        $('.view').click( function(){
		      $("#home").css('display','none');
		      $("#add").css('display','none');
		      $("#remove").css('display','none');
              $("#edit").css('display','none');
              $("#view").css('display','block');
		   }
		   );
    });
    
</script>
</body>
</html>