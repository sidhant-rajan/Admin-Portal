<!doctype html>
<html>
<head>
    <title>Admin Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <div id="alter">
            <div class="card-panel">
                <div class="row">
                    <form name="submit_alter" method="post" action="<?php echo base_url();?>welcome/submit_alter/<?php echo $id;?>">
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
                        <input type="submit" name="submit_alter" id="submit_alter" value="Submit" class="btn">
                    </form>
                </div>   
            </div>
        </div>
  </div>  
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
  tinymce.init({
    selector: '#p_desc',
    height:100
       
  });
</script>   
</body>
</html>